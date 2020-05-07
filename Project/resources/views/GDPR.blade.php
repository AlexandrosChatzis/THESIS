<!DOCTYPE html>
<html> 
	<head> 
		  <meta charset="UTF-8">
		<title>GDPR Compliance</title> 
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
	</head> 


<style>

.mynavbar ul {
  
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color:  #333;
	text-align:center;
	
}

.mynavbar li {
	float: none;
	display: inline-block;
}


  .mynavbar li a {
    
    display: inline-block;
    color: grey;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
   
  }
  .mynavbar li a:hover:not(.active) {
    background-color: #555;
    color: grey;
  }
  .mynavbar li a.active {
    background-color: #4CAF50;
    color: white;
  }



</style>






<body>



@if($approval==1)
@include('layouts.student_navbar')
@endif
<!--

<div class="mynavbar">
<ul>
	<div id="mynavbar">
<li class="{{ Request::is('/') ? 'active' : '' }}">
      <a  href="{{ url('/') }}">Αρχική</a>
      </li></div>
			<li class="{{ Request::is('/profile') ? 'active' : '' }}">
      <a class="active" href="{{ url('/profile') }}">GDPR</a>
      </li>
			<li class="{{ Request::is('/application3') ? 'active' : '' }}">
      <a  id="first" href="" Disabled>Αίτηση Σίτισης</a>
      </li>
      <li class="{{ Request::is('/statement') ? 'active' : '' }}">
      <a  id="second" href="" Disabled>Υπεύθυνη Δήλωση</a>
      </li>
      <li class="{{ Request::is('/Submission') ? 'active' : '' }}">
      <a   id="third"   href="" Disabled>Υποβολή Δικαιολογητικών</a>
      </li>
      </ul>
</div>
-->









<form class=""action="{{ action('StudentController@application4')}}"  method="get">

<button class="button" id="hide"  style="vertical-align:middle; visibility: hidden;" type="submit" name="button"><span>Επόμενο </span> </button>

</form> 

<!--<div align="left"><img src="uliko/teicm.png"></div>-->

<div align="center">
	
	<div class="boxed"> <h1>Γενικός Κανονισμός για την Προστασία Δεδομένων</h1> 
	<br>  

	<input type="checkbox" name="compliance" id="apply"  onclick="Apply()" value=""  > Αποδέχομαι τους όρους 
 
	  <br></br> <br><embed src="uliko/GDPR.pdf" type="application/pdf"  width="95%" height="600px" /> 
		<br></br>


		
	
	  
	

	</div>

 
</div> 


<script>
function Help() {
  bootbox.alert({
    message: "Τσεκάρετε το κουτί 'Αποδέχομαι τους όρους' για να σας εμφανιστεί το κουμπί <b>Επόμενο</b>",
    className: 'rubberBand animated'
});
  
 }</script>

<script>
function Apply() {
  var checkBox = document.getElementById("apply");

  if (checkBox.checked == true){
    document.getElementById("hide").style.visibility = "visible";
		/*document.getElementById("first").href="{{ url('/application3') }}"; 
		document.getElementById("second").href="{{ url('/statement') }}"; 
		document.getElementById("third").href="{{ url('/Submission') }}"; 
		$(".mynavbar li a").css("color", "white");
		$(".mynavbar li a:hover:not(.active)").css("color", "white");
		$(".mynavbar li a.active").css("color", "white");*/
	
  } else {
		bootbox.alert({
    message: "Αποδεχτείτε τους όρους για να συνεχίσετε.",
    className: 'rubberBand animated'
});
	
	/*	document.getElementById("first").href=""; 
		document.getElementById("second").href=""; 
		document.getElementById("third").href=""; 
		$(".mynavbar li a").css("color", "grey");
		$(".mynavbar li a:hover:not(.active)").css("color", "grey");
		$(".mynavbar li a.active").css("color", "grey");
	*/
		document.getElementById("hide").style.visibility = "hidden";
  }
}
</script>
<script>
$(document).ready(function(){
if({{$approval==1}}){
  $( "#apply" ).prop( "checked", true );
  document.getElementById("hide").style.visibility = "visible";
}
});

</script>


<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  -->  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<!-- bootbox code -->
<script src="js/bootbox.min.js"></script>
<script src="js/bootbox.locales.min.js"></script>

</body> 
</html> 
