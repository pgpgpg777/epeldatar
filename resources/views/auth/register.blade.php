@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Regisztráció</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="user_firstname" class="col-md-4 col-form-label text-md-right">Keresztnév:</label>

                            <div class="col-md-6">
                                <input id="user_firstname" type="text" class="form-control{{ $errors->has('user_firstname') ? ' is-invalid' : '' }}" name="user_firstname" value="{{ old('user_firstname') }}" required autofocus>

                                @if ($errors->has('user_firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_lastname" class="col-md-4 col-form-label text-md-right">Vezetéknév:</label>

                            <div class="col-md-6">
                                <input id="user_lastname" type="text" class="form-control{{ $errors->has('user_lastname') ? ' is-invalid' : '' }}" name="user_lastname" value="{{ old('user_lastname') }}" required autofocus>

                                @if ($errors->has('user_lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="user_email" class="col-md-4 col-form-label text-md-right">Email</label>
                    
                            <div class="col-md-6">
                                <input id="user_email" type="email" class="form-control{{ $errors->has('user_email') ? ' is-invalid' : '' }}" name="user_email" value="{{ old('user_email') }}" required autofocus>
                    
                                @if ($errors->has('user_email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Jelszó megerősítése</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Regisztráció
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
