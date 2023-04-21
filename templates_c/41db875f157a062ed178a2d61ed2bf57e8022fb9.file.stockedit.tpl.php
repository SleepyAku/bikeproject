<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-19 07:08:05
         compiled from ".\templates\stockedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189424770643ff5c5081b89-95780189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41db875f157a062ed178a2d61ed2bf57e8022fb9' => 
    array (
      0 => '.\\templates\\stockedit.tpl',
      1 => 1681912406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189424770643ff5c5081b89-95780189',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_name' => 0,
    'store_name' => 0,
    'stock_id' => 0,
    'quantity' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_643ff5c50999d6_25089163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_643ff5c50999d6_25089163')) {function content_643ff5c50999d6_25089163($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


            <label class="form-label text-sm text-uppercase" for="product_name"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>

            </label><br>
            <label class="form-label text-sm text-uppercase" for="store_name"><?php echo $_smarty_tpl->tpl_vars['store_name']->value;?>

            </label>


            <form action="stockedit.php?stock_id=<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="Quantity">Quantity
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['quantity']->value;?>

                    </div>
                    

                    <div class="col-lg-12 form-group">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['stock_id']->value;?>
" id="stock_id" name="stock_id" />



                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                                Changes</button>    

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
