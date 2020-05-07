<html lang="en">

<head>

    <title>Pagination</title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav navbar-center">
      <li   class="nav-item">
        <a class="nav-link"  href="{{ url('/test') }}">Αναζήτηση ΑΕΜ </a>
      </li>
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Πηροφορίες 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('/InfoFieldPage') }}">Προσθήκη</a>
          <a class="dropdown-item" href="{{ url('/edit-info') }}">Επεξεργασία</a>
        </div>
      </li>
      <li  class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Αίτηση 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ url('/FieldPage1') }}">Προσθήκη</a>
          <a class="dropdown-item" href="{{ url('/edit-application') }}">Επεξεργασία</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Υποβολή 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ url('/SubmitFieldPage') }}">Προσθήκη</a>
          <a class="dropdown-item" href="{{ url('/edit-submit') }}">Επεξεργασία</a>
        </div>
      </li>
      <li class="nav-item active" class="nav-item">
        <a class="nav-link" href="{{ url('/pagination') }}">Ενεργές Αιτήσεις</a>
      </li>
    </ul>
  </div>
</nav>








<div style="margin-right:45%;">
@foreach ($student as $students)
<form  action="{{url('finalization')}}"  method="post">
{{csrf_field()}}
<input type="hidden" name="students" id="students" value="{{$students->id}}" >
<button class="button"  id="finalization" name="button"><span>✔️</span> </button>   


</form>
<form  action="{{url('CreateZip')}}"  method="post">
{{csrf_field()}}
<button class="button"   type="submit" name="button"><span><i class="fa fa-download"></i></span> </button>
                   
                    <input type="hidden" name="students" id="students" value="{{$students->id}}" >
                                       

                    @for ($i = 1; $i < 12; $i++)
                    <input type="hidden" name="{{'doc'.$i}}" value="{{$students['document'.$i]}}" >
                   
                    @endfor
                    <input type="hidden" name="file1" value="ΑΙΤΗΣΗ ΣΙΤΙΣΗΣ" >
                    <input type="hidden" name="file2" value="ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ" >
                    <input type="hidden" name="file3" value="ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΑΤΟΜΙΚΟ" >
                    <input type="hidden" name="file4" value="ΕΚΚΑΘΑΡΙΣΤΙΚΟ ΣΗΜΕΙΩΜΑ-ΟΙΚΟΓΕΝΕΙΑΚΟ" >
                    <input type="hidden" name="file5" value="ΒΕΒΑΙΩΣΗ ΣΠΟΥΔΩΝ ΑΔΕΛΦΟΥ/ΗΣ" >
                    <input type="hidden" name="file6" value="ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΟΙΚΟΓΕΝΕΙΑΚΗΣ ΚΑΤΑΣΤΑΣΗΣ" >
                    <input type="hidden" name="file7" value="ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΑΝΩΤΑΤΗΣ ΣΥΝΟΜΟΣΠΟΝΔΙΑΣ ΠΟΛΥΤΕΚΝΩΝ" >
                    <input type="hidden" name="file8" value="ΠΙΣΤΟΠΟΙΗΤΙΚΟ ΥΓΕΙΟΝΟΜΙΚΗΣ ΕΠΙΤΡΟΠΗΣ" >
                    <input type="hidden" name="file9" value="ΛΗΞΙΑΡΧΙΚΗ ΠΡΑΞΗ ΘΑΝΑΤΟΥ" >
                    <input type="hidden" name="file10" value="ΔΙΑΖΕΥΚΤΗΡΙΟ Ή ΙΔΙΩΤΙΚΟ ΣΥΜΦΩΝΗΤΙΚΟ" >
                    <input type="hidden" name="file11" value="ΠΡΟΣΦΑΤΗ ΥΠΕΥΘΥΝΗ ΔΗΛΩΣΗ ΓΟΝΕΑ ΓΙΑ ΕΞΟΔΑ ΕΠΙΒΑΡΥΝΣΗΣ" >
</form>

<button class="button" id="hide"  style="vertical-align:middle;" onclick="comment()" type="submit" name="button"><span>📧</span> </button>

</div>

<div align="center">
	<div align="left"><img src="uliko/teicm.png"></div>
	    <div class="boxed"> <h1>Έλεγχος Φοιτητών</h1>
            <div class="row">
                <div class="container">
                    <table id="pinakasd"  style="width:100%">
                   
                        <tr>
                            <tr>
                            <th colspan="3" >ΑΕΜ</th>
                            <tr>
                            <td colspan="3" ><h4>{{$students->id}}<h4></td>
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
                            {{ $student->links() }}
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
<!--
<script>
$( "#finalization" ).click(function() {
  var id = $('#students').val();
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
          url: 'finalization',
          method: 'POST',
          dataType: 'text',
          data:{
            id: id
           
          }
          
        });
        $.ajax({
          url: 'Pagination',
          method: 'GET'
         
          
        });
       

});
</script>
-->
 <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  -->  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
