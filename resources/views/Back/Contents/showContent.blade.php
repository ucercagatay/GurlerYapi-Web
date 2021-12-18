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
            </thead> @foreach($contents as $content)
                <tbody>
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
                <td>{{$content->content_url_slug}}</td>
                <td>{{$content->content_text}}</td>
                <td><img style="width:200px; height:200px;" src="{{asset($content->photo_1)}}"></td>
                <td><img style="width:200px; height:200px;" src="{{asset($content->photo_2)}}"></td>
                <td><img style="width:200px; height:200px;" src="{{asset($content->photo_3)}}"></td>
                <td>{{$content->created_at}}</td>
                @if($content->updated_at !=NULL)
                    <td>{{$content->updated_at}}</td>
                @else
                    <td>Henüz güncellenmedi</td>
                @endif
                <td><button>Sİl</button><button>Güncelle</button></td>
                </tbody>

            @endforeach

        </table>
    </div>
@endsection
