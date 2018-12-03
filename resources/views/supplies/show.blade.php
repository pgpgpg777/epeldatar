@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
	<div class="col-sm-6">

        <h4><label class="col-md-4 col-form-label text-md-left">Csoport neve:</label>{{ $group->group_name }}</h4>

        <h4><label class="col-md-4 col-form-label text-md-left">Csoport leírása:</label>
            {{ $group->description }}</h4>

       
        <a href="{{route('groups.edit',$group->id)}}">Módosítás</a>

    </div>
	</div>
</div>
@endsection