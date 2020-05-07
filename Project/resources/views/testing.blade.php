<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable - Connect lists</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
   input {
  outline: 0;
  border-width: 0 0 2px;
  border-color: black;
}
  #sortable1, #sortable2 {
    border: 1px solid #eee;
    width: 200px;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li {
    margin: 0 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 120px;
  }
  </style>
  
 
</head>
<body>
 <button class="btn_save">save</button>
<div id="sortable1" class="connectedSortable">
  <p class="">epitheto<input type="text"></p>
 
</div>
 
<ul id="sortable2" class="connectedSortable">
  <li class="ui-state-highlight">Item 1</li>
  <li class="ui-state-highlight">Item 2</li>
  <li class="ui-state-highlight">Item 3</li>
  <li class="ui-state-highlight">Item 4</li>
  <li class="ui-state-highlight">Item 5</li>
</ul>
 
 




<script>
  $( function() {
    $( "#sortable1, #sortable2" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>


  
<script>
btn_save.on('click', function(e){
  e.preventDefault(); 
  var sortable_data = $( "#sortable1, #sortable2" ).sortable.sortable('serialize'); 

  $.ajax({ 
    data: sortable_data,
    type: 'POST',
    url: '/savetodatabase', // save.php - file with database update
  });        
});




</script>


</body>
</html>