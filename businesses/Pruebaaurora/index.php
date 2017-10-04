<?php
	include_once("include/connections.php");
	include_once("include/mobile_detect.php");
		
	$idR = mt_rand(10000, 99999);
	//define("idRate", $idR);
	//echo idRate;
	$result = mysqli_query($connection,"SELECT * FROM businesses WHERE id = " . DB_ID);
				
	while($row = mysqli_fetch_array($result)) {
		
		if($row['enabled'] == 0){
			
			header("Location: http://www.click-mx.com/");
			exit;
			
		}
		
		$detect = new Mobile_Detect;
		
		if(!$detect->isMobile())
			{
				$device = "normal";
							
			}
			
		if($detect->isTablet())
			{
				$device = "normal";
				
			}
		
		if($detect->isMobile() && !$detect->isTablet())
			{
				$device = "mobile";
				
			} 
		
		
	
		$aStyle = "#" . $row['text_content_color'];
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<?php if($row['font_link'] != ""){ echo $row['font_link']; } ?>
		<script type = "text/javascript">device = "<?php echo $device; ?>";</script>
		<script type = "text/javascript" src="jquery-1.11.1.min.js"></script>
		<script type = "text/javascript" src="functions.js"></script>
		<?php if($row['type'] == 'Simple'){ ?>
			<script type = "text/javascript">
				
				
				//window.onbeforeunload = confirmExit;
				
				function confirmExit()
				  {
				  	if(clickFlag == 0 && !(/Firefox/i.test(navigator.userAgent))){
				  		userPosition = "popup";
				  		return "Queremos que disfrutes de las mejores promociones.\nPor favor, danos tu opinion.\nGracias!";
				  	}
				  
				    	
				  }
				  
				function clicks(){
					if(clickFlag == 0){
						result = confirm("Queremos que disfrutes de las mejores promociones.\nPor favor, danos tu opinion.\nGracias!");
						//return false;
					
						if(result == true){
							userPosition = "popup";
							return false;
						} else if(result == false){
							return true;
						}
					
					}
				}
				
			</script>
		<?php } ?>
		
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
				$style_placeholder = $row['font_family'];
			} else {
				$style .= "font-family: Arial, Helvetica, sans-serif;";
				$style_placeholder = "font-family: Arial, Helvetica, sans-serif;";
			}
	
		?>
		
		<style>
			.description a,
			.description a:hover,
			.description a:visited{
				color: <?php echo $aStyle; ?>;
				font-weight: bold;
				
			}
			
			::-webkit-input-placeholder { /* WebKit browsers */
			    <?php echo $style_placeholder; ?>;
			}
			:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
			   <?php echo $style_placeholder; ?>;
			}
			::-moz-placeholder { /* Mozilla Firefox 19+ */
			   <?php echo $style_placeholder; ?>;
			}
			:-ms-input-placeholder { /* Internet Explorer 10+ */
			   <?php echo $$style_placeholder; ?>;
			}
			
		</style>
				
		<title>
			<?php echo $row['business_name']; ?>
		</title>
	</head>
	
	
	
	<body style = "<?php echo $style; ?>" <?php if($row['type'] == 'Simple'){ ?> onload = "test(<?php echo $idR; ?>, '<?php echo $device; ?>')" <?php } ?>>
		
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
			
			<div class = "description" <?php if($row['text_content_color'] != "") { echo "style = \"color: #" . $row['text_content_color'] . "\"";  } ?>>
				
				<h2><?php echo $row['content_title']; ?></h2>
				
								
				<?php echo $row['content']; ?>
				
				<?php
					
					if(($row['feature_one'] != "") || ($row['feature_two'] != "") || ($row['feature_three'] != ""))
					{
					?>

						<ul>
							<?php if($row['feature_one'] != ""){ ?>
								<li><?php echo $row['feature_one']; ?></li>
							<?php } ?>
							<?php if($row['feature_two'] != ""){ ?>
								<li><?php echo $row['feature_two']; ?></li>
							<?php } ?>
							<?php if($row['feature_three'] != ""){ ?>
								<li><?php echo $row['feature_three']; ?></li>
							<?php } ?>
						</ul>

					<?php 
					}
				
				?>


				
			</div>
			
			
			<?php		
			
			if($row['type'] == 'Basico'){
				
				
				
				?>
						
				<div class = "coupon">
					
					<img src = "<?php echo $row['coupon_image']; ?>">
					
				</div>
				
				<?php
			
			}
							
			
			if($row['type'] == 'Simple'){
				
				if($row['coupons_generated'] != $row['coupons_total']){
				
					
				
				?>
			
			
			
				
				<div class = "coupon">
					<!--<div class="divClass" data-webRating="0" data-webRatingN="0" data-webRatingArg='{"type":"book","uid":12}'></div>-->
					<div class = "alternateStarSystem">
						<!--<div class = "back"></div>-->
						<div class = "front">
							<p style = "margin: 5px;" <?php if($row['text_content_color'] != "") { echo "style = \"color: #" . $row['text_content_color'] . "\"";  } ?>>&iquest;Que te parece esta promoci&oacute;n?</p>
							<div class = "starBox">
								<div class = "star"></div>
								<div class = "star"></div>
								<div class = "star"></div>
								<div class = "star"></div>
								<div class = "star"></div>
								<div class = "clearfix"></div>
							</div>
						</div>
					</div>
						<!--<a href = "coupon.php?device=<?php //echo $device; ?>&idR=<?php //echo $idR; ?>" <?php //if(strstr($_SERVER['HTTP_USER_AGENT'],'Firefox')){ ?> onclick = "return clicks();" <?php //} ?>><img class = "imgCoupon" src = "<?php //echo $row['coupon_image']; ?>"></a>-->
						<a href = "coupon.php?device=<?php echo $device; ?>&idR=<?php echo $idR; ?>" onclick = "return clicks();"><img class = "imgCoupon" src = "<?php echo $row['coupon_image']; ?>"></a>
			
				</div>
				
				<?php
			
				} else if($row['coupons_generated'] == $row['coupons_total']){
					
					?>
					
					<div class = "coupon">
					
						No hay cupones disponibles.
					
					</div>
					
					
					<?php					
					
				}
			
			} else if($row['type'] == 'Medio'){
				?>
				
				<div class = "form">
					
					<?php
						
						if(!isset($_POST['enviar'])){
						?>	
							<form class = "business-form" <?php if($row['form_color'] != "") { echo "style = \"background-color: #" . $row['form_color'] . "\"";  } ?> action="index.php" method="post" name="business-form" accept-charset="UTF-8">
								<?php echo "<div style = 'font-size: 18px'>" . $row['form_title'] . "</div>"; ?>
								<input class = "business-input" style = "<?php echo $style_placeholder; ?>" type = "text" name = "nombre" placeholder = "Nombre*" />
								<input class = "business-input" style = "<?php echo $style_placeholder; ?>" type = "text" name = "telefono" placeholder = "Telefono*" />
								<input class = "business-input" style = "<?php echo $style_placeholder; ?>" type = "text" name = "correo" placeholder = "Correo Electronico*" />
								<input class = "business-input" style = "<?php echo $style_placeholder; ?>" type = "text" name = "correo2" placeholder = "Conforma tu correo Electronico*" />
								<textarea class = "business-message" style = "<?php echo $style_placeholder; ?>" name = "mensaje" placeholder = "Mensaje"></textarea>
								
								<?php 
								
									$button_style = $style_placeholder . " ";
								
									if($row['form_button_color'] != "") {
										$button_style .= "background-color: #" . $row['form_button_color'] . "; color: #" . $row['form_color'];
									}
									
								?>				

				
								<input class = "business-button" style = "<?php echo $button_style; ?>" type = "submit" name = "enviar" value = "ENVIAR" onclick = "return validate();" />	
								
							</form>
						<?php
						}
						else if(isset($_POST['enviar'])){
							
							include_once('../../PHPMailer/class.phpmailer.php');
									
							$body = $_POST['mensaje'];
							
							$email = new PHPMailer();
							$email->From      = $_POST['correo'];;
							$email->FromName  = $_POST['nombre'];
							$email->Subject   = 'Solicitud de Información (Desde Click-MX)';
							$email->Body      = $body;
							$email->IsHTML(true);
							$email->CharSet = 'UTF-8';
							$email->AddAddress($row['contact_email']);
							$email->AddCC('contacto@click-mx.com');
							
							date_default_timezone_set("America/Tijuana");
							$today_date = date("m-d-Y");
							
							$nombre = $_POST['nombre'];
							$telefono = $_POST['telefono'];
							$correo = $_POST['correo'];
							$mensaje = $_POST['mensaje'];
							$fecha = $today_date;							
							
							mysqli_query($connection,"INSERT INTO " . DB_TABLE . " (nombre, telefono, correo, mensaje, fecha) VALUES ('{$nombre}', '{$telefono}', '{$correo}', '{$mensaje}', '{$fecha}')");
							
														
							if($email->Send()){
								
								
								?>
							
								<p>
									Sus datos ya fueron enviados.										
								</p>
						
								<?php
								
							} else {
								
								?>
							
								<p>
									Ocurrio un error. Intente de nuevo.
									
								</p>
						
								<?php
							
							}
			
						
						}
						?>

					
				</div>
			<?php	
			}
			?>
			
			<div class = "clearfix"></div>
			
			
			
		</div>
		
		<?php if($row['type'] == 'Simple'){ ?>
			<div id="preload">
			   <img src="on.png" width="1" height="1"/>
			</div>
		<?php } ?>
		
		<footer>
			
			<div class = "contact-information" <?php if($row['text_address_color'] != "") { echo "style = \"color: #" . $row['text_address_color'] . "\"";  } ?>>
				<h2><?php echo $row['contact_legend']; ?></h2>
				<h2 <?php if($row['text_address_color'] != "") { echo "style = \"color: #" . $row['text_address_color'] . "\"";  } ?>>ENCU&Eacute;NTRANOS EN:</h2>
				
				<?php echo $row['contact_address']; ?>
				
			</div>
			
			<div class = "map">
				
				<?php echo $row['map']; ?>
				
			</div>
			
			<div class = "clearfix"></div>
			
		</footer>
	
			<?php
				
				if($row['m_tag_enable'] == 1){
							
					echo $row['form']; 
				}
				if($row['pixel_tag_enable'] == 1){
							
					echo $row['pixel']; 
				}
				
			}?>
		
		
		
	</body>
	
	
	
</html>

<?php
	// 5. Close connection
	if(isset($connection)){
		mysqli_close($connection);
	}
?>