@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>İçerik Güncelleme</h3>
        </div>
        <form method="post" action="{{route('admin.updateProductPost',$content->id)}}" enctype="multipart/form-data">
            @csrf
            <div><label for="category">Categori Seçiniz</label>
                <select name="category_id" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
                </select><br>
            </div>
            <div><label for="subCat">Alt Kategori Seçiniz</label>
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
            </div>
            <div><label>Başlık </label>
                <input type="text" name="title" value="{{$content->title}}"> <br>
            </div>
            <div><label for="language">Dil Seçiniz</label>
                <select name="language" id="language">
                    <option value="türkçe">Türkçe</option>
                    <option value="english">İngilizce</option>
                </select> <br>
            </div>
            <div><label>İçerik</label>
                <textarea class="form-control" id="summary-ckeditor"
                          name="content_text">{{$content->content_text}}</textarea>
            </div>
            <div><label>Url Değeri</label> <br>
                <input type="text" name="content_url_slug" value="{{$content->content_url_slug}}"> <br>
            </div>
            <div><label>Fotoğraf 1</label><br>
                <input type="file" name="photo_1"><img src="{{asset($content->photo_1)}}"
                                                       style="width:200px; height: 175px;"> <br>
            </div>
            <div><label>Fotoğraf 2</label><br>
                <input type="file" name="photo_2"> <br><img src="{{asset($content->photo_2)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <div><label>Fotoğraf 3</label><br>
                <input type="file" name="photo_3"> <br><img src="{{asset($content->photo_3)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <div><label>Fotoğraf 4</label><br>
                <input type="file" name="photo_4"> <br><img src="{{asset($content->photo_4)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <div><label>Fotoğraf 5</label><br>
                <input type="file" name="photo_5"> <br><img src="{{asset($content->photo_5)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <div><label>Fotoğraf 6</label><br>
                <input type="file" name="photo_6"> <br><img src="{{asset($content->photo_6)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <div><label>Fotoğraf 7</label><br>
                <input type="file" name="photo_7"> <br><img src="{{asset($content->photo_7)}}"
                                                            style="width:200px; height: 175px;">
            </div>
            <button type="submit">Güncelle</button>
        </form>

    </div>


    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('summary-ckeditor');
    </script>



@endsection
