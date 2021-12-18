@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>mail adresi</th>
                <th>telefon Numarası</th>
                <th>Ofis Adresi</th>
                <th>maps_link</th>
                <th>Güncellenme Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead>
            <tbody>

            @foreach($configs as $config)
                <tr>
                    <td>{{$config->mail_adress}}</td>
                    <td>{{$config->site_phoneNumber}}</td>
                    <td>{{$config->adress}}</td>
                    <td>{{$config->maps_link}}</td>
                    <td>{{$config->updated_at}}</td>
                    <td><button class="btn btn-warning">Güncelle</button></td>
            </tr>
           @endforeach
            </tbody>
        </table>
    </div>
@endsection
