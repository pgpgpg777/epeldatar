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
        }

    </style>
    <script>
        var q = 0;

        function addstudent(){
            q++;
            var container = document.getElementById("valaszok");
            var input = document.createElement("input");
            input.type = 'email';
            input.name = q.toString() + "diak";
            input.classList.add('form-control');
            input.classList.add('col-lg-12');
            container.appendChild(input);
            container.appendChild(document.createElement("br"));
        }
    </script>
</head>
<body class="text-center">

@include ('layouts.nav')
<div class="container">
    <div class="row">
        <div class="offset-lg-1 col-lg-10 ">
            <h2>Új csoport létrehozása</h2>
            <form method="post" action="{{ route('groups.store') }}">
                <div class="form-group">
                    <label for="group_name">Csoport neve</label>
                    <input type="text" class="form-control"  id="group_name" name="group_name" placeholder="pl.: 8.A">
                </div>
                <div class="form-group">
                    <label for="description">Leírás</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <hr class="new">
                <div class="form-group">
                    <label>Diákok hozzáadása (e-mail címek segítségével)</label>
                </div>
                <div id="valaszok">

                </div>
                <button type="button" class="btn btn-success btn_custom" onclick="addstudent()">Új diák hozzáadása</button><br><br>

                <hr class="new">
                <button type="submit" class="btn btn-default">Lérehozás</button><br>
            </form>
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
