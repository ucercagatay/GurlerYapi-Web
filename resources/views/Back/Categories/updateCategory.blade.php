@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3 >Kategori Güncelleme</h3>
        </div>
        <form method="post" action="{{route('admin.catPostUpdate',$category->id)}}">
            @csrf
            <div>
                <label>Kategori Adı</label>
                <input type="text" name="category_name" value="{{$category->category_name}}"> <br>
            </div>
            <div><label for="language">Dil Seçiniz</label>
                <select name="language" id="language">
                    <option value="türkçe">Türkçe</option>
                    <option value="english">İngilizce</option>
                </select> <br>
            </div>
            <div><label>Url Değeri</label> <br>
                <input type="text" name="url_slug" value="{{$category->url_slug}}"> <br>
            </div>
            <button class="btn btn-warning" type="submit">Güncelle</button>
        </form>
    </div>









@endsection
