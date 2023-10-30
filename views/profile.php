	 <!-- ======= About Us Section ======= -->
	 <section id="about" class="about">
	 	<div class="container" data-aos="fade-up">

	 		<div class="card shadow mx-auto ol-md-6 col-lg-4">
	 			<div class="card-body">
	 				<form method="POST" enctype="multipart/form-data">

	 					<h3 class="card-title pb-0 fs-4">Edit</h3>
	 					<?= $web_app->showAlert( $msg ) ?>
	 					<h6 class="">Please, fill in the details below!</h6>
	 					<div class="row">
	 						<div class="form-group col-md-12 mt-2">
	 							<label class=" fw-bold" for="full_name">FullName <span class="text-danger">*</span></label>
	 							<input type="text" name="full_name" class="form-control" id="full_name" placeholder="Enter FullName" maxlenght="100" required value="<?= $web_app->persistData( $full_name, true, $clear )  ?>">
	 						</div>

	 						<div class="form-group col-md-12 mt-2">
	 							<label class=" fw-bold" for="email">Email <span class="text-danger">*</span></label>
	 							<input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" readonly required value="<?= $web_app->persistData( $email, true, $clear )  ?>">
	 						</div>

	 						<div class="form-group col-md-12 mt-2">
	 							<label class=" fw-bold" for="matric_no">Matric Number <span class="text-danger">*</span></label>
	 							<input type="text" name="matric_no" class="form-control" id="matric_no" placeholder="Enter Matric Number" maxlenght="50" required value="<?= $web_app->persistData( $matric_no, true, $clear )  ?>">
	 						</div>

	 						
	 						<div class="form-group col-md-12 mt-2">
	 							<label class=" fw-bold" for="img">Image <span class="text-danger">*</span></label>
	 							<input type="file" name="img" class="form-control" id="img" maxlenght="50" required value="<?= $web_app->persistData( $full_name, true, $clear )  ?>">
	 						</div>

	 						<div class="form-group col-md-12 mt-2">
	 							<label class=" fw-bold" for="phone_no">Phone Number <span class="text-danger">*</span></label>
	 							<input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter Phone Number" maxlenght="50" required value="<?= $web_app->persistData( $phone_no, true, $clear )  ?>">
	 						</div>
	 						
	 						
	 						<div class="text-center mt-3 mb-2">
	 							<button type="submit" name="reg_btn" class="appointment-btn btn fw-bold">Update</button>
	 						</div>
	 						
	 					</div>
	 				</form>

	 				<!-- END FORM -->
	 			</div>
	 		</div>


	 	</div>
	 </section><!-- End About Us Section -->

