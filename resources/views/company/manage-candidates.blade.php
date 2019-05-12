	@include('layouts.header')
       
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
         <div class="breadcromb-top section_100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="breadcromb-box">
                        <h3>Manage Candidates</h3>
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
                           <li><a href="#">employer</a></li>
                           <li class="active-breadcromb"><a href="#">Manage Candidates</a></li>
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
               <div class="col-md-12 col-lg-9">
                  <div class="dashboard-right">
                     <div class="manage-jobs manage-candidates">
                        <div class="manage-jobs-heading">
                           <h3>Manage Candidates</h3>
                        </div>
                     </div>
                     <div class="candidate-list-page">
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-2.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">Tammy Dixon</a></h3>
                                       <img src="assets/img/de.svg" alt="region">
                                    </div>
                                    <p>UI/UX Designer</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-1.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">Sebastiano Piccio</a></h3>
                                       <img src="assets/img/au.svg" alt="region">
                                    </div>
                                    <p>Web Developer</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-4.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">Kathy Crawford</a></h3>
                                       <img src="assets/img/gb.svg" alt="region">
                                    </div>
                                    <p>Laravel Dev</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-3.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">david kamal </a></h3>
                                       <img src="assets/img/de.svg" alt="region">
                                    </div>
                                    <p>UI/UX Designer</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-2.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">david kamal </a></h3>
                                       <img src="assets/img/pl.svg" alt="region">
                                    </div>
                                    <p>UI/UX Designer</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
                        <div class="single-candidate-list">
                           <div class="main-comment">
                              <div class="candidate-image">
                                 <img src="assets/img/msg-2.png" alt="author">
                              </div>
                              <div class="candidate-text">
                                 <div class="candidate-info">
                                    <div class="candidate-title">
                                       <h3><a href="#">david kamal </a></h3>
                                       <img src="assets/img/de.svg" alt="region">
                                    </div>
                                    <p>UI/UX Designer</p>
                                 </div>
                                 <div class="candidate-text-inner">
                                    <p class="rating-company">4.9</p>
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star-half-o"></i></li>
                                    </ul>
                                 </div>
                                 <div class="candidate-text-bottom">
                                    <div class="candidate-text-box">
                                       <p class="open-icon"><i class="fa fa-thumbs-up"></i> 100% job success</p>
                                       <p class="company-state"><i class="fa fa-map-marker"></i> Berlin</p>
                                       <p class="varify"><i class="fa fa-check"></i> $50 / hr</p>
                                    </div>
                                    <div class="candidate-action">
                                       <a href="#" class="jobguru-btn-2">Approve</a>
                                       <a href="#" class="jobguru-btn-danger">Cancel</a>
                                    </div>
                                 </div>
                                 <div class="remove-icon">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Single Candidate List -->
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
                        <!-- End Pagination -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Candidate Dashboard Area End -->
       
    @include('layouts.footer')