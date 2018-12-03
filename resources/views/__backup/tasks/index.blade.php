@extends('layouts.master')

@section('content')
<h2>Csoportok</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>@sortablelink('group_name', 'Csoport neve')</th>
            <th>@sortablelink('description', 'Leírás')</th>
            <th colspan="2" style="text-align:center;">Műveletek</th>
        </tr>
    </thead>

    <tbody>
        @foreach($groups as $group)
            <tr>
                <span><td><a href="{{route('groups.show',$group->id)}}">{{$group->group_name}}</td></a></span>
                <td><a href="{{route('groups.show',$group->id)}}">{{$group->description}}</td></a>
                <td><a href="{{route('groups.edit',$group->id)}}">Módosít</a></td>
                <td><a href="{{route('groups.destroy',$group->id)}}">Töröl</a></td>             
            </tr>
        @endforeach
    </tbody>
    </table>
    {!! $groups->appends(\Request::except('page'))->render() !!}
    @include('layouts.errors')
@endsection