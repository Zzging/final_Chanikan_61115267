<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12 smt-40 xmt-40">
                <div class="htc__product__rightidebar">
                    <div class="htc__grid__top">
                        <div class="htc__select__option">
                            <select class="ht__select">
                                <option>Default softing</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by newness</option>
                            </select>
                            <select class="ht__select">
                                <option>Show by</option>
                                <option>Sort by popularity</option>
                                <option>Sort by average rating</option>
                                <option>Sort by newness</option>
                            </select>
                        </div>
                        <div class="ht__pro__qun">
                            <span>Show 1033 products</span>
                        </div>

                    </div>
                    <!-- Start Product View -->
                    <div class="row">
                        <div class="shop_grid_view_wrap">
                            <div role="tabpanel" id="grid view" class="single-grid-view tab-pane fade in active clearfix">
                                <!-- Start Single Product -->
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category">
                                        <div class="ht__cat__thumb">
                                            <a href="product-details.html">
                                                <img src="<?php echo base_url("https://www.central.co.th/th/garmin-instinct-smartwatch-tundra-cds19473314") ?>" alt="product images">
                                            </a>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
                                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <h4><a href="product-details.html">GARMIN</a></h4>
                                            <ul class="fr__pro__prize">
                                                <li class="old__prize">$43,600</li>

                                            </ul>
                                        </div>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="shop_grid_view_wrap">
                            <div role="tabpanel" id="grid view" class="single-grid-view tab-pane fade in active clearfix">
                                <!-- Start Single Product -->
                                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                    <div class="category">
                                        <div class="ht__cat__thumb">
                                            <a href="product-details.html">
                                                <img src="<?php echo base_url("https://backend.central.co.th/media/catalog/product/C/D/CDS18695465.jpg") ?>" alt="product images">
                                            </a>
                                        </div>
                                        <div class="fr__hover__info">
                                            <ul class="product__action">
                                                <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                                <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="fr__product__inner">
                                            <h4><a href="product-details.html">CASIO</a></h4>
                                            <ul class="fr__pro__prize">
                                                <li class="old__prize">$43,600</li>

                                            </ul>
                                        </div>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Product -->
                        </div>
                    </div>
                </div>
                <!-- End Product View -->
                <div class="row">
                    <div class="shop_grid_view_wrap">
                        <div role="tabpanel" id="grid view" class="single-grid-view tab-pane fade in active clearfix">
                            <!-- Start Single Product -->
                            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">

                                <div>
                                    <?php foreach ($product_name as $key => $row) { ?>
                                        <div class="col-sm-1 col-lg-6">
                                            <img src="<?php echo $row('https://backend.central.co.th/media/catalog/product/C/D/CDS18695465.jpg')
                                                        ?>" class="mr-3" width="300px" height="700px" alt="product images">
                                            <div class="media-daty align-self-center">
                                                <h4><?php echo $row['name'] ?></h4>
                                                <h4><?php echo $row['price'] ?></h4>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>

        </div>
        <!-- End Product View -->
    </div>
    <!-- End Product View -->
    </div>
    </div>