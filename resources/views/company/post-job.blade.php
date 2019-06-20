	@include('layouts.header')
       
          <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Post A job</h3>
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
                           <li><a href="#">Employeer</a></li>
                           <li class="active-breadcromb"><a href="#">Post A job</a></li>
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
				<div class="dashboard-right">
                     <div class="earnings-page-box manage-jobs">
                        <div class="manage-jobs-heading">
                           <h3>Post A new job</h3>
                        </div>
                        
                        @if ($message = Session::get('success'))
                           <div class="alert alert-success">
                                 <p>{{ $message }}</p>
                           </div>
                        @endif
                        <div class="new-job-submission">
                           <!--<form method="post" action="{{ route('post-job') }}">-->
                           <form method="POST" action="{{ route('post-job') }}">
                           @csrf
                           <input type="hidden" name="userID" value="{{ Auth::user()->id }}">
                              <div class="resume-box">
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_title">Job Title:</label>
                                       <input type="text" id="j_title" name="title">
                                    </div>
                                    <div class="single-input">
                                       <label for="j_reg">Job Region:</label>
                                       <select id="j_reg" name="countryId">
                                          <option value='0'>Select Region</option>
                                          <?php foreach($Country as $region){ ?>
                                             <option value="<?php echo $region->id; ?>"><?php echo $region->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="Location">Location:</label>
                                       <input type="text" placeholder="e.g. London" id="Location" name="location">
                                    </div>
                                    <div class="single-input">
                                       <label for="j_type">Job Type:</label>
                                       <select id="j_type" name="jobtypeId">
                                       <option value='0'>Select Job Type</option>
                                          <?php foreach($JobType as $jtype){ ?>
                                             <option value="<?php echo $jtype->id; ?>"><?php echo $jtype->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="j_category">Job Category:</label>
                                       <select id="j_category" name="categoryId">
                                       <option value="0">Select Category</option>
                                          <?php foreach($category as $catg){ ?>
                                             <option value="<?php echo $catg->id; ?>"><?php echo $catg->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                    <div class="single-input">
                                       <label for="External">External Link : <span>(optional)</span></label>
                                       <input type="text" placeholder="http://" id="External" name="externalLink">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild">
                                    <div class="single-input">
                                       <label for="j_desc">What's your budget? (higher budgets attract more quotes)</label>
                                       <select id="budgetstype" name="budgetType" onchange="budget_Type();">
                                          <option value="0">Select Category</option>
                                          <option value="1">Fixed Price</option>
                                          <option value="2">Hourly</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2 hourstype" style="display:none;">
                                    <div class="single-input">
                                       <label for="duration">Job Duration:</label>
                                       <select id="duration" name="jobdurationId">
                                       <option value="0">Select Duration</option>
                                       <?php foreach($jobduration as $jobdur){ ?>
                                             <option value="<?php echo $jobdur->id; ?>"><?php echo $jobdur->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                    <div class="single-input">
                                    <label for="hours">Hours Per Week:</label>
                                       <select id="hours" name="hoursperweekId">
                                       <option value="0">Select Hours</option>
                                          <?php foreach($hoursperweek as $hours){ ?>
                                             <option value="<?php echo $hours->id; ?>"><?php echo $hours->name; ?></option>
                                          <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild feild-flex-2">
                                    <div class="single-input">
                                       <label for="mn_salary">Minimum Rate ($):</label>
                                       <input type="text" placeholder="e.g. 20000" id="mn_salary" name="minRate">
                                    </div>
                                    <div class="single-input">
                                       <label for="mx_salary">Maximum Rate ($):</label>
                                       <input type="text" placeholder="e.g. 50000" id="mx_salary" name="maxRate">
                                    </div>
                                 </div>
                                 <div class="single-resume-feild">
                                    <div class="single-input">
                                       <label for="j_desc">Job Description:</label>
                                       <textarea id="j_desc" name="jobDescription"></textarea>
                                    </div>
                                 </div>
                                 <div class="single-resume-feild upload_file">
                                    <div class="product-upload">
                                       <p>
                                          <i class="fa fa-upload"></i>
                                          Upload Files
                                       </p>
                                       <input type="file" id="w_screen" name="filename">
                                    </div>
                                    <p>Images or documents that might be helpful in describing your job</p>
                                 </div>
                              </div>
                              <div class="single-input submit-resume">
                                 <button type="submit" name="submit">Post Job</button>
                              </div>
                           </form>
                        </div>
                     </div>
                </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
    @include('layouts.footer')

    <script>
      function budget_Type(){
         var budgetstype = $('#budgetstype').val();
         if(budgetstype == 2){
            $('.hourstype').show();
         }else{
            $('.hourstype').hide();
            $('#duration').val('');
            $('#hours').val('');
         }
         
      }
    </script>