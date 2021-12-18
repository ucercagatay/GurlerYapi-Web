@extends('back.layouts.master')
@section('content')
    <form method="post" action="{{route('admin.productPost')}}" enctype="multipart/form-data" >
        @csrf
        <label for="category">Categori Seçiniz</label>
        <select name="category_id" id="category">
            @foreach($categories as $category)
               <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
        </select><br>
        <label for="subCat">Alt Kategori Seçiniz</label>
        <select name="sub_category_id" id="subCat">
            <option disabled>SATILIK</option>
            @foreach($subCats as $subcat)
                @if($subcat->category_id==2)
                    <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                @endif
                @endforeach
            <option disabled>KİRALIK</option>
            @foreach($subCats as $subsCat)
                @if($subsCat->category_id==3)
                    <option value="{{$subsCat->id}}">{{$subsCat->name}}</option>
                    @endif
                @endforeach
        </select><br>
        <label>Başlık </label>
        <input type="text" name="title"> <br>
        <label for="language">Dil Seçiniz</label>
        <select name="language" id="language">
            <option value="türkçe" >Türkçe</option>
            <option value="english" >İngilizce</option>
        </select> <br>
        <label>İçerik</label>
        <textarea class="form-control" id="summary-ckeditor" name="content_text"></textarea>
        <label>Url Değeri</label> <br>
        <input type="text" name="content_url_slug"> <br>
        <label>Fotoğraf 1</label><br>
        <input type="file" name="photo_1"> <br>
        <label>Fotoğraf 2</label><br>
        <input type="file" name="photo_2"> <br>
        <label>Fotoğraf 3</label><br>
        <input type="file" name="photo_3"> <br>
        <button type="submit">Ekle</button>
    </form>




    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
@endsection
