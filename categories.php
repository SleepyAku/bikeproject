<?php



 include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$customers = "";

// Change table name
$db = new DatabaseClass("production.categories",false,$global_serverName,$global_connectionInfo);

// Change the SQL , order matters
$tsql = "Select category_id, category_name from production.categories order by category_name";


//echo "<Br><Br><br>.................." . $tsql;

// Change to primary key of table
$db->Select($tsql, "category_id");

// add array of field name
$categories = $db->getGrid(['category_id', 'category_name'], "categoriesedit.php");

$db->closeConnection();

$smarty->assign('categories', $categories);



//End Code Here



 include('footerbase.php');

$smarty->display('categories.tpl');


?>