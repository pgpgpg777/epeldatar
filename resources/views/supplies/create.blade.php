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

        function addPicture(pic_url){
            var container = document.getElementById("peldak");
            var input = document.createElement("img");
            var input2 = document.createElement("input");

            input2.type = "text";
            input2.name = position + '_pic'
            input2.value = pic_url;
            input.src = pic_url;
            input.id = "blah";
            input2.classList.add('form-control');
            input.classList.add('w');

            container.appendChild(input);
            container.appendChild(input2);

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
                    <button type="button" class="btn btn-success btn_custom" onclick="addPicture(getElementById('kepcsi').value)">Kép</button>
                    <button type="button" class="btn btn-success btn_custom" onclick="addVideo(getElementById('vidi').value)">YouTube videó</button>
                    <br>
                    <div class="form-group">
                    <input type="text" class="form-control" id="vidi" placeholder="YouTube link">
                    <input type="text" class="form-control" id="kepcsi" placeholder="Kép url">
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
