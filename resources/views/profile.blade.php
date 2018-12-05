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
            background: url("/bg.png");
        }
        body {

            align-items: center;

            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .fa-book {
            font-size: 60px;
            padding-bottom: 20px;
        }
        .container{
            padding-top: 40px;
        }

        hr.new {
            border-top: 3px dashed #6c757d;
        }
        .row{
            margin-bottom: 40px;
        }
        .bg-light {
            background-color: rgba(4, 208, 105, 0.3)!important;
        }
        .btn_custom{
            background-color: rgba(4, 208, 105, 0.3)!important;
            color: black;
            border: 0px;
            padding: 4px;
        }
        .table td, .table th {
            border-top: 3px dashed #c0c4c7;
        }
        thead {
            background-color: #00000008;
        }
        .pad{
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="text-center">

@include ('layouts.nav')

<div class="container">
    <div class="row">
        <div class="offset-lg-3 col-lg-6">
            <h2>Profil</h2>
            <form class="form-signin" action="login" method="post">
                <input type="text" id="first_name" name="first_name" class="form-control pad" placeholder="Vezetéknév" required autofocus>

                <input type="text" id="second_name" name="second_name" class="form-control pad" placeholder="Keresztnév" required>

                <input type="email" id="inputEmail" name="inputEmail" class="form-control pad" placeholder="Email-cím" required>

                <input type="password" id="inputPassword0" name="pw0" class="form-control pad" placeholder="Jelszó" required>

                <input type="password" id="inputPassword1" name="pw1" class="form-control pad" placeholder="Jelszó mégegyszer" required>

                <button class="btn btn-lg btn-primary btn-block btn_custom" type="submit">Módosítás</button>

            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <h3>Tagságaim</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Név</th>
                    <th scope="col">Típus</th>
                    <th scope="col">Leírás</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($groups as $group)
                <tr>
                    <th scope="row">{{$group->group_name}}</th>
                    <td>kvíz</td>
                    <td>{{$group->description}}</td>
                    <td><a class="btn btn-lg btn-success btn-block btn_custom" href="{{route('groups.edit', [$group->id])}}">Belépés</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 ">
            <h3>Saját példatáram</h3>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Név</th>
                    <th scope="col">Típus</th>
                    <th scope="col">Leírás</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr>
                        <th scope="row">{{$task->name}}</th>
                        <td>{{$task->type}}</td>
                        <td>{{$task->text}}</td>
                        <td><a class="btn btn-lg btn-success btn-block btn_custom" href="{{route('tasks.edit', $task->id)}}">Szerkesztés</a></td>
                        <td><a class="btn btn-lg btn-success btn-block btn_custom" href="{{route('tasks.edit', $task->id)}}">Megtekintés</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
