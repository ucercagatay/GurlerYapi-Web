@extends('Front.layout.app')
@section('content')
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 50vh;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
            opacity: 1;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <div id="colorlib-main">
        <div class="colorlib-about">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">PROJELER</span>
                        <h2 class="colorlib-heading">{{$content->title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div
                            style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                            class="swiper mySwiper2"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_1)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_2)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_3)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_4)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_5)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_7)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_6)}}" alt="">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_1)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_2)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_3)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_4)}} "alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_5)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_6)}}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{asset($content->photo_7)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="animate-box" style="    padding: 15px;" data-animate-effect="fadeInRight">
                        <h2 >{{$content->title}}</h2>
                        <p>{!! $content->content_text  !!}</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                loop: false,
                spaceBetween: 1,
                slidesPerView: 7,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiper2 = new Swiper(".mySwiper2", {
                loop: true,
                spaceBetween: 1,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        </script>
@endsection
