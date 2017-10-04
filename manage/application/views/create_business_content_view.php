<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<?php
		
			if(!isset($_POST['create'])){
		
				//foreach ($business as $row) {
						
									
					echo "<h2>Introduzca los datos del nuevo negocio:</h2>";
					
					echo form_open('manage/create_business/' . $business_type);
					
					$data = array(
		              'name'        => 'business_type',
		              'class'       => 'business-data',
		              'value'       => $business_type,
		              'size'        => '15',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
					
					echo "<div class = \"business-issues\">Tipo de negocio: " . form_input($data) . "</div>";
					
					date_default_timezone_set("America/Tijuana");
					$today_date = date("m-d-Y");
									
					$data = array(
		              'name'        => 'creation_date',
		              'class'       => 'business-data',
		              'value'       => $today_date,
		              'size'        => '15',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Fecha de creacion: " . form_input($data) . "</div>";
										
					
					$data = array(
		              'name'        => 'business_name',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Nombre de negocio: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'business_logo',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Logo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					
					$data = array(
		              'name'        => 'content_title',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Titulo de contenido: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > <  </div></div>";
					
					$data = array(
		              'name'        => 'content',
		              'class'       => 'business-data',
		              'value'       => '',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Contenido: " . form_textarea($data) . "</div>";
									
					$data = array(
		              'name'        => 'feature_one',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 1: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'feature_two',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 2: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'feature_three',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 3: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					if($business_type == "Simple")
					{
						$data = array(
			              'name'        => 'coupon_image',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de cupon: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
						
						$data = array(
			              'name'        => 'precoupon_image',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de pre-cupon: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					}
					
					if($business_type == "Basico")
					{
						
						$data = array(
			              'name'        => 'coupon_image',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de negocio: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
						
					}
					
					$data = array(
		              'name'        => 'business_legend',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'        => '150',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Leyenda de negocio: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";

					$data = array(
		              'name'        => 'contact_legend',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Leyenda de contacto: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'contact_address',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Direccion: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'map',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Mapa: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'font_link',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Tipografia - Liga: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'font_family',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Tipografia - Familia: " . form_input($data) . "</div>";
																				
					$data = array(
		              'name'        => 'background_color',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de fondo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'background_image',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Imagen de fondo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					
					$data = array(
		              'name'        => 'content_color',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de contenido: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'text_content_color',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de texto de contenido: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'text_address_color',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de texto de direccion: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					if($business_type == "Medio")
					{
					
						$data = array(
			              'name'        => 'form_title',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'		=> '50',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Titulo de formulario: " . form_input($data) . 
								"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";
					
						$data = array(
			              'name'        => 'form_color',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'		=> '10',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Color de forma: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
						
						$data = array(
			              'name'        => 'form_button_color',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'		=> '10',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Color de boton de forma: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
						
					}
					
					$data = array(
		              'name'        => 'data_base',
		              'class'       => 'business-data',
		              'value'       => '',
		              'size'		=> '20',
		              'style'       => 'width:50%',
		             
		            );
		
					echo "<div class = \"business-issues\">Base de datos: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					if($business_type == "Simple"){
						
						$data = array(
			              'name'        => 'coupon_prefix',
			              'class'       => 'business-data',
			              'value'       => '',
			              
			              'style'       => 'width:50%',
			              
			            );
		
						echo "<div class = \"business-issues\">Prefijo de cupon: " . form_input($data) . 
								"<div class = 'description'>Solo numeros.</div></div>";
						
						$data = array(
			              'name'        => 'coupons_total',
			              'class'       => 'business-data',
			              'value'       => '',
			              
			              'style'       => 'width:50%',
			              
			            );
			
						echo "<div class = \"business-issues\">Total de cupones: " . form_input($data) . 
								"<div class = 'description'>Solo numeros.</div></div>";
					
					}
					
					if($business_type == "Simple"){
					
						$data = array(
				              'name'        => 'contact_email',
				              'class'       => 'business-data',
				              'value'       => 'cupones@click-mx.com',
				              
				              'style'       => 'width:50%',
				              'readonly'	=> 'readonly',
				              
				            );
							
					}
					
					if($business_type == "Medio"){
					
						$data = array(
				              'name'        => 'contact_email',
				              'class'       => 'business-data',
				              //'value'       => 'contacto@click-mx.com',
				              'value'       => '',
				              
				              'style'       => 'width:50%',
				              //'readonly'	=> 'readonly',
				              
				            );
							
					}
					
					if($business_type == "Simple" || $business_type == "Medio")
					{
			
						echo "<div class = \"business-issues\">Email de contacto: " . form_input($data) . "</div>";
					
					}
					
					if($business_type == "Simple" || $business_type == "Medio")
					{
						
						$data = array(
			              'name'        => 'listID',
			              'class'       => 'business-data',
			              'value'       => '',
			              'size'		=> '20',
			              'style'       => 'width:50%',
			             
			            );
			
						echo "<div class = \"business-issues\">Identificador de lista MailChimp: " . form_input($data) . "</div>";
					
					}
					
					$data = array(
			              'name'        => 'm_tag_enable',
			              'class'       => 'business-data',
			              'value'       => '',
	  					  'checked'     => FALSE,
		
			            );
							
					echo "<div class = \"business-issues\">Habilitar Marketing Tag: " . form_checkbox($data) . "</div>";
					
					$data = array(
		              'name'        => 'pixel',
		              'class'       => 'business-data',
		              'value'       => '',
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Etiqueta Pixel: " . form_textarea($data) . "</div>";
					
					$data = array(
			              'name'        => 'pixel_tag_enable',
			              'class'       => 'business-data',
			              'value'       => '',
	  					  'checked'     => FALSE,
		
			            );
							
					echo "<div class = \"business-issues\">Habilitar Pixel Tag: " . form_checkbox($data) . "</div>";
					
					
					if($this->session->userdata('status')){
					
						$data = array(
			              'name'        => 'enabled',
			              'class'       => 'business-data',
			              'value'       => '',
	  					  'checked'     => FALSE,
		
			            );
							
						echo "<div class = \"business-issues\">Habilitado: " . form_checkbox($data) . "</div>";
					}
					
					echo "</table>";
					
					if($business_type == "Basico"){ $validationString = "return validate('Basico');"; }
					if($business_type == "Simple"){ $validationString = "return validate('Simple');"; }
					if($business_type == "Medio"){ $validationString = "return validate('Medio');"; }
					
					$data = array(
		              'name'        => 'create',
		              'class'       => 'data-button',
		              'value'       => 'Crear',
		              'onClick'		=> $validationString,
		              //'onClick'		=> 'return validate();',
		              
		            );
					
					echo form_submit($data);
					
					
					?>
					<script type="text/javascript">
                             CKEDITOR.replace( 'content' );
                             CKEDITOR.replace( 'contact_legend' );
                             CKEDITOR.replace( 'contact_address' );
                    </script>  
					
					<?php
					
					echo form_close();
					
				//}
		
			} else if(isset($_POST['create'])){
				
				$business_type = $this->uri->segment(3);
				
				if(isset($_POST['enabled'])) { $enabled = 1; }
				if(!isset($_POST['enabled'])) { $enabled = 0; }
				
				if(isset($_POST['m_tag_enable'])) { $m_tag_enable = 1; }
				if(!isset($_POST['m_tag_enable'])) { $m_tag_enable = 0; }
				
				if(isset($_POST['pixel_tag_enable'])) { $pixel_tag_enable = 1; }
				if(!isset($_POST['pixel_tag_enable'])) { $pixel_tag_enable = 0; }

				$m_tag = "<script>
					  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
					  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
					  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
					
					  ga('create', 'UA-55549349-1', 'auto');
					  ga('send', 'pageview');
					
					</script>";
							
				$data_business = array(
				
					'type' => $this->input->post('business_type'),
					'creation_date' => $this->input->post('creation_date'),
					'business_name' => $this->input->post('business_name'),
					'logo' => $this->input->post('business_logo'),
					'content_title' => $this->input->post('content_title'),
					'content' => $this->input->post('content'),
					'feature_one' => $this->input->post('feature_one'),
					'feature_two' => $this->input->post('feature_two'),
					'feature_three' => $this->input->post('feature_three'),
					'coupon_image' => $this->input->post('coupon_image'),
					'precoupon_image' => $this->input->post('precoupon_image'),
					'business_legend' => $this->input->post('business_legend'),
					'contact_legend' => $this->input->post('contact_legend'),
					'contact_address' => $this->input->post('contact_address'),
					'map' => $this->input->post('map'),
					'font_link' => $this->input->post('font_link'),
					'font_family' => $this->input->post('font_family'),
					'form' => $m_tag,
					'm_tag_enable' => $m_tag_enable,
					'pixel' => $this->input->post('pixel'),
					'pixel_tag_enable' => $pixel_tag_enable,
					'background_color' => $this->input->post('background_color'),
					'background_image' => $this->input->post('background_image'),
					'content_color' => $this->input->post('content_color'),
					'text_content_color' => $this->input->post('text_content_color'),
					'text_address_color' => $this->input->post('text_address_color'),
					'form_title' => $this->input->post('form_title'),
					'form_color' => $this->input->post('form_color'),
					'form_button_color' => $this->input->post('form_button_color'),
					'data_base' => $this->input->post('data_base'),
					'coupon_prefix' => $this->input->post('coupon_prefix'),
					'coupons_total' => $this->input->post('coupons_total'),
					'coupons_generated' => 0,
					'coupons_available' => $this->input->post('coupons_total'),
					'contact_email' => $this->input->post('contact_email'),
					'listID' => $this->input->post('listID'),
					'enabled' => $enabled,
					
				);
				
				
				$this->db->insert('businesses', $data_business);
				$business_id = $this->db->insert_id();
				
				
				if($this->input->post('business_type') == "Simple"){
						
					// For business table creation //
					$fields = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'constraint' => 11, 
	                                                 'auto_increment' => TRUE,
	                                          ),
	                        'numero' => array(
	                                                 'type' => 'INT',
	                                                 'constraint' => 11,
	                                          ),
	                        'nombre' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '50',
	                                                 'default' => '',
	                                          ),
	                        'email' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '50',
	                                                 'default' => '',
	                                          ),											  
	                        'fecha' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'hora' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'formato' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '4',
	                                                 'default' => '',
	                                          ),
	                        'observaciones' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '100',
	                                                 'default' => '',
	                                          ),
	                        'mc' => array(
	                                                 'type' =>'INT',
	                                                 'constraint' => 2,
	                                                 'default' => 0,
	                                          ),
	                        
	                );
					
					$this->dbforge->add_field($fields);
					
					$this->dbforge->add_key('id', TRUE);
					
					$this->dbforge->create_table($this->input->post('data_base'), TRUE);
					
					$data = array(
					   'numero' => $this->input->post('coupon_prefix'),
					   'nombre' => '',
					   'fecha' => '',
					);
					
					$this->db->insert($this->input->post('data_base'), $data); 
					
					// For business table creation - Rating system //
					$fields = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'constraint' => 11, 
	                                                 'auto_increment' => TRUE,
	                                          ),
	                        'idR' => array(
	                                                 'type' => 'INT',
	                                                 'constraint' => 11,
	                                          ),
	                        'rating' => array(
	                                                 'type' =>'INT',
	                                                 'constraint' => 11,
	                                          ),
	                        'name' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '100',
	                                                 'default' => '',
	                                          ),	
	                        'email' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '50',
	                                                 'default' => '',
	                                          ),										  
	                        'date' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'time' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'device' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '10',
	                                                 'default' => '',
	                                          ),
	                        'page_popup' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '10',
	                                                 'default' => '',
	                                          ),
	                        
	                );
					
					$this->dbforge->add_field($fields);
					
					$this->dbforge->add_key('id', TRUE);
					
					$this->dbforge->create_table($this->input->post('data_base')."_ratings", TRUE);
					
				
				}

				if($this->input->post('business_type') == "Medio"){
					$fields = array(
	                        'id' => array(
	                                                 'type' => 'INT',
	                                                 'constraint' => 11, 
	                                                 'auto_increment' => TRUE,
	                                          ),
	                        'nombre' => array(
	                                                 'type' => 'VARCHAR',
	                                                 'constraint' => '50',
	                                                 'default' => '',
	                                          ),
	                        'telefono' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'correo' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '30',
	                                                 'default' => '',
	                                          ),
	                        'mensaje' => array(
	                                                 'type' =>'TEXT',
	                                                 
	                                          ),
	                        'fecha' => array(
	                                                 'type' =>'VARCHAR',
	                                                 'constraint' => '15',
	                                                 'default' => '',
	                                          ),
	                        'mc' => array(
	                                                 'type' =>'INT',
	                                                 'constraint' => 2,
	                                                 'default' => 0,
	                                          ),
	                        
	                );
					
					$this->dbforge->add_field($fields);
					
					$this->dbforge->add_key('id', TRUE);
					
					$this->dbforge->create_table($this->input->post('data_base'));
					
									
				}
				
				
				mkdir("../businesses/" . $this->input->post('data_base'), 0755);
				mkdir("../businesses/". $this->input->post('data_base') . "/include", 0755);
				
				$myfile = fopen("./base/include/newcon.php", "w") or die("Unable to open file!");
				
											
				$lines = file("./base/include/connections.php");
				
				$result = '';
				
				
				
				$x = sizeof($lines);
				
				
				for ($i = 0; $i < $x; $i++) { 
					
					if($i == 6){
						$result .= "define(\"DB_ID\", \"" . $business_id . "\");";
						
					}
					
					if($i == 7){
						$result .= "define(\"DB_TABLE\", \"" . $this->input->post('data_base') . "\");";
						
					}
					
					if($this->input->post('business_type') == "Medio" || $this->input->post('business_type') == "Simple"){
					
						if($i == 8){
							$result .= "define(\"DB_EMAIL\", \"" . $this->input->post('contact_email') . "\");";
							
						}
						
					}
					
					if(($i != 6) && ($i != 7) && ($i != 8)){
						
						 $result .= $lines[$i];
						
					}
					
				}
				
				
				
				fwrite($myfile, $result);
			
				fclose($myfile);
				
				copy('./base/include/newcon.php', '../businesses/' . $this->input->post('data_base') . '/include/connections.php');
				unlink('./base/include/newcon.php');
				
				copy('./base/include/mobile_detect.php', '../businesses/' . $this->input->post('data_base') . '/include/mobile_detect.php');
				copy('./base/.htaccess', '../businesses/' . $this->input->post('data_base') . '/.htaccess');
				//copy('./base/coupon.php', '../businesses/' . $this->input->post('data_base') . '/coupon.php');
				copy('./base/index.php', '../businesses/' . $this->input->post('data_base') . '/index.php');
				copy('./base/styles.css', '../businesses/' . $this->input->post('data_base') . '/styles.css');
				copy('./base/functions.js', '../businesses/' . $this->input->post('data_base') . '/functions.js');
				copy('./base/jquery-1.11.1.min.js', '../businesses/' . $this->input->post('data_base') . '/jquery-1.11.1.min.js');				
				copy('./temp/' . $this->input->post('business_logo'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('business_logo'));
				copy('./temp/' . $this->input->post('background_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('background_image'));
				
				if($this->input->post('business_type') == 'Simple'){
					
					copy('./base/coupon.php', '../businesses/' . $this->input->post('data_base') . '/coupon.php');
					copy('./temp/' . $this->input->post('coupon_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('coupon_image'));
					copy('./temp/' . $this->input->post('precoupon_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('precoupon_image'));
					copy('./base/arial.ttf', '../businesses/' . $this->input->post('data_base') . '/arial.ttf');
					copy('./base/on.png', '../businesses/' . $this->input->post('data_base') . '/on.png');
					copy('./base/off.png', '../businesses/' . $this->input->post('data_base') . '/off.png');
					copy('./base/process.php', '../businesses/' . $this->input->post('data_base') . '/process.php');
				}
				
				if($this->input->post('business_type') == 'Basico'){
					
					copy('./temp/' . $this->input->post('coupon_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('precoupon_image'));
					
					
				}
				
				//$this->db->query('use click_mx');
				
				$concept = "Creacion de negocio \"" . $this->input->post('business_name') . "\".";
				
				$data_userdata = array(
				
					'username' => $this->session->userdata('username'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa"),
					'concept' => $concept,
					
				);
				
				$this->db->insert('user_history', $data_userdata);
												
				header("Location: " . base_url() . "manage");
				exit;
			}
		
		?>
		
	</div>
		
	
</div>
