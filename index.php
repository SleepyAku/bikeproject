<?php

require 'libs/Smarty.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = false;

$smarty->cache_lifetime = 0;

$smarty->assign("title", "BikeProject.com");

$smarty->display('index.tpl');


?>
