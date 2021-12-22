@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Email</th>
                <th>Güncellenme Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td style="display: flex"><form method="post" action="{{route('admin.deleteAdmin')}}">
                            @csrf
                            <input type="hidden" name="delete" value="{{$user->id}}">
                            <button class="btn btn-danger" type="submit">SİL</button>
                        </form><a class="btn btn-warning" style="margin-left: 2%" href="{{route('admin.editAdmins',$user->id)}}">Güncelle</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
