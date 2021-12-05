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
                    @foreach($categories as $category)
                    <li><a href="{{Route('front.categoryPage',['language'=>$category->language,'url_slug'=>$category->url_slug])}}">{{$category->category_name}}</a></li>
                    @if($category->sub_category   !=NULL)
                    <a href="{{Route('front.sub1_page',['language'=>$category->language,'url_slug'=>$category->url_slug,'sub_category'=>$category->sub_category])}}">{{$category->sub_category}}</a> <br>
                    @endif
                    @if($category->sub_category_2   !=NULL)
                       <a href="{{Route('front.sub2_page',['language'=>$category->language,'url_slug'=>$category->url_slug,'sub_category_2'=>$category->sub_category_2])}}">{{$category->sub_category_2}}</a> <br>
                    @endif
                    @if($category->sub_category_3   !=NULL)
                        <a href="{{Route('front.sub3_page',['language'=>$category->language,'url_slug'=>$category->url_slug,'sub_category_3'=>$category->sub_category_3])}}">{{$category->sub_category_3}}</a>
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
                {{--                    <br>--}}
                {{--                    Designed by <a href="">YUSUF ÇAĞLAR AKSOY</a> <br>--}}
                {{--                    Developed by <a href="">HAKTAN ÇAĞATAY ÜÇER</a>--}}
            </small></p>
        </div>

    </aside>

    <div id="colorlib-main">
        <aside id="colorlib-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url({{asset("front/images/img_bg_1.jpg")}})">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1>Slide1</h1>
                                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis corporis</h2>
                                            <p><a class="btn btn-primary btn-learn">Daha Fazlasını Gör <i class="icon-arrow-right3"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{asset("front/images/img_bg_2.jpg")}})">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1>Slide2</h1>
                                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis corporis</h2>
                                            <p><a class="btn btn-primary btn-learn">Daha Fazlasını Gör <i class="icon-arrow-right3"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url({{asset("front/images/img_bg_3.jpg")}})">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1>Slide3</h1>
                                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores blanditiis corporis</h2>
                                            <p><a class="btn btn-primary btn-learn">Daha Fazlasını Gör <i class="icon-arrow-right3"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="colorlib-about">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url({{asset("front/images/img_bg_2.jpg")}})">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="about-desc">
                            <span class="heading-meta">HOŞGELDİNİZ</span>
                            <h2 class="colorlib-heading">BİZ KİMİZ</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequatur dolore doloremque, eius eum fuga id modi pariatur quasi tenetur. Culpa, dolore eaque error excepturi magni molestias possimus repudiandae voluptatibus eius eum fuga id modi pariatur!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequatur dolore doloremque, eius eum fuga id modi pariatur quasi tenetur. Culpa, dolore eaque error excepturi magni</p>
                        </div>
                        <div class="row padding">
                            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                <a href="#" class="steps active">
                                    <p class="icon"><span><i class="icon-check"></i></span></p>
                                    <h3>TUTKUYLA <br>ÇALIŞMA</h3>
                                </a>
                            </div>
                            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                <a href="#" class="steps">
                                    <p class="icon"><span><i class="icon-check"></i></span></p>
                                    <h3>AÇIK SÖZLÜ <br>GÜVENİLİR İLETİŞİM</h3>
                                </a>
                            </div>
                            <div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
                                <a href="#" class="steps">
                                    <p class="icon"><span><i class="icon-check"></i></span></p>
                                    <h3>HER ZAMAN <br>YENİLİĞE AÇIK</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-services">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Neler Yaparız?</span>
                        <h2 class="colorlib-heading">ÇALIŞMA ALANLARIMIZDAN BİRKAÇI</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <h3>ÇALIŞMA ALANI 1</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                    </div>
                                </div>

                                <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="flaticon-sketch"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <h3>ÇALIŞMA ALANI 2</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                    </div>
                                </div>

                                <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="flaticon-engineering"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <h3>ÇALIŞMA ALANI 3</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                    </div>
                                </div>

                                <div class="colorlib-feature animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <h3>ÇALIŞMA ALANI 4</h3>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url({{asset("front/images/services-1.jpg")}}) "></div>
                                    <div class="desc">
                                        <h3>Çalışma Alanı 1</h3>
                                    </div>
                                </a>
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url({{asset("front/images/services-2.jpg")}})"></div>
                                    <div class="desc">
                                        <h3>Çalışma Alanı 2</h3>
                                    </div>
                                </a>
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url({{asset("front/images/services-3.jpg")}})"></div>
                                    <div class="desc">
                                        <h3>Çalışma Alanı 3</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 move-bottom">
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url({{asset("front/images/services-4.jpg")}})"></div>
                                    <div class="desc">
                                        <h3>Çalışma Alanı 4</h3>
                                    </div>
                                </a>
                                <a href="services.html" class="services-wrap animate-box" data-animate-effect="fadeInRight">
                                    <div class="services-img" style="background-image: url({{asset("front/images/services-5.jpg")}})"></div>
                                    <div class="desc">
                                        <h3>Çalışma Alanı 5</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset("front/images/cover_bg_1.jpg")}}) " data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="colorlib-narrow-content">
                <div class="row">
                </div>
                <div class="row">
                    <div class="col-md-3 text-center animate-box">
                        <span class="icon"><i class="flaticon-skyline"></i></span>
                        <span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="colorlib-counter-label">Projeler</span>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <span class="icon"><i class="flaticon-engineer"></i></span>
                        <span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="colorlib-counter-label">Çalışanlar</span>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                        <span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="colorlib-counter-label">Ustalar</span>
                    </div>
                    <div class="col-md-3 text-center animate-box">
                        <span class="icon"><i class="flaticon-worker"></i></span>
                        <span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="colorlib-counter-label">Referanslar</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-work">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">ÇALIŞMALARIMIZ</span>
                        <h2 class="colorlib-heading animate-box">Son İşler</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-1.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 01</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-2.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 02</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-3.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 03</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-4.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 04</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-5.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 05</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="project" style="background-image: url({{asset("front/images/img-6.jpg")}})">
                            <div class="desc">
                                <div class="con">
                                    <h3><a href="work.html">İş 06</a></h3>
                                    <span>Blanditiis doloribus, pariatur.</span>
                                    <p class="icon">
                                        <span><a href="#">Daha Fazlasını Gör</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="colorlib-blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">PROJELER</span>
                        <h2 class="colorlib-heading">SATIŞTA OLAN PROJELER</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="blog.html" class="blog-img"><img  src="{{asset("front/images/blog-1.jpg")}}" class="img-responsive" ></a>
                            <div class="desc">
                                <span><small>Nisan 14, 2018 </small> | <small> Proje 1 </small></span>
                                <h3><a href="blog.html">Proje 1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad asperiores consectetur cupiditate debitis </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="blog.html" class="blog-img"><img src="{{asset("front/images/blog-2.jpg")}}" class="img-responsive" ></a>
                            <div class="desc">
                                <span><small>Nisan 14, 2018 </small> | <small> Proje 2 </small></span>
                                <h3><a href="blog.html">Proje 1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad asperiores consectetur cupiditate debitis </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="blog.html" class="blog-img"><img src="{{asset("front/images/blog-3.jpg")}}" class="img-responsive"></a>
                            <div class="desc">
                                <span><small>Nisan 14, 2018 </small> | <small> Proje 3 </small></span>
                                <h3><a href="blog.html">Proje 1</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad asperiores consectetur cupiditate debitis </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-navi">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8156.998315639303!2d39.203692281906946!3d38.67597168995606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c01523587a39%3A0xdf454f9e53d46568!2zRWxhesSxxJ8gQXRhdMO8cmsgU3RhZHl1bXU!5e0!3m2!1str!2str!4v1638652709377!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="colorlib-contact">

        </div>
    </div>
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

