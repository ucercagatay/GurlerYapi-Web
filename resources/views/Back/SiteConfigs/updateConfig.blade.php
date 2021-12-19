@extends('back.layouts.master')
@section('content')
    <div class="card shadow mb-4" style="padding: 2vh">
        <div>
            <h3>Config Düzenleme</h3>
        </div>
        <form method="post" action="{{route('admin.updateConfig',$config->id)}}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Mail Adres</label>
                <input type="mail" name="mail_adress" value="{{$config->mail_adress}}"> <br>
            </div>
            <div><label>Telefon Numarası</label>
                <input type="text" name="site_phoneNumber" value="{{$config->site_phoneNumber}}"> <br>
            </div>
            <div><label>Harita Linki</label> <br>
                <input type="text" name="maps_link" value="{{$config->maps_link}}"> <br>
            </div>
            <div><label>Adres</label>
            <input type="text" name="adress" value="{{$config->adress}}"> <br>
            </div>
            <button class="btn btn-success" type="submit">Güncelle</button>

        </form>
    </div>
@endsection
