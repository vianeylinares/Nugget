<?php
	include_once("include/connections.php");
?>
<!DOCTYPE html>
<html>
			<?php
				$result = mysqli_query($connection,"SELECT * FROM businesses WHERE id = " . DB_ID);					
				while($row = mysqli_fetch_array($result)){					
					if($row['coupons_generated'] == $row['coupons_total']){					
						header("Location: http://www.click-mx.com");
						exit;						
					}
					
					$device = $_GET['device'];
					$font_family = $row['font_family'];
					$m_tag = $row['form'];
					$m_tag_enable = $row['m_tag_enable'];
					$pixel = $row['pixel'];
					$pixel_tag_enable = $row['pixel_tag_enable'];
			?><head>
				<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
				<link rel="stylesheet" type="text/css" href="styles.css">
				<?php if($row['font_link'] != ""){ echo $row['font_link']; } ?>
				<script type = "text/javascript" src="jquery-1.11.1.min.js"></script>
				<script type = "text/javascript" src="functions.js"></script>
				<script type="text/javascript">
					device = "<?php echo $device; ?>";
				</script>
				<style>
					
					::-webkit-input-placeholder { /* WebKit browsers */
					    <?php echo $row['font_family']; ?>;
					}
					:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
					   <?php echo $row['font_family']; ?>;
					}
					::-moz-placeholder { /* Mozilla Firefox 19+ */
					   <?php echo $row['font_family']; ?>;
					}
					:-ms-input-placeholder { /* Internet Explorer 10+ */
					   <?php echo $row['font_family']; ?>;
					}
			
					
				</style>
				<title>
					<?php echo $row['business_name']; ?> - Cupon
				</title>			
			</head>
			
			<?php 
	
				if($row['background_color'] != "") {
					//echo "style = \"background-color: #" . $row['background_color'] . "\"";  
					$style = "background-color: #" . $row['background_color'] . "; ";
				}

				if($device != "mobile"){
					if($row['background_image'] != "") {
						//echo "style = \"background-color: #" . $row['background_color'] . "\"";  
						$style .= "background-image: url('" . $row['background_image'] . "'); ";
					}
				}
		
				if($row['font_family'] != "") {
					//echo "style = \"background-color: #" . $row['background_color'] . "\"";  
					$style .= $row['font_family'];
				} else {
					$style .= "font-family: Arial, Helvetica, sans-serif;";
				}
		
			?>
			
			<body style = "<?php echo $style; ?>">
				
				<!--<div class = "monitor"></div>-->
				
				<header class = "logo-image">
					
					<img src = "<?php echo $row['logo']; ?>" />
					
				</header>
				
				<?php
				
					if($row['content_color'] != "") {
				
						if($device != "mobile"){
							
							//echo "style = \"background-color: #" . $row['content_color'] . "\"";
							$color = $row['content_color'];
										
							if ($color[0] == '#' ) {
					        	$color = substr( $color, 1 );
					        }
							
							$hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
							$rgb =  array_map('hexdec', $hex);
							$content_color = 'rgba('.implode(",",$rgb).',0.75)';
							
						} else {
							
							$content_color = '#'. $row['content_color'];
							
						}
					}
				
				?>
				
				<div class = "content" <?php if($row['content_color'] != "") { echo "style = \"background-color: " . $content_color . "\""; } ?>>
					
					<h2 class = "coupon-title" <?php if($row['text_content_color'] != "") { echo "style = \"color: #" . $row['text_content_color'] . "\""; }?>>CUP&Oacute;N DESCARGABLE</h2>
					
					<div class = "coupon-contents">
						
						<?php
							
							
					
							if($device == "normal"){
							
							?>
							
								<img class = "pre-coupon" src = "<?php echo $row['precoupon_image']; ?>" />
							
							<?php
							
							} if($device == "mobile"){
									
								if(!isset($_POST['submit'])){
								
									if($row['business_legend'] != ""){
										?>
										
										<p style = "text-align: center; margin-bottom: 25px"><?php echo $row['business_legend']; ?></p>
										
										<?php
									}
								
								}
								
							}

						}					
						
						?>
						
						<?php
						
														
							$result = mysqli_query($connection,"SELECT * FROM " . DB_TABLE . " ORDER BY id DESC LIMIT 1");
							
							while($row = mysqli_fetch_array($result)) {
												
								//$cupon_id = $row['id'];
								$cupon_numero = $row['numero'] + 1;
								//$cupon_nombre = $row['nombre'];
								
								//echo $cupon_numero;
					
							}
							
							
						
						?>
						
						<?php
							if(!isset($_POST['submit'])){
									
								$idR = $_GET['idR'];
								
							?>
							
							
						
							<form action = "coupon.php?device=<?php echo $device; ?>&idR=<?php echo $idR; ?>"  method = "post">
								<input class = "name-space" style = "width: 70%; <?php echo $font_family; ?>;" type = "text" name = "nombre" value = "" placeholder = "Nombre" />
								<br /><br />
								<input class = "name-space" style = "width: 70%; <?php echo $font_family; ?>;" type = "text" name = "email" value = "" placeholder = "Email" />
								<br /><br />
								<input class = "name-space" style = "width: 70%; <?php echo $font_family; ?>;" type = "text" name = "email2" value = "" placeholder = "Confirma tu Email" />
								<br /><br />
								<div style = "background-color: #ffffff; border-radius: 3px; border: 1px solid white; padding-left: 8px; padding-right: 8px; width: 70%;">
									No. Cup&oacute;n: <input class = "number-space" style = "width: 40%; <?php echo $font_family; ?>;" type = "text" name = "numero" value = "<?php echo $cupon_numero; ?>" readonly = "readonly">
								</div>
								<br /><br />
								<input type = "submit" name = "submit" value = "Descargar" class = "button-space" onclick = "return printCoupon();" />
								<br /><br />
							</form>
							
							<?php
							}
						?>
						
						<?php
							if(isset($_POST['submit'])){
								
																	
								date_default_timezone_set("America/Tijuana");
								$today_date = date("m-d-Y");
								$current_time = date("H:i:s");
								
								$nombre = $_POST['nombre'];
								$email_cliente = $_POST['email'];
								$numero = $_POST['numero'];
								$fecha = $today_date;
								$hora = $current_time;
								$device = $_GET['device'];
								
								if($device == "mobile"){ $formato = "JPG"; }
								if($device == "normal"){ $formato = "PDF"; }
								
								$idR = $_GET['idR'];
								
								if($device == "normal"){
										
										$style = "position: absolute; left: 2%";
								} else if($device == "mobile"){
										
										//$style = "position: relative; left: 0%";
										$style = "position: absolute; left: 0%; width: 100%";
										
								}
								
								?>
								
									<p style = "<?php echo $style; ?>">
										Procesando...
										
									</p>
							
								<?php
								
								
								//mysqli_query($connection,"INSERT INTO " . DB_TABLE . " (numero, nombre, email, fecha, hora, formato) VALUES ('{$numero}', '{$nombre}', '{$email_cliente}', '{$fecha}', '{$hora}', '{$formato}')");
								
								$business_data = mysqli_query($connection, "SELECT * FROM businesses WHERE id = " . DB_ID);
								
								while($row = mysqli_fetch_array($business_data)) {
									
									$logo = $row['logo'];
									$precoupon_image = $row['precoupon_image'];
									
									$coupons_generated = $row['coupons_generated'] + 1;
									$coupons_available = $row['coupons_available'] - 1;
									
									$business_name = $row['business_name'];
									$business_email = $row['contact_email'];
							
									
									//mysqli_query($connection, "UPDATE businesses SET coupons_generated = {$coupons_generated}, coupons_available = {$coupons_available} WHERE id = " . DB_ID);
									
									
									
								} 
								
								if($device == "normal"){
								
									include_once('../../dompdf/dompdf_config.inc.php');
									
									$content = '<header style = "position: relative; width: 100%;">
												
													<img src = "'. $logo . '" style = "position: relative; width: 30%; height: auto; margin-left: 35%; margin-bottom: 1%;" />
												
												</header>
												<div style = "position: relative; font-family: Arial, Helvetica, sans-serif;">
												
													<img src = "'. $precoupon_image .'" style = "position: relative; width: 100%; height: auto;" />
																									
													<p style = "position: absolute; top: 5%; left: 5%; background-color: #ffffff; padding: 5px; border-radius: 3px;">Nombre: '.$nombre.'</p>
													<p style = "position: absolute; top: 9%; left: 5%; background-color: #ffffff; padding: 5px; border-radius: 3px;">No. Cupon: '.$numero.'</p>
													
													<p style = "position: absolute; top: 15%; left: 5%; background-color: #ffffff; padding: 5px; border-radius: 3px;">Validado</p>
													
												</div>';
									
									//echo "hello!";
									
									$pdfdoc = new DOMPDF();
									$pdfdoc->load_html($content);
									$pdfdoc->render();
									//$pdfdoc->stream('cupon.pdf');
									//$pdfdoc->output();
									$content = $pdfdoc->Output();
									file_put_contents("cupon.pdf",$content);
									
									
						
								}
									
								
								if($device == "mobile"){

			
									header('Content-type: image/jpg');
									
									// Create Image From Existing File
									$png_image = imagecreatefrompng($precoupon_image);
									
									// Allocate A Color For The Text
									$black_text = imagecolorallocate($png_image, 0, 0, 0);
									$white_box = imagecolorallocate($png_image, 255, 255, 255);
									
									// Set Path to Font File
									$font_path = 'arial.ttf';
									
									// Set Text to Be Printed On Image
									$text_name = "Nombre: " . $nombre;
									$text_coupon_number = "No. Cupon: " . $numero;
									$text_validation = "Validado";
									
												
									$box = @imagettfbbox(14,0,$font_path,$text_name);
									$width = abs($box[4] - $box[0]);
									$height = abs($box[5] - $box[1]);
									
									imagefilledrectangle($png_image, 45, 50, $width+55, $height+58, $white_box);
									imagettftext($png_image, 14, 0, 50, 70, $black_text, $font_path, $text_name);
									
									
									$box = @imagettfbbox(14,0,$font_path,$text_coupon_number);
									$width = abs($box[4] - $box[0]);
									$height = abs($box[5] - $box[1]);
									
									imagefilledrectangle($png_image, 45, 85, $width+55, $height+93, $white_box);
									imagettftext($png_image, 14, 0, 50, 105, $black_text, $font_path, $text_coupon_number);
									
									
									$box = @imagettfbbox(14,0,$font_path,$text_validation);
									$width = abs($box[4] - $box[0]);
									$height = abs($box[5] - $box[1]);
									
									imagefilledrectangle($png_image, 45, 150, $width+55, $height+163, $white_box);
									imagettftext($png_image, 14, 0, 50, 170, $black_text, $font_path, $text_validation);
									
									
									imagejpeg($png_image, 'cupon.jpg');
									
									imagedestroy($png_image);
						
						
									
								}

								include_once('../../PHPMailer/class.phpmailer.php');
									
								$body = '<p>&iexcl;Gracias por descargar nuestra promoci&oacute;n! 
										<br/><br/>
										Adjuntamos a este correo el archivo que podr&aacute;s imprimir para hacer v&aacute;lido el descuento. 
										<br/><br/>
										&iexcl;Hasta pronto!</p>';
								
								$email = new PHPMailer();
								$email->From      = $business_email;
								$email->FromName  = $business_name;
								$email->Subject   = 'Cupon de ' . $business_name;
								$email->Body      = $body;
								$email->IsHTML(true);
								$email->AddAddress($email_cliente);
								$email->AddCC('cupones@click-mx.com');
								
								if($device == "normal"){
								
									$email->AddAttachment('cupon.pdf');
																		
								}
								
								if($device == "mobile"){								
								
									$email->AddAttachment('cupon.jpg');
																	
									
								}
								
								if($device == "normal"){
										//unlink('cupon.pdf');
										$style = "position: absolute; left: 2%";
								} else if($device == "mobile"){
										//unlink('cupon.jpg');
										//$style = "position: relative; left: 0%";
										$style = "position: absolute; left: 0%; width: 100%";
										
								}
								
								if($email->Send()){
									
									$observaciones = ""; 
									
									mysqli_query($connection,"INSERT INTO " . DB_TABLE . " (numero, nombre, email, fecha, hora, formato, observaciones) VALUES ('{$numero}', '{$nombre}', '{$email_cliente}', '{$fecha}', '{$hora}', '{$formato}', '{$observaciones}')");
									mysqli_query($connection, "UPDATE businesses SET coupons_generated = {$coupons_generated}, coupons_available = {$coupons_available} WHERE id = " . DB_ID);
									mysqli_query($connection,"UPDATE " . DB_TABLE . "_ratings SET name = '{$nombre}', email = '{$email_cliente}' WHERE idR = {$idR}");
									
									
									if($device == "normal"){
										unlink('cupon.pdf');
										
									} else if($device == "mobile"){
										unlink('cupon.jpg');
											
											
									}
									
									?>
								
									<p style = "<?php echo $style; ?>">
										El cup&oacute;n ha sido enviado a tu correo.<br/><br/>
										&iexcl;GRACIAS!
										
									</p>
							
									<?php
									
								} else {
									
									?>
								
									<p style = "<?php echo $style; ?>">
										Ocurrio un error. El cup&oacute;n no se genero.<br/><br/>
										Intente de nuevo.
										
									</p>
							
									<?php
									
										$formato .= "X";
										$observaciones = $email->ErrorInfo; 
										mysqli_query($connection,"INSERT INTO " . DB_TABLE . " (numero, nombre, email, fecha, hora, formato, observaciones) VALUES ('{$numero}', '{$nombre}', '{$email_cliente}', '{$fecha}', '{$hora}', '{$formato}', '{$observaciones}')");									
									
									
								}
						
															
							}
							
						?>
						
					</div>
					
				</div>
				
						
			</body>
			
			<?php
				
				if($m_tag_enable == 1){
							
					echo $m_tag; 
				}
				if($pixel_tag_enable == 1){
							
					echo $pixel; 
				}
				
				
			?>
			
			
		</html>
<?php
	// 5. Close connection
	if(isset($connection)){
		mysqli_close($connection);
	}
?>