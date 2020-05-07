<!DOCTYPE html>
<html> 
	<head> 
		  <meta charset="UTF-8">
		<title>Χρήσιμες Πληροφορίες</title> 
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
	</head> 
<style>
ol.d {
  list-style-type: lower-greek;
    text-align:left;
}
ol {list-style-type:decimal;
    text-align:left;}

p{  
    text-align:left;


}


ul{

list-style-type: none;
}


</style>
<body>





@if($approval==1)
@include('layouts.student_navbar')

@endif




<!--<div align="left"><img src="uliko/teicm.png"></div><br>-->
<div align="center">	
	<div class="boxed"> 
   
            <h1>Χρήσιμες Πληροφορίες</h1> 
            <h2>Τι θα χρειαστείς:</h2>

            <div style="float:left;  border:1px dotted white; text-align:left; height:auto ;   width:100%;">
            <ul style="min-height: 40px; min-width: 40px;" id="menu1">
            @foreach ($menu1 as $menu_1)
                    <li  style=" word-wrap: break-word; " data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="4">{{$menu_1->name}}</li>
                               
                              @endforeach
            </ul>
            </div>



            <h2>Τα βήματα που θα ακολουθήσεις:</h2>

            <div style="float:left;  border:1px dotted white; text-align:left; height:auto ;   width:100%;">
            <ul style="min-height: 40px; min-width: 40px;" id="menu2">
            @foreach ($menu2 as $menu_2)
                    <li  style=" word-wrap: break-word; " data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="4">{{$menu_2->name}}</li>
                               
                              @endforeach
            </ul>
            </div>

            <ul style="text-align:center;">
<h2>Χρήσιμοι Ιστότοποι/Έγγραφα</h2>
    <li><a href="https://www.aade.gr/polites/eisodema/delose-phorologias-eisodematos-php-e1-e2-e3" >TaxisNet</a></li>
    <li><a href="storage/{{$document}}" >Απαιτούμενα Δικαιολογητικά</a></li>
     <h2>Πάτα την κουκουβάγια για να σε βοηθήσει!</br><img style="width:10%; height:10%;" src="uliko/owl.png" onclick="Help()" ></h2>
  
  <form class=""action="{{  action('StudentController@GDPR')}}"  method="get">
		
	  <button class="button"  type="submit" style="vertical-align:middle; float:none;"><span>Εκκίνηση</span>  </button>

  
</form>
 
</ul>
             
              </div>
              </div>
            
      

<script>
function Help() {
  bootbox.alert({
    message: "Γεια σου με λένε Χέντβιχ και θα βρίσκομαι πάντα εδώ για ότι βοήθεια χρειαστείς!",
    className: 'rubberBand animated'
});
  
 }</script>


<script>
$(document).ready(function(){
    
    $("a[href='storage/']").css({ "pointer-events":"none",
 "cursor": "not-allowed",
 "background-color":"grey"});

 

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