@extends('Front.layout.app')
@section('content')
    <div id="colorlib-main">
        <aside id="colorlib-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">

                <ul class="slides">
                    @foreach($contents as $content)
                    <li style="background-image:url({{asset($content->photo_1)}})" alt="fotogelicek">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                    <div class="slider-text-inner">
                                        <div class="desc">
                                            <h1>{{$content->title}}</h1>
                                            <h2>{!! \Illuminate\Support\Str::limit($content->content_text,80) !!}</h2>
                                            <p><a href="{{route('front.saleDetail',$content->id)}}" class="btn btn-primary btn-learn">Daha Fazlasını Gör <i class="icon-arrow-right3"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </aside>
        <div class="colorlib-about">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6">
                        @foreach($about as $aboutus)
                        <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="    box-shadow: 0 0 20px 1px #0000006b; background-image: url({{asset($aboutus->photo_1)}})">
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="about-desc">
                            <span class="heading-meta">HOŞGELDİNİZ</span>

                            <h2 class="colorlib-heading">{{$aboutus->title}}</h2>
                            {!! $aboutus->content_text !!}
                         @endforeach
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
        <div class="colorlib-counters" id="colorlib-counter"  style="background-image: url({{asset("front/images/cover_bg_1.jpg")}}) " data-stellar-background-ratio="0.5">
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
     {{--<div class="colorlib-work">
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
        </div>--}}
        <div class="colorlib-blog">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">PROJELER</span>
                        <h2 class="colorlib-heading">SATIŞTA OLAN PROJELER</h2>
                    </div>
                </div>
                @foreach($contents as $content)
                <div class="row">
                    <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="blog-entry">
                            <a href="blog.html" class="blog-img"><img  src="{{asset($content->photo_1)}}" class="img-responsive" ></a>
                            <div class="desc">
                                <span><small>{{$content->created_at}} </small> | <small> {{$content->title}} </small></span>
                                <h3><a href="">{{$content->title}}</a></h3>
                                    <p>{!! \Illuminate\Support\Str::limit($content->content_text,80) !!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="colorlib-references">
            <div class="colorlib-narrow-content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Bize Destek Verenler</span>
                        <h2 class="colorlib-heading animate-box">REFERANSLAR</h2>
                    </div>
                </div>
            </div>
            <div class="colorlib-narrow-content animate-box" data-animate-effect="fadeInLeft">
                <div class="row">
                    @foreach($references as $reference)
                    <div class="references">
                        <a href="{{$reference->reference_link}}"><img src="{{asset($reference->photo)}}" alt=""></a>
                    </div>
                        @endforeach

                </div>
            </div>
        </div>
        <div class="colorlib-navi">
            <div class="colorlib-narrow-content">
                <div class="row">

                    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                        <span class="heading-meta">Bize Ulaşın</span>
                        <h2 class="colorlib-heading animate-box">İLETİŞİM</h2>
                    </div>
                </div>
            </div>
            <div class="colorlib-narrow-content">
                <div class="row" >
                    <div class="icons animate-box" data-animate-effect="fadeInLeft">
                        <img src="{{asset("images/s2.png")}}" alt="">
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <span class="icon">
                                    <i class="fas fa-2x fa-phone-alt"></i>
                                </span>
                                {{$site_config->site_phoneNumber}}
                            </div>
                            <div class="contact-icon">
                                <span class="icon">
                                    <i class="fas fa-2x fa-map-marker-alt"></i>
                                </span>{{$site_config->adress}}
                            </div>
                            <div class="contact-icon">
                                <span class="icon">
                                    <i class="fas fa-2x fa-envelope"></i>
                                </span>
                                {{$site_config->mail_adress}}
                            </div>

                        </div>
                    </div>

                    <div class="whiteArea">
                        <div class=" contact-form animate-box" id="contact" data-animate-effect="fadeInLeft">
                            <form method="post" action="{{route('formPost')}}">
                                @csrf
                                <div>
                                    <div>
                                        <label for="">Ad</label>
                                        <input type="text" name="name" placeholder="Ad">
                                    </div>
                                    <div>
                                        <label for="">Soyad</label>
                                        <input type="text" name="surname" placeholder="Soyad">
                                    </div>

                                </div>
                                <div>
                                    <div>
                                        <label for="">Telefon Numarası</label>
                                        <input type="tel" name="phoneNumber" placeholder="(0555)-555-55-55" pattern="([0-9]{4}[0-9]{3}[0-9]{2}[0-9]{2})">
                                    </div>
                                    <div>
                                        <label for="">E-Mail</label>
                                        <input type="email" name="email" placeholder="e-Mail">
                                    </div>

                                </div>
                                <label for="">Konu</label>
                                <select name="option" id="">
                                    <option value="" disabled selected>Bilgi Almak İstenen Konular</option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                        @endforeach
                                </select>
                                <label for="">Mesajınız</label>
                                <textarea name="message" id="" cols="90" rows="3" placeholder="Mesajınız"></textarea>
                                <input type="submit">
                            </form>
                        </div>
                        <div class="contact-image animate-box" data-animate-effect="fadeInLeft">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <img src="{{asset("front/images/contact.jpg")}}" alt="">

                          <form method="post" action="{{route('subscriber')}}">
                              @csrf
                              <label for="">E-Mail</label>
                              <div><input type="email" name="email"> <a href=""><button type="submit">Gönder</button></a></div>
                          </form>

                        </div>
                    </div>

                </div>
            </div>
            <iframe style="    margin-bottom: -1vh; margin-top: 6vh; filter: invert(90%); border: 1px solid #ffffff;" class="animate-box" data-animate-effect="fadeInLeft" src="{{$site_config->maps_link}}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

@endsection

