<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation"> <span
            class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul style="margin-left:5%" class="nav navbar-nav mr-auto">
            <li class="nav-item">
                <img style="width:90px; height:70px; " onclick="window.location='{{ route('login') }}'"
                    src="uliko/teicm.png">
            </li>
        </ul>
        <ul style="margin-left:12%" class="nav navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('test') || Request::is('kartela2') || Request::is('testchoice') ? 'active' : '' }}"
                class="nav-item">
                <a class="nav-link" href="{{ url('/test') }}">Αναζήτηση ΑΕΜ </a>
            </li>
            <li
                class="nav-item dropdown {{ Request::is('InfoFieldPage') || Request::is('edit-info') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Πηροφορίες
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/InfoFieldPage') }}">Προσθήκη</a>
                    <a class="dropdown-item" href="{{ url('/edit-info') }}">Επεξεργασία</a>
                </div>
            </li>
            <li
                class="nav-item dropdown {{ Request::is('FieldPage1') || Request::is('edit-application') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Αίτηση
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/FieldPage1') }}">Προσθήκη</a>
                    <a class="dropdown-item" href="{{ url('/edit-application') }}">Επεξεργασία</a>
                </div>
            </li>
            <li
                class="nav-item dropdown {{ Request::is('SubmitFieldPage') || Request::is('edit-submit') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Υποβολή
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/SubmitFieldPage') }}">Προσθήκη</a>
                    <a class="dropdown-item" href="{{ url('/edit-submit') }}">Επεξεργασία</a>
                </div>
            </li>
            <li class="nav-item {{ Request::is('pagination2') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/pagination2') }}">Ενεργές Αιτήσεις</a>
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu a" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/user-info') }}">
                        {{ __('Επεξεργασία λογαριασμού') }}
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Αποσύνδεση') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
    </div>
    </ul>
    <ul style="margin-right:5%;" class="nav navbar-nav ml-auto">
        </li>
        <li class="nav-item">
            <a href="{{ url('/application_type') }}"><button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button></a>
        </li>
    </ul>
</nav>