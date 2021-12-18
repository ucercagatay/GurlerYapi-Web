@extends('back.layouts.master')
@section('content')
    <form method="post" action="{{route('admin.postReferences')}} " enctype="multipart/form-data" >
        @csrf
        <label>Firma Adı</label>
        <input type="text" name="reference_name"> <br>
        <label>Fotoğraf Yükleyiniz</label>
        <input type="file" name="photo"> <br>
        <label>Reference Linki</label> <br>
        <input type="text" name="refence_link"> <br>
        <button type="submit">Ekle</button>
    </form>
@endsection
