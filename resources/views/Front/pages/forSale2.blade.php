@extends('Front.layout.app')
@section('content')
    <style>
        .colorlib-blog .colorlib-narrow-content .row:last-child{
            display: flex;
            flex-wrap: wrap;
        }
        .blog-entry{
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 20px 1px #0000001f;
        }
        .desc{
            padding: 0 16px;
        }
        @media screen and (max-width: 768px) {
            .colorlib-forSale{
                margin-top: 14vh;
            }
        }
    </style>
    <div id="colorlib-main">
        <div class="colorlib-blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="header-search">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                            <span class="heading-meta">PROJELER</span>
                            <h2 class="colorlib-heading">SATIŞTA OLAN PROJELER</h2>
                        </div>
                        <div class="search"><input type="search"> <a href=""><i class="fas fa-search"></i></a></div>
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
                </div>
            </div>
        </div>
    </div>

@endsection
