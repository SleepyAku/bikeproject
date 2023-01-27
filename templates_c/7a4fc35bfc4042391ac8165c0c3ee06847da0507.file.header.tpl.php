<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-01-27 06:11:04
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81663781563d3db78b88d36-36320969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4fc35bfc4042391ac8165c0c3ee06847da0507' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1674741910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81663781563d3db78b88d36-36320969',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_63d3db78b89906_03865510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_63d3db78b89906_03865510')) {function content_63d3db78b89906_03865510($_smarty_tpl) {?><header class="header bg-white">
<div class="container px-lg-3">
  <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="index.php"><span
        class="fw-bold text-uppercase text-dark">Bike Store</span></a>
    <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <!-- Link--><a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <!-- Link--><a class="nav-link" href="shop.php">Shop</a>
        </li>
        <li class="nav-item">
          <!-- Link--><a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
          <div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown"><a
              class="dropdown-item border-0 transition-link" href="index.php">Home</a><a
              class="dropdown-item border-0 transition-link" href="shop.php">Shop</a><a
              class="dropdown-item border-0 transition-link" href="about.php">About
              detail</a><a class="dropdown-item border-0 transition-link" href="cart.php">Shopping cart</a><a
              class="dropdown-item border-0 transition-link" href="checkout.php">Checkout</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="cart.php"> <i
              class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#mylogin" data-toggle="modal">Login
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>
</header><?php }} ?>
