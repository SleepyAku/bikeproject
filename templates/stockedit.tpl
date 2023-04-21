<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


            <label class="form-label text-sm text-uppercase" for="product_name">{$product_name}
            </label><br>
            <label class="form-label text-sm text-uppercase" for="store_name">{$store_name}
            </label>


            <form action="stockedit.php?stock_id={$stock_id}" method="POST">
                <div class="row gy-3">
                    <div class="col-lg-6">
                        <label class="form-label text-sm text-uppercase" for="Quantity">Quantity
                        </label>

                        {$quantity}
                    </div>
                    

                    <div class="col-lg-12 form-group">
                        <input type="hidden" value="{$stock_id}" id="stock_id" name="stock_id" />



                        <div class="text-center">
                            <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                                Changes</button>    

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