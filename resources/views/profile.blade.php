@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->user_profile_img }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->user_firstname }} profilja</h2>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                <label>Profilkép frissítése</label>
                <input type="file" name="user_profile_img">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
<hr>

    <div class="col-sm-8">

        <h6><label class="col-md-4 col-form-label text-md-left">Vezetéknév:</label>{{ $user->user_lastname }}</h6>

        <h6><label class="col-md-4 col-form-label text-md-left">Keresztnév:</label>
            {{ $user->user_firstname }}</h6>

        <h6><label class="col-md-4 col-form-label text-md-left">E-mail: </label>{{$user->user_email}}</h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Utolsó belépés: </label>{{$user->last_login}}</h6>
<br>
        <a href="{{route('users.edit',$user->id)}}">Profil adatok szerkesztése</a>
    </div>
    </div>
</div>
@endsection