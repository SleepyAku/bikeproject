<?php



    include('DatabaseClassConfig.php');

    //Place Code here

    //select order_id,customer_id,order_status,
    //order_date,required_date,shipped_date, store_id, staff_id 
    //from sales.orders

    include('DatabaseClass.php');

    

    $db = new DatabaseClass("sales.orders",false,$global_serverName,$global_connectionInfo);
    

    $db->mode = "edit";
    
    $order_id = $_GET["order_id"];
    
    $tsql = "select order_id,customer_id,order_status,
    cast(order_date as varchar) AS order_date,
    cast(required_date as varchar) AS required_date,
    cast(shipped_date as varchar) AS shipped_date,
    store_id, staff_id from sales.orders where order_id = '" . $order_id . "'";
   
    

    if ($db->Select($tsql, "order_id") === false) {
        $db->closeConnection();
       //header("Location: index.php");
    }

    //This will delete
if ( isset($_GET['remove']) && $_GET['remove'] == "true"  ) {

    //echo "Type: Delete";
    $db->deleteRow($_GET['order_id']);
    $_SESSION["username"] = "";
    header("Location: index.php");

}

//    #Save Code
if ( $_POST['save'] == "Save" ) {

    //echo "Type: Save";
    
    $db->updateRow(['order_id','customer_id','order_status','order_date','required_date','shipped_date','store_id', 'staff_id']);
    $strmessage = "Changes Saved";
    $smarty->assign("message", $strmessage);
    
}

$smarty->assign('order_id',  $db->getFieldByColumnName("order_id"));

//$smarty->assign('order_id',  $db->getFormFieldByColumnName("order_id",true));
$smarty->assign('customer_id',  $db->getFormFieldByColumnName("customer_id",true));
$smarty->assign('order_status',  $db->getFormFieldByColumnName("order_status",true, '',false));
$smarty->assign('order_date',  $db->getFormDateFieldByColumnName("order_date",true));
$smarty->assign('required_date',  $db->getFormDateFieldByColumnName("required_date",true));
$smarty->assign('shipped_date',  $db->getFormDateFieldByColumnName("shipped_date",true));
$smarty->assign('store_id',  $db->getFormOptionFieldByColumnName("store_id", $db->getFieldByColumnName("store_id"), "SELECT store_id, store_name  FROM sales.stores ORDER BY store_name "));
$smarty->assign('staff_id',  $db->getFormFieldByColumnName("staff_id",true));
$smarty->assign('customer_id',  $db->getFormOptionFieldByColumnName("customer_id", $db->getFieldByColumnName("customer_id"), "SELECT customer_id, last_name+' '+first_name as name FROM sales.customers ORDER BY last_name,first_name "));





//$smarty->assign('subject',  $db->getFormOptionFieldByColumnName("subject", $db->getFieldByColumnName("subject"), "SELECT SUBJECT, SUBJECT AS DESCRIPTION FROM SUBJECT where schoolno = '" . $SchoolNoLocal . "' ORDER BY SUBJECT"));



$db->closeConnection();


    //End Code Here



    include('footerbase.php');


    $smarty->display('ordersedit.tpl');


?>