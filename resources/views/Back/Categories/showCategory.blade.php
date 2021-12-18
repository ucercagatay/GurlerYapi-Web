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
            <tbody>
            </thead> @foreach($categories as $category)
                <tr>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->language}}</td>
                    <td>{{$category->url_slug}}</td>
                    <td>{{$category->created_at}}</td>
                    @if($category->updated_at !=NULL)
                        <td>{{$category->updated_at}}</td>
                    @else
                        <td>Henüz güncellenmedi</td>
                    @endif
                    <td style="display: flex">
                        <form method="post" action="{{route('admin.deleteCategory')}}">
                            @csrf
                            <input type="hidden" name="delete" value="{{$category->id}}">
                            <button class="btn btn-danger" type="submit">Sil</button>
                        </form>
                        <a class="btn btn-warning" style="margin-left: 2% "
                           href="{{route('admin.updateCategory',$category->id)}}">Güncelle</a></td>

                </tr>
                @endforeach
                </tbody>
        </table>
    </div>
@endsection
