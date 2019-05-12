	@include('layouts.header')
	 <style>
		.header-menu ul li a{
			color:#000000 !important;
		}
	  </style>
	
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>{{ __('Login') }}</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="breadcromb-bottom">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box-pagin">
                        <ul>
                           <li><a href="#">home</a></li>
                           <li><a href="#">pages</a></li>
                           <li class="active-breadcromb"><a href="#">Login</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Login Area Start -->
      <section class="jobguru-login-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="login-box">
                     <div class="login-title">
                        <h3>Sign in</h3>
                     </div>
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="single-login-field">
                        
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                      
                        </div>
                        <div class="single-login-field">
							<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif						
                        </div>
            
                        <div class="remember-row single-login-field clearfix">
                           <p class="checkbox remember">
								<input class="checkbox-spin form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              <label for="remember"><span></span>Keep Me Signed In</label>
                           </p>
                           <p class="lost-pass">
                              <a href="#">forgot password?</a>
                           </p>
                        </div>
                        <div class="single-login-field">
                           <button type="submit">Sign in</button>
						   @if (Route::has('password.request'))
								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('Forgot Your Password?') }}
								</a>
							@endif
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="{{ route('register') }}">Don't have an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
	
    @include('layouts.footer')