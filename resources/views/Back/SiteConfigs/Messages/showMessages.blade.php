@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr role="row">
                    <th>İsim</th>
                    <th>Soyisim</th>
                    <th> Mail Adresi</th>
                    <th>Telefon Numarası</th>
                    <th>Konu</th>
                    <th>Mesajı</th>
                    <th>Gönderim Tarihi</th>
                    <th>Eylemler</th>
                </tr>
            </thead>
            <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{$message->name}}</td>
                    <td>{{$message->surname}}</td>
                    <td>{{$message->email}}</td>
                    <td>{{$message->phoneNumber}}</td>
                    <td>{{$message->option}}</td>
                    <td>{{$message->message}}</td>
                    <td>{{$message->created_at}}</td>
                    <td>
                        <button class="btn btn-danger">Sil</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
