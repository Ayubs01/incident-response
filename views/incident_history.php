<main id="main" class="main my-5">

   <section class="section">
      
      <div class="row">
         <div class="col-md-6 mx-auto my-5">
            <div class="card">
               <div class="card-body">
    
                  <?php
                     echo $web_app->showAlert( $msg );
      
                     if ( $incident_arr ) 
                     {
                  ?>
                  <div class="mt-2">
                     <?php
                        echo "<table class='table table-responsive table-striped' id='my_datatable' style='width: 100%'>
                        <thead>
                           <tr>
                              <th>S/N</th>
                              <th>Student's Name</th>
                              <th>Incident Type</th>
                              <th>Description</th>
                              <th>Incident Date</th>
                          
                           </tr>
                        </thead>
                        <tfoot>
                           <tr>
                              <th>S/N</th>
                              <th>Student's Name</th>
                              <th>Incident Type</th>
                              <th>Description</th>
                              <th>Incident Date</th>
                           
                           </tr>
                        </tfoot>
                        <tbody>";

                        $sn = 0;
                        $tr_content = '';

                        //looping through records
                        foreach ( $incident_arr as $incident_data ) 
                        {
                           $id = $incident_data[ 'id' ];
                           $name = $incident_data[ 'description' ];
                           $inc_type = $incident_data[ 'inc_type' ];
                           $description = $incident_data[ 'description' ];
                           $inc_date = $incident_data[ 'inc_date' ];
                           $full_name = $incident_data[ 'full_name' ];
                       
                    

                           $sn++;
                           
                           $tr_content .=  "<tr>
                              <td class='fw-light'> $sn </td>
                              <td class='fw-light'> $full_name </td>
                              <td class='fw-light'> $inc_type </td>                              
                              <td class='fw-light'> $description </td>                              
                              <td class='fw-light'> $inc_date </td>                              
                           
                               
                           </tr>";
                        }

                        echo $tr_content .= '</tbody></table>';
                  
                     ?>
                  </div>
                  <?php
                     }
                  ?>
               </div>
            </div>
         </div>
      </div>
      
   </section>  
</main><!-- End #main -->
 