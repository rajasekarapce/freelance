<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="jobguru | Job Board HTML Templates from Themescare">
      <meta name="keyword" content="Job, freelancer, employee, marketplace">
      <meta name="author" content="Themescare">
	  <meta name="_token" content="{{ csrf_token() }}">
      <!-- Title -->
      <title>jobguru</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!--Bootstrap css-->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <!--Font Awesome css-->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!--Magnific css-->
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <!--Owl-Carousel css-->
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
      <!--Animate css-->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!--Select2 css-->
      <link rel="stylesheet" href="assets/css/select2.min.css">
      <!--Slicknav css-->
      <link rel="stylesheet" href="assets/css/slicknav.min.css">
      <!--Bootstrap-Datepicker css-->
      <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
      <!--Jquery UI css-->
      <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
      <!--Perfect-Scrollbar css-->
      <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css">
      <!--Site Main Style css-->
      <link rel="stylesheet" href="assets/css/style.css">
      <!--Responsive css-->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body onload="listingjobs();">
       
       
      <!-- Header Area Start -->
       @include('layouts.header_nav')
      <!-- Header Area End -->
       
       
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Browse Jobs</h3>
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
                           <li class="active-breadcromb"><a href="#">browse jobs</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcromb Area End -->
       
       
      <!-- Top Job Area Start -->
      <section class="jobguru-top-job-area browse-page section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-lg-3">
                  <div class="job-grid-sidebar">
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-location">
                        <h3>location</h3>
                        <div class="job-sidebar-box">
                              <p>
                                 <input type="search" id="prjctlocation" placeholder="Location" onkeypress="listingjobs();">
                              </p>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                                           
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-category">
                        <h3>Category</h3>
                        <div class="job-sidebar-box">
                           <form>
                              <select class="sidebar-category-select-2" name="states[]">
                                 <option value="1">any category</option>
                                 <option value="2">accounting/finance</option>
                                 <option value="3">automotive jobs</option>
                                 <option value="4">construction</option>
                                 <option value="5">design, art & multimedia</option>
                                 <option value="6">education training</option>
                                 <option value="7">restaurent/food</option>
                                 <option value="7">programming/tech</option>
                                 <option value="7">sales/marketing</option>
                                 <option value="7">data science/analysis</option>
                              </select>
                           </form>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <!--<div class="single-job-sidebar sidebar-location">
                        <h3>Date Posted</h3>
                        <div class="date-post-job job-sidebar-box">
                           <div class="form-group form-radio">
                              <input id="last_hour" name="radio" type="radio">
                              <label for="last_hour" class="inline control-label">last hour</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_24" name="radio" type="radio">
                              <label for="last_24" class="inline control-label">Last 24 hours</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_7" name="radio" type="radio">
                              <label for="last_7" class="inline control-label">Last 7 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_14" name="radio" type="radio">
                              <label for="last_14" class="inline control-label">Last 14 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_30" name="radio" type="radio">
                              <label for="last_30" class="inline control-label">Last 30 days</label>
                           </div>
                           <div class="form-group form-radio">
                              <input id="last_all" name="radio" type="radio">
                              <label for="last_all" class="inline control-label">all</label>
                           </div>
                        </div>
                     </div>-->
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-type">
                        <h3>Budget Type</h3>
                        <div class="job-sidebar-box">
                           <ul>
                              <li class="radio">
                                 <input class="radio-spin" type="radio" id="all" name="budget" value="0" onclick="listingjobs();"/>
                                 <label for="all"><span></span>All Job</label>
                              </li>
                              <li class="radio">
                                 <input class="radio-spin" type="radio" id="hourly" name="budget" value="2" onclick="listingjobs();"/>
                                 <label for="hourly"><span></span>Hourly</label>
                              </li>
                              <li class="radio">
                                 <input class="radio-spin" type="radio" id="fixed" name="budget" value="1" onclick="listingjobs();"/>
                                 <label for="fixed"><span></span>Fixed Price</label>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                     <!-- Single Job Sidebar Start -->
                     <div class="single-job-sidebar sidebar-salary">
                        <h3>Filter by Salary</h3>
                        <div class="job-sidebar-box">
                           <p>
                              <input type="text" id="amount" readonly>
                           </p>
                           <div id="slider"></div>
                        </div>
                     </div>
                     <!-- Single Job Sidebar End -->
                      
                  </div>
               </div>
               <div class="col-md-12 col-lg-9">
                  <div class="job-grid-right">
                     <div class="browse-job-head-option">
                        <div class="job-browse-search">
                           <form>
                              <input type="search" id="searchname" onkeypress="listingjobs();" placeholder="Search Jobs Here...">
                              <button type="submit"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                        <div class="job-browse-action">
                           <div class="email-alerts">
                              <input type="checkbox" class="styled" id="b_1">
                              <label class="styled" for="b_1">email alerts for this search</label>
                           </div>
                           <div class="dropdown">
                              <button class="btn-dropdown dropdown-toggle" type="button" id="dropdowncur" data-toggle="dropdown" aria-haspopup="true">Short By</button>
                              <ul class="dropdown-menu" aria-labelledby="dropdowncur">
                                 <li>Newest</li>
                                 <li>Oldest</li>
                                 <li>Random</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- end job head -->
                     <div class="job-sidebar-list-single">
					 
                        <!--<div class="sidebar-list-single">
                           <div class="top-company-list">
                              <div class="company-list-logo">
                                 <a href="#">
                                 <img src="assets/img/company-logo-1.png" alt="company list 1">
                                 </a>
                              </div>
                              <div class="company-list-details">
                                 <h3><a href="#">civil engineer</a></h3>
                                 <p class="company-state"><i class="fa fa-map-marker"></i> Chicago, Michigan</p>
                                 <p class="open-icon"><i class="fa fa-clock-o"></i>2 minutes ago</p>
                                 <p class="varify"><i class="fa fa-check"></i>Fixed price : $800-$1200</p>
                                 <p class="rating-company">4.2</p>
                              </div>
                              <div class="company-list-btn">
                                 <a href="JavaScript:void(0);" class="jobguru-btn">bid now</a>
                              </div>
                           </div>
                        </div>-->
						<span id="dispjobslisting"></span>

                     </div>
                     <!-- end job sidebar list -->
                     <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li>...</li>
                           <li><a href="#">6</a></li>
                           <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                     </div>
                     <!-- end pagination -->
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Top Job Area End -->
       
       
      <!--Jquery js-->
      <script src="assets/js/jquery-3.0.0.min.js"></script>
	  <script>
		var $ = jQuery.noConflict();
	  </script>	
      <!--Popper js-->
      <script src="assets/js/popper.min.js"></script>
      <!--Bootstrap js-->
      <script src="assets/js/bootstrap.min.js"></script>
      <!--Bootstrap Datepicker js-->
      <script src="assets/js/bootstrap-datepicker.min.js"></script>
      <!--Perfect Scrollbar js-->
      <script src="assets/js/jquery-perfect-scrollbar.min.js"></script>
      <!--Owl-Carousel js-->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!--SlickNav js-->
      <script src="assets/js/jquery.slicknav.min.js"></script>
      <!--Magnific js-->
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <!--Select2 js-->
      <script src="assets/js/select2.min.js"></script>
      <!--jquery-ui js-->
      <script src="assets/js/jquery-ui.min.js"></script>
      <!--Main js-->
      <script src="assets/js/main.js"></script>
	  <script>
			function listingjobs(){
            var budget=$("input:radio[name=budget]:checked").val();
            if(budget == undefined){
               budget=0;
            }
               
				$.ajaxSetup({
					headers: {
					  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
					}
				});
				$.ajax({
					url : '{{URL::to('viewalljobs')}}',
					method: 'get',
					data: {
						name: $('#searchname').val(),
                  prjctlocation: $('#prjctlocation').val(),
                  budgettype: budget
						//price: jQuery('#price').val()
					},
					success: function(result){
						var resCount = result.data.length;
						var disp = "";
						for(var j=0; j<resCount; j++){						
							disp += "<div class='sidebar-list-single'><div class='top-company-list'>";
								disp +="<div class='company-list-logo'><a href='#'><img src='assets/img/company-logo-1.png' alt='company list 1'></a></div>";
								disp +="<div class='company-list-details'>";
										disp +="<h3><a href='#'>"+result.data[j].title+"</a></h3>";
										disp +="<p class='company-state'><i class='fa fa-map-marker'></i> "+result.data[j].prjctlocation+", "+result.data[j].countryname+"</p>";
										disp +="<p class='open-icon'><i class='fa fa-calendar'></i>"+result.data[j].created_at+"</p>";
										disp +="<p class='varify'><i class='fa fa-check'></i>Fixed price : $"+result.data[j].minRate+"-$"+result.data[j].maxRate+"</p>";
										disp +="<p class='rating-company'>4.2</p>";
								disp +="</div>";
								disp +="<div class='company-list-btn'><a href='\projectdetail' class='jobguru-btn'>bid now</a></div>";
							disp +="</div></div>";
						}
						$('#dispjobslisting').html(disp);
					}
				});
			}
	  </script>
   </body>
</html>