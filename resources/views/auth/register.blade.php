<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

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
        .form-signin input{
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
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
            margin-top: 20px;
        }

    </style>
</head>
<body class="text-center">

<form class="form-signin" action="{{route('register')}}" method="post">
    @csrf
    <i class="fa fa-book" aria-hidden="true"></i>
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">ePÉLDATÁR regisztráció</h1>

    <input type="text" id="user_lastname" name="user_lastname" class="form-control" placeholder="Vezetéknév" required autofocus>

    <input type="text" id="user_firstname" name="user_firstname" class="form-control" placeholder="Keresztnév" required>

    <input type="email" id="user_email" name="user_email" class="form-control" placeholder="Email-cím" required>

    <input type="password" id="password" name="password" class="form-control" placeholder="Jelszó" required>

    <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Jelszó mégegyszer" required>

    <button class="btn btn-lg btn-primary btn-block btn_custom" type="submit">Regisztrálok</button>
    <p class="mt-5 mb-3 text-muted">&copy; TaJGaTEAM 2018</p>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
