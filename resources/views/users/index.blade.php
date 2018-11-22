@extends('layouts.master')

@section('content')
<h2>Felhasználók</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>@sortablelink('user_firstname', 'Keresztnév')</th>
            <th>@sortablelink('user_lastname', 'Vezetéknév')</th>
            <th>@sortablelink('user_email', 'E-mail cím')</th>
            <th>@sortablelink('user_status', 'Felh. típusa')</th>
            <th colspan="2" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
        @foreach($users as $user)
            <tr>
                <span><td><a href="{{route("users.show",$user->id)}}">{{$user->user_firstname}}</td></a></span>
                <td><a href="{{route("users.show",$user->id)}}">{{$user->user_lastname}}</td></a>
                <td><a href="{{route("users.show",$user->id)}}">{{$user->user_email}}</td></a>
                <td><a href="{{route("users.show",$user->id)}}">{{$user->user_status}}</td></a>
                <td><a href="{{route("users.edit",$user->id)}}">Módosít</a></td>
                <td><a href="{{route("users.destroy",$user->id)}}">Töröl</a></td>             
            </tr>
        @endforeach
    </tbody>
    </table>
    {!! $users->appends(\Request::except('page'))->render() !!}
    @include('layouts.errors')
@endsection