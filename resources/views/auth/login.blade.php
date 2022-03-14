@extends('layouts.app')

@section('content')
<div class="container text-md-center col-md-10">
    <div class="row justify-content-center">
        <h1> Μοιράσου τις σημειώσεις σου και βοήθησε φοιτητές σε όλη την Ελλάδα </h1>

        <div class="col-md-6" >
            <div class="card bg-primary">
                <div class="card-header text-md-left ">{{ __('Σύνδεση') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-6 col-form-label text-md-left">{{ __('Διεύθυνση E-Mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-left">{{ __('Κωδικός') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-7 text-md-left">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Αποθήκευση κωδικού πρόσβασης') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 text-md-left">
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
