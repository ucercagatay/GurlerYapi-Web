@extends('Front.layout.app')
@section('content')
    <div id="colorlib-main">
        <div class="colorlib-navi" style="margin-top: 5vh">
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
                    <div class="whiteArea" style="padding-bottom: 3vh;">
                        <div class=" contact-form animate-box" style="width: 100%; margin-right: 5%" data-animate-effect="fadeInLeft">
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
                                        <input type="tel" name="phoneNumber" placeholder="(0555)-555-55-55" pattern="([0-9]{4})[0-9]{3}-[0-9]{2}-[0-9]{2}">
                                    </div>
                                    <div>
                                        <label for="">E-Mail</label>
                                        <input type="email" name="email" placeholder="e-Mail">
                                    </div>

                                </div>
                                <label for="">Konu</label>
                                <select name="option" id="">
                                    <option value="" disabled selected>Bilgi Almak İstenen Konular</option>
                                    <option value="Kategori1">Kategori adı 1</option>
                                    <option value="Kategori2">Kategori adı 2</option>
                                    <option value="Kategori3">Kategori adı 3</option>
                                </select>
                                <label for="">Mesajınız</label>
                                <textarea name="message" id="" cols="90" rows="3" placeholder="Mesajınız"></textarea>
                                <input type="submit">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
