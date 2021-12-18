@extends('back.layouts.master')
@section('content')
    <form method="post" action="{{route('admin.updateProductPost',$content->id)}}" enctype="multipart/form-data" >
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
            @foreach($subcats as $subcat)
                @if($subcat->id <= 4)
                    <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                @endif
            @endforeach
            <option disabled>KİRALIK</option>
            @foreach($subcats as $subcat)
            @if($subcat->id>4)
                    <option value="{{$subcat->id}}">{{$subcat->name}}</option>
                @endif
            @endforeach
        </select><br>
        <label>Başlık </label>
        <input type="text" name="title" value="{{$content->title}}"> <br>
        <label for="language">Dil Seçiniz</label>
        <select name="language" id="language">
            <option value="türkçe" >Türkçe</option>
            <option value="english" >İngilizce</option>
        </select> <br>
        <label>İçerik</label>
        <textarea class="form-control" id="summary-ckeditor" name="content_text">{{$content->content_text}}</textarea>
        <label>Url Değeri</label> <br>
        <input type="text" name="content_url_slug" value="{{$content->content_url_slug}}"> <br>
        <label>Fotoğraf 1</label><br>
        <input type="file" name="photo_1"><img src="{{$content->photo_1}}" style="width:200px; height: 175px;"> <br>
        <label>Fotoğraf 2</label><br>
        <input type="file" name="photo_2"> <br><img src="{{$content->photo_2}}" style="width:200px; height: 175px;">
        <label>Fotoğraf 3</label><br>
        <input type="file" name="photo_3"> <br><img src="{{$content->photo_3}}" style="width:200px; height: 175px;">
        <button type="submit">Güncelle</button>
    </form>




    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>



@endsection
