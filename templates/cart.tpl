<!DOCTYPE html>
<html>
{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->
 
        <div class="container">
            <!-- HERO SECTION-->
            <section class="py-5 bg-light">
                <div class="container">
                    <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                        <div class="col-lg-6">
                            <h1 class="h2 text-uppercase mb-0">Cart</h1>
                        </div>
                        <div class="col-lg-6 text-lg-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                                    <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-5">
                <h2 class="h5 text-uppercase mb-4">Shopping cart</h2>
                <div class="row">
                    <div class="col-lg-8 mb-4 mb-lg-0">
                        <!-- CART TABLE-->
                        <div class="table-responsive mb-4">
                            {$carttable}
                        </div>
                        <!-- CART NAV-->
                        <div class="bg-light px-4 py-3">
                            <div class="row align-items-center text-center">
                                <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a
                                        class="btn btn-link p-0 text-dark btn-sm" href="shop.php"><i
                                            class="fas fa-long-arrow-alt-left me-2"> </i>Continue shopping</a></div>
                                <div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm"
                                        href="checkout.php">Proceed to checkout<i
                                            class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- ORDER TOTAL-->
                    <div class="col-lg-4">
                        <div class="card border-0 rounded-0 p-lg-4 bg-light">
                            <div class="card-body">
                                <h5 class="text-uppercase mb-4">Cart total</h5>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex align-items-center justify-content-between"><strong
                                            class="text-uppercase small font-weight-bold">Subtotal</strong><span
                                            class="text-muted small">${$subtotal}</span></li>
                                    <li class="border-bottom my-2"></li>
                                    <li class="d-flex align-items-center justify-content-between mb-4"><strong
                                            class="text-uppercase small font-weight-bold">Total</strong><span>${$grandtotal}</span>
                                    </li>
                                    <li>
                                        <form action="#">
                                            <div class="input-group mb-0">
                                                <input class="form-control" type="text" placeholder="Enter your coupon">
                                                <button class="btn btn-dark btn-sm w-100" type="submit"> <i
                                                        class="fas fa-gift me-2"></i>Apply coupon</button>
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {include file="footer.tpl"}
    </div>
</body>

</html>

  

    
