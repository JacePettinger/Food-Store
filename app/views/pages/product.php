<?php require APPROOT . "/views/inc/header.php"; ?>
<?php $product = $data["product"] ?>
<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="section">
                <div class="section_wrapper clearfix">
                    <div class="items_group clearfix">
                        <div class="column one woocommerce-content">

                            <div class="woocommerce-notices-wrapper"></div>
                            <div id="product-116" class="share-simple wide tabs product type-product first instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                <div class="product_wrapper clearfix">

                                    <div class="column one-second product_image_wrapper">

                                        <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                            <figure class="woocommerce-product-gallery__wrapper">

                                                <img src="<?php echo URLROOT ?>images/products/<?php echo strtolower(str_replace(" ", "-", $product->name)); ?>" class="wp-post-image" title="<?php echo $product->name ?>" data-src="<?php echo URLROOT ?>images/products/<?php echo strtolower(str_replace(" ", "-", $product->name)); ?>.jpg" data-large_image="<?php echo URLROOT ?>images/products/<?php echo strtolower(str_replace(" ", "-", $product->name)); ?>.jpg" data-large_image_width="780" data-large_image_height="975" alt="<?php echo $product->name ?>" />

                                            </figure>
                                        </div>
                                    </div>

                                    <div class="summary entry-summary column one-second">

                                        <h1 class="product_title entry-title"><?php echo $product->name ?></h1>
                                        <p class="price">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span><?php echo $product->price; ?></span>
                                        </p>
                                        <div class="woocommerce-product-details__short-description">
                                            <p>
                                                <?php echo $product->description ?>
                                            </p>
                                        </div>


                                    </div>

                                </div>

                            </div>



                            <section class="related products">

                                <h3>Related products</h3>

                                <div class="products_wrapper isotope_wrapper">
                                    <ul class="products">

                                        <li class="isotope-item product type-product first instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                            <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <a href="product.html">
                                                        <div class="mask"></div><img src="images/products/salmon.jpg" class="scale-with-grid wp-post-image" alt="" />
                                                    </a>
                                                </div>
                                                <span class="onsale">
                                                    <i class="icon-star"></i>
                                                </span>
                                            </div>
                                            <div class="desc">

                                                <h4><a href="product.html">Salmon</a></h4>

                                                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span>3.10</span>
                                                </span>

                                            </div>

                                        </li>

                                        <li class="isotope-item product type-product instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                            <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <a href="product.html">
                                                        <div class="mask"></div><img src="images/products/potatoes.jpg" class="scale-with-grid wp-post-image" alt="" />
                                                    </a>
                                                </div>
                                                <span class="onsale">
                                                    <i class="icon-star"></i>
                                                </span>
                                            </div>
                                            <div class="desc">

                                                <h4><a href="product.html">Potatoes</a></h4>

                                                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span>1.20</span>
                                                </span>

                                            </div>

                                        </li>
                                        <li class="isotope-item product type-product instock product_cat-uncategorized has-post-thumbnail shipping-taxable purchasable product-type-simple">

                                            <div class="image_frame scale-with-grid product-loop-thumb" ontouchstart="this.classList.toggle('hover');">
                                                <div class="image_wrapper">
                                                    <a href="product.html">
                                                        <div class="mask"></div><img src="images/products/chili-peppers.jpg" class="scale-with-grid wp-post-image" alt="" />
                                                    </a>
                                                </div>
                                                <span class="onsale">
                                                    <i class="icon-star"></i>
                                                </span>
                                            </div>
                                            <div class="desc">

                                                <h4><a href="product.html">Chili pepper</a></h4>

                                                <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&dollar;</span>3.10</span>
                                                </span>

                                            </div>

                                        </li>

                                    </ul>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
            <?php require APPROOT . "/views/inc/footer.php"; ?>