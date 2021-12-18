@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Kategori Ekleme</h3>
        </div>
        <form method="post" action="{{route('admin.addCategories')}}">
            @csrf
            <div><label>Kategori Adı</label>
                <input type="text" name="category_name">
            </div>
            <div><label for="language">Dil Seçiniz</label>
                <select name="language" id="language">
                    <option value="türkçe">Türkçe</option>
                    <option value="english">İngilizce</option>
                </select>
            </div>
            <div>
                <label>Url Değeri</label> <br>
                <input type="text" name="url_slug"> <br>
            </div>
            <button class="btn btn-success" type="submit">Ekle</button>
        </form>


    </div>







@endsection
