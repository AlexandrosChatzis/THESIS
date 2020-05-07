
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">                    <span class="navbar-toggler-icon"></span>
                </button>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
 
  
  <ul  style="margin-left:5%" class="nav navbar-nav mr-auto">
    

<li   class="nav-item">
           
<img   style="width:90px; height:70px; " onclick="window.location='{{ route('login') }}'" src="uliko/teicm.png">  
<img   style="width:90px; height:70px; " src="uliko/owl.png" onclick="Help()" >            
                 </li>
                 

    </ul>


    <ul style="margin-left:5%" class="nav navbar-nav mr-auto" >
   <!-- <li   class="nav-item">
        <a class="nav-link"  href="{{ url('/choose_application_type') }}"><i class="fa fa-home" style="font-size:30px"></i></a>
      </li>
     -->
      <li  class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link"  href="{{ url('/') }}">Πληροφορίες</a>
      </li>
          
      <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/profile') }}">GDPR</a>
      </li>

      <li class="nav-item {{ Request::is('application4') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/application4') }}">Αίτηση</a>
      </li>
      <li class="nav-item {{ Request::is('statement') ? 'active' : '' }}">
        <a class="nav-link"  href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li class="nav-item {{ Request::is('Submission2') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/Submission2') }}">Υποβολή Δικαιολογητικών</a>
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
      </li> 
     
      </ul>
      </div>
</nav>
