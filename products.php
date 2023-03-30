<?php



 include('DatabaseClassConfig.php');

//Place Code here

include('DatabaseClass.php');

$customers = "";

// Change table name
$db = new DatabaseClass("production.products",false,$global_serverName,$global_connectionInfo);

// Change the SQL , order matters
$tsql = "select p.product_id, p.product_name, b.brand_name, c.category_name, p.model_year, p.list_price, p.description, p.sku from production.products p
inner join production.categories c on p.category_id = c.category_id
inner join production.brands b on p.brand_id = b.brand_id";


//echo "<Br><Br><br>.................." . $tsql;

// Change to primary key of table
$db->Select($tsql, "product_id");

// add array of field name
$products = $db->getGrid(['product_id', 'product_name', 'brand_name', 'category_name', 'model_year','list_price','description','sku'], "productedit.php");

$db->closeConnection();

$smarty->assign('products', $products);



//End Code Here



 include('footerbase.php');

$smarty->display('products.tpl');


?>