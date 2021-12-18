@extends('back.layouts.master')
@section('content')
    <form method="post" action="{{route('admin.catPostUpdate',$category->id)}}" >
        @csrf
        <label>Kategori Adı</label>
        <input type="text" name="category_name" value="{{$category->category_name}}"> <br>
        <label for="language">Dil Seçiniz</label>
        <select name="language" id="language">
            <option value="türkçe" >Türkçe</option>
            <option value="english" >İngilizce</option>
        </select> <br>
        <label>Url Değeri</label> <br>
        <input type="text" name="url_slug" value="{{$category->url_slug}}"> <br>
        <button type="submit">Güncelle</button>
    </form>










@endsection
