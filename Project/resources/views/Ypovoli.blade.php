



<!DOCTYPE html>
<html> 
	<head> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
		  <meta charset="UTF-8">
		<title>Submission</title> 
		<link rel="stylesheet" href="css/style.css">
			<style>
             input[type=file]{ 
            color:transparent;
            display: none;
}
              html label{
                    
                padding: 15px;
                background: black; 
                display:inline-block;
                text-align: center;
                color: #fff;
              
                width:50%;
                    }
            </style>
	</head> 












<body onload="reset($('#file'))">


<div id="mynavbar">
<ul>
<li class="{{ Request::is('/') ? 'active' : '' }}">
      <a   href="{{ url('/') }}">Αρχική</a>
      </li>
      <li class="{{ Request::is('/profile') ? 'active' : '' }}">
      <a  href="{{ url('/profile') }}">GDPR</a>
      </li>
<li class="{{ Request::is('/application4') ? 'active' : '' }}">
      <a   href="{{ url('/application4') }}">Αίτηση Σίτισης</a>
      </li>
      <li class="{{ Request::is('/statement') ? 'active' : '' }}">
      <a  href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li class="{{ Request::is('/Submission') ? 'active' : '' }}">
      <a class="active"  href="{{ url('/Submission') }}">Υποβολή Δικαιολογητικών</a>
      </li>
      </ul>
</div>





<div align="left"><img src="uliko/teicm.png"></div>
<div align="center" ><img id="owl"  src="uliko/owl.png" onclick="Help()" ></div>
<!--<form class=""action="{{ action('ProfileController@application')}}"  method="get">

<button class="button" id="hide"  style="vertical-align:middle; visibility: hidden;" type="submit" name="button"><span>Επόμενο </span> </button>
</form> 
<form class=""action="{{  action('ProfileController@test')}}"  method="get">
		
	  <button class="button"  type="submit" style="vertical-align:middle"><span>Επόμενο </span>  </button>

  
</form>
                -->
<div align="center">
	
	<div class="boxed"> <h1>Υποβολή Δικαιολογητικών</h1> 
    <br></br>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <ol>
     ΠΡΟΧΟΧΗ!!<br>
    ΔΕΝ ΕΧΕΤΕ ΥΠΟΒΑΛΛΕΙ<br><br>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ol>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif










    <form action="{{url('student')}}" method="post" id="formreset" autocomplete="off" enctype="multipart/form-data">
    {{csrf_field()}}
    <table id="pinakasd">
  <tr>
    <th>ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ</th>
    <th>ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ</th>
    <th>ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ</th>
   
    
</tr>
    <tr>
    <td><label class="button1" style="padding:2px; font-size: 18px; "><input type="file" name="myFile1" id="file" value=""><span>Αναζήτηση</span></label></td>
       <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile2" id="file" value=""><span>Αναζήτηση</span></label></td>
   <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile3" id="file" value="" ><span>Αναζήτηση</span></label></td>
   
    </tr>
    <tr> 
    <th>ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ</th>
    <th>ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ/ΗΣ</th>
    <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ</th>
   
     </tr>
 <tr>
 <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile4" id="file" value=""><span>Αναζήτηση</span></label></td>
    <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile5" id="file" value=""><span>Αναζήτηση</span></label></td>
   <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile6" id="file" value=""><span>Αναζήτηση</span></label></td>
  
    </tr>
    <tr>
    <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ</th>
    <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ</th>
    <th>ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ</th>
   
    
</tr>
    <tr>
    <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile7" id="file" value=""><span>Αναζήτηση</span></label></td>
   <td><label class="button1" style="padding:2px; font-size: 18px;"><input  type="file" name="myFile8" id="file" value=""><span>Αναζήτηση</span></label></td>
     <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile9" id="file" value=""><span>Αναζήτηση</span></label></td>
     
    <tr>
    <th>ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ</th>
    <th></th>
    <th>ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ</th>
    </tr>
    </tr>
    <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile10" id="file" value=""><span>Αναζήτηση</span></label></td>
    <td></td>
     <td ><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile11" id="file" value=""><span>Αναζήτηση</span></label></td>
    </tr>
</table>
<button class="buttonsub" style="vertical-align:middle; " type="submit"  name="button"><span>Οριστικοποίηση </span> </button>
    </form> 
	</div>

    
</div> 

<script>
function Help() {alert("1.Υποβάλλεται τα απαραίτητα δικαιολογητικά \n2.Οριστικοποίηση");}</script>

<script>
 function resetpage() {
    
    var form= document.getElementById("formreset");
    form.find("input[type=file]").val("");
    
    
}
window.onload = resetpage;
window.onunload = resetpage;
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body> 
</html> 
