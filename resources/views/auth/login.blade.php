@extends('layouts.app')

@section('content')
<div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

              <div class="card card-primary">
                  <!-- <div class="card-header"><h4>Login</h4></div> -->

                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                        @csrf
                        <div class="login-brand">
                          <center><img src="{{ asset ('assets/admin/img/logobk.png') }}" alt="logo" width="120" class="shadow-light rounded-circle"></center>
                        </div>
                        <div class="form-group">

                            <input id="email" type="email" class="form-control"  name="email" tabindex="1"  placeholder="Username" :value="old('email')" required autofocus>
                            <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                      <div class="form-group">
                        <div class="d-block">
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" placeholder="Password" required>
                        <div class="float-right">
                        @if (Route::has('password.request'))
                          <a href="{{ route('password.request') }}" class="text-small">
                            Forgot Password?
                          </a>
                        @endif
                        </div>
                        <div class="invalid-feedback">
                        </div>
                      </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" {{ old('remember') ? 'checked' : '' }}>

                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>

                </form>
                <div class="row sm-gutters">
                </div>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="/register">Create One</a>
            </div>
            <div class="simple-footer">
            Copyright &copy; 2021 <a href="/" target="_blank">Sahabatbk </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
