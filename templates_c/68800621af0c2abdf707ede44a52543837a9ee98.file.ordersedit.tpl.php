<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-24 05:38:00
         compiled from ".\templates\ordersedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1672750920644678283a4564-88413754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68800621af0c2abdf707ede44a52543837a9ee98' => 
    array (
      0 => '.\\templates\\ordersedit.tpl',
      1 => 1680270854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1672750920644678283a4564-88413754',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_id' => 0,
    'customer_id' => 0,
    'order_status' => 0,
    'order_date' => 0,
    'required_date' => 0,
    'shipped_date' => 0,
    'store_id' => 0,
    'staff_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_644678283beba0_09262954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_644678283beba0_09262954')) {function content_644678283beba0_09262954($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


            <form action="ordersedit.php?order_id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Customers
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>

                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="firstName">Status
                            </label>

                            <?php echo $_smarty_tpl->tpl_vars['order_status']->value;?>

                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Order Date
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['order_date']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Required Date
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['required_date']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Shipped Date
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['shipped_date']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Store
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Staff
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['staff_id']->value;?>

                            </div>



                            <div class="col-lg-12 form-group">
                                <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
" id="order_id" name="order_id" />



                                <div class="text-center">
                                    <button type="submit" value="Save" id="save" name="save"
                                        class="btn btn-primary">Save
                                        Changes</button>    

                                    <a class="btn btn-secondary" href="ordersedit.php?remove=true&order_id=<?php echo $_smarty_tpl->tpl_vars['order_id']->value;?>
"
                                        role="button">Remove
                                    </a>
                                </div>
                            </div>
                        </div>
            </form>




        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>


</body>


</html><?php }} ?>
