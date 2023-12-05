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

<script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyBCKXHqloq_tgJqVsYLc3i6bnRCu1Gwfww", v: "weekly"});</script>

  <script>
    // Initialize and add the map
let map;

async function initMap() {
  // The location of FUT Minna
  const position = { lat: 9.5835546, lng: 6.5463156 };
  // Request needed libraries.
  //@ts-ignore
  const { Map } = await google.maps.importLibrary("maps");
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  // The map, centered at FUT Minna
  map = new Map(document.getElementById("map"), {
    zoom: 5000,
    center: position,
    mapId: "DEMO_MAP_ID",
  });

  // The marker, positioned at FUT Minna
  const marker = new AdvancedMarkerElement({
    map: map,
    position: position,
    title: "FUT Minna",
  });
}

initMap();
  </script>
</body>

</html>