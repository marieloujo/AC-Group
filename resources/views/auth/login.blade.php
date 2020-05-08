@extends('layouts.app')

@section('content')

{{--
  <div class="container">
      
    <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Login') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf

                          <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                      <label class="form-check-label" for="remember">
                                          {{ __('Remember Me') }}
                                      </label>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4">
                                  <button type="submit" class="btn btn-primary">
                                      {{ __('Login') }}
                                  </button>

                                  @if (Route::has('password.request'))
                                      <a class="btn btn-link" href="{{ route('password.request') }}">
                                          {{ __('Forgot Your Password?') }}
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
--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
            <form id="LoginValidation" method="POST" action="{{ route('login') }}">
              @csrf
                <div class="card">
                  
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">contacts</i>
                    </div>
                    <h4 class="card-title">Connexion</h4>
                  </div>

                  <div class="card-body ">

                    <div class="form-group mb-4">
                      <label for="exampleEmails" class="bmd-label-floating"> Email Address *</label>
                      <!--input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleEmails" 
                        required="true"
                          name="emailadress"-->

                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                          name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                    </div>


                    <div class="form-group mb-3">
                      <label for="examplePasswords" class="bmd-label-floating"> Mot de passe *</label>
                      <!--input type="password" class="form-control" id="examplePasswords" required="true" 
                        name="password"-->

                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">


                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror

                    </div>


                    <div class="form-check mr-auto">
                      <label class="form-check-label">
                        <!--input class="form-check-input" type="checkbox" value="" required--> 
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                            {{ old('remember') ? 'checked' : '' }}>Se souvenir de moi
                        <span class="form-check-sign">
                          <span class="check"></span>
                        </span>
                      </label>
                    </div>

                  </div>

                  

                  <div class="card-footer ml-auto mr-auto">
                    <button type="submit" class="btn btn-rose">Se connecter</button>

                    @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif

                  </div>

                </div>
            </form>

        </div>
    </div>
</div>

@endsection
