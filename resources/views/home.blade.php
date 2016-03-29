@extends('layout.app')

@section('content')
    <div class="row">


        <!-- *** LEFT COLUMN *** -->

        <div class="col-sm-3">

            <!-- *** MENUS AND FILTERS *** -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Categories</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked category-menu">
                        <li class="active">
                            <a href="shop-category.html">Men <span class="badge pull-right">42</span></a>
                            <ul>
                                <li><a href="shop-category.html">T-shirts</a>
                                </li>
                                <li><a href="shop-category.html">Shirts</a>
                                </li>
                                <li><a href="shop-category.html">Pants</a>
                                </li>
                                <li><a href="shop-category.html">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-category.html">Ladies  <span class="badge pull-right">123</span></a>
                            <ul>
                                <li><a href="shop-category.html">T-shirts</a>
                                </li>
                                <li><a href="shop-category.html">Skirts</a>
                                </li>
                                <li><a href="shop-category.html">Pants</a>
                                </li>
                                <li><a href="shop-category.html">Accessories</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="shop-category.html">Kids  <span class="badge pull-right">11</span></a>
                            <ul>
                                <li><a href="shop-category.html">T-shirts</a>
                                </li>
                                <li><a href="shop-category.html">Skirts</a>
                                </li>
                                <li><a href="shop-category.html">Pants</a>
                                </li>
                                <li><a href="shop-category.html">Accessories</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>


        </div>
        <!-- /.col-md-3 -->

        <!-- *** LEFT COLUMN END *** -->

        <!-- *** RIGHT COLUMN *** -->

        <div class="col-sm-9">

            <p class="text-muted lead">In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide. Pellentesque habitant morbi tristique senectus et netuss.</p>

            <div class="row products">

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product1.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">Fur coat with very but very very long name</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product2.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">White Blouse Armani</a></h3>
                            <p class="price"><del>$280</del> $143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>
                        </div>
                        <!-- /.text -->

                        <div class="ribbon sale">
                            <div class="theribbon">SALE</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->

                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->
                    </div>
                    <!-- /.product -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product3.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>

                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product3.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">Black Blouse Versace</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>

                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product2.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">White Blouse Versace</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>

                        </div>
                        <!-- /.text -->

                        <div class="ribbon new">
                            <div class="theribbon">NEW</div>
                            <div class="ribbon-background"></div>
                        </div>
                        <!-- /.ribbon -->
                    </div>
                    <!-- /.product -->
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="image">
                            <a href="shop-detail.html">
                                <img src="img/product1.jpg" alt="" class="img-responsive image1">
                            </a>
                        </div>
                        <!-- /.image -->
                        <div class="text">
                            <h3><a href="shop-detail.html">Fur coat</a></h3>
                            <p class="price">$143.00</p>
                            <p class="buttons">
                                <a href="shop-detail.html" class="btn btn-default">View detail</a>
                                <a href="shop-basket.html" class="btn btn-template-main"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </p>

                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
                <!-- /.col-md-4 -->
            </div>
            <!-- /.products -->


            <div class="pages">

                <p class="loadMore">
                    <a href="#" class="btn btn-template-main"><i class="fa fa-chevron-down"></i> Load more</a>
                </p>

                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>


        </div>
        <!-- /.col-md-9 -->

        <!-- *** RIGHT COLUMN END *** -->

    </div>
@endsection