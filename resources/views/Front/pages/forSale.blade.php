@extends('Front.layout.app')
@section('content')
    <style>
        @media screen and (max-width: 768px) {
            .colorlib-forSale{
                margin-top: 14vh;
            }
        }
        .desc{
            position: relative;
        }
        .desc>a{
            position: absolute;
            width: max-content !important;
            background-color: rgba(40, 40, 38, 0.6) !important;
            color: white;
            padding: 4px 16px;
            right: 0;
            bottom: 0;
            margin: 0 !important;
        }
        .desc>a:hover{
            background-color: #282826 !important;
        }
        .colorlib-references .references{
            flex-direction: column;
        }
        .colorlib-references .references span{
            width: 100% !important;
            flex-direction: row !important;
            justify-content: flex-start !important;
            height: max-content !important;
            margin:0 !important;
        }
        .colorlib-references .references span p{
            width: auto !important;
        }

    </style>
 @if($categories_content->category_name=='Referanslar')
     <div id="colorlib-main">

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
                     @if(count($references)>0)
                         <div class="references">
                             @foreach($references as $reference)
                                 <span style="width: 200px; height: 300px; margin: 30px; display: flex; flex-direction: column; align-items: center; justify-content: space-between">
                                    <a href="{{$reference->reference_link}}"  target="_blank"><img src="{{asset($reference->photo)}}" alt="gelecek.jpg"></a>
                                    <p style="width: 200px; text-align: center;">{{$reference->reference_name}}</p>
                                </span>
                             @endforeach
                         </div>
                     @else
                         <div class="references">
                             <h1>Şu anda bakım aşamasındadır</h1>
                         </div>
                     @endif
                 </div>
             </div>
         </div>
     </div>

 @elseif($categories_content->category_name=='Hakkımızda')

      <div id="colorlib-main">
          <div class="colorlib-forSale" >
              <div class="colorlib-narrow-content">

                  <div class="row">
                      <div class="col-md-6">
                          <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="    box-shadow: 0 0 20px 1px #0000006b; background-image: url({{asset($about_content->photo_1)}})">
                          </div>
                      </div>
                      <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                          <div class="about-desc">
                              <span class="heading-meta">HOŞGELDİNİZ</span>
                              <h2 class="colorlib-heading">{{$categories_content->category_name}}</h2>
                                <p>{!!  $about_content->content_text!!}</p>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  @else
      <style>
          @media screen and (max-width: 768px) {
              .colorlib-forSale{
                  margin-top: 14vh;
              }
          }
      </style>
      <div id="colorlib-main">
          <div class="colorlib-forSale" >
              <div class="colorlib-narrow-content">
                  <div class="row">
                      <div class="header-search">
                          <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                              <span class="heading-meta">{{$categories_content->category_name}}</span>
                              <h2 class="colorlib-heading animate-box">{{$categories_content->category_name}} Tüm İlanlarımız</h2>
                          </div>
                          <div class="search"><input type="search"> <a href=""><i class="fas fa-search"></i></a></div>
                      </div>
                  </div>
                  <div class="row">
                      @if(count($categories_content['getContent'])>0)
                    @if(isset($categories_content['getContent']))
                        @foreach($categories_content['getContent'] as $content)
                              <div class="forSale animate-box" data-animate-effect="fadeInLeft">
                                  <div class="blog-entry">
                                      <a href="{{route('front.saleDetail',$content->id)}}" class="blog-img"><img  src="{{asset($content->photo_1)}}" class="img-responsive" ></a>
                                      <div class="desc">
                                          <span><small>{{$content->created_at}} </small> | <small>{{$content->title}}</small></span>
                                          <h3><a href="">{{$content->title}}</a></h3>
                                          <p>{!! \Illuminate\Support\Str::limit(strip_tags($content->content_text),70) !!} </p>
                                          <a href="{{route('front.saleDetail',$content->id)}}">Detayları görüntüle</a>
                                      </div>
                                  </div>
                              </div>
                        @endforeach
                            @endif
                      @else
                          <div class="sorry animate-box" data-animate-effect="fadeInLeft">
                              <i class="far fa-frown fa-9x"></i>
                              <h1>Bu alanda çalışmalarımız en yakın sürede sizlerle</h1>
                          </div>
                      @endif

                  </div>


              </div>

          </div>
      </div>
@endif
@endsection
