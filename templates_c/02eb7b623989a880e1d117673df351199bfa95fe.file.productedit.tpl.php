<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-04-21 06:20:33
         compiled from ".\templates\productedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114147416964428da1cdd916-63809522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02eb7b623989a880e1d117673df351199bfa95fe' => 
    array (
      0 => '.\\templates\\productedit.tpl',
      1 => 1681829928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114147416964428da1cdd916-63809522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_id' => 0,
    'product_name' => 0,
    'brand_id' => 0,
    'category_id' => 0,
    'model_year' => 0,
    'list_price' => 0,
    'description' => 0,
    'sku' => 0,
    'tags' => 0,
    'stock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_64428da1cff165_85219713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64428da1cff165_85219713')) {function content_64428da1cff165_85219713($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


            <form action="productsedit.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Product Name
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Brand
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['brand_id']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Category
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['category_id']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Model Year
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['model_year']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Price
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Description
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['description']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">SKU
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['sku']->value;?>


                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="firstName">Tags
                            </label>

                            <?php echo $_smarty_tpl->tpl_vars['tags']->value;?>

                        </div>
                    </div>

                    <div class="col-lg-12 form-group">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
" id="product_id" name="product_id" />



                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                                Changes</button>    

                            <a class="btn btn-secondary" href="productsedit.php?remove=true&product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
"
                                role="button">Remove
                            </a>
                        </div>
                    </div>
                </div>
            </form>



            <br>
            <table id="example" class="table table-striped table-bordered datatable">
                <thead>
                    <tr>
                        <th scope="col">Edit</th>
                        <th scope="col">Store Name</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>

                    <?php echo $_smarty_tpl->tpl_vars['stock']->value;?>


                </tbody>
            </table>
            <br><br>



        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html><?php }} ?>
