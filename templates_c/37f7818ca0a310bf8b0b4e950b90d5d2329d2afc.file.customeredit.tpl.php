<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-03-31 07:20:11
         compiled from ".\templates\customeredit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314399056426ec1b624728-79292914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37f7818ca0a310bf8b0b4e950b90d5d2329d2afc' => 
    array (
      0 => '.\\templates\\customeredit.tpl',
      1 => 1679929571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314399056426ec1b624728-79292914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customer_id' => 0,
    'first_name' => 0,
    'last_name' => 0,
    'email' => 0,
    'phone' => 0,
    'company_name' => 0,
    'country' => 0,
    'street' => 0,
    'street2' => 0,
    'city' => 0,
    'state' => 0,
    'shipping_first_name' => 0,
    'shipping_last_name' => 0,
    'shipping_phone' => 0,
    'shipping_company_name' => 0,
    'shipping_country' => 0,
    'shipping_street1' => 0,
    'shipping_street2' => 0,
    'shipping_city' => 0,
    'shipping_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_6426ec1b6427c2_80850957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6426ec1b6427c2_80850957')) {function content_6426ec1b6427c2_80850957($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">

            <form action="customeredit.php?customer_id=<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">First name
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="lastName">Last name
                        </label>

                        <?php echo $_smarty_tpl->tpl_vars['last_name']->value;?>

                    </div>

                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="email">Email address
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="phone">Phone number
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="form-label text-sm text-uppercase" for="company">Company
                            name
                            (optional) </label>
                        <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>

                    </div>
                    <div class="col-lg-6 form-group">
                        <label class="form-label text-sm text-uppercase" for="country">Country</label>
                        <?php echo $_smarty_tpl->tpl_vars['country']->value;?>

                    </div>
                    <div class="col-lg-12">
                        <label class="form-label text-sm text-uppercase" for="address">Address line 1
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['street']->value;?>

                    </div>
                    <div class="col-lg-12">
                        <label class="form-label text-sm text-uppercase" for="addressalt">Address line 2
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['street2']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="city">Town/City </label>
                        <?php echo $_smarty_tpl->tpl_vars['city']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="state">State/County
                        </label>
                        <?php echo $_smarty_tpl->tpl_vars['state']->value;?>

                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-link text-dark p-0 shadow-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#alternateAddress">
                            <div class="form-check">
                                <input class="form-check-input" id="alternateAddressCheckbox" type="checkbox">
                                <label class="form-check-label" for="alternateAddressCheckbox">Alternate
                                    shipping address</label>
                            </div>
                        </button>
                    </div>
                    <div class="collapse" id="alternateAddress">
                        <div class="row gy-3">
                            <div class="col-12 mt-4">
                                <h2 class="h4 text-uppercase mb-4">Alternative shipping details</h2>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">First name
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['shipping_first_name']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="lastName2">Last
                                    name
                                </label>

                                <?php echo $_smarty_tpl->tpl_vars['shipping_last_name']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="email2">Email
                                    address
                                </label>
                                <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="phone2">Phone
                                    number
                                </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_phone']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="company2">Company
                                    name
                                    (optional) </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_company_name']->value;?>

                            </div>
                            <div class="col-lg-6 form-group">
                                <label class="form-label text-sm text-uppercase" for="countryAlt">Country</label>

                                <?php echo $_smarty_tpl->tpl_vars['shipping_country']->value;?>

                            </div>
                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="address2">Address
                                    line
                                    1 </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_street1']->value;?>

                            </div>
                            <div class="col-lg-12">
                                <label class="form-label text-sm text-uppercase" for="addressalt2">Address
                                    line 2 </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_street2']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="city2">Town/City
                                </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_city']->value;?>

                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="state2">State/County
                                </label>
                                <?php echo $_smarty_tpl->tpl_vars['shipping_state']->value;?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 form-group">
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
" id="customer_id" name="customer_id" />



                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                                Changes</button>    

                            <a class="btn btn-secondary" href="customeredit.php?remove=true&customer_id=<?php echo $_smarty_tpl->tpl_vars['customer_id']->value;?>
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
