<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>View Products | Product Store</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<style>
    .breadcrumb-list > li {
        font-size: 14px;
        list-style: none;
        display: inline;
    }
    .breadcrumb-list > li a:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }
    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }
    .add-to-cart.action-wishlist {
        width: 50px;
        text-align: center;
        padding: 0;
    }
    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }
    .product-add-to-cart .cart-title,
    .product-add-to-cart .cart-title:hover,
    .product-list-action .cart-title,
    .product-list-action .cart-title:hover {
        background-color: transparent;
        border-bottom: none;
        color: inherit;
    }
    .product-add-to-cart .pro-add-btn i,
    .product-list-action .pro-add-btn i {
        margin-right: 10px;
        font-size: 18px;
    }
    #ProductPhotoImg {
        max-height: 370px !important;
        width: 370px !important;
    }
    .add-to-cart {
        display: inline-block;
    }
    .action-wishlist:hover,
    .action-wishlist:focus {
        color: #fff;
    }
    .add-to-cart.action-wishlist i {
        margin-right: 0px;
    }
    .product-add-to-cart {
        float: none;
    }
    .single-product-wishlist {
        display: inline-block;
        position: relative;
        margin-left: 20px;
    }
    .product-thumbnail .owl-nav {
        display: none;
    }
    .breadcrumb-area {
        padding: 30px 0;
        background-color: #f3f3f3;
    }
    .breadmome-name {
        color: #ff6a00;
        font-size: 24px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 18px;
    }
    .breadcrumb-content > ul > li {
        display: inline-block;
        list-style: none;
        position: relative;
        font-size: 14px;
        color: #333;
    }
    .breadcrumb-content > ul > li.active {
        color: #ff6a00;
    }
    .breadcrumb-content > ul > li:after {
        content: "/";
        vertical-align: middle;
        margin: 0 5px;
        color: #7a7a7a;
    }
    .breadcrumb-content > ul > li:last-child:after {
        display: none;
    }
    .mt-80 {
        margin-top: 80px
    }
    .mb-80 {
        margin-bottom: 80px
    }
    .single-product-name {
        font-size: 22px;
        text-transform: capitalize;
        font-weight: 900;
        color: #444;
        line-height: 24px;
        margin-bottom: 15px;
    }
    .single-product-reviews {
        margin-bottom: 10px;
    }
    .single-product-price {
        margin-top: 25px;
    }
    .single-product-action {
        margin-top: 30px;
        padding-bottom: 30px;
        border-top: 1px solid #ebebeb;
        border-bottom: 1px solid #ebebeb;
        float: left;
        width: 100%;
    }
    .product-discount {
        display: inline-block;
        margin-bottom: 20px;
    }
    .product-discount span.price {
        font-size: 28px;
        font-weight: 900;
        line-height: 30px;
        display: inline-block;
        color: #008bff;
    }
    .product-info {
        color: #333;
        font-size: 14px;
        font-weight: 400;
    }
    .product-info p {
        line-height: 30px;
        font-size: 14px;
        color: #333;
        margin-top: 30px;
    }
    .product-add-to-cart span.control-label {
        display: block;
        margin-bottom: 10px;
        text-transform: capitalize;
        color: #232323;
        font-size: 14px;
    }
    .product-add-to-cart {
        overflow: hidden;
        margin: 20px 0px;
        float: left;
        width: 100%;
    }
    .cart-plus-minus-box {
        border: 1px solid #e1e1e1;
        border-radius: 0;
        color: #3c3c3c;
        height: 49px;
        text-align: center;
        width: 50px;
        padding: 5px 10px;
    }
    .product-add-to-cart .cart-plus-minus {
        margin-right: 25px;
    }
    .cart-plus-minus {
        position: relative;
        width: 75px;
        float: left;
        padding-right: 25px;
    }
    .add-to-cart {
        background: #008bff;
        border: 0;
        border-bottom: 3px solid #0680e5;
        color: #fff;
        box-shadow: none;
        padding: 0 30px;
        border-radius: 3px;
        font-weight: 400;
        cursor: pointer;
        font-size: 14px;
        text-transform: capitalize;
        height: 50px;
        line-height: 50px;
    }
    .add-to-cart:hover {
        background: #ff6a00;
        border-color: #e96405;
    }
    #pages {
        margin-top: -80px !important;
    }
</style>
<style>
    .xzoom-source img, .xzoom-preview img, .xzoom-lens img {
        display: block;
        max-width: none;
        max-height: none;
        -webkit-transition: none;
        -moz-transition: none;
        -o-transition: none;
        transition: none;
    }
    /* --------------- */
    /* xZoom Styles below */
    .xzoom-container {
        display: inline-block;
    }
    .xzoom-thumbs {
        text-align: center;
        margin-bottom: 10px;
    }
    .xzoom {
        width: 400px;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    }
    .xzoom2, .xzoom3, .xzoom4, .xzoom5 {
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.5);
    }
    /* Thumbs */
    .xzoom-gallery, .xzoom-gallery2, .xzoom-gallery3, .xzoom-gallery4, .xzoom-gallery5 {
        border: 1px solid #cecece;
        margin-left: 5px;
        margin-bottom: 10px;
    }
    .xzoom-source, .xzoom-hidden {
        display: block;
        position: static;
        float: none;
        clear: both;
    }
    /* Everything out of border is hidden */
    .xzoom-hidden {
        overflow: hidden;
    }
    /* Preview */
    .xzoom-preview {
        border: 1px solid #888;
        background: #2f4f4f;
        box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
    }
    /* Lens */
    .xzoom-lens {
        border: 1px solid #555;
        box-shadow: -0px -0px 10px rgba(0,0,0,0.50);
        cursor: crosshair;
    }
    /* Loading */
    .xzoom-loading {
        background-position: center center;
        background-repeat: no-repeat;
        border-radius: 100%;
        opacity: .7;
        background: url(../images/xloading.gif);
        width: 48px;
        height: 48px;
    }
    /* Additional class that applied to thumb when it is active */
    .xactive {
        -webkit-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
        -moz-box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
        box-shadow: 0px 0px 3px 0px rgba(74,169,210,1);
        border: 1px solid #4aaad2;
    }
    /* Caption */
    .xzoom-caption {
        position: absolute;
        bottom: -43px;
        left: 0;
        background: #000;
        width: 100%;
        text-align: left;
    }
    .xzoom-caption span {
        color: #fff;
        font-family: Arial, sans-serif;
        display: block;
        font-size: 0.75em;
        font-weight: bold;
        padding: 10px;
    }
</style>
<script src={{ asset('js/app.js') }}></script>

<div class="wrapper con">

    <main>
        <div id="shopify-section-product-template" class="shopify-section">
            <div class="single-product-area mt-80 mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>



                            <div class="container">

                                <!-- default start -->
                                <section id="default" class="padding-top0">
                                    <div class="row">

                                        <hr>
                                        <div class="large-5 column">
                                            <div class="xzoom-container">

                                                <img class="xzoom" id="xzoom-default" xoriginal={{'/images/'.$product->productImages[0]->name}} src={{'/images/'.$product->productImages[0]->name}}  />

                                                <div class="xzoom-thumbs">

                                                    @foreach ($product->productImages as $image)
                                                        <a href={{'/images/'.$image->name}} ><img class="xzoom-gallery" style=" object-fit: contain;" width="80" height="80" src={{'/images/'.$image->name}} ></a>
                                                    @endforeach



                                                </div>
                                            </div>
                                        </div>
                                        <div class="large-7 column"></div>
                                    </div>
                                </section>
                                <!-- default end -->
                            </div>

                            <script src='https://code.jquery.com/jquery-2.1.1.js'></script>
                            <script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
                            <script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
                            <script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>





                        </div>
                        <div class="col-md-7">


                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="single-product-content" style="margin-top:35px;">

                                        <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                                        <div class="product-details">

                                            <h1 class="single-product-name">
                                                {{$product->name}}

                                            </h1>


                                            <div class="single-product-price">
                                                <div class="product-discount">
                                                    <span class="price" id="ProductPrice">
                                                        <span class="money">
                                                            {{$product->price}}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="product-info">{!! $product->description !!}</div>

                                            <div class="single-product-action">
                                                <div class="product-variant-option">
                                                    <select name="id" id="productSelect" class="product-single__variants" style="display:none;">
                                                        <option selected="selected" data-sku="YQT71020193" value="19506517377094">Default Title - $20.66 USD</option>

                                                    </select>
                                                    <script>
                                                        jQuery(function () {
                                                            jQuery('.swatch :radio').change(function () {
                                                                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                                var optionValue = jQuery(this).val();
                                                                jQuery(this)
                                                                    .closest('form')
                                                                    .find('.single-option-selector')
                                                                    .eq(optionIndex)
                                                                    .val(optionValue)
                                                                    .trigger('change');
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                                <style>
                                                    .product-variant-option .selector-wrapper {
                                                        display: none;
                                                    }
                                                </style>
                                                <div class="product-add-to-cart">
                                                    <span class="control-label">Quantity</span>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                    </div>
                                                    <div>
                                                        <a asp-controller="Product" asp-action="AddToCart" asp-route-id="@Model.Product.Id" style="text-decoration: inherit;color:inherit; position: inherit; ">
                                                            <button class="btn btn-primary">Order</button>
                                                        </a>
                                                        <div class="flex-row mt-3" style="display:flex; align-self:center; align-items:center;">



                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style type="text/css">
                .product-details .countdown-timer-wrapper {
                    display: none !important;
                }
            </style>

        </div>
    </main>
</div>







<script>
    (function ($) {
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({ zoomWidth: 400, title: true, tint: '#333', Xoffset: 15 });
            $('.xzoom2, .xzoom-gallery2').xzoom({ position: '#xzoom2-id', tint: '#ffa200' });
            $('.xzoom3, .xzoom-gallery3').xzoom({ position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden' });
            $('.xzoom4, .xzoom-gallery4').xzoom({ tint: '#006699', Xoffset: 15 });
            $('.xzoom5, .xzoom-gallery5').xzoom({ tint: '#006699', Xoffset: 15 });

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function () {
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom, .xzoom2, .xzoom3').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        xzoom.eventleave = function (element) {
                            element.hammer().on('tap', function (event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom4').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on('tap', function () {
                                counter++;
                                if (counter == 1) setTimeout(openfancy, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom5').each(function () {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on('drag', function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on('tap', function () {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific, 300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = { src: gallery[i] };
                                }
                                $.magnificPopup.open({ items: images, type: 'image', gallery: { enabled: true } });
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

            } else {
                //If not touch device

                //Integration with fancybox plugin
                $('#xzoom-fancy').bind('click', function (event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    $.fancybox.open(xzoom.gallery().cgallery, { padding: 0, helpers: { overlay: { locked: false } } });
                    event.preventDefault();
                });

                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function (event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = { src: gallery[i] };
                    }
                    $.magnificPopup.open({ items: images, type: 'image', gallery: { enabled: true } });
                    event.preventDefault();
                });
            }
        });
    })(jQuery);
</script>
</body>
</html>
