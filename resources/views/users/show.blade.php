@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
     @if($user->id==Auth::id())
        <div class="col-md-10 col-md-offset-1">
            <h2>{{ $user->user_firstname }} profilja</h2>
        </div>
    @endif
	<div class="col-sm-6">

        <h4><label class="col-md-4 col-form-label text-md-left">Vezetéknév:</label>{{ $user->user_lastname }}</h4>

        <h4><label class="col-md-4 col-form-label text-md-left">Keresztnév:</label>
            {{ $user->user_firstname }}</h4>

        <h6><label class="col-md-4 col-form-label text-md-left">E-mail: </label>{{$user->user_email}}</h6>
        <h6><label class="col-md-4 col-form-label text-md-left">Utolsó belépés: </label>{{$user->last_login}}</h6>
<br>
        <a href="{{route('users.edit',$user->id)}}">Módosítás</a>

    </div>
	</div>
</div>
@endsection