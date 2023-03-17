<?php



 include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$customers = "";

// Change table name
$db = new DatabaseClass("sales.customers",false,$global_serverName,$global_connectionInfo);

// Change the SQL , order matters
$tsql = "Select customer_id,first_name,last_name,phone,email,street,city,state,zip_code from sales.customers order by last_name,first_name";


//echo "<Br><Br><br>.................." . $tsql;

// Change to primary key of table
$db->Select($tsql, "customer_id");

// add array of field name
$customers = $db->getGrid(['customer_id', 'first_name', 'last_name', 'phone', 'email','street','city','state','zip_code'], "customeredit.php");

$db->closeConnection();

$smarty->assign('customers', $customers);




//End Code Here



 include('footerbase.php');

$smarty->display('customers.tpl');


?>