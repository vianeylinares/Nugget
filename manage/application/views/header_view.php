<?php echo doctype("html5"); ?>

<script type = "text/javascript">
	
	if( /iPhone|Android|iPad|Symbian|Windows Phone/i.test(navigator.userAgent) ){
		
		window.location.replace("http://www.click-mx.com");
		
	}

</script>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!--<meta name="Viewport" content="width=device-width" />-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no"/>
		<title>Click-MX - Sistema Genenerador de Sitios</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>styles/styles.css">
		<script type = "text/javascript" src="<?php echo base_url(); ?>js/ckeditor/ckeditor.js"></script>
		<script type = "text/javascript" src="<?php echo base_url(); ?>js/jquery-1.11.1.min.js"></script>
		<script type = "text/javascript" src="<?php echo base_url(); ?>js/js.js"></script>

		
	</head>
	<body>
		
		<header>
			<?php
			
				$header_image = array(
					'src' => 'images/clickmx-logo.png',
					'class' => 'logo-image',
				
				);
			
			echo img($header_image);
			
			?>
			
			<div class = "system-title">
				
				Sistema Generador de Sitios
				
			</div>
			
			<div class = "clearfix"></div>
			
			
		</header>