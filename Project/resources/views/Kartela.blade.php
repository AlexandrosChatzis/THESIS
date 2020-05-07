<html lang="en">

<head>

    <title>AEM SEARCH</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
/*th , td{
	text-align:center;
	padding :20px;
}*/
page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #003C00;
  background-color: #4CAF50;
  border: 1px solid #346767;
}

.page-item.disabled .page-link {
  color: #868e96;
  pointer-events: none;
  cursor: auto;
  background-color: #CEFFCE;
  border-color: #718393;
}
.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #4CAF50;
  border-color: black;
}
.page-link:focus, .page-link:hover {
  color: #fff;
  text-decoration: none;
  background-color: #4CAF50;
  border-color: black;
}
.pagination a{
    color: black;
}


}
.pagination ul{
    text-align:center;
}
.pagination li{
    display:inline;
}
</style>
</head>

<body>





<div id="mynavbar">
<ul>
<li class="{{ Request::is('/test') ? 'active' : '' }}">
      <a   href="{{ url('/test') }}">Αναζήτηση ΑΕΜ</a>
      </li>
      <li class="{{ Request::is('/Kartela') ? 'active' : '' }}">
      <a class="active"   href="">Καρτέλα Φοιτητή</a>
      </li>
      <li class="{{ Request::is('/FieldPage') ? 'active' : '' }}">
      <a  href="{{ url('/FieldPage') }}">Πεδία</a>
      </li>
      <li class="{{ Request::is('/pagination') ? 'active' : '' }}">
      <a  href="{{ url('/pagination') }}">Ενεργές Αιτήσεις</a>
      </li>
      </ul>
</div>









<form  action="{{url('idfinalization')}}"  method="post">
{{csrf_field()}}
<div><button class="button"    type="submit" name="button"><span>Οριστικοποίηση</span> </button>
                @foreach ($student as $students)
                    <input type="hidden" name="students" value="{{$students->id}}" >
                        
</form>

<button class="button" id="hide"  style="vertical-align:middle;" onclick="comment()" type="submit" name="button"><span>Παρατήρηση</span> </button>
</div>

<div align="center">
	<div align="left"><img src="uliko/teicm.png"></div>
	    <div class="boxed"> <h1>Έλεγχος Φοιτητή</h1>
            <div class="row">
                <div class="container">
                    <table id="pinakasd"  style="width:100%">
                    <tr>
                            <tr>
                            <th colspan="3" >ΑΕΜ</th>
                            <tr>
                            <td colspan="3"><{{$students->id}}></td>
                            </tr>
                        </tr>
                        <tr>
                            <th>ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ</th>
                            <th>ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ</th>
                            <th>ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ</th>
   
                            </tr>
                            <tr>
                                <td><a class="button1" href="storage/<?=$students->document1;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document2;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document3;?>"><span>Άνοιγμα</span></a></td>
    </tr>
                            <tr>
                            
                            <th>ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ</th>
                            <th>ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ/ΗΣ</th>
                            <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ</th>
                            </tr>
                            <tr>
                                <td><a class="button1" href="storage/<?=$students->document4;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document5;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document6;?>"><span>Άνοιγμα</span></a></td>
                            </tr>   
                            <tr>
                            
                            
                            <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ</th>
                            <th>ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ</th>
                            <th>ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ</th>
                            </tr>
                            <tr>
                                <td><a class="button1" href="storage/<?=$students->document7;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document8;?>"><span>Άνοιγμα</span></a></td>
                                <td><a class="button1" href="storage/<?=$students->document9;?>"><span>Άνοιγμα</span></a></td>
                            </tr>  
                            <tr>
                            <th>ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ</th>
                            <th></th>
                            <th>ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ</th>
                            </tr>
                            <tr>
                                <td><a class="button1" href="storage/<?=$students->document10;?>"><span>Άνοιγμα</span></a></td>
                                <td></td>
                                <td><a class="button1" href="storage/<?=$students->document11;?>"><span>Άνοιγμα</span></a></td>
                                 
                            </tr>    
                            @endforeach
                
                        
                        </table>
                           
                </div>           
            </div>
        </div>


 </div>
 
 <div id="boxed2"> <h2>Παρατηρήσεις</h2>

 <form action="{{url('mailto')}}" method="post">
 {{csrf_field()}}
 <textarea class="emailtextarea" name="messagebox" rows="20" cols="20" id="message"></textarea>
 <button class="button"  style="  float: none;"  type="submit" name="button"><span>Αποστολή</span> </button>
</form>
</div>
 

<script>
function comment() {
  
    document.getElementById("boxed2").style.visibility = "visible";
  
		document.getElementById("hide").style.visibility = "hidden";
  
}
</script>

<script>

    $(document).ready(function(){
        
            $("a[href='storage/']").css({ "pointer-events":"none",
         "cursor": "default",
         "background-color":"grey"});
        
});
    
       
        


</script>


 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
