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
                    <td style="display: flex"><form method="post" action="{{route('admin.deleteReference')}}">
                            @csrf
                            <input type="hidden" name="delete" value="{{$reference->id}}">
                            <button class="btn btn-danger" type="submit">SİL</button>
                        </form><a class="btn btn-warning" style="margin-left: 2%" href="{{route('admin.updatePate',$reference->id)}}">Güncelle</a></td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
