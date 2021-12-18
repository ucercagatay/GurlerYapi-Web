@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
           <thead>
           <tr role="row">
               <th>Kategori Adı</th>
               <th>Dili</th>
               <th>Url Değeri</th>
               <th>Oluşturulma Tarihi</th>
               <th>Düzenlenme Tarihi</th>
               <th>Eylemler</th>
           </tr>
           </thead> @foreach($categories as $category)
            <tbody>
            <td>{{$category->category_name}}</td>
            <td>{{$category->language}}</td>
            <td>{{$category->url_slug}}</td>
            <td>{{$category->created_at}}</td>
            @if($category->updated_at !=NULL)
                <td>{{$category->updated_at}}</td>
            @else
            <td>Henüz güncellenmedi</td>
            @endif
            <td><button>Sil</button><button>Güncelle</button></td>
            </tbody>

          @endforeach

        </table>
    </div>
@endsection
