<?php



    include('DatabaseClassConfig.php');

    //Place Code here

    include('DatabaseClass.php');

    

    $db = new DatabaseClass("production.products",false,$global_serverName,$global_connectionInfo);
    

    $db->mode = "edit";
    
    $product_id = $_GET["product_id"];
    
    

    $tsql = "select product_id,product_name,brand_id,category_id,model_year,list_price,description,sku,tags 
    from production.products where product_id = '" . $product_id . "'";
   
    

    if ($db->Select($tsql, "product_id") === false) {
        $db->closeConnection();
       //header("Location: index.php");
    }

    //This will delete
if ( isset($_GET['remove']) && $_GET['remove'] == "true"  ) {

    //echo "Type: Delete";
    $db->deleteRow($_GET['product_id']);
    $_SESSION["username"] = "";
    header("Location: index.php");
}

//    #Save Code
if ( $_POST['save'] == "Save" ) {

    //echo "Type: Save";
    
    $db->updateRow(['product_id','bproduct_name','brand_id','category_id','model_year','list_price','description','sku','tags']);
    $strmessage = "Changes Saved";
    $smarty->assign("message", $strmessage);
    
}

$smarty->assign('product_id',  $db->getFieldByColumnName("product_id"));


$smarty->assign('product_name',  $db->getFormFieldByColumnName("product_name",true));

$smarty->assign('brand_id',  $db->getFormFieldByColumnName("brand_id"));
$smarty->assign('category_id',  $db->getFormFieldByColumnName("category_id"));

$smarty->assign('model_year',  $db->getFormFieldByColumnName("model_year",true));
$smarty->assign('list_price',  $db->getFormFieldByColumnName("list_price",true));
$smarty->assign('description',  $db->getFormFieldByColumnName("description",true));
$smarty->assign('sku',  $db->getFormFieldByColumnName("sku",true));
$smarty->assign('tags',  $db->getFormFieldByColumnName("tags",true));



$stock = "";

// Change table name
$db = new DatabaseClass("sales.stores",false,$global_serverName,$global_connectionInfo);

// Change the SQL , order matters
$tsql = "select st.stock_id, s.store_name, st.quantity
from sales.stores s
inner join production.stocks st 
	on st.store_id = s.store_id and st.product_id = " . $product_id . " 
order by s.store_id";


//echo "<Br><Br><br>.................." . $tsql;

// Change to primary key of table
$db->Select($tsql, "stock_id");

// add array of field name
$stock = $db->getGrid(['stock_id','store_name','quantity'], "stockedit.php");



$smarty->assign('stock', $stock);


    $db->closeConnection();




    //End Code Here



    include('footerbase.php');


    $smarty->display('productedit.tpl');


?>