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
            align-items: center;
            padding-bottom: 40px;
            background: url("/bg.png");
        }
        .fa-book {
            font-size: 60px;
            padding-bottom: 20px;
        }
        .container{
            padding-top: 40px;
        }
        #cim {
            font-weight: bold;
        }
        .keret{
            border: 2px;
            border-style: dashed;
            border-color: #adb5bd;
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
            margin-bottom: 20px;
        }

    </style>
    <script>
        var position = 0;

        function getId(url) {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);

            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return 'error';
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function addVideo(link){
            var container = document.getElementById("peldak");
            var input = document.createElement("iframe");
            var input2 = document.createElement("input");

            var videoId = getId(link);
            var new_link = "http://www.youtube.com/embed/" + videoId;

            input.src = new_link;
            input.name = position + '_';

            input2.type = "text";
            input2.classList.add('form-control');
            input2.name = position + '_youtube_url';
            input2.value = new_link;

            container.appendChild(input);
            container.appendChild(input2);
            container.appendChild(document.createElement("br"));
            position++;
        }

        function addFields(){
            var container = document.getElementById("peldak");
            var input = document.createElement("textarea");

            input.type = "text";
            input.classList.add('form-control');
            input.name = position + '_desc';

            container.appendChild(input);
            container.appendChild(document.createElement("br"));
            position++;
        }

        function addPicture(){
            var container = document.getElementById("peldak");
            var input = document.createElement("img");
            var input2 = document.createElement("input");

            input2.type = "file";
            input2.name = position + '_pic'
            input.src = 'data:image/jpeg;base64,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';
            input.id = "blah";

            container.appendChild(input);
            container.appendChild(input2);

            input2.onclick = readURL(this);
            container.appendChild(document.createElement("br"));
            container.appendChild(document.createElement("br"));
            position++;
        }
    </script>
</head>
<body class="text-center">
@include('layouts.nav')
<div class="container">
    <form id="newsupply" method="post" action="{{ route('supplies.store') }}">
        @csrf
    <div class="row">
        <div class="col-lg-6">
                <div class="form-group">
                    <label for="supplies_name">Feladat létrehozása</label>
                    <input type="text" class="form-control" onkeyUp="document.getElementById('cim').innerHTML = this.value" id="supplies_name" name="supplies_name" placeholder="Irodalom óra segédanyagok">
                </div>
                <div class="form-group">
                    <label for="supplies_teams">Csoportok hozzárendelése</label>
                    <!--input type="text" class="form-control" id="supplies_teams" name="supplies_teams" placeholder="pl.: 8.A"-->
                    <select name="supplies_teams" class="form-control" id="supplies_teams">
                        @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->group_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="supplies_desc">Leírás</label>
                    <textarea class="form-control" onkeyUp="document.getElementById('leiras').innerHTML = this.value" id="supplies_desc" name="supplies_desc" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exa">Komponensek hozzáadása</label>
                    <br>
                    <button type="button" id="exa" class="btn btn-success btn_custom" onclick="addFields()">Szöveg</button>
                    <button type="button" class="btn btn-success btn_custom" onclick="addPicture()">Kép</button>
                    <button type="button" class="btn btn-success btn_custom" onclick="addVideo(getElementById('vidi').value)">YouTube videó</button>
                    <br>
                    <div class="form-group">
                    <input type="text" class="form-control" id="vidi" placeholder="YouTube link">
                    </div>
                </div>
            </div>
        <div class="col-lg-6 keret">
            <h2>Előnézet</h2>
            <div id="cim"></div><br>
            <div id="leiras"></div><br>
            <div id="peldak"></div>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="btn btn-default">Mentés</button>
            </div>
        </div>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>
