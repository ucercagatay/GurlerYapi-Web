@extends('back.layouts.master')
@section('content')
    <form method="post" action="{{route('admin.SubCatPost',$subCat->id)}}" >
        @csrf
        <label>Kategori Adı</label>
        <input type="text" name="name" value="{{$subCat->name}}"> <br>
        <label for="category">Kategori Seçiniz</label>
        <select name="category_id" id="category">@foreach($categoryy1 as $category1)
            <option value="{{$category1->id}}" >{{$category1->category_name}}</option>@endforeach
          @foreach($categoryy2 as $category2)  <option value="{{$category2->id}}" >{{$category2->category_name}}</option>@endforeach
        </select> <br>
        <label>Url Değeri</label> <br>
        <input type="text" name="sub_category_url" value="{{$subCat->sub_category_url}}"> <br>
        <button type="submit">Güncelle</button>
    </form>










@endsection
