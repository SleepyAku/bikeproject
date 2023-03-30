<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


            <form action="ordersedit.php?order_id={$order_id}" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="firstName">Customers
                        </label>

                        {$customer_id}
                    </div>
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="firstName">Status
                            </label>

                            {$order_status}
                        </div>
                        <div class="row gy-3">
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Order Date
                                </label>

                                {$order_date}
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Required Date
                                </label>

                                {$required_date}
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Shipped Date
                                </label>

                                {$shipped_date}
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Store
                                </label>

                                {$store_id}
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label text-sm text-uppercase" for="firstName">Staff
                                </label>

                                {$staff_id}
                            </div>



                            <div class="col-lg-12 form-group">
                                <input type="hidden" value="{$order_id}" id="order_id" name="order_id" />



                                <div class="text-center">
                                    <button type="submit" value="Save" id="save" name="save"
                                        class="btn btn-primary">Save
                                        Changes</button>    

                                    <a class="btn btn-secondary" href="ordersedit.php?remove=true&order_id={$order_id}"
                                        role="button">Remove
                                    </a>
                                </div>
                            </div>
                        </div>
            </form>




        </div>


        {include file="footer.tpl"}
    </div>
</body>


</html>