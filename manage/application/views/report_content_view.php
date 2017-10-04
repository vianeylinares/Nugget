<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<h2 class = "item-title">Historial de generacion de cupones de '<?php echo $business_name; ?>'</h2>
			
			<?php
			$mailChimpCount = 0;
						
			foreach ($business as $row) {
				
				if($row->id != 1){
					
					$mailchimp = $row->mc;
					
					if($mailchimp == 0){ $mailChimpCount++; }
														
				}
			}
			?>
			
			<?php
			if(!isset($_POST['email_register'])){
				?>
				
				<div style = "text-align: right; padding: 10px;">
					<?php
					if($mailChimpCount == 0){
						
						echo "No hay emails por registrar en MailChimp.";
						
					} else {
												
						$attributes = array(
						    'style' => 'padding: 5px',
						    'name' => 'email_register',
						    'value' => 'Registrar!',
						);
					
						
						echo "Hay " . $mailChimpCount . " emails sin registrar en MailChimp.";
						
						if($business_listID != ""){
							
							echo form_open('');
								echo "<br>" . form_submit($attributes);
							echo form_close();
							
						} else if($business_listID == ""){
							
							echo "<br>Es necesario generar el listID en MailChimp para registrar emails.";
							
						}
							
						
					
					}
					?>
				</div>
				<?php
				} else if(isset($_POST['email_register'])){
					?>
				
				<div style = "text-align: right; padding: 10px;">
					<?php		
						//echo "estoy aqui!";	
						//print_r($business);
						include_once('mailchimp/mailchimp.php');
						
						foreach ($business as $row) {
							
							if($row->id != 1 && $row->mc != 1){
								
								$name = $row->nombre;
								$email = $row->email;							
						
								$MailChimp = new \Drewm\MailChimp('bcbf36abc4635493ea7a199b7e43d277-us9');
								$result = $MailChimp->call('lists/subscribe', array(
								                'id'                => $business_listID,
								                'email'             => array('email' => $email),
								                'merge_vars'        => array('Name' => $name),
								                'double_optin'      => false,
								                'update_existing'   => true,
								                'replace_interests' => false,
								                'send_welcome'      => false,
								            ));
								
								
								if(isset($result['status'])){
										
									echo "Hubo un error. Intente de nuevo";
									echo "<br>";
									//print_r($result);
								
								} else if(!isset($result['status'])){
									
									echo "<br>" . $name . " con email " . $email . " ha sido registrado en MailChimp.";	
									//print_r($result);
														
									$data = array(
				
										'mc' => 1,
																				
									); 
									
									$this->db->where('id', $row->id);
									$this->db->update($business_table, $data);
									
									
								}
							}
						}
						
					?>
				</div>
				<?php	
				}
					
			?>
			
			<?php
			if(!isset($_POST['email_register'])){
			?>
				<table class = "myOtherTable">
						
						<tr class = "table-title">
							<td>Cupon</td><td>Nombre</td><td>Email</td><td>Fecha</td><td>Hora</td><td>Formato</td><td>Observaciones</td><td>MailChimp</td>
						</tr>
						
						<tr>
						
							<?php
							
							$mailChimpCount = 0;
							
							foreach ($business as $row) {
								
								if($row->id != 1){
									$number = $row->numero;
									$name = $row->nombre;
									$email = $row->email;
									$date = $row->fecha;
									$time = $row->hora;
									$format = $row->formato;
									$observations = $row->observaciones;
									$mailchimp = $row->mc;
									
									if($mailchimp == 0){ $mailchimp = "No"; }
									if($mailchimp == 1){ $mailchimp = "Yes"; }
									
								
									?>
									
									
									
									<td><?php echo $number; ?></td><td><?php echo $name; ?></td><td><?php echo $email; ?></td><td><?php echo $date; ?></td><td><?php echo $time; ?></td><td><?php echo $format; ?></td><td><?php echo $observations; ?></td><td><?php echo $mailchimp; ?></td>
									
									<?php
								}
								
								?>
					
					
							
						
						
						</tr>
						
							
						<?php
						
						}
					
					?>
				
				</table>
				
			<?php
			}
			?>
		
		
	</div>
		
	
</div>
