@extends('Front.layout.app')
@section('content')
    @yield('content')
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
                        <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="    box-shadow: 0 0 20px 1px #0000006b; background-image: url({{asset("front/images/img_bg_2.jpg")}})">
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
                                0555 555 55 55
                            </div>
                            <div class="contact-icon">
                                <span class="icon">
                                    <i class="fas fa-2x fa-map-marker-alt"></i>
                                </span>
                                Kültür, 23100 Merkez/Elâzığ Merkez/Elazığ
                            </div>
                            <div class="contact-icon">
                                <span class="icon">
                                    <i class="fas fa-2x fa-envelope"></i>
                                </span>
                                gurleryapi@gmail.com
                            </div>

                        </div>
                    </div>
                    <div class="whiteArea">
                        <div class=" contact-form animate-box" data-animate-effect="fadeInLeft">
                            <div>
                                <div>
                                    <label for="">Ad-Soyad</label>
                                    <input type="text" placeholder="Ad-Soyad">
                                </div>
                                <div>
                                    <label for="">E-Mail</label>
                                    <input type="email" placeholder="e-Mail">
                                </div>

                            </div>
                            <div>
                                <div>
                                    <label for="">Telefon Numarası</label>
                                    <input type="tel" placeholder="(0555)-555-55-55" pattern="([0-9]{4})[0-9]{3}-[0-9]{2}-[0-9]{2}">
                                </div>
                                <div>
                                    <label for="">Konu</label>
                                    <select name="" id="">
                                        <option value="" disabled selected>Bilgi Almak İstenen Konular</option>
                                    </select>
                                </div>

                            </div>
                            <label for="">Mesajınız</label>
                            <textarea name="" id="" cols="90" rows="3" placeholder="Mesajınız"></textarea>
                            <input type="submit">
                        </div>
                        <div class="contact-image animate-box" data-animate-effect="fadeInLeft">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                            <img src="{{asset("front/images/contact.jpg")}}" alt="">
                            <label for="">E-Mail</label>
                            <div><input type="email"> <a href="">Abone Ol</a></div>

                        </div>
                    </div>

                </div>
            </div>
            <iframe style="    margin-bottom: -1vh; margin-top: 6vh; filter: invert(90%); border: 1px solid #ffffff;" class="animate-box" data-animate-effect="fadeInLeft" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8156.998315639303!2d39.203692281906946!3d38.67597168995606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076c01523587a39%3A0xdf454f9e53d46568!2zRWxhesSxxJ8gQXRhdMO8cmsgU3RhZHl1bXU!5e0!3m2!1str!2str!4v1638652709377!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
@endsection

