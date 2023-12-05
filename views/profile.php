	 <!-- ======= About Us Section ======= -->
	 <section class="section my-5">
      
      <div class="row">
         <div class="col-md-12">
            <div class="card my-5 shadow mx-auto col-md-6 col-lg-4">
               <div class="card-body pt-3">
                  <!-- Bordered Tabs -->
                  <ul class="nav nav-tabs nav-tabs-bordered">
                     <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                     </li>

                     <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                     </li>
                  </ul>
                  <div class="tab-content pt-2">
                     <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
					
						<?= $web_app->showAlert( $msg ) ?>

                        <!-- Profile Edit Form -->
                        <form method="POST" enctype="multipart/form-data">
						<div class="row">
							<div class="form-group col-md-12 mt-3">
								<label class=" fw-bold" for="full_name">FullName <span class="text-danger">*</span></label>
								<input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter FullName" maxlenght="100" required value="<?= $web_app->persistData( $full_name, true, $clear )  ?>">
							</div>

							<div class="form-group col-md-12 mt-3">
								<label class=" fw-bold" for="email">Email <span class="text-danger">*</span></label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" readonly required value="<?= $web_app->persistData( $email, true, $clear )  ?>">
							</div>

							<div class="form-group col-md-12 mt-3">
								<label class=" fw-bold" for="matric_no">Matric Number <span class="text-danger">*</span></label>
								<input type="text" name="matric_no" class="form-control" id="matric_no" placeholder="Enter Matric Number" maxlenght="50" required value="<?= $web_app->persistData( $matric_no, true, $clear )  ?>">
							</div>

							<div class="form-group col-md-12 mt-3">
								<label class=" fw-bold" for="phone_no">Phone Number <span class="text-danger">*</span></label>
								<input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter Phone Number" maxlenght="50" required value="<?= $web_app->persistData( $phone_no, true, $clear )  ?>">
							</div>
							
							<div class="text-center mt-3 mb-2">
								<button type="submit" name="edit_btn" class="appointment-btn btn fw-bold">Update</button>
							</div>
							
						</div>
					</form>

					<!-- End Profile Edit Form -->

                     </div>
                     <div class="tab-pane fade pt-3" id="profile-change-password">
                        <!-- Change Password Form -->
                        <form action="" method="POST">
                           <div class="row">
                              <div class="col-md-6 mb-2">
                                 <label for="new_password" class="form-label fw-bold">New Password <span class="text-danger">*</span></label>
                                 <div>
                                    <input name="new_password" type="password" class="form-control" id="new_password" autofocus required placeholder="New Password" value="<?= $web_app->persistData( 'new_password', false, $clear ) ?>"  >
                                 </div>
                              </div>

                              <div class="col-md-6 mb-2">
                                 <label for="renew_password" class="form-label fw-bold">Re-enter New Password <span class="text-danger">*</span></label>
                                 <div>
                                    <input name="renew_password" type="password" class="form-control" id="renew_password" required placeholder="Re-enter New Password" value="<?= $web_app->persistData( 'renew_password', false, $clear ) ?>" >
                                 </div>
                              </div>

                              <div class="text-center mt-3">
                                 <button type="submit" name="change_btn" class="btn btn-success">Change Password</button>
                              </div>
                           </div>
                        </form><!-- End Change Password Form -->

                     </div>

                  </div><!-- End Bordered Tabs -->
               </div>
            </div>
         </div>
      </div>
      
   </section> 

