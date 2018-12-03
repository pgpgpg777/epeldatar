@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Csoport létrehozása</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('groups.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="group_name" class="col-md-4 col-form-label text-md-right">Csoport neve</label>

                                <div class="col-md-6">
                                    <input id="group_name" type="text"
                                           class="form-control{{ $errors->has('group_name') ? ' is-invalid' : '' }}"
                                           name="group_name" value="{{ old('group_name') }}" required autofocus>

                                    @if ($errors->has('group_name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('group_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Csoport leírása</label>

                                <div class="col-md-6">
                                    <input id="description" type="text"
                                           class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                           name="description" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Csoport létrehozása
                                    </button>
                                </div>
                            </div>
                        
                            @include('layouts.errors')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
