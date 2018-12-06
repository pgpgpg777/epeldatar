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
        .text_box{ margin-bottom: 20px; }
        .video_box{ margin-bottom: 20px; }
        .pic_box{ margin-bottom: 20px; }

    </style>
</head>
<body class="text-center">
@include('layouts.nav')
<div class="container">
    <div class="row">
        <div class="col-lg-12 keret">
        	<!-- segédlet neve -->
            <h1>{{$description->name}}</h1>
            <!-- segédlet leírása -->
            <p>{{$description->text}}</p>
            @foreach($components as $comp)
            @if($comp->type==0)
            <!-- szöveg doboz -->
            <div class="text_box">
            {{$comp->type_value}}
            </div>
            @elseif($comp->type==1)
             <div class="pic_box">
                <img width="100%" src="{{$comp->type_value}}">
            </div>
            @elseif($comp->type==2)
            <!-- video doboz -->
            <div class="video_box">
                <iframe width="420" height="315"
                        src="{{$comp->type_value}}">
                </iframe>
            </div>
            @endif
            @endforeach
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
