@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Admin Ekleme</h3>
        </div>
        <form method="post" action="{{route('admin.newAdminPost')}} ">
            @csrf
            <div>
                <label>İsim</label>
                <input type="text" name="name"> <br>
            </div>
            <div><label>Soyisim</label>
                <input type="text" name="surname"> <br>
            </div>
            <div><label>Role İd--Değiştirmeyiniz</label> <br>
                <input type="text" name="role_id" value="1">1 <br>
            </div>
            <div><label>email</label> <br>
                <input type="email" name="email"> <br>
            </div>
            <div><label>Şifre</label> <br>
                <input type="password" name="password"> <br>
            </div>
            <button class="btn btn-success" type="submit">Ekle</button>

        </form>
    </div>
@endsection
