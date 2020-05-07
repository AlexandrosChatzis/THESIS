<html lang="en">

<head>
    
<title>Give Privilege</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
 input[type=text]{
    width: 10%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


</style>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">                    <span class="navbar-toggler-icon"></span>
                </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
 
  
  <ul  style="margin-left:5%" class="nav navbar-nav mr-auto">
    

<li   class="nav-item">
           
<img   style="width:90px; height:70px; " onclick="window.location='{{ route('login') }}'" src="uliko/teicm.png">  
        </li>
                 

    </ul>
    
    <ul style="margin-right:5%;"class="nav navbar-nav ml-auto">
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }} 
        </a>
        <div class="dropdown-menu a" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{ url('/user-info') }}">
                                        {{ __('Επεξεργασία λογαριασμού') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Αποσύνδεση') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
        </div>
    
     
      </ul>
    
 
   


  </div>
</nav>








<div align="center">
	    <div class="boxed"> <h1>Εξουσιοδότηση Γραμματειακού Προσωπικού</h1>
        
@if (session('alert'))
    <div style="text-align:center;" class="alert alert-success">
        {{ session('alert') }}
    </div>


@elseif (session('alert3'))
    <div style="text-align:center;" class="alert alert-danger">
        {{ session('alert3') }}
    </div>
@endif




            <div class="row">
                <div class="container">
<form class=""action="{{action('StudentController@pass_privilege')}}"  method="post">
{{csrf_field()}}
<h4>ΑΕΜ</h4>
<input type="text" style="text-align:center; width:20%;" name="idkartelas" ></br>
<button class="button1"  style="padding:2px; font-size: 30px; " type="submit" value="Search" name="submit"><span>Εξουσιοδότηση</span></button>

</div>
</div>
</div>
</div>
</form>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
