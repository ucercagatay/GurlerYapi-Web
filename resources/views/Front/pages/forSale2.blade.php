@extends('Front.layout.app')
@section('content')
    @if(isset($sub_categories['content']))

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
                               <h2 class="colorlib-heading">Satışta Olan {{$sub_categories->name}} Hizmetlerimiz</h2>
                           </div>
                           <div class="search"><input type="search"> <a href=""><i class="fas fa-search"></i></a></div>
                       </div>
                   </div>
                   <div class="row">
                       @foreach($sub_categories['content'] as $content)
                       <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                           <div class="blog-entry">
                               <a href="blog.html" class="blog-img"><img  src="{{asset("front/images/blog-1.jpg")}}" class="img-responsive" ></a>
                               <div class="desc">
                                   <span><small>{{$content->created_at}}</small> | <small> {{$content->title}} </small></span>
                                   <h3><a href="blog.html">{{$content->title}}</a></h3>
                                   <p>{{$content->content}} </p>
                               </div>
                           </div>
                       </div>
                   </div>
                   @endforeach
               </div>
           </div>
       </div>


       @endif

@endsection
