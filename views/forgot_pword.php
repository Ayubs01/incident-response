<main id="main">

	<!-- ======= Login Section ======= -->
	<section id="services" class="services section-bg mt-5">
		<div class="container mt-5 pt-5" data-aos="fade-up">
			<div class="section-title">
          <h2>Forgot Password</h2>
        	</div>
			<div class="card mb-3 shadow col-md-6 col-lg-4 mx-auto">
				<div class="card-body">

					<div class="pt-2 pb-2">
						<h3 class="card-title pb-0 fs-4">Forgot Password</h3>
						<h6>Please, fill in the details below!</h6>
					</div>

					<?= $web_app->showAlert( $msg ) ?>

					<form class="row g-3 needs-validation" method="POST" >

						<div class="col-md-12">
							<label for="app_no" class="form-label fw-bold">App Number/E-mail</label>
							<input type="text" name="app_no" class="form-control" id="app_no" placeholder="Enter App Number/E-mail" maxlength="20" value="<?= $web_app->persistData( 'app_no' ) ?>" autofocus required>
							<div class="invalid-feedback">Please enter your app number/e-mail!</div>
						</div> 

						<div class="col-md-12 mt-3 text-center">
							<button class="btn btn-success w-50" type="submit" name="reset_btn">Reset</button>
						</div>
					</form>

				</div>
			</div>

	</div>
</section><!-- End Login Section -->
</main><!-- End #main -->