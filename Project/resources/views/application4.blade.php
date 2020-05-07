


<!DOCTYPE html>


<html>

<head>
    
<title>Application Creator</title>
<meta charset="UTF-8">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="js/html2canvas.js"></script>
			<script src="js/polyfill.min.js"></script>
			<script src="js/canvas-toBlob.js"></script>
            <script src="js/FileSaver.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
            <meta name="viewport" content="width=device-width, initial-scale=0.3">
             </head>

<body>
<style>
  p{

font-size: 80%;
}
input {
outline: 0;
border-width: 0 0 2px;
border-color: black;
}
input:focus {
border-color: blue;
}



ul{

list-style-type: none;
}



#sortable1 li, #sortable2 li, #sortable3 li,#sortable4 li {
margin: 0 5px 5px 5px;

font-size: 1.2em;
width: 100%;
}
</style>

@include('layouts.student_navbar')


<!--
<div id="mynavbar">
<ul>
<li style="float:left; height:50px;"  >
      <a   href="{{ url('/choose_application_type') }}"><i class="fa fa-home" style="font-size:36px"></i></a>
      </li>
      
      <li>
      <a  href="{{ url('/') }}">Πληροφορίες</a>
      </li>

      <li>
      <a  href="{{ url('/profile') }}">GDPR</a>
      </li>
<li>
      <a class="active"  href="{{ url('/application4') }}">Αίτηση</a>
      </li>
      <li>
      <a    href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li>
      <a  href="{{ url('/Submission2') }}">Υποβολή Δικαιολογητικών</a>
      </li>
    
      </ul>
</div>


-->













<button class="button"  onclick="Save();" type="submit"  style="vertical-align:middle"><span>Αποθήκευση </span></button>



<form action="{{url('StudentPersonalInfo')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <form id="formreset" autocomplete="off">
<div align="center">
	
	<div class="boxed">  <h1>Αίτηση</h1> 
	  <br></br>  
      <div id="capture">
     
      
      <div style="width: 100%;">
   <div style="float:left; margin-left:3%;text-align:left;width: 30%">
     
   <p style="text-align:left; font-weight:bold;">ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ</p>
   <div style="text-align:left; "><img  style="width:50%; height:50%; " src="uliko/teicm.png"></div><br>
   <h5 style=" text-align:center; font-weight:bold; "><u>{{$application}}</u></h5>
       <br><br>


        <ul  id="menu1">
@foreach ($menu1 as $menu_1)


@if ($menu_1->value == "Πεδίο-Συμπλήρωσης")
<li data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="4">{{$menu_1->name}}:<br><input type="text"></li><br>
@elseif ($menu_1->value == "Πεδίο-Επιλογής")
<li data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="4">{{$menu_1->name}}:&nbsp;&nbsp;<input type="checkbox"></li>
@elseif ($menu_1->value == "Παράγραφος")
<li  style=" word-wrap: break-word; " data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="4">{{$menu_1->name}}</li>
@endif

@endforeach
</ul>


</div>
   <div style="float:right; margin-right:3%;text-align:left; width: 50%">
  
   <br>
  <div> <p style=" float:right; display:inline-block;   text-align:center; font-weight:bold; display: inline-block; border:1px solid black;  height:180px;width:150px;">Φωτογραφία
  <img style="  margin-top:-20px;" src="" id="profile-img-tag" width="150px" height="180px" />
<input style="margin-left:18%; margin-top:5px  " type="file" name="file" id="profile-img" >
    </div>
<br><br><br><br><br><br><br><br><br><br><br>
    <ul id="menu2">
  @foreach ($menu2 as $menu_2)


@if ($menu_2->value == "Πεδίο-Συμπλήρωσης")
<li style="float:none;text-align:center;"  data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="5">{{$menu_2->name}}:<br><input type="text"></li><br>
@elseif ($menu_2->value == "Πεδίο-Επιλογής")
<li data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="5">{{$menu_2->name}}:&nbsp;&nbsp;<input type="checkbox"></li>
@elseif ($menu_2->value == "Παράγραφος")
<li  style=" word-wrap: break-word; " data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="5"><p>{{$menu_2->name}}</p></li>
@endif

@endforeach
</ul>
      

   </div>
   </div>
<div style="clear:both"></div>

</div>
</div>
        
       
</div>
</div>

</div> 

<script>
function Help() {
  bootbox.alert({
    message: "<h6>1.Συμπληρώστε την αίτηση<h6>2.Αποθήκευση<h6>3.Στην συνέχεια αποθηκεύστε την αίτηση στον υπολογιστή σας<h6>4.Επόμενο",
    className: 'rubberBand animated'
});
  
 }</script>

<script>
	function Save() {
html2canvas(document.querySelector("#capture")).then(function(canvas) {
   
        var doc = new jsPDF();
doc.addImage(canvas, 0, 0,210,297);
doc.save('Αίτιση Σίτισης.pdf');
        });

	}
</script>



<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#profile-img").change(function(){

        readURL(this);

    });


    </script>

<script>
 function resetpage() {
    
    var form= document.getElementById("formreset");
    form.find("input[type=text]").val("");
    form.find("input[type=checkbox]").val("");
    
    
}
window.onload = resetpage;
window.onunload = resetpage;
</script>


<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  -->  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- bootbox code -->
<script src="js/bootbox.min.js"></script>
<script src="js/bootbox.locales.min.js"></script>

</body>






</html>