@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>Kategori Adı</th>
                <th>Alt Kategori Adı</th>
                <th>Dili</th>
                <th>Başlık</th>
                <th>Url Değeri</th>
                <th>Yazı</th>
                <th>Fotoğraf 1</th>
                <th>Fotoğraf 2</th>
                <th>Fotoğraf 3</th>
                <th>Oluşturulma Tarihi</th>
                <th>Düzenlenme Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contents as $content)
                <tr>
                    @if($content->category_id ==2)
                        @foreach($category1 as $cat1)
                            <td>{{$cat1->category_name}}</td>
                        @endforeach
                    @elseif($content->category_id == 3)
                        @foreach($category2 as $cat2)
                            <td>{{$cat2->category_name}}</td>@endforeach
                    @endif
                    <td>{{$content->sub_category_id}}</td>
                    <td>{{$content->language}}</td>
                    <td>{{$content->title}}</td>
                    <td><p>{{$content->content_url_slug}}</p></td>
                    <td><p>{{$content->content_text}}</p></td>
                    <td><img style="width:200px; height:200px;" src="{{asset($content->photo_1)}}"></td>
                    <td><img style="width:200px; height:200px;" src="{{asset($content->photo_2)}}"></td>
                    <td><img style="width:200px; height:200px;" src="{{asset($content->photo_3)}}"></td>
                    <td>{{$content->created_at}}</td>
                    @if($content->updated_at !=NULL)
                        <td>{{$content->updated_at}}</td>
                    @else
                        <td>Henüz güncellenmedi</td>
                    @endif
                    <td style="display: flex; width: 100%; height: 100%">
                        <form method="post" action="{{route('admin.deleteContent')}}">
                            @csrf
                            <input type="hidden" name="delete" value="{{$content->id}}">
                            <button class="btn btn-danger" type="submit">SİL</button>
                        </form>
                        <a class="btn btn-warning" style="margin-left: 2%"
                           href="{{route('admin.updateProduct',$content->id)}}">Güncelle</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
