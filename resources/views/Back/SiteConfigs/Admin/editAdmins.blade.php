@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Admini Güncelle</h3>
        </div>
        <form method="post" action="{{route('admin.editAdminsPost',$user->id)}}" >
            @csrf
            <div>
                <label>İsim</label>
                <input type="text" name="name" value="{{$user->name}}"> <br>
            </div>
            <div><label>Soyisim</label>
                <input type="text" name="surname" value="{{$user->surname}}"> <br>
            </div>
            <div><label>Role İd--Değiştirmeyiniz</label> <br>
                <input type="text" name="role_id" value="{{$user->role_id}}"> <br>
            </div>
            <div><label>email</label> <br>
                <input type="email" name="email" value="{{$user->email}}"> <br>
            </div>
            <div><label>Şifre</label> <br>
                <input type="password" name="password" value="{{$user->password}}"> <br>
            </div>
            <button class="btn btn-success" type="submit">Ekle</button>

        </form>
    </div>
@endsection
