<html lang="en">

<head>
    
<title>Submit Field Adder</title>
  
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
      <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>

</style>
<body>


@include('layouts.secretariat')


@if (session('alert'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert') }}
    </div>

@elseif (session('alert2'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert2') }}
    </div>
    
@elseif (session('alert3'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert3') }}
    </div>
@endif






<div align="center">
	    <div class="boxed"><h1>Εισαγωγή Πεδίου</h1>
            <div class="row">
                <div class="container">
                <form action="{{url('SubmitFieldAdder')}}" method="post" name="add_name" id="add_name" enctype="multipart/form-data">
    {{csrf_field()}}
    </br>
    
    <table class="table table-bordered" style="width:400px;" id="dynamic_field">  
    <tr>  
  
    

</tr>  
                                  
                               </table>  



<button class="button1"  style="padding:2px; font-size: 30px; " type="submit" value="ADD" name="submit"><span>Προσθήκη</span></button>
</form>


<table id="pinakasd"   style=" float:none; table-layout: fixed; width:50%;">
<tr>
    <th>Παράγραφοι</th>
</tr>

<tbody class="context-menu-one">
@foreach ($tableheaders as $tableheader)

<tr>
   <td onclick="myFunction(this.id)" id="{{$tableheader->id}}" style=" word-wrap: break-word; ">{{$tableheader->name}}</td>
</tr>



@endforeach
</tbody>
</table>




<br>


</div>
</div>
</div>
</div>


   
   <script>
$(document).ready(function(){
   
    var i=1; 
    $("#dynamic_field").find("tr:gt(0)").remove();
        i++;  
        $('#dynamic_field').append('<tr id="rows'+i+'"> <td><textarea style="width:100%"  name="fieldname[]" row="5" col="200"> </textarea> </td> <td><button style="margin-top:10px; " type="button" name="add" id="add" class="btn btn-success">+</button></td> </tr>');
          

        var j=2;  
      $('#add').click(function(){  
           j++;  
           $('#dynamic_field').append('<tr id="rows'+j+'"><td><textarea style="width:100%"  name="fieldname[]" row="5" col="200"> </textarea> </td><td><button style="margin-top:10px; " type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#rows'+button_id+'').remove();  
      });  



});

</script>


<script>
 $(function() {
        $(".context-menu-one").contextMenu({
            selector: 'td',
            callback: function(key, options) {
                var id = $(this).attr("id");
                var edit=null;
                if (key=='edit'){
                    bootbox.prompt({
    title: "Επεξεργαστείτε το κείμενο",
    inputType: 'textarea',
    callback: function (result) {
        if(result!=null){
       var edit=result;
       myajax(edit,key,id);
        }
    }
});
                }else{
                    bootbox.confirm({
    message: "Είστε βέβαιοι ότι θέλετε να το διαγράψετε;",
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn-danger'
        }
    },
    callback: function (answer) {
       if(answer==true){
        myajax(edit,key,id);
       }
    }
});
                   
                }
                 
            },
            items: {
                "edit": {name: "Edit", icon: "edit"},
                "delete": {name: "Delete", icon: "delete"},
            }
        });

     
    });

function myajax(edit,key,id){
    $.ajax({
          url: 'edit_or_delete_submit_fields',
          method: 'POST',
          dataType: 'text',
          data:{
              edit:edit,
            key: key,
            id: id
          }, success:function(response){
          console.log(response);
          }
        }).done( 

            function(data) 

            {
            location.reload();
            }

            );
               





}

$(document).ready(function() {


  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});


});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>

<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
-->    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootbox.locales.min.js"></script>

</body>

</html>
