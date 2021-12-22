@extends('back.layouts.master')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

        <h1 class="h3 mb-0 text-gray-800">Hoşgeldin <strong>{{$user->name}} {{$user->surname}}</strong></h1>

    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="datas">
                <div class="dataCard">
                    <i class="fas fa-envelope"></i>
                    <h2>{{count($messages)}}</h2>
                    <h5>Mesaj Sayısı</h5>
                </div>
                <div class="dataCard">
                    <i class="fas fa-tags"></i>
                    <h2>{{count($contentSa)}}</h2>
                    <h5>Satılık İlan Sayısı</h5>
                </div>
                <div class="dataCard">
                    <i class="fas fa-sign"></i>
                    <h2>{{count($contents)}}</h2>
                    <h5>Kiralık İlan Sayısı</h5>
                </div>
                <div class="dataCard">
                    <i class="fas fa-users"></i>
                    <h2>{{count($userCount)}}</h2>
                    <h5>Admin Sayısı</h5>
                </div>
            </div>
        </div>
    </div>


{{--    ÖRNEK BUTONLAR--}}
{{--    Mavi Renk--}}
{{--    <a class="btn btn-primary"></a>--}}
{{--    YEŞİL--}}
{{--    <a class="btn btn-success"></a>--}}
{{--    AÇIK MAVİ--}}
{{--    <a class="btn btn-info"></a>--}}
{{--    SARI--}}
{{--    <a class="btn btn-warning"></a>--}}
{{--    KIRMIZI--}}
{{--    <a class="btn btn-danger"></a>--}}
@endsection

