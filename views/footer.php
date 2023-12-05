 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright 
          <?= date('Y') ?>
      <strong><span><?= $website_title ?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- Developed by --> 
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="assets/vendor/tinymce/tinymce.min.js"></script>

  <!-- datatables -->
  <script src="assets/vendor/new_datatables/datatables.min.js" ></script>
  <script src="assets/vendor/new_datatables/pdfmake.min.js" ></script>
  <script src="assets/vendor/new_datatables/vfs_fonts.min.js" ></script>

  <script src="assets/vendor/select2/js/select2.min.js" ></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

    <script type="text/javascript">
    $( document ).ready( () => {
      $('#my_datatable, #my_datatable_2').DataTable({
        responsive: true,
        dom: 'Bfrtip',
        buttons: [ ],
        pageLength: 500,
        bLengthChange: false
      });
    } );
  </script>
  
</body>

</html>