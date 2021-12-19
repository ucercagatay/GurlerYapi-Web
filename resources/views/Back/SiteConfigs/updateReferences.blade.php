@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Referans Düzenleme</h3>
        </div>
        <form method="post" action="{{route('admin.updatePostReference',$reference->id)}}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Firma Adı</label>
                <input type="text" name="reference_name" value="{{$reference->reference_name}}"> <br>
            </div>
            <div><label>Fotoğraf Yükleyiniz</label>
                <input type="file" name="photo" value="{{asset($reference->photo)}}"> <br>
            </div>
            <div><label>Reference Linki</label> <br>
                <input type="text" name="reference_link" value="{{$reference->reference_link}}"> <br>
            </div>
            <button class="btn btn-success" type="submit">Güncelle</button>

        </form>
    </div>
@endsection
