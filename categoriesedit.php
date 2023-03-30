<?php

    include('DatabaseClassConfig.php');

    //Place Code here

    include('DatabaseClass.php');

    

    $db = new DatabaseClass("production.categories",false,$global_serverName,$global_connectionInfo);
    

    $db->mode = "edit";
    
    $category_id = $_GET["category_id"];
    
    

    $tsql = "select category_id,category_name
    from production.categories where category_id = '" . $category_id . "'";
   
    

    if ($db->Select($tsql, "category_id") === false) {
        $db->closeConnection();
       //header("Location: index.php");
    }

    //This will delete
if ( isset($_GET['remove']) && $_GET['remove'] == "true"  ) {

    //echo "Type: Delete";
    $db->deleteRow($_GET['category_id']);
    $_SESSION["username"] = "";
    header("Location: index.php");

}

//    #Save Code
if ( $_POST['save'] == "Save" ) {

    //echo "Type: Save";
    
    $db->updateRow(['category_id','category_name']);
    $strmessage = "Changes Saved";
    $smarty->assign("message", $strmessage);
    
}

$smarty->assign('category_id',  $db->getFieldByColumnName("category_id"));


$smarty->assign('category_name',  $db->getFormOptionFieldByColumnName("category_name", $db->getFieldByColumnName("category_name"), "SELECT category_id,category_name from production.categories order by category_name "));





//$smarty->assign('subject',  $db->getFormOptionFieldByColumnName("subject", $db->getFieldByColumnName("subject"), "SELECT SUBJECT, SUBJECT AS DESCRIPTION FROM SUBJECT where schoolno = '" . $SchoolNoLocal . "' ORDER BY SUBJECT"));



$db->closeConnection();





    //End Code Here


    include('footerbase.php');


    $smarty->display('categoriesedit.tpl');


?>