    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact my-5 mt-5">
      <div class="container my-5">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>
        <h4> Contact us now to know how we may help...</h4>

      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-md-6">

            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h6>abc</h6>
                  <h6>efd</h6>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h6><span class="bx bx-phone-call"></span> 234 </h6>
                  <h6><span class="bx bx-envelope"></span> info@abc.com</h6>
                </div>
              </div>

              <div class="col-md-12 ">
                <iframe style="border:0; width: 100%; height: 200px;" src="" frameborder="0" allowfullscreen></iframe>
              </div>

            </div>

          </div>

          <div class="col-md-6">
            <form method="POST" role="form" class="php-email-form">
              <h3 class="mb-3"><strong>Contact Form</strong></h3>

              <?= $web_app->showAlert( $msg ) ?>

              <h6>Please, fill in the details below!</h6>
              <div class="row">
                <div class="col form-group col-md-6 mt-3">
                  <label class="fw-bold" for="name">Name <span class="text-danger">*</span></label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="<?= $web_app->persistData( 'name' ) ?>" required maxlenght="200">
                </div>
                <div class="col form-group col-md-6 mt-3">
                  <label class="fw-bold" for="email">Email <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?= $web_app->persistData( 'email' ) ?>" required maxlenght="200">
                </div>
                <div class="form-group col-md-6 mt-3">
                  <label class="fw-bold" for="phone_no">Phone Number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="Enter Phone Number" value="<?= $web_app->persistData( 'phone_no' ) ?>" required maxlenght="20">
                </div>
                <div class="form-group col-md-6 mt-3">
                  <label class="fw-bold" for="subject">Subject <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter Subject" value="<?= $web_app->persistData( 'subject' ) ?>" required maxlenght="200">
                </div>
                <div class="form-group col-md-12 mt-3">
                  <label class="fw-bold" for="message">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control" name="message" rows="5" placeholder="Enter Message" required maxlenght="2000"><?= $web_app->persistData( 'message' ) ?></textarea>
                </div>
                
                <div class="text-center mt-3">

                <button type="submit" name="submit_btn">Send Message</button></div>

              </div>
            </form>
          </div>
      </div>
    </section><!-- End Contact Section -->