<?php require APPROOT . "/views/inc/header.php"; ?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="section">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">

                            <div class="shop-filters">
                                <div class="woocommerce-notices-wrapper"></div>

                                Showing <form method="get" style="display: inline-block;">
                                    <select name="display-count" style="width: auto;">
                                        <option selected='selected'>8</option>
                                        <option>16</option>
                                        <option>24</option>
                                        <option value="all">All</option>
                                    </select>
                                    <input type="hidden" name="page" value="1" />
                                </form> results

                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby" aria-label="Shop order">

                                        <option value="alpha">Sort alphabetically: a to z</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>ue="alpha-rev">Sort alphabetically: z to a</option>
                                        <option value="featured">Featured</option>
                                        <option value="fruits">Fruits</option>
                                        <option value="vegetables">Vegetables</option>
                                        <option value="dairy">Dairy</option>
                                        <option value="meat">Meat</option>
                                        <option value="herbs">Herbs</option>
                                    </select>
                                </form>
                            </div>

                            <div class="products_wrapper isotope_wrapper">
                                <ul class="products grid col-4">
                                    <?php $count = 0 ?>
                                    <?php foreach ($data["products"] as $product) : ?>
                                        <li class="isotope-item product type-product <?php if ($count == 0) {
                                                                                            echo "first ";
                                                                                        } else if ($count == 2) {
                                                                                            echo "last ";
                                                                                        } ?>instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                            <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <a href="<?php echo URLROOT; ?>pages/product/<?php echo $product->product_id; ?>">
                                                        <div class="mask"></div>
                                                        <img width="300" height="300" src="<?php echo URLROOT; ?>public/images/products/<?php echo strtolower(str_replace(" ", "-", $product->name)); ?>.jpg" class="scale-with-grid wp-post-image" alt="<?php echo $product->name; ?>" />
                                                    </a>
                                                </div>
                                                <?php if ($product->featured) : ?>
                                                    <span class="onsale">
                                                        <i class="icon-star"></i>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="<?php echo URLROOT; ?>pages/product/<?php echo $product->product_id; ?>">
                                                    </a></h4>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">&dollar;
                                                        </span><?php echo $product->price ?></span>
                                                </span>
                                            </div>
                                        </li>
                                        <?php if ($count < 2) {
                                            $count++;
                                        } else {
                                            $count = 0;
                                        } ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require APPROOT . "/views/inc/footer.php"; ?>