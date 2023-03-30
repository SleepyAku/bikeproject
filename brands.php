<?php



 include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$customers = "";

// Change table name
$db = new DatabaseClass("production.brands",false,$global_serverName,$global_connectionInfo);

// Change the SQL , order matters
$tsql = "Select brand_id, brand_name from production.brands order by brand_name";


//echo "<Br><Br><br>.................." . $tsql;

// Change to primary key of table
$db->Select($tsql, "brand_id");

// add array of field name
$brands = $db->getGrid(['brand_id','brand_name'], "brandsedit.php");

$db->closeConnection();

$smarty->assign('brands', $brands);



//End Code Here



 include('footerbase.php');

$smarty->display('brands.tpl');


?>