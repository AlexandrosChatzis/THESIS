


<!DOCTYPE html>
<html> 
	<head> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
		  <meta charset="UTF-8">
		<title>Submission</title> 
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

                    

th,td{
  font-size:1.5vmin;
  height:80px;
   
}

.boxed{
                      display:table; margin-top:3%;
        border-radius: 25px;
      border: 2px solid white;
    max-width:900px;
       width:auto;
      height: auto;  
     background-color: white;	}

            </style>
	</head> 












<body onload="reset($('#file'))">





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
      <a   href="{{ url('/application4') }}">Αίτηση</a>
      </li>
      <li>
      <a  href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li>
      <a class="active"  href="{{ url('/Submission2') }}">Υποβολή Δικαιολογητικών</a>
      </li>
     
      </ul>
</div>
                  -->








<div align="center">
	
	<div class="boxed"> <h1 style="text-align:center;">Υποβολή Δικαιολογητικών</h1> 
    <br></br>

    <div align="center">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <ol>
     ΠΡΟΧΟΧΗ!!<br>
 
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

</div>


   <form action="{{url('student2')}}" method="post" id="formreset" autocomplete="off" enctype="multipart/form-data">
    {{csrf_field()}}

    <table class="menu1" id="pinakasd" style="width: 30%; margin-left:5%;float:left; ">
    <thead>
  

    </thead>

    <tbody>
 

@foreach ($menu1 as $menu_1)
                    <tr  data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="{{$menu_1->menu}}">
                        <th>{{$menu_1->name}}<input type="hidden" name="myFileName[]" value="{{$menu_1->name}}"></th>
                       </tr>
                        <tr>
                            <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile[]" id="file" value=""><span>Αναζήτηση</span></label></td>
                        </tr>
                    @endforeach
            
    </tbody>
    </table>

    <table class="menu2" id="pinakasd" style="width: 30%; float:left; ">
    <thead>

  
    </thead>

    <tbody>
    
@foreach ($menu2 as $menu_2)
                    <tr  data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="{{$menu_2->menu}}">
                        <th>{{$menu_2->name}}<input type="hidden" name="myFileName[]" value="{{$menu_2->name}}"></th>
                       </tr>
                       <tr>
                            <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile[]" id="file" value=""><span>Αναζήτηση</span></label></td>
                        </tr> 
                    @endforeach
            
            
    </tbody>
    </table>

    <table class="menu3" id="pinakasd" style="width: 30%; float:left; ">
    <thead>

    
    </thead>

    <tbody>
   
@foreach ($menu3 as $menu_3)
                    <tr  data-index="{{$menu_3->id}}" data-position="{{$menu_3->display_order}}" data-menu="{{$menu_3->menu}}">
                        <th>{{$menu_3->name}}<input type="hidden" name="myFileName[]" value="{{$menu_3->name}}"></th>
                       </tr>
                       <tr>
                            <td><label class="button1" style="padding:2px; font-size: 18px;"><input type="file" name="myFile[]" id="file" value=""><span>Αναζήτηση</span></label></td>
                        </tr>
                    @endforeach
            
            
    </tbody>
    </table>
    <div style="width:250px; postition:relative; float:none; margin:0 auto;">  <button class="buttonsub" style="text-align:center; " type="submit"  name="button"><span>Οριστικοποίηση </span> </button></div>
    </form> 

              </div><!-- and of box  --> 
              </div><!-- and of align  --> 
            

<script>
function Help() {
  bootbox.alert({
    message: "<h6>1.Υποβάλλεται τα απαραίτητα δικαιολογητικά<h6>2.Οριστικοποίηση",
    className: 'rubberBand animated'
});
  
 }</script>


<script>
 function resetpage() {
    
    var form= document.getElementById("formreset");
    form.find("input[type=file]").val("");
    
    
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
