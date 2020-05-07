<html lang="en">

<head>
    
<title>Field Adder</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
 input[type=text]{
    width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
<body>

<div id="mynavbar">
<ul>
<li class="{{ Request::is('/test') ? 'active' : '' }}">
      <a  href="{{ url('/test') }}">Αναζήτηση ΑΕΜ</a>
      </li>
      <li class="{{ Request::is('/FieldPage') ? 'active' : '' }}">
      <a class="active"  href="{{ url('/FieldPage') }}">Πεδία</a>
      </li>
      <li class="{{ Request::is('/pagination') ? 'active' : '' }}">
      <a  href="{{ url('/pagination') }}">Ενεργές Αιτήσεις</a>
      </li>
      </ul>
</div>






@if (session('alert'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert') }}
    </div>

@elseif (session('alert2'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert2') }}
    </div>

@elseif (session('alert3'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert3') }}
    </div>

@elseif (session('alert4'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert4') }}
    </div>
@endif
<div align="center">
	<div align="left"><img src="uliko/teicm.png"></div>
	    <div class="boxed"> <h1>Εισαγωγή Πεδίου στην Αίτηση</h1>
            <div class="row">
                <div class="container">
                <form action="{{url('FieldAdder')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<input type="text" style="text-align:center;" name="fieldname" ></br>
<button class="button1"  style="padding:2px; font-size: 30px; " type="submit" value="ADD" name="submit"><span>Προσθήκη</span></button>
</form>

<h1>Διαγραφή Πεδίου στην Αίτηση</h1>
<form action="{{url('FieldRemover')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
<input type="text" style="text-align:center;" name="fieldname2" ></br>
<button class="button1"  style="padding:2px; font-size: 30px; " type="submit" value="ADD" name="submit"><span>Διαγραφή</span></button>
</form>

</div>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>
