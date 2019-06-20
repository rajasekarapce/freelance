	@include('layouts.header')
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>{{ __('Register') }}</h3>
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
                           <li><a href="/">home</a></li>
                           <li><a href="#">pages</a></li>
                           <li class="active-breadcromb"><a href="/register">Register</a></li>
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
                        <h3>Sign up</h3>
                     </div>
                     <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                           <input type="radio" id="selectuser1" name="selectuser" value="1">
                           <label for="selectuser1">I want to Hire</label>&nbsp;
                           <input type="radio" id="selectuser2" name="selectuser" value="2">
                           <label for="selectuser2">I want to Work</label>
							@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
                        </div>
                        <div class="single-login-field">
                           <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>
							@if ($errors->has('name'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
							@endif
                        </div>
                        <div class="single-login-field">
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Addresss" required>
							@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
                        </div>
                        <div class="single-login-field">
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Choose Password" required>
							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
                        </div>
                        <div class="single-login-field">
                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <div class="remember-row single-login-field clearfix">
                           <p class="checkbox remember">
                              <input class="checkbox-spin" type="checkbox" id="Freelance">
                              <label for="Freelance"><span></span>accept terms & condition</label>
                           </p>
                        </div>
                        <div class="single-login-field">
                           <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                     </form>
                     <div class="dont_have">
                        <a href="{{ route('login') }}">Already have an account?</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Login Area End -->
    @include('layouts.footer')