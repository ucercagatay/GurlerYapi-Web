@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>Alt Kategori Adı</th>
                <th>Url Değeri</th>
                <th>Bağlı Olduğu Kategori</th>
                <th>Oluşturulma Tarihi</th>
                <th>Düzenlenme Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead> @foreach($subCats as $subCat)
                <tbody>
                <td>{{$subCat->name}}</td>
                <td>{{$subCat->sub_category_url}}</td>
                @if($subCat->category_id==2)
                    @foreach($category1 as $category)
                <td>{{$category->category_name}}</td>
                @endforeach
                @elseif($subCat->category_id==3)
                    @foreach($category2 as $cat2)
                    <td>{{$cat2->category_name}}</td>
                    @endforeach
                    @endif
                <td>{{$subCat->created_at}}</td>
                @if($subCat->updated_at !=NULL)
                    <td>{{$subCat->updated_at}}</td>
                @else
                    <td>Henüz güncellenmedi</td>
                @endif
                <td><button>Sil</button><button>Güncelle</button></td>
                </tbody>

            @endforeach

        </table>
    </div>
@endsection
