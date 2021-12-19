@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Referans Ekleme</h3>
        </div>
        <form method="post" action="{{route('admin.postReferences')}} " enctype="multipart/form-data">
            @csrf
            <div>
                <label>Firma Adı</label>
                <input type="text" name="reference_name"> <br>
            </div>
            <div><label>Fotoğraf Yükleyiniz</label>
                <input type="file" name="photo"> <br>
            </div>
            <div><label>Reference Linki</label> <br>
                <input type="text" name="reference_link"> <br>
            </div>
            <button class="btn btn-success" type="submit">Ekle</button>

        </form>
    </div>
@endsection
