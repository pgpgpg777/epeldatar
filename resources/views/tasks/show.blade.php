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
        .table td, .table th {
            border-top: 3px dashed #c0c4c7;
        }
        thead {
            background-color: #00000008;
        }

    </style>
	<script type="text/javascript">
		function check_results(){
			var quiz = document.getElementById("quiz_field");
			quiz.style.display ="none";

			var head = document.createElement("h1");
			var hnode = document.createTextNode("Az eredmény:");
			head.appendChild(hnode);

			var result = 0;

			$("input:checkbox[name=check]:checked").each(function(){
    			if($(this).val()=="1")
    				result+=1;
    			if($(this).val()=="0")
    				result-=1;
			});

			var all=0;
			$("input:checkbox[name=check]").each(function(){
    			if($(this).val()=="1")
    				all+=1;
			});

			var para = document.createElement("p");
			var pnode = document.createTextNode(result+"/"+all);
			para.appendChild(pnode);

			var quiz_keret = document.getElementById("quiz_keret");
			quiz_keret.appendChild(head);
			quiz_keret.appendChild(para);
		}
	</script>
</head>
<body class="text-center">
@include('layouts.nav')

<div class="container">
    <div class="row">
        <div class="col-lg-12 keret" id="quiz_keret">
        	<div class="col-lg-12" id="quiz_field">
            <!-- kvíz neve -->
            <h1>{{$description->name}}</h1>
            <!-- kvíz leírása -->
            <p>{{$description->text}}</p>

            <!--form method="post" action="{/{ }/}"-->
            	@foreach($questions as $qstn)
				<table class="table table-hover">
                    <thead>
                    <tr>
                        <th>{{$qstn->text}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($answers[$qstn->id] as $answ)
                    	<tr>
                        	<td>
                            	<div class="form-check form-check-inline">
                                	<input class="form-check-input" type="checkbox" id="{{$answ->id}}" name="check" value="{{$answ->goodbad}}">
	                                <label class="form-check-label" for="{{$answ->id}}">{{$answ->text}}</label>
 	                           </div>
    	                    </td>
        	            </tr>
                    @endforeach
                    </tbody>
            	@endforeach
                </table>
                <button type="submit" class="btn btn-success btn_custom" onclick="check_results()">Mentés</button>
            </div>
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
