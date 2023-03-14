<?php



    include('DatabaseClassConfig.php');

    //Place Code here

    include('DatabaseClass.php');


    $order_id = $_SESSION["order_id"];


    if( $order_id == "")
    {
        //create the class object for the sales.orders
       $db = new DatabaseClass("sales.orders",false,$global_serverName,$global_connectionInfo);
    
       $customer_id = $_SESSION["customer_id"];
    
       $insertcolumns = "customer_id, order_status, order_date, required_date, shipped_date, store_id, staff_id";
    
       //THIS IS BASIC ORDER INFORMATION WITH DEFAULT DATES THAT EQUAL TODAY
       $insertvalues = $customer_id.",1,GETDATE(),GETDATE(),NULL,1,2";
    
       $db->commitInsert($insertcolumns, $insertvalues);
    
       //THIS WILL GET THE LAST ORDER_ID FOR THE RECORD THAT WAS JUST ADDED.
       $tsql = "SELECT MAX(order_id) as id from sales.orders where customer_id = ".$customer_id;
       $db->Select($tsql, "order_id");    
    
       $order_id = $db->getFieldByColumnName("id");
    
       // This will put the order_id into the session to be used on the next items selected
       $_SESSION["order_id"] = $order_id;  
      
    
       $db->closeConnection(); 
    }


    //Code to insert line item to the order_items
$db = new DatabaseClass("sales.order_items",false,$global_serverName,$global_connectionInfo);

$product_id = $_GET["product_id"];  // we will use this as the primekey

if( $product_id != "")
{

    $quantity = $_GET["quantity"];
    $list_price = $_GET["list_price"];
 

    $insertcolumns = "item_id,order_id,product_id,quantity,list_price";
    $insertvalues = "(select count(*)+1 from sales.order_items oi where oi.order_id = ".$order_id."),".$order_id.",".$product_id.",'".$quantity."','".$list_price."'";
    
    $db->commitInsert($insertcolumns, $insertvalues);
}

$db->closeConnection();


$db = new DatabaseClass("production.products",false,$global_serverName,$global_connectionInfo);


$tsql = "select '<img src=\"images/'+p.image+'\" width=\"50px\" height=\"50px\">' as image,p.product_name,s.list_price,s.quantity,s.list_price*s.quantity as total from sales.order_items s
inner join production.products p on s.product_id = p.product_id 
where order_id = '" . $order_id . "'";

$db->Select($tsql, "product_name");

$tableheaders = array("BIKE","PRODUCT", "PRICE", "QUANTITY", "TOTAL");

$smarty->assign('carttable',  $db->getTable($tableheaders) );

//Will Need SQL to total this up later
$smarty->assign('total_Price', '1000');
$smarty->assign('subtotal',  '2000');
$smarty->assign('grandtotal',  '3000');


$db->closeConnection();

$db = new DatabaseClass("sales.order_items",false,$global_serverName,$global_connectionInfo);

$tsql = "SELECT sum(list_price * quantity) as total from sales.order_items where order_id = ".$order_id;
$db->Select($tsql, "order_id");    


$subtotal = $db->getFieldByColumnName("total");
$tax = number_format($subtotal * .1,2);
$shipping = number_format($subtotal * .15,2);



$grandtotal = $subtotal + $tax + $shipping;
$smarty->assign('subtotal',  $subtotal);
$smarty->assign('grandtotal',  $grandtotal);

$db->closeConnection();

$smarty->assign('tax',  $tax);
$smarty->assign('shipping',  $shipping);



$smarty->assign('customer_id',  $customer_id);
$smarty->assign('order_id',  $order_id);





    //End Code Here



    include('footerbase.php');


    $smarty->display('cart.tpl');


?>