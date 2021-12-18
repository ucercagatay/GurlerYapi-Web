@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>Firma Adı</th>
                <th>Fotoğraf</th>
                <th>Bağlantı Linki</th>
                <th>Güncellenme Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($references as $reference)
                <tr>
                <td>{{$reference->reference_name}}</td>
                    <td>{{$reference->photo}}</td>
                    <td>{{$reference->reference_link}}</td>
                    <td>{{$reference->updated_at}}</td>
                    <td><button>Güncelle</button></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
