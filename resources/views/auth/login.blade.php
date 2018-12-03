<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EOktatás</title>

    <!-- Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Amatic+SC:700');

        html,
        body {
            height: 100%;
            font-family: 'Amatic SC', cursive;
            font-size: 24px;
            letter-spacing: 1px;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background: url("bg.png");
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        .form-signin .checkbox {
            font-weight: 400;
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .fa-book {
            font-size: 80px;
            padding-bottom: 20px;
        }

        .btn_custom{
            background-color: rgba(4, 208, 105, 0.3)!important;
            color: black;
            border: 0px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body class="text-center">

<form class="form-signin" action="{{ route('login') }}" method="POST">
    @csrf
    <i class="fa fa-book" aria-hidden="true"></i>
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">ePÉLDATÁR</h1>
    <label for="user_email" class="sr-only">Email cím</label>
    <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email cím" required autofocus>
    <label for="password" class="sr-only">Jelszó</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="Jelszó" required>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Emlékezz rám
        </label>
    </div>
    <button class="btn btn-lg btn-success btn-block btn_custom" type="submit">Bejelentkezés</button>
    <a class="btn btn-lg btn-success btn-block btn_custom" href="{{ route('register') }}">Regisztráció</a>
    <p class="mt-5 mb-3 text-muted">&copy; TaJGaTEAM 2018</p>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
