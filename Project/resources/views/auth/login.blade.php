@extends('layouts.app')

@section('content')

<style>

.btn.btn-primary{
    border-color: white;
    background-color: #4CAF50;
}


.btn.btn-link{
color:#8c7696;
}
.form-control:focus{
    border-color:  #4CAF50;
    box-shadow: 0 1px 1px #4CAF50 inset, 0 0 8px #4CAF50 !important;
}

</style>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Είσοδος') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="aem" class="col-md-4 col-form-label text-md-right">{{ __('ΑΕΜ') }}</label>

                            <div class="col-md-6">
                                <input id="aem" type="aem" class="form-control{{ $errors->has('aem') ? ' is-invalid' : '' }}" name="aem" value="{{ old('aem') }}" oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το πεδίο.')" oninput="setCustomValidity('')" required autofocus>

                                @if ($errors->has('aem'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('aem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Κωδικός') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" oninvalid="this.setCustomValidity('Παρακαλώ συμπληρώστε το πεδίο.')" oninput="setCustomValidity('')" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Απομνημόνευση κωδικού πρόσβασης') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Σύνδεση') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Ξεχάσατε τον κωδικό σας;') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
