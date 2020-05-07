<!DOCTYPE html>
<html> 
	<head> 
    <meta charset="UTF-8">
			<link rel="stylesheet" href="css/style.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="js/html2canvas.js"></script>
			<script src="js/polyfill.min.js"></script>
			<script src="js/canvas-toBlob.js"></script>
			<script src="js/FileSaver.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
             <meta name="viewport" content="width=device-width, initial-scale=0.3">
          <title>Application</title>
		

	</head> 
    <body>
    <style>

.boxed { 
        border-radius: 25px;
      border: 2px solid white;
    
       width:1000px;
      height: auto;  
     background-color: white;	}
    html body {
     background-color: #e6e6e6;
     }
     input {
  outline: 0;
  border-width: 0 0 2px;
  border-color: black;
}
input:focus {
  border-color: blue;
}
input[type=text]{
                   text-align:center;
                        
                }

                
   
    
    
    </style>


<div id="mynavbar">
<ul>
<li class="{{ Request::is('/') ? 'active' : '' }}">
      <a  href="{{ url('/') }}">Αρχική</a>
      </li>
      <li class="{{ Request::is('/profile') ? 'active' : '' }}">
      <a  href="{{ url('/profile') }}">GDPR</a>
      </li>
<li class="{{ Request::is('/application3') ? 'active' : '' }}">
      <a class="active"  href="{{ url('/application3') }}">Αίτηση Σίτισης</a>
      </li>
      <li class="{{ Request::is('/statement') ? 'active' : '' }}">
      <a  href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li class="{{ Request::is('/Submission') ? 'active' : '' }}">
      <a   href="{{ url('/Submission') }}">Υποβολή Δικαιολογητικών</a>
      </li>
      </ul>
</div>

















<!--<form class=""action="{{  action('ProfileController@statement')}}"  method="get">
		
	  <button class="button"  type="submit" style="vertical-align:middle"><span>Επόμενο </span>  </button>

  
</form>
-->
<button class="button"  onclick="Save();" type="submit"  style="vertical-align:middle"><span>Αποθήκευση </span></button>
<div align="left" style="display:inline;" ><img src="uliko/teicm.png"></div>
<div align="center" ><img id="owl"  src="uliko/owl.png" onclick="Help()" ></div>


<form action="{{url('StudentPersonalInfo')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <form id="formreset" autocomplete="off">
<div align="center">
	
	<div class="boxed">  <h1>Αίτηση Σίτισης</h1> 
	  <br></br>  
      <div id="capture">
     
      
      <div style="width: 100%;">
   <div style="float:left; margin-left:3%;text-align:left;width: 30%">
     
   <p style="text-align:left; font-weight:bold;">ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ</p>
   <div style="text-align:left; "><img  style="width:50%; height:50%; " src="uliko/teicm.png"></div><br>
   <p style=" text-align:center; font-weight:bold; "><u>ΑΙΤΗΣΗ  </u></p>
        <p style=" text-align:center; font-weight:bold;"><u>ΠΑΡΟΧΗΣ ΔΩΡΕΑΝ ΣΙΤΙΣΗΣ</u></p><br><br>

   @for ($i = 18; $i < $pedia; $i++)



      @if ($i>15)
      <p>{{$student[$i]}}:<br><input type="text" name="" value=""   ></p>
      @endif
   @endfor
<ol>
<li>{{$student[1]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[2]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[3]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[4]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[5]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[6]}}:&nbsp;<input type="checkbox" name=""></li>
<li>{{$student[7]}}:&nbsp;<input type="checkbox" name=""></li>

    <li>Αναπηρία άνω του 67%</li>
    <ul>
    <li>{{$student[8]}}:&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>{{$student[9]}}:&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>{{$student[10]}}:&nbsp;<input type="checkbox" name=""></li>
    <li>{{$student[11]}}:&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>{{$student[12]}}:&nbsp;&nbsp;<input type="checkbox" name=""></li>
</ul>
    <li>Αποθανόντες γονείς</li>
<ul>
    <li>{{$student[13]}}:&nbsp;<input type="checkbox" name=""></li>
    <li>{{$student[14]}}:&nbsp;<input type="checkbox" name=""></li>
</ul>
</ol>



</div>
   <div style="float:right; margin-right:3%;text-align:right; width: 50%">
  
   <br>
<div style="float:right; text-align:left; font-weight:bold; display: inline-block; width:500px;border:1px solid black;" ><br><div style="margin-left:3%" >Α/Α* <br><input  type="text" name="" ><br><br><br><br><br>Αριθμ. Μητρώου*<br><input  type="text" name="" ></div><br>  <p style=" float:right; display:inline-block; margin-right:10px; margin-top:-46%;  text-align:center; font-weight:bold; display: inline-block; border:1px solid black;  height:180px;width:150px;">Φωτογραφία
  <img style="postiotion:absolute; margin-left:-1px; margin-top:-25px;" src="" id="profile-img-tag" width="150px" height="180px" />
<input style="postiotion:absolute; margin-top:20px; margin-left:20px;" type="file" name="file" id="profile-img" >
    </div>
    <br>
    <br>
    <br>
        <p style=" text-align:left; " ><br> <br><br><br><br><br><br><br><br> <br>ΠΡΟΣ:<br><br> Τ.Ε.Ι. ΚΕΝΤΡΙΚΗΣ ΜΑΚΕΔΟΝΙΑΣ
        </br>  Τμήμα : Σπουδών, Πρακτικής Άσκησης, Σταδιοδρομίας & Σπουδαστικής 
        </br> Μέριμνας </p>
        <p style="text-align:left; " >Παρακαλώ για την παροχή δωρεάν σίτισης για το τρέχον ακαδημαϊκό έτος</p>
        <p style=" text-align:left; " >Υποβάλλω συνημμένα ΔΙΚΑΙΟΛΟΓΗΤΙΚΑ:</p>
        <ol style="   text-align:left;  ">
        
        <li>ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΕΦΟΡΙΑΣ ΦΟΡ.ΕΤΟΥΣ</li>
        <li>ΠΡΟΣΦΑΤΟ ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ</li>
        <li>ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΤΟΥ Ν. 1599/1986.</li>
       
        </ol>
  
        <p style="  text-align:left;  " ><u>ΕΠΙΠΛΕΟΝ ΠΙΣΤΟΠΟΙΗΤΙΚΑ ΕΙΔΙΚΩΝ ΠΕΡΙΠΤΩΣΕΩΝ (ΟΠΟΥ ΑΠΑΙΤΕΊΤΑΙ)</u></p>
        
        <ol style="  font-size: 80%; text-align:left; d">
        
        <li style="font-weight:bold;  ">Πιστοποιητικό της Ανώτατης Συνομοσπονδίας Πολυτέκνων</li>
        <li style="font-weight:bold;  ">Βεβαίωση σπουδών αδερφού/ής στον Ά κύκλο σπουδών.</li>
        <li style="font-weight:bold;  ">Πιστοποιητικό Υγειονομικής Επιτροπής για αναπηρία άνω του 67%.</li>
        <li style="font-weight:bold;  ">Ληξιαρχική Πράξη θανάτου του αποβιώσαντα γονέα.</li>
        <li style="font-weight:bold;  "> Οι φοιτητές των οποίων οι γονείς είναι διαζευγμένοι θα υποβάλλουν:  </li>
        <ul>
             <li>Εκκαθαριστικό Εφορίας φορ. έτους με το εισόδημα του γονέα</br> που έχει τη γονική μέριμνα του φοιτητή/τριας. </li>

             <li>Διαζευκτήριο και απόφαση δικαστηρίου ή ιδιωτικό συμφωνητικό σχετικά</br>  με την επιμέλεια του φοιτητή/τριας. </li>

             <li>Πρόσφατη Υπεύθυνη Δήλωση του γονέα ότι τον βαρύνουν αποκλειστικά </br>τα έξοδα του φοιτητή/τριας, θεωρημένη από Αστυνομικό Τμήμα για το </br>γνήσιο της υπογραφής. </li>
             </ul>
        </ol><br><br><br><br>

        
        
    
        <p style=" text-align:center;font-weight:bold;"> {{$student[15]}}:<br><input type="text" name="" value=""  ></p><br><br>
        <p style="margin-right:13%; text-align:center;   " >Ο/Η Αιτ<input style=" text-align:left;   " type="text" name="" ></p><br><br>
       <p style="text-align:center;"> <br><input type="text" name="" value=""  ><br>{{$student[16]}}</p>
      
      

   </div>
   </div>
<div style="clear:both"></div>

</div>
</div>
        
       
</div>
</div>

</div> 

<script>
function Help() {alert("1.Συμπληρώστε την αίτηση\n2.Αποθήκευση\n3.Στην συνέχεια αποθηκεύστε την αίτηση στον υπολογιστή σας\n4.Επόμενο");}</script>

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




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body> 
</html> 