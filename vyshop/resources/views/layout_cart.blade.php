<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $meta_desc }}">
    <meta name="keywords" content="{{ $meta_keywords }}" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="canonical" href="{{ $url_canonical }}" />
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="{{ asset('public/frontend/images/icon.png') }}" />
    <title>{{ $meta_title }}</title>

    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <link rel="shortcut icon" href="{{ 'public/frontend/images/ico/favicon.ico' }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ 'images/apple-touch-icon-144-precomposed.pn' }}g">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ 'images/apple-touch-icon-114-precomposed.pn' }}g">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'images/apple-touch-icon-72-precomposed.png' }}">
    <link rel="apple-touch-icon-precomposed" href="{{ 'images/apple-touch-icon-57-precomposed.png' }}">
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i>0365610122</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa"
                                    data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                                <?php
                                    $customer_id =Session::get('customer_id');
                                    $shipping_id =Session::get('shipping_id');
                                    if($customer_id!=NULL && $shipping_id ==NULL)
                                    {
                                ?>
                                <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Thanh
                                        toán</a></li>
                                {{-- điền thông tin vận chuyển --}}
                                <?php
                                    }
                                    elseif($customer_id!=NULL && $shipping_id!=NULL)
                                    {
                                ?>
                                <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs"></i> Thanh toán</a>
                                </li>
                                <?php
                                    }
                                    else
                                    {
                                ?>
                                <li><a href="{{ URL::to('/login-checkout') }}"><i class="fa fa-lock"></i> Thanh
                                        toán</a></li>
                                <?php
                                    }
                                ?>

                                <li><a href="{{ URL::to('/show-cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ
                                        hàng</a></li>
                                <?php
                                    $customer_id =Session::get('customer_id');
                                    if($customer_id!=NULL){
                                ?>
                                <li><a href="{{ URL::to('/logout-checkout') }}"><i class="fa fa-lock"></i> Đăng
                                        xuất</a></li>

                                <?php
                                    } else{
                                ?>
                                <li><a href="{{ URL::to('/login-checkout') }}"><i class="fa fa-lock"></i> Đăng
                                        nhập</a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ URL::to('/trang-chu') }}" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="{{ URL::to('/trang-chu') }}">Products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>

                                </li>
                                {{-- <li><a href="{{URL::to('/show-cart')}}">Giỏ hàng</a></li> --}}
                                <li><a href="#">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <form action="{{ URL::to('/tim-kiem') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_search" placeholder="Nhập từ khóa..." />
                                <input type="submit" style="margin-top: 0; width: 80px;" name=""
                                    class="btn btn-primary btn-sm" value="Tìm kiếm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($slider as $key=>$slider)
                                @php
                                    $i++;
                                @endphp
                                <div class="item {{ $i == 1 ? 'active' : '' }}">
                                    <div class="col-sm-12">
                                        <img src="public/uploads/slider/{{ $slider->slider_image }}" class="girl img-responsive" alt="{{$slider->slider_desc}}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @yield('cart_content')
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>DỊCH VỤ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Trợ giúp trực tuyến</a></li>
                                <li><a href="#">Liên hệ chúng tôi</a></li>
                                <li><a href="#">Tình trạng đặt hàng</a></li>
                                <li><a href="#">Thay đổi địa điểm</a></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>SHOP</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Áo thun</a></li>
                                <li><a href="#">Quần</a></li>
                                <li><a href="#">Giày</a></li>
                                <li><a href="#">Thẻ quà tặng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>CHÍNH SÁCH</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Điều khoản sử dụng</a></li>
                                <li><a href="#">Chính sách hoàn lại tiền</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                                <li><a href="#">Hệ thống thanh toán</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>GIỚI THIỆU</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin công ty</a></li>
                                <li><a href="#">Vị trí cửa hàng</a></li>
                                <li><a href="#">Chương trình liên kết</a></li>
                                <li><a href="#">Bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i
                                        class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Góp ý của bạn đối với chất lượng Shop</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p style="text-align: center;">Copyright © 2021 VY-SHOPPER Inc. All rights reserved.</p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->
    <script src="{{ asset('public/frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('public/frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('public/frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('public/frontend/js/main.js') }}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
