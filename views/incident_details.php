	 <!-- ======= About Us Section ======= -->
	 <section id="about" class="about my-5">
	 	<div class="container my-5" data-aos="fade-up">

	 			<div class="card shadow mx-auto col-md-6 col-lg-4">
	 				<div class="card-body">
	 					<form method="POST" enctype="multipart/form-data">

	 						<h4 class="card-title mt-3">Report Incident</h4>
	 						<?= $web_app->showAlert( $msg ) ?>
	 						<h6 class="">Please, fill in the details below!</h6>
	 						<div class="row">
							  
								<div class="form-group col-md-12 mt-3">
									<label class=" fw-bold" for="inc_date">Date of Inicident<span class="text-danger"> *</span></label>
									<input type="date" name="inc_date" class="form-control" id="inc_date" required value="<?= $web_app->persistData( 'inc_date', false, $clear )  ?>">
								</div>
				

                        <div class="form-group col-md-12 mt-3">
									<label class="fw-bold" for="inc_category">Incident Category <span class="text-danger">*</span></label>
									<div>
										<select name="inc_category" class="form-select" id="inc_category" required>
											<option value="">Select</option>
                                         <?= $web_app->loadIncidentCategory( $web_app->persistData( 'inc_category', false, $clear ) ) ?>
										</select>
									</div>
								</div>
                        <div class="form-group mt-3 col-md-12">
                           <label class="fw-bold" for="file">Images/Audios/Vidoes <span class="text-danger">*</span></label>
                           <input type="file" name="file" class="form-control" id="file" required>
                        </div>

						<div class="form-group mt-3 col-md-12">
                           <label class="fw-bold" for="location">location <span class="text-danger">*</span></label>
                           <input type="text" name="location" class="form-control" id="location" required>
                        </div>

								<div class="form-group col-md-12 mt-3">
									<label class="fw-bold" for="description">Description <span class="text-danger">*</span></label>
									<textarea type="text" name="description" class="form-control" rows="3" id="description" placeholder="Enter Description" maxlenght="1000" required><?= $web_app->persistData( 'description', false, $clear )  ?></textarea>
								</div>
	 					<div id="map">	


						</div>
								<div class="text-center mt-3 mb-2">
									<button type="submit" name="report_btn" class="appointment-btn btn fw-bold">Report</button>
								</div>
								 
							</div>
						</form>

						<!-- END FORM -->
					</div>
				</div>


		</div>
	</section><!-- End About Us Section -->

