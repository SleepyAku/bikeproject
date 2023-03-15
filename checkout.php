<?php



    include('DatabaseClassConfig.php');

    //Place Code here

    include('DatabaseClass.php');

    

    $db = new DatabaseClass("sales.customers",false,$global_serverName,$global_connectionInfo);
    

    $db->mode = "edit";
    
    $username = $_SESSION["username"];
    $order_id = $_SESSION["order_id"];
    
    $tsql = "select customer_id,first_name, last_name, email, phone, street, street2, company_name, country, city, state, shipping_first_name, shipping_last_name, shipping_phone, shipping_street1, shipping_street2, shipping_company_name, shipping_country, shipping_city, shipping_state from sales.customers where email = '" . $username . "'";
   
    

    if ($db->Select($tsql, "customer_id") === false) {
        $db->closeConnection();
       //header("Location: index.php");
    }

    //This will delete
if ( isset($_GET['remove']) && $_GET['remove'] == "true"  ) {

    //echo "Type: Delete";
    $db->deleteRow($_GET['customer_id']);
    $_SESSION["username"] = "";
    header("Location: index.php");

}

//    #Save Code
if ( $_POST['save'] == "Save" ) {

    //echo "Type: Save";
    
    $db->updateRow(['first_name','last_name','street','company_name','country','shipping_country','email', 'phone','street2', 'company_name','city', 'state','shipping_first_name', 'shipping_last_name', 'shipping_phone', 'shipping_street1', 'shipping_street2', 'shipping_company_name','shipping_city', 'shipping_state']);
    $strmessage = "Changes Saved";
    $smarty->assign("message", $strmessage);
    
}

$smarty->assign('customer_id',  $db->getFieldByColumnName("customer_id"));

$smarty->assign('first_name',  $db->getFormFieldByColumnName("first_name",true));
$smarty->assign('last_name',  $db->getFormFieldByColumnName("last_name",true));
$smarty->assign('email',  $db->getFormFieldByColumnName("email",true, '',false));
$smarty->assign('phone',  $db->getFormFieldByColumnName("phone",true));
$smarty->assign('street',  $db->getFormFieldByColumnName("street",true));
$smarty->assign('company_name',  $db->getFormFieldByColumnName("company_name",true));
$smarty->assign('street2',  $db->getFormFieldByColumnName("street2",true));
$smarty->assign('city',  $db->getFormFieldByColumnName("city",true));
$smarty->assign('state',  $db->getFormFieldByColumnName("state",true));
$smarty->assign('country',  $db->getFormOptionFieldByColumnName("country", $db->getFieldByColumnName("country"), "SELECT id, countryname FROM countries ORDER BY countryname"));



$smarty->assign('shipping_first_name',  $db->getFormFieldByColumnName("shipping_first_name",false));
$smarty->assign('shipping_last_name',  $db->getFormFieldByColumnName("shipping_last_name",false));
$smarty->assign('shipping_phone',  $db->getFormFieldByColumnName("shipping_phone",false));
$smarty->assign('shipping_street1',  $db->getFormFieldByColumnName("shipping_street1",false));
$smarty->assign('shipping_company_name',  $db->getFormFieldByColumnName("shipping_company_name",false));
$smarty->assign('shipping_street2',  $db->getFormFieldByColumnName("shipping_street2",false));
$smarty->assign('shipping_city',  $db->getFormFieldByColumnName("shipping_city",false));
$smarty->assign('shipping_state',  $db->getFormFieldByColumnName("shipping_state",false));
$smarty->assign('shipping_country',  $db->getFormOptionFieldByColumnName("shipping_country", $db->getFieldByColumnName("shipping_country"), "SELECT id, countryname FROM countries ORDER BY countryname"));


//$smarty->assign('subject',  $db->getFormOptionFieldByColumnName("subject", $db->getFieldByColumnName("subject"), "SELECT SUBJECT, SUBJECT AS DESCRIPTION FROM SUBJECT where schoolno = '" . $SchoolNoLocal . "' ORDER BY SUBJECT"));



$db->closeConnection();

$db = new DatabaseClass("sales.order_items",false,$global_serverName,$global_connectionInfo);

$order_id = $_SESSION["order_id"];

$tsql = "SELECT sum(list_price * quantity) as total from sales.order_items where order_id = ".$order_id;
$db->Select($tsql, "order_id");    


$subtotal = $db->getFieldByColumnName("total");
$tax = number_format($subtotal * .1,2);
$shipping = number_format($subtotal * .15,2);



$smarty->assign('subtotal',  number_format($subtotal,2));

$grandtotal = $subtotal + $tax + $shipping;
$smarty->assign('grandtotal',  number_format($grandtotal,2));
$db->closeConnection();


$smarty->assign('tax',  $tax);
$smarty->assign('shipping',  $shipping);

// get the $order_id from session 

    //End Code Here



    include('footerbase.php');


    $smarty->display('checkout.tpl');


?>