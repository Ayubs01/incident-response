<main>
   <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                  <div class="card mb-3">
                     <div class="card-body">

                        <div class="pt-4 pb-2">
                           <h5 class="card-title pb-0 fs-4">Login</h5>
                           <h6>Please, fill in the details below!</h6>
                        </div>

                        <?= $web_app->showAlert( $msg ) ?>
                     
                        <form class="row g-3 needs-validation" method="POST" novalidate>

                           <div class="col-12">
                              <label for="email" class="form-label fw-bold">Email</label>
                              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="<?= $web_app->persistData( 'email' ); ?>" autofocus required>
                              <div class="invalid-feedback">Please enter your email!</div>
                           </div> 

                           <div class="col-12">
                              <label for="pword" class="form-label fw-bold">Password</label>
                              <input type="password" name="pword" class="form-control" id="pword" placeholder="Enter Password" required>
                              <div class="invalid-feedback">Please enter your password!</div>
                           </div>

                           <div class="col-12 mt-4">
                              <button class="btn btn-success w-100" type="submit" name="log_btn">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <p class="text-center ">
                                 Don't have an account? 
                                 <a href="sign-up">Sign Up</a>
                              </p>
                           </div>
                        </form>

                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>

   </div>
</main><!-- End #main -->