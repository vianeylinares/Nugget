<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<h2 class = "item-title">Reporte de Ratings de '<?php echo $business_name; ?>'</h2>
			
			
			<div class = "freq-table">
				
				<table class = "myOtherTable">
					
					<tr class = "table-title">
						<td>Rating</td><td>Frecuencia</td>
					</tr>
					
					<tr style = "text-align: center">
					
						<?php
						
						$total = 0;
						
						for($i = 5; $i >= 1; $i--){
							
							$freq = 0;
							$rating = $i;
							foreach ($business_rating as $row) {
																	
										if($row->rating == $rating){
											$freq = $freq + 1;
											$total = $total + 1;
										}
									
							}	
							?>
							
							<td style = "text-align: center"><?php echo $rating; ?></td><td style = "text-align: center"><?php echo $freq; ?></td>
								
						</tr>
													
						<?php
					
					} ?>
					
					<tr>	
						
						<td style = "text-align: center; border-top: 1px solid #54575C">Total</td><td style = "text-align: center; border-top: 1px solid #54575C"><?php echo $total; ?></td>
								
					</tr>
						
				</table>
				
				
			</div>
			
			<div class = "average">
				
				<?php
					
					$ratingTotal = 0;
					$ratingSum = 0;
					
					foreach ($business_rating as $row) {
																	
								$ratingSum = $ratingSum + $row->rating; 
								$ratingTotal = $ratingTotal + 1;
							}
					
					if($ratingTotal == 0){
						
						echo "<span style = 'font-weight: bold'>No hay datos disponibles</span>";
						
					} else {
						
						$average = $ratingSum / $ratingTotal;
					
						echo "<span style = 'font-weight: bold'>Promedio: </span>" . $average;
						
					}
						
				
				?>
				
			</div>
			
			<?php 
			
				if($ratingTotal != 0){
			
				?>
			
				<div class = "csv-download">
					<input id = "rating-table" type = "hidden" value = "<?php echo $business; ?>" />
					<input id = "rating-business" type = "hidden" value = "<?php echo $business_name; ?>" />
					<button id = "rating-file-download">Descargar "CSV"</button>
				</div>
			
				<?php
				
				}
				
				?>
			
			
			<table class = "myOtherTable">
					
					<tr class = "table-title">
						<td>Rating</td><td>Nombre</td><td>Email</td><td>Fecha</td><td>Hora</td><td>Dispositivo</td><td>Pagina/Pop-Up</td>
					</tr>
					
					<tr>
					
						<?php
						
						
						
						foreach ($business_rating as $row) {
							
							
								$rating = $row->rating;
								$name = $row->name;
								$email = $row->email;
								$date = $row->date;
								$time = $row->time;
								$device = $row->device;
								$page_popup = $row->page_popup;
								
								
								
								?>
								
								<td><?php echo $rating; ?></td><td><?php echo $name; ?></td><td><?php echo $email; ?></td><td><?php echo $date; ?></td><td><?php echo $time; ?></td><td><?php echo $device; ?></td><td><?php echo $page_popup; ?></td>
							
					
					</tr>
					
						
					<?php
					
					}
						
					
				
				?>
			
			</table>
		
		
		
	</div>
	
	<?php
	
		
		/*		

		$query = $this->db->query("SELECT * FROM pasteles_feitos_ratings");
		
		
		
		$datas = $this->dbutil->csv_from_result($query);

		if ( ! write_file('./application/views/csv.csv', $datas))
		{
		     echo 'Unable to write the file';
		}
		else
		{*/
			//$this->load->helper('download');
		  //  echo 'File written!!!';
			//$datasi = file_get_contents(base_url().'application/views/csv.csv'); // Read the file's contents
			
			//$name = 'csv1.csv';
			
			//force_download($name,$datasi);
			
		/*	include_once('../PHPMailer/class.phpmailer.php');
									
			$body = '<p>&iexcl;Email test! 
					<br/><br/>
					Test email for CSV file generation. 
					<br/><br/>
					See you soon!</p>';
			
			$email = new PHPMailer();
			$email->From      = 'vianeylinares@gmail.com';
			$email->FromName  = 'Vianey Linares';
			$email->Subject   = 'Prueba de email ';
			$email->Body      = $body;
			$email->IsHTML(true);
			$email->AddAddress('vianeylinares@gmail.com');
			//$email->AddCC('cupones@click-mx.com');
			
			$email->AddAttachment('./application/views/csv.csv');													
		
			$email->Send();
			*/
		//}
				
	?>
		
	
</div>
