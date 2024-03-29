<?php /* Smarty version Smarty-3.1.21-dev, created on 2023-03-30 06:52:52
         compiled from ".\templates\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74479288964259434dcfe68-97673951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb91c771222e6fd61afde9f5c9690851ed95a1f4' => 
    array (
      0 => '.\\templates\\detail.tpl',
      1 => 1678285034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74479288964259434dcfe68-97673951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'image' => 0,
    'product_name' => 0,
    'list_price' => 0,
    'description' => 0,
    'product_id' => 0,
    'sku' => 0,
    'category_name' => 0,
    'tags' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_64259434deda53_01256885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_64259434deda53_01256885')) {function content_64259434deda53_01256885($_smarty_tpl) {?><!DOCTYPE html>
<html>

<?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<body>
    <div class="page-holder">
        <!-- navbar-->
        <?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <!--  Modal -->

        <div class="container">


        <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a
                                class="glightbox product-view d-block h-100 bg-cover bg-center"
                                style="background: url(https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/product-5.aff049a7.jpg)"
                                href="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                href="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                href="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a></div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0 1"><i
                                            class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 2"><i
                                            class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 3"><i
                                            class="fas fa-star small text-warning"></i></li>
                                    <li class="list-inline-item m-0 4"><i
                                            class="fas fa-star small text-warning"></i></li>
                                </ul>
                                <h2 class="h4"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</h2>
                                <p class="text-muted">$<?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>
</p>
                                <p class="text-sm mb-4"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div
                                            class="border d-flex align-items-center justify-content-between py-1 px-3">
                                            <span
                                                class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i
                                                        class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text"
                                                    value="1">
                                                <button class="inc-btn p-0"><i
                                                        class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a
                                            class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                        href="cart.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
&quantity=1&list_price=<?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>
">Add to cart</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                        class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <div class="row m-sm-0">
                        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                            <div class="swiper product-slider-thumbs">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-auto swiper-thumb-item mb-3"><img class="w-100"
                                            src="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"
                                            alt="..."></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10 order-1 order-sm-2">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                            href="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" data-gallery="gallery2"
                                            data-glightbox="Product item 1"><img width="100%" height="100%"
                                                src="images/<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"
                                                alt="..."></a></div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT DETAILS-->
                <div class="col-lg-6">
                    <ul class="list-inline mb-2 text-sm">
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h1><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</h1>
                    <p class="text-muted lead">$<?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>
</p>
                    <p class="text-sm mb-4"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                    <div class="row align-items-stretch mb-4">
                        <div class="col-sm-5 pr-sm-0">
                            <div
                                class="border d-flex align-items-center justify-content-between py-1 px-3 bg-white border-white">
                                <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                <div class="quantity">
                                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                    <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5"><a
                                class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                            href="cart.php?product_id=<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
&quantity=1&list_price=<?php echo $_smarty_tpl->tpl_vars['list_price']->value;?>
">Add to cart</a></div>
                    </div><a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i
                            class="far fa-heart me-2"></i>Add to wish list</a><br>
                    <ul class="list-unstyled small d-inline-block">
                        <li class="px-3 py-2 mb-1 bg-white"><strong class="text-uppercase">SKU:</strong><span
                                class="ms-2 text-muted"><?php echo $_smarty_tpl->tpl_vars['sku']->value;?>
</span></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2"
                                href="#!"><?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
</a></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ms-2"
                                href="#!"><?php echo $_smarty_tpl->tpl_vars['tags']->value;?>
</a></li>
                    </ul>
                </div>
            </div>
            <!-- DETAILS TABS-->
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link text-uppercase active" id="description-tab"
                        data-bs-toggle="tab" href="#description" role="tab" aria-controls="description"
                        aria-selected="true">Description</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase" id="reviews-tab" data-bs-toggle="tab"
                        href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a></li>
            </ul>
            <div class="tab-content mb-5" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <div class="p-4 p-lg-5 bg-white">
                        <h6 class="text-uppercase">Product description </h6>
                        <p class="text-muted text-sm mb-0"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                    </div>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="p-4 p-lg-5 bg-white">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="d-flex mb-3">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/customer-1.2909e6e3.png"
                                            alt="" width="50" /></div>
                                    <div class="ms-3 flex-shrink-1">
                                        <h6 class="mb-0 text-uppercase">Jason Doe</h6>
                                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                        <ul class="list-inline mb-1 text-xs">
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                        <p class="text-sm mb-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://d19m59y37dris4.cloudfront.net/boutique/2-0/img/customer-2.f49623e8.png"
                                            alt="" width="50" /></div>
                                    <div class="ms-3 flex-shrink-1">
                                        <h6 class="mb-0 text-uppercase">Jane Doe</h6>
                                        <p class="small text-muted mb-0 text-uppercase">20 May 2020</p>
                                        <ul class="list-inline mb-1 text-xs">
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item m-0"><i
                                                    class="fas fa-star-half-alt text-warning"></i></li>
                                        </ul>
                                        <p class="text-sm mb-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>



        </div>


        <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</body>


</html>
<?php }} ?>
