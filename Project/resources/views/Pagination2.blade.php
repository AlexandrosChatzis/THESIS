


<!DOCTYPE html>
<html> 
	<head> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		  <meta charset="UTF-8">
		<title>Pagination</title> 
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

                   
.boxed{
                      display:table; 
                      margin-top:5%;
        border-radius: 25px;
      border: 2px solid white;
    max-width:900px;
       width:auto;
      height: auto;  
     background-color: white;	}
     h4{

  font-size:2vmin;
     }
th,td{
  height:80px;
 
  font-size:1.5vmin;
  
   

}

.page-link {
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



@include('layouts.secretariat')


<div style="width:250px; postition:relative; float:none; margin:0 auto;">
@foreach ($student as $students)
<form  action="{{url('finalization')}}"  method="post">
{{csrf_field()}}
<input type="hidden" name="student_aem" id="student_aem" value="{{$students->student_aem}}" >

<button class="button"  id="finalization" name="button"><span>✔️</span> </button>   


</form>
          
<div id="boxed2"> <h2>Παρατηρήσεις</h2>

<form action="{{url('mailto')}}" method="post">
{{csrf_field()}}
<input type="hidden" name="student_aem" id="student_aem" value="{{$students->student_aem}}" >

<textarea class="emailtextarea" name="messagebox" rows="20" cols="20" id="message"></textarea>
<button class="button"  style="  float: none;"  type="submit" name="button"><span>Αποστολή</span> </button>
</form>
</div>
<button class="button" id="hide"  style="vertical-align:middle;" onclick="comment()" type="submit" name="button"><span>📧</span> </button>

<form  action="{{url('CreateZip2')}}"  method="post">
{{csrf_field()}}
<button class="button"   type="submit" name="button"><span><i class="fa fa-download"></i></span> </button>
                   
<input type="hidden" name="student_aem" id="student_aem" value="{{$students->student_aem}}" >



</div>





<br>



<div align="center">
	
	<div class="boxed"> <h1 style="text-align:center">Έλεγχος Φοιτητών</h1> 
    <br>


    <table id="pinakasd"  style="width:90%;margin-left:5%;float:left;">
                   
                        <tr>
                            <tr>
                            <th style="height:50px" colspan="3" >ΑΕΜ</th>
                            <tr>
                            <td style="height:50px" colspan="3" ><h4>{{$students->student_aem}}<h4></td>
                            </tr>
                        </tr>
</table>

    <table class="menu1" id="pinakasd" style="width: 30%; margin-left:5%;float:left; ">
    <thead>
  

    </thead>

    <tbody>
   
    @foreach ($menu1 as $i => $menu_1)
                    <tr>
                        <th>{{$menu_1->name}}<input type="hidden" name="myFileName[]" value="{{$menu_1->name}}"></th>
                       </tr>
                        <tr>
                       
                        <td><a class="button1" href="storage/{{${'students'}->{'document'.$i} }}"><span>Άνοιγμα</span></a></td>
                        <input type="hidden" name="{{'doc'.$i}}" value="{{$students['document'.$i]}}" >
                       
                                                </tr>
                    @endforeach
            
    </tbody>
    </table>

    <table class="menu2" id="pinakasd" style="width: 30%; float:left; ">
    <thead>

  
    </thead>

    <tbody>
    
@foreach ($menu2 as $i => $menu_2)
                    <tr>
                    
                        <th>{{$menu_2->name}}<input type="hidden" name="myFileName[]" value="{{$menu_2->name}}"></th>
                       </tr>
                       <tr>
                       <td><a class="button1" href="storage/{{${'students'}->{'document'.($i+$countmenu1)} }}"><span>Άνοιγμα</span></a></td>
                       <input type="hidden" name="{{'doc'.($i+$countmenu1)}}" value="{{$students['document'.($i+$countmenu1)]}}" >
                     
                        </tr> 
                    @endforeach
            
            
    </tbody>
    </table>

    <table class="menu3" id="pinakasd" style="width: 30%; float:left; ">
    <thead>

    
    </thead>

    <tbody>
   
@foreach ($menu3 as $i => $menu_3)
                    <tr>
                        <th>{{$menu_3->name}}<input type="hidden" name="myFileName[]" value="{{$menu_3->name}}"></th>
                       </tr>
                       <tr>
                       <td><a class="button1" href="storage/{{${'students'}->{'document'.($i+$countmenu2+$countmenu1)} }}"><span>Άνοιγμα</span></a></td>
                       <input type="hidden" name="{{'doc'.($i+$countmenu2+$countmenu1)}}" value="{{$students['document'.($i+$countmenu2+$countmenu1)]}}" >
                        </tr>
                    @endforeach
                    </form>
            
    </tbody>
    </table>
    <div style="float:left; width:100%;text-align:center;">{{ $student->links() }}</div>
    
    @endforeach
 
              </div><!-- and of box  --> 
              </div><!-- and of align  --> 
            
  
              <script>

$(document).ready(function(){
    
        $("a[href='storage/']").css({ "pointer-events":"none",
     "cursor": "default",
     "background-color":"grey"});

     
    
});



</script>
<script>
function comment() {
  
    document.getElementById("boxed2").style.visibility = "visible";
  
		document.getElementById("hide").style.visibility = "hidden";
  
}
</script>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body> 
</html> 
