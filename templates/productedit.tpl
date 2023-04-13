<!DOCTYPE html>
<html>

{include file="head.tpl"}

<body>
    <div class="page-holder">
        <!-- navbar-->
        {include file="header.tpl"}
        <!--  Modal -->

        <div class="container">


        <form action="productsedit.php?product_id={$product_id}" method="POST">
        <div class="row gy-3">
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Product Name
                </label>

                {$product_name}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Brand
                </label>

                {$brand_id}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Category
                </label>

                {$category_id}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Model Year
                </label>

                {$model_year}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Price
                </label>

                {$list_price}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Description
                </label>

                {$description}
            </div>
            
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">SKU
                </label>

                {$sku}
                
            <div class="col-lg-6">
                <label class="form-label text-sm text-uppercase" for="firstName">Tags
                </label>

                {$tags}
            </div>
            </div>

            <div class="col-lg-12 form-group">
                <input type="hidden" value="{$product_id}" id="product_id" name="product_id" />



                <div class="text-center">
                    <button type="submit" value="Save" id="save" name="save" class="btn btn-primary">Save
                        Changes</button>    

                    <a class="btn btn-secondary" href="productsedit.php?remove=true&product_id={$product_id}"
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
