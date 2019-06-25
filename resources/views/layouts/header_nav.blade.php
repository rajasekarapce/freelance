<!-- Header Area Start -->
      <header class="jobguru-header-area stick-top forsticky">
         <div class="menu-animation">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-2">
                     <div class="site-logo">
                        <a href="/">
                        <img src="assets/img/logo.png" alt="jobguru" class="non-stick-logo" />
                        <img src="assets/img/logo-2.png" alt="jobguru" class="stick-logo" />
                        </a>
                     </div>
                     <!-- Responsive Menu Start -->
                     <div class="jobguru-responsive-menu"></div>
                     <!-- Responsive Menu Start -->
                  </div>
                  <div class="col-lg-6">
                     <div class="header-menu">
                        <nav id="navigation">
                           <ul id="jobguru_navigation">
                              <li><a href="/">Home</a></li>
                              <li class=" has-children">
                                 <a href="#">for candidates</a>
                                 <ul>
                                    <li><a href="/job-listing">browse jobs</a></li>
                                    <li><a href="browse-categories.html">Browse Categories</a></li>
                                    <li><a href="browse-companies">browse companies</a></li>
                                    <li><a href="single-candidates.html">candidates details</a></li>
                                    <li><a href="submit-resume.html">submit resume</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">candidate dashboard</a>
                                       <ul>
                                          <li><a href="candidate-dashboard.html">Candidate dashboard</a></li>
                                          <li><a href="candidate-profile.html">Candidate profile</a></li>
                                          <li><a href="message.html">messages</a></li>
                                          <li><a href="manage-jobs.html">manage jobs</a></li>
                                          <li><a href="candidate-earnings.html">earnings</a></li>
                                          <li><a href="change-password.html">change password</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li class="has-children">
                                 <a href="#">for employers</a>
                                 <ul>
                                    <li><a href="browse-candidates.html">Browse Candidates</a></li>
                                    <li><a href="single-company.html">company details</a></li>
                                    <li><a href="post-job.html">Post A job</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">employer dashboard</a>
                                       <ul>
                                          <li><a href="employer-dashboard.html">employer dashboard</a></li>
                                          <li><a href="company-profile.html">company profile</a></li>
                                          <li><a href="message.html">messages</a></li>
                                          <li><a href="manage-candidates.html">manage candidates</a></li>
                                          <li><a href="transaction.html">transaction</a></li>
                                          <li><a href="change-password.html">change password</a></li>
                                       </ul>
                                    </li>
                                 </ul>
                              </li>
                              <li class="has-children">
                                 <a href="#">pages</a>
                                 <ul>
                                    <li><a href="about.html">About us</a></li>
                                    <li class="has-inner-child">
                                       <a href="#">blog</a>
                                       <ul>
                                          <li><a href="blog.html">blog</a></li>
                                          <li><a href="single-blog.html">single blog</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="job-page.html">job page</a></li>
                                    <li><a href="login">login</a></li>
                                    <li><a href="register">register</a></li>
                                    <li><a href="contact.html">contact us</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="col-lg-4">
					@if (Route::has('login'))
                     <div class="header-right-menu">
                        <ul>
							@auth
								<li><a href="{{ url('/home') }}"><i class="fa fa-user"></i>Profile</a></li>
								<li><a href="post-job" class="post-jobs">Post jobs</a></li>
								<li><a href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
							@else
							   <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i>login</a></li>
								@if (Route::has('register'))
									<li><a href="{{ route('register') }}"><i class="fa fa-user"></i>sign up</a></li>
								@endif 
							@endauth   
                        </ul>
                     </div>
					@endif 
                  </div>
               </div>
            </div>
         </div>
      </header>