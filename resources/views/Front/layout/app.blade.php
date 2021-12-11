<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gürler Yapı</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="{{asset("favicon.ico")}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <!-- Animate.css -->
    <link href="{{asset("front/css/animate.css")}}" rel="stylesheet">
    <!-- Icomoon Icon Fonts-->
    <link href="{{asset("front/css/icomoon.css")}}" rel="stylesheet">
    <!-- Bootstrap  -->
    <link href="{{asset("front/css/bootstrap.css")}}" rel="stylesheet">
    <!-- Flexslider  -->
    <link href="{{asset("front/css/flexslider.css")}}" rel="stylesheet">
    <!-- Flaticons  -->
    <link href="{{asset("front/fonts/flaticon/font/flaticon.css")}}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset("front/css/owl.carousel.min.css")}}" rel="stylesheet">
    <link href="{{asset("front/css/owl.theme.default.min.css")}}" rel="stylesheet">
    <!-- Theme style  -->
    <link href="{{asset("front/css/style.css")}}" rel="stylesheet">

    <!-- Modernizr JS -->
    <script src="{{asset("front/js/modernizr-2.6.2.min.js")}}"></script>
    <!-- FOR IE9 below -->
<!--[if lt IE 9]>
    <script src="{{asset("front/js/respond.min.js")}}"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo"><a href="index.html"><img src="{{asset("images/s2.png")}}" alt=""></a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="index.html">ANA SAYFA</a>
                    {{--                    <ul>--}}
                    {{--                        <li><a href="">ssss</a></li>--}}
                    {{--                        <li><a href="">ssss</a></li>--}}
                    {{--                        <li><a href="">ssss</a></li>--}}
                    {{--                    </ul>--}}
                </li>
                @foreach($categories as $category)<li><a href="{{Route('front.categoryPage',['language'=>$category->language,'url_slug'=>$category->url_slug,'id'=>$category->id])}}">{{$category->category_name}}</a>
                    @if(isset($category['subCategory']))
                        <ul>
                    @foreach($category['subCategory'] as $sub_category)
                        <li><a href="{{Route('front.contentPage',['language'=>$category->language,'url_slug'=>$category->url_slug,'sub_category_url'=>$sub_category->sub_category_url,'id'=>$sub_category->id])}}">{{$sub_category->name}}</a>
                        </li>
                        @endforeach
                    </ul></li>
                @endif
                @endforeach

            </ul>
        </nav>

        <div class="colorlib-footer">
            <p>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
            <small>&copy;
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>  AKSOYUCER Tüm Hakları Saklıdır
                <div>Designed by <a href="">YUSUF ÇAĞLAR AKSOY</a> <br> Developed by <a href="">HAKTAN ÇAĞATAY ÜÇER</a></div>

            </small></p>
        </div>

    </aside>
    @yield('content')

</div>

<!-- jQuery -->
<script src="{{asset("front/js/jquery.min.js")}}" ></script>
<!-- jQuery Easing -->
<script src="{{asset("front/js/jquery.easing.1.3.js")}}"></script>
<!-- Bootstrap -->
<script src="{{asset("front/js/bootstrap.min.js")}}" ></script>
<!-- Waypoints -->
<script src="{{asset("front/js/jquery.waypoints.min.js")}}" ></script>
<!-- Flexslider -->
<script src="{{asset("front/js/jquery.flexslider-min.js")}}" ></script>
<!-- Sticky Kit -->
<script src="{{asset("front/js/sticky-kit.min.js")}}"></script>
<!-- Owl carousel -->
<script src="{{asset("front/js/owl.carousel.min.js")}}"></script>
<!-- Counters -->
<script src="{{asset("front/js/jquery.countTo.js")}}" ></script>


<!-- MAIN JS -->
<script src="{{asset("front/js/main.js")}}" ></script>

</body>
</html>
