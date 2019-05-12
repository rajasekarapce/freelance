	@include('layouts.header')
       
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Change Password</h3>
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
                           <li><a href="#">candidates</a></li>
                           <li class="active-breadcromb"><a href="#">Change Password</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Candidate Dashboard Area Start -->
      <section class="candidate-dashboard-area section_70">
         <div class="container">
            <div class="row">
               @include('company.left')
               <div class="col-lg-9 col-md-12">
                  <div class="dashboard-right">
                     <div class="change-pass manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Change Password</h3>
                        </div>
                        <form>
                           <p>
                              <label for="old_pass">Old Password</label>
                              <input type="password" placeholder="*******" id="old_pass">
                           </p>
                           <p>
                              <label for="new_pass">New Password</label>
                              <input type="password" placeholder="*******" id="new_pass">
                           </p>
                           <p>
                              <label for="confirm_pass">confirm Password</label>
                              <input type="password" placeholder="*******" id="confirm_pass">
                           </p>
                           <p>
                              <button type="submit">Update</button>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
    @include('layouts.footer')