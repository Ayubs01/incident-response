<main id="main" class="main">
	<section class="section">
		<div class="row">
			<div class="col-md-8 mx-auto">
				<div class="card">
					<div class='overlay-div invisible'>
						<div>
							<div class='spinner-border text-info' role='status'>
								<span class='visually-hidden'>Loading...</span>
							</div>
						</div>
					</div>

					<div class="card-body mt-3">
						<?php

							echo $web_app->showAlert( $msg ); 

							if ( $user_data ) 
							{
						?>
							<table class='table datatable table-responsive table-striped' id='my_datatable' style='width: 100%' >
								<thead>
									<tr>
										<th>S/N</th>
										<th>Incident Type</th>
										<th>Location</th>
										<th>Date</th>
									
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>S/N</th>
										<th>Incident Type</th>
										<th>Location</th>
										<th>Date</th>
									</tr>
								</tfoot>
								<tbody>

									<?php
										$sn = 0;
										$tr_content = '';

										//looping through records
										foreach ( $user_data as $user_dt )
										{

											$id = $user_dt[ 'id' ];
											$full_name = $user_dt[ 'full_name' ];
											$matric_no = $user_dt[ 'matric_no' ];
											$email = $user_dt[ 'matric_no' ];
							

											$sn++;

											$tr_content .= "<tr>
												<td class='fw-light'> $sn </td>
												<td class='fw-light'> $full_name </td>
												<td class='fw-light'> $matric_no </td>
												<td class='fw-light'> $email </td>
										
											</tr>";
										}

										echo $tr_content .= '</tbody></table>';
									}
								?>
							</div>
						</div>

					</div>
				</div>
			</section>
		</main> 



