@extends('back.layouts.master')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr role="row">
                <th>Email</th>
                <th>Gönderim Tarihi</th>
                <th>Eylemler</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subs as $sub)
                <tr>
                    <td>{{$sub->email}}</td>
                    <td>{{$sub->created_at}}</td>
                    <td>        <form method="post" action="{{route('admin.deleteSubs')}}">
                            @csrf
                            <input type="hidden" name="delete" value="{{$sub->id}}">
                            <button class="btn btn-danger" type="submit">SİL</button>
                        </form></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
