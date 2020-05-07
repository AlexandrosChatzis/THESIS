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
    
   
input[type=text]{
                    background-color: transparent;
                    border: 0px solid; 
                    height: 10px;
                   width: 160px; 
                        font-weight: bold;
                        padding: 4px;
                        
                }
    
    </style>



<form class=""action="{{  action('ProfileController@statement')}}"  method="get">
		
	  <button class="button"  type="submit" style="vertical-align:middle"><span>Επόμενο </span>  </button>

  
</form>

<button class="button"  onclick="Save();" type="submit"  style="vertical-align:middle"><span>Αποθήκευση </span></button>

<div align="left" ><img id="owl"  src="uliko/owl.png" onclick="Help()" ></div>



<form id="formreset" autocomplete="off">
<div align="center">
	<div align="left"><img src="uliko/teicm.png"></div>
	<div class="boxed">  <h1>Αίτηση Σίτισης</h1> 
	  <br></br>  
      <div id="capture">
     
      
      <div style="width: 100%;">
   <div style="float:left; margin-left:3%;text-align:left;width: 30%">
   

   <p style="text-align:left; font-weight:bold;">ΕΛΛΗΝΙΚΗ ΔΗΜΟΚΡΑΤΙΑ</p>
   <div style="text-align:left; "><img  style="width:50%; height:50%; " src="uliko/teicm.png"></div>
   <p style=" text-align:center; font-weight:bold; "><u>ΑΙΤΗΣΗ  </u></p>
        <p style=" text-align:center; font-weight:bold;"><u>ΠΑΡΟΧΗΣ ΔΩΡΕΑΝ ΣΙΤΙΣΗΣ</u></p><br><br>


Επώνυμο: <input type="text" name="" placeholder="………………………………… "><br>
Όνομα: <input type="text" name="" placeholder="………………………………… "><br>
Όνομα πατέρα: <input type="text" name="" placeholder="………………………………… "><br>
Όνομα μητέρας: <input type="text" name="" placeholder="………………………………… "><br>
Ημερομηνία γέννησης:<input type="text" name="" placeholder="………………………………… "><br>
Πόλη μόνιμης κατοικίας (γονέων): <input type="text" name="" placeholder="………………………………… "><br>
Τηλ. οικίας: <input type="text" name="" placeholder="………………………………… "><br>
Αριθμ. κινητού τηλ: <input type="text" name="" placeholder="………………………………… "><br><br>
Αριθμ. Μητρώου: <input type="text" name="" placeholder="………………………………… ">
Τμήμα: <input type="text" name=""  placeholder="………………………………… "><br>
Εξάμηνο σπουδών: <input type="text"  name="" placeholder="………………………………… "><br>
Έτος εισαγωγής: <input type="text" name="" placeholder="………………………………… "><br>
<ol>
<li>Έγγαμος/η&nbsp;<input type="checkbox" name=""></li>
<li>Άγαμος άνω των 25 ετών&nbsp;<input type="checkbox" name=""></li>
<li>Μόνιμος κάτοικος Νομού Σερρών&nbsp;<input type="checkbox" name=""></li>
<li>Πολύτεκνος&nbsp;<input type="checkbox" name=""></li>
<li>Αδελφός/ή στον Α’ κύκλο σπουδών.&nbsp;<input type="checkbox" name=""></li>
<li>Γονείς διαζευγμένοι&nbsp;<input type="checkbox" name=""></li>
<li> Τέκνο άγαμης μητέρας&nbsp;<input type="checkbox" name=""></li>
<ul>
    <li>Αναπηρία άνω του 67%</li>
    <li>Ιδίου&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>Γονέα&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>Αδελφού&nbsp;<input type="checkbox" name=""></li>
    <li>Τέκνου&nbsp;&nbsp;<input type="checkbox" name=""></li>
    <li>Συζύγου&nbsp;&nbsp;<input type="checkbox" name=""></li>
</ul>
    <li>Αποθανόντες γονείς</li>
<ul>
    <li>Πατέρας&nbsp;<input type="checkbox" name=""></li>
    <li>Μητέρα&nbsp;<input type="checkbox" name=""></li>
</ul>
</ol>

<br>
<br>
<br>
<br>
<br>
<p style="text-align:center; " ><u>ΠΡΟΣΟΧΗ</u></p>
        <p style="text-align:center;">Οι μεταπτυχιακοί φοιτητές πρέπει<br>να θεωρήσουν την αίτησή τους<br>στη Γραμματεία του Τμήματος.</p>
        <br><br><br>
<br>
* Συμπληρώνεται από την Υπηρεσία</p><input type="text" name=""  placeholder="………………………………… ">



    	

   </div>
   <div style="float:right; margin-right:3%;text-align:right; width: 50%">
<br>
   <div style="float:right; text-align:left; font-weight:bold; display: inline-block; width:500px;border:1px solid black;" ><br>Α/Α* <input type="text" name="" placeholder="………………………………… "><br><br><br><br><br>Αριθμ. Μητρώου*<input type="text" name="" placeholder="………………………………… "><br>  <p style=" float:right;  margin-right:10px; margin-top:-120px;  text-align:center; font-weight:bold; display: inline-block; border:1px solid black;  height:150px;width:150px;">Φωτογραφία
  <img style="postiotion:absolute;  margin-top:-18px;" src="" id="profile-img-tag" width="150px" height="150px" />
<input style="postiotion:absolute; margin-top:20px; margin-left:30px;" type="file" name="file" id="profile-img" >
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
        <p style="font-weight:bold; text-align:center;  " >ΣΕΡΡΕΣ<input type="text" name="" placeholder="………………………………… "></p><br><br>
        <p style=" text-align:center;  " >Ο/Η Αιτ<input type="text" name="" placeholder="………………………………… "></p><br><br>
    <div style=" text-align:center;  " ><input type="text" name="" placeholder="………………………………… "></br>(Ολογράφως υπογραφή)</div>
   


</div>
<div style="clear:both"></div>
     
    </div>
</div>
        
       
</div>
</div>

</div> 
</form>
<script>
function Help() {alert("1.Συμπληρώστε την αίτηση\n2.Αποθήκευση\n3.Στην συνέχεια αποθηκεύστε την αίτηση στον υπολογιστή σας\n4.Επόμενο");}</script>

<script>
	function Save() {
html2canvas(document.querySelector("#capture")).then(function(canvas) {
   
        var doc = new jsPDF();
doc.addImage(canvas, 0, 0,210,297);
doc.save('a4.pdf');
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


<script>


</body> 
</html> 