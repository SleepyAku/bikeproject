<?php
//session_start();

require 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;

$smarty->cache_lifetime = 0;

$smarty->assign("title", "BikeProject.com");


include('DatabaseClassConfig.php');

// Get the Categories and Images and place them in the index page
//Create  a select statement that returns the category,_id, category_name and image for all the categories 
//loops through the records and builds the html for the cards

    $tsql = "select top 6 category_id,category_name,image from production.categories";
    //echo "sql: ".$tsql;
 

    $conn = sqlsrv_connect($global_serverName, $global_connectionInfo);
    $stmt = sqlsrv_query( $conn, $tsql);     
    $result = "";
 
     while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))     
     {     

      
               
        $result = $result.' <div class="col-md-4"><a class="category-item" href="shop.php?category_id='.$row[0].'"><img class="img-fluid"
                                src="images/'.$row[2].'" alt="" /><strong class="category-item-title">'.$row[1].'</strong></a>
                    </div>';
            
 
     }     
 
     
     sqlsrv_free_stmt($stmt);    


     $smarty->assign("ListCategories",  $result );

     $tsql = "select top 8 product_id ,product_name, list_price, image from production.products";
     //echo "sql: ".$tsql;   // later you can select the products with the highest number of sales
  
 
     $conn = sqlsrv_connect($global_serverName, $global_connectionInfo);
     $stmt = sqlsrv_query( $conn, $tsql);     
     $result = "";
  
      while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC))     
      {     
 
       
                
         $result = $result.' 
                     <div class="col-xl-3 col-lg-4 col-sm-6">
                         <div class="product text-center">
                             <div class="position-relative mb-3">
                                 <div class="badge text-white bg-"></div><a class="d-block"
                                     href="detail.php?product_id='.$row[0].'"><img class="img-fluid w-100" src="images/'.$row[3].'"
                                         alt="..."></a>
                                 <div class="product-overlay">
                                     <ul class="mb-0 list-inline">
                                         <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark"
                                                 href="#!"><i class="far fa-heart"></i></a></li>
                                         <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark"
                                                 href="cart.php">Add to cart</a></li>
                                         <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark"
                                                 href="#productView" data-bs-toggle="modal"><i
                                                     class="fas fa-expand"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <h6> <a class="reset-anchor" href="detail.php?product_id='.$row[0].'">'.$row[1].'</a></h6>
                             <p class="small text-muted">'.$row[2].'</p>
                         </div>
                     </div>';
             
  
      }     
  
      
      sqlsrv_free_stmt($stmt);    
 
 
      $smarty->assign("ListProducts",  $result );

      if(  $_SESSION["username"] == ""  )
      {

          $smarty->assign("loginbutton",  "Login" );
           $smarty->assign("accountdropdown",  "hidden" );
      }
      else
      {
          $smarty->assign("loginbutton",  "Logout" );
          $smarty->assign("accountdropdown",  "visible" );
      }

$smarty->display('index.tpl');


?>
