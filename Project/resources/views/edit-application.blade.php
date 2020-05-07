

<!DOCTYPE html>


<html>

<head>
<title>Application Creator</title>


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
   
    
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/h4emes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  
</head>

<body>
<style>

tbody{
  display:block;
  overflow:auto;
  height:300px;
  width:100%;
}td{
  width:500000000000000px;
  
}
.shake_bin:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
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
th{
background-color:white;
font-weight:normal;
  cursor:move;
}
.boxed3{
  height:auto;
  display:table;
}

  </style>




@include('layouts.secretariat')
              
<br><br><br>
  <div class="row">
        <!-- left side -->
        <div  class="col-sm-6">


      <table class="textboxes"  style=" float:left; border:1px solid black; text-align:left;   height: 300px; margin-left:1%;  width:10%; word-wrap: break-word; overflow-y:scroll;">
             <thead>
             <tr>
              <td style="text-align:center; background-color:white; "><h2>Πεδία Συμπλήρωσης</h2></td>
</tr>

</thead>
<tbody>
<tr style="height:10px;" class="notmovingtextboxes">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($textboxes as  $textbox)
                  @if ($textbox->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$textbox->id}}" data-position="{{$textbox->display_order}}" data-menu="{{$textbox->menu}}">
                        <th>{{$textbox->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($textbox->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$textbox->id}}" data-position="{{$textbox->display_order}}" data-menu="{{$textbox->menu}}">
                        <th>{{$textbox->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($textbox->value=="Παράγραφος")
                       <tr  data-index="{{$textbox->id}}" data-position="{{$textbox->display_order}}" data-menu="{{$textbox->menu}}">
                        <th><p>{{$textbox->name}}</p></th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>








                  <table class="checkboxes"  style=" float:left; border:1px solid black; text-align:left;   height: 300px; margin-left:1%;  width:10%; word-wrap: break-word; overflow-y:scroll;">
             <thead>
             <tr>
              <td style="text-align:center; background-color:white; "><h2>Πεδία Επιλογής</h2></td>
</tr>

</thead>
<tbody>
<tr style="height:10px;" class="notmovingcheckboxes">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($checkboxes as  $checkbox)
                  @if ($checkbox->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$checkbox->id}}" data-position="{{$checkbox->display_order}}" data-menu="{{$checkbox->menu}}">
                        <th>{{$checkbox->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($checkbox->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$checkbox->id}}" data-position="{{$checkbox->display_order}}" data-menu="{{$checkbox->menu}}">
                        <th>{{$checkbox->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($checkbox->value=="Παράγραφος")
                       <tr  data-index="{{$checkbox->id}}" data-position="{{$checkbox->display_order}}" data-menu="{{$checkbox->menu}}">
                        <th><p>{{$checkbox->name}}</p></th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>



                  <table class="paragraphs"  style=" float:left; border:1px solid black; text-align:left;   height: 300px; margin-left:1%;  width:10%; word-wrap: break-word; overflow-y:scroll;">
             <thead>
             <tr>
              <td style="text-align:center; background-color:white; "><h2>Παράγραφοι</h2></td>
</tr>

</thead>
<tbody>
<tr style="height:10px;" class="notmovingparagraphs">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($paragraphs as $paragraph)
                  @if ($paragraph->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$paragraph->id}}" data-position="{{$paragraph->display_order}}" data-menu="{{$paragraph->menu}}">
                        <th>{{$paragraph->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($paragraph->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$paragraph->id}}" data-position="{{$paragraph->display_order}}" data-menu="{{$paragraph->menu}}">
                        <th>{{$paragraph->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($paragraph->value=="Παράγραφος")
                       <tr  data-index="{{$paragraph->id}}" data-position="{{$paragraph->display_order}}" data-menu="{{$paragraph->menu}}">
                        <th><p>{{$paragraph->name}}</p></th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>

                  <table class="deletes"  style=" float:left; border:1px solid black; text-align:left;   height: 300px; margin-left:1%;  width:20%; word-wrap: break-word; overflow-y:scroll;">
             <thead>
             <tr>
              <td style="text-align:center; background-color:white; "> <h4 style="text-align:center; "><img class="shake_bin" width="80px "height="80px" src="uliko/recycle.svg" onclick="delete_all()"></h4></td>
</tr>

</thead>
<tbody>
<tr style="height:10px;" class="dontdelete notmovingdeletes">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($deletes as $delete)
                  @if ($delete->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$delete->id}}" data-position="{{$delete->display_order}}" data-menu="{{$delete->menu}}">
                        <th>{{$delete->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($delete->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$delete->id}}" data-position="{{$delete->display_order}}" data-menu="{{$delete->menu}}">
                        <th>{{$delete->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($delete->value=="Παράγραφος")
                       <tr  data-index="{{$delete->id}}" data-position="{{$delete->display_order}}" data-menu="{{$delete->menu}}">
                        <th><p>{{$delete->name}}</p></th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>

             
      
        </div>
      <!-- and of left  --> 
        
      <!-- right side -->
      <div  class="col-sm-6">

          <div style="display:inline-block;  " class="boxed3"> <h1 align="center">Αίτηση</h1>
            <div id="capture">
                 
                       
             
                    <div style=" text-align:left; "><img  style="width:120; height:120; " src="uliko/teicm.png">
                    <p style=" float:right; margin-right:3%;    text-align:center; font-weight:bold; display: inline-block; border:1px solid black;  height:180px;width:150px;">Φωτογραφία
                        <img style="margin-right:3%;  margin-top:-24px;" src="" id="profile-img-tag" width="150px" height="180px" />
                          <input style="margin-left:18%;margin-right:3%; margin-top:5px  " type="file" name="file" id="profile-img" ></div>
                   
                    
                    
                    
                    <br><br>
                    
                    <h5 style=" display:inline-block; margin-left:4%; text-align:center;font-weight:bold; cursor:default; "><u>{{$application}} </u></h5><br>

                    <table class="menu1"  style="float:left;   height:auto ;     text-align:left;   margin-left:1%;width:20%; word-wrap: break-word; ">
             <thead>
 

</thead>
<tbody  style="height:auto;">
<tr style="height:10px;" class="notmovingmenu1">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($menu1 as $menu_1)
                  @if ($menu_1->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="{{$menu_1->menu}}">
                        <th>{{$menu_1->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($menu_1->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="{{$menu_1->menu}}">
                        <th>{{$menu_1->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($menu_1->value=="Παράγραφος")
                       <tr  data-index="{{$menu_1->id}}" data-position="{{$menu_1->display_order}}" data-menu="{{$menu_1->menu}}">
                        <th>{{$menu_1->name}}</th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>


                
                  
                            
                            <table class="menu2"  style="  float:right;  margin-top:30px;  height:auto ;     text-align:left;     width:60%;  word-wrap: break-word; ">
             <thead>


</thead>
<tbody  style="height:auto;">
<tr style="height:10px;" class="notmovingmenu2">
<td style="background-color:black;"></td>
</tr>
                  @foreach ($menu2 as $menu_2)
                  @if ($menu_2->value=="Πεδίο-Συμπλήρωσης")
                    <tr  data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="{{$menu_2->menu}}">
                        <th style="float:none;text-align:center;">{{$menu_2->name}}:<br><input type="text"></th>
                       </tr>
                       @elseif ($menu_2->value=="Πεδίο-Επιλογής")
                       <tr  data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="{{$menu_2->menu}}">
                        <th>{{$menu_2->name}}:&nbsp;&nbsp;<input type="checkbox"></th>
                       </tr>

                       @elseif ($menu_2->value=="Παράγραφος")
                       <tr  data-index="{{$menu_2->id}}" data-position="{{$menu_2->display_order}}" data-menu="{{$menu_2->menu}}">
                        <th><p>{{$menu_2->name}}</p></th>
                       </tr>
                       @endif
                    @endforeach
            
                    </tbody>
                  </table>
                     
              
               
              </div><!-- and of capture  --> 
            </div><!-- and of box  --> 
          </div>
        <!-- and of right  --> 

    </div> 

          





























<script>


$(document).ready(function() {

$( ".textboxes tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingtexboxes)',
    update: function (event,ui){
          $(this).children().each(function (index){
           
                $(this).attr('data-position' , (index+1)).addClass('update_textboxes');
                
            
         });
         saveNewPositionsTextboxes();
        }
  
   
}); //end sortable


function saveNewPositionsTextboxes(){
      var positions = [];
      var menus = 1;
        $('.update_textboxes').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('update_textboxes');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}



   
$( ".checkboxes tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingcheckboxes)',
    update: function (event,ui){
          $(this).children().each(function (index){
            
                $(this).attr('data-position' , (index+1)).addClass('update_checkboxes');
                
            
         });
         saveNewPositionsCheckboxes();
        }
});

function saveNewPositionsCheckboxes(){
      var positions = [];
      var menus = 2;
        $('.update_checkboxes').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('update_checkboxes');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}
   

$( ".paragraphs tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingparagraphs)',
    update: function (event,ui){
          $(this).children().each(function (index){
            
                $(this).attr('data-position' , (index+1)).addClass('update_paragraphs');
                
            
         });
         saveNewPositionsParagraphs();
        }
});

function saveNewPositionsParagraphs(){
      var positions = [];
      var menus = 3;
        $('.update_paragraphs').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('update_paragraphs');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}



$( ".deletes tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingdeletes)',
    update: function (event,ui){
          $(this).children().each(function (index){
            
                $(this).attr('data-position' , (index+1)).addClass('Delete');
                
            
         });
         saveNewPositionsDelete();
        }
    
});



function saveNewPositionsDelete(){
      var positions = [];
      var menus = 10;
        $('.Delete').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('Delete');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}

   
 
$( ".menu1 tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingmenu1)',
    update: function (event,ui){
          $(this).children().each(function (index){
            
                $(this).attr('data-position' , (index+1)).addClass('updated1');
                
            
         });
         saveNewPositionsToMenu1();
        }
    
});




function saveNewPositionsToMenu1(){
      var positions = [];
      var menus = 4;
        $('.updated1').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('updated1');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}
   
       
$( ".menu2 tbody" ).sortable({
    connectWith: "tbody",
    items:'tr:not(.notmovingmenu2)',
    update: function (event,ui){
          $(this).children().each(function (index){
            
                $(this).attr('data-position' , (index+1)).addClass('updated2');
                
            
         });
         saveNewPositionsToMenu2();
        }
    
});



function saveNewPositionsToMenu2(){
      var positions = [];
      var menus = 5;
        $('.updated2').each(function(){
          positions.push([$(this).attr('data-index'),$(this).attr('data-position')]);
          console.log(positions,menus);
          $(this).removeClass('updated2');

        
      });
      $.ajax({
          url: 'ajaxresponse',
          method: 'POST',
          dataType: 'text',
          data:{
            positions: positions,
            menus: menus
          }, success:function(response){
          console.log(response);
          }
        });
    
}


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});



});





</script>


<script>
function delete_all() {
  var result = confirm("Είστε βέβαιοι ότι θέλετε να διαγράψετε όλα αυτά τα στοιχεία;");
if (result) {
  $('.deletes tbody').find("tr:not(.dontdelete)").empty();
  $.ajax({
          url: 'Delete_all',
          method: 'POST'

        });
}
 
}
  </script>






<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   --> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
