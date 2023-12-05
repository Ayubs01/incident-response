	 <!-- ======= About Us Section ======= -->
	 <section id="about" class="about my-5">
	 	<div class="container my-5" data-aos="fade-up">

	 			<div class="card shadow mx-auto col-md-6 col-lg-4">
	 				<div class="card-body">
	 					<form method="POST" enctype="multipart/form-data">

	 						<h3 class="card-title pb-0 fs-4">Sign Up</h3>
	 						<?= $web_app->showAlert( $msg ) ?>
	 						<h6 class="">Please, fill in the details below!</h6>
	 						<div class="row">
	 							<div class="form-group col-md-12 mt-1">
	 								<label class=" fw-bold" for="full_name">Full Name <span class="text-danger">*</span></label>
	 								<input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter Full Name" maxlenght="50" required value="<?= $web_app->persistData( 'full_name', false, $clear ) ?>">
	 							</div>

								 <div class="form-group col-md-12 mt-1">
									<label class=" fw-bold" for="email">Email <span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required value="<?= $web_app->persistData( 'email', false, $clear )  ?>">
								</div>

								<div class="form-group col-md-12 mt-1">
									<label class=" fw-bold" for="matric_no">Matric Number <span class="text-danger">*</span></label>
									<input type="text" name="matric_no" class="form-control" id="matric_no" placeholder="Enter Matric Number" maxlenght="200" required value="<?= $web_app->persistData( 'matric_no', false, $clear )  ?>">
								</div>

								<div class="form-group col-md-12 mt-1">
									<label class=" fw-bold" for="phone_no">Phone Number <span class="text-danger">*</span></label>
									<input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter Phone Number" maxlenght="15" required value="<?= $web_app->persistData( 'phone_no', false, $clear )  ?>">
								</div>

								<div class="form-group col-md-12 mt-1">
									<label class=" fw-bold" for="pword">Password <span class="text-danger">*</span></label>
									<input type="password" name="pword" class="form-control" id="pword" placeholder="Enter Password" maxlenght="20" required value="<?= $web_app->persistData( 'pword', false, $clear )  ?>">
								</div>
								<div class="form-group col-md-12 mt-1">
									<label class=" fw-bold" for="con_pword">Confirm Password <span class="text-danger">*</span></label>
									<input type="password" name="con_pword" class="form-control" id="con_pword" placeholder="Enter Confirm Password" maxlenght="20" required value="<?= $web_app->persistData( 'con_pword', false, $clear )  ?>">
								</div>

								<div class="text-center mt-3">
									<button type="submit" name="reg_btn" class="appointment-btn btn fw-bold">Sign Up</button>
								</div>
								<div class="col-md-12 mt-1">
									<p class="text-center ">Already have an account? <a href="login">Log In</a></p>
								</div>
							</div>
						</form>

						<!-- END FORM -->
					</div>
				</div>


		</div>
	</section><!-- End About Us Section -->

