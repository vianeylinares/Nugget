<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<?php
		
			if(!isset($_POST['update']) && !isset($_POST['delete'])){
		
				foreach ($business as $row) {
					
					echo "<h2>Datos de '" . $row->business_name . "':</h2>";
					
					echo form_open('manage/business/' . $row->id);
					//echo form_open_multipart('manage/business/' . $row->id);
					
					$data = array(
		              'name'        => 'business_type',
		              'class'       => 'business-data',
		              'value'       => $row->type,
		              'size'        => '15',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Tipo de negocio: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'creation_date',
		              'class'       => 'business-data',
		              'value'       => $row->creation_date,
		              'size'        => '15',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Fecha de creacion: " . form_input($data) . "</div>";
					
					
					
					$data = array(
		              'name'        => 'business_name',
		              'class'       => 'business-data',
		              'value'       => $row->business_name,
		              'size'        => '50',
		              'style'       => 'width:50%',
		              //'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Nombre de negocio: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'business_logo',
		              'class'       => 'business-data',
		              'value'       => $row->logo,
		              'size'        => '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Logo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					
					$data = array(
		              'name'        => 'content_title',
		              'class'       => 'business-data',
		              'value'       => $row->content_title,
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Titulo de contenido: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > <  </div></div>";
					
					$data = array(
		              'name'        => 'content',
		              'class'       => 'business-data',
		              'value'       => $row->content,
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Contenido: " . form_textarea($data) . "</div>";
									
					$data = array(
		              'name'        => 'feature_one',
		              'class'       => 'business-data',
		              'value'       => $row->feature_one,
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 1: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'feature_two',
		              'class'       => 'business-data',
		              'value'       => $row->feature_two,
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 2: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					$data = array(
		              'name'        => 'feature_three',
		              'class'       => 'business-data',
		              'value'       => $row->feature_three,
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 3: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * # % = | , > < </div></div>";
					
					if($row->type == "Simple")
					{
						$data = array(
			              'name'        => 'coupon_image',
			              'class'       => 'business-data',
			              'value'       => $row->coupon_image,
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de cupon: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
						
						$data = array(
			              'name'        => 'precoupon_image',
			              'class'       => 'business-data',
			              'value'       => $row->precoupon_image,
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de pre-cupon: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					}
					
					if($row->type == "Basico")
					{
						$data = array(
			              'name'        => 'coupon_image',
			              'class'       => 'business-data',
			              'value'       => $row->coupon_image,
			              'size'        => '25',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Imagen de negocio: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
						
					}

					$data = array(
		              'name'        => 'business_legend',
		              'class'       => 'business-data',
		              'value'       => $row->business_legend,
		              'size'        => '150',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Leyenda de negocio: " . form_input($data) . 
							"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";

					$data = array(
		              'name'        => 'contact_legend',
		              'class'       => 'business-data',
		              'value'       => $row->contact_legend,
		             
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Leyenda de contacto: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'contact_address',
		              'class'       => 'business-data',
		              'value'       => $row->contact_address,
		             
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Direccion: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'map',
		              'class'       => 'business-data',
		              'value'       => $row->map,
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Mapa: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'font_link',
		              'class'       => 'business-data',
		              'value'       => $row->font_link,
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Tipografia - Liga: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'font_family',
		              'class'       => 'business-data',
		              'value'       => $row->font_family,
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Tipografia - Familia: " . form_input($data) . "</div>";
					
					/*if($this->session->userdata('status')){
					
						$data = array(
			              'name'        => 'form',
			              'class'       => 'business-data',
			              'value'       => $row->form,
			             
			              'style'       => 'width:100%',
			              'readonly'	=> 'readonly',
			            );
			
						echo "<div class = \"business-issues\">Marketing Tag: " . form_textarea($data) . "</div>";
						
					}*/
					
					$data = array(
		              'name'        => 'background_color',
		              'class'       => 'business-data',
		              'value'       => $row->background_color,
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de fondo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'background_image',
		              'class'       => 'business-data',
		              'value'       => $row->background_image,
		              'size'		=> '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Imagen de fondo: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Solo imagenes PNG. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > <  </div></div>";
					
					
					
					$data = array(
		              'name'        => 'content_color',
		              'class'       => 'business-data',
		              'value'       => $row->content_color,
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de contenido: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'text_content_color',
		              'class'       => 'business-data',
		              'value'       => $row->text_content_color,
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de texto de contenido: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					$data = array(
		              'name'        => 'text_address_color',
		              'class'       => 'business-data',
		              'value'       => $row->text_address_color,
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de texto de direccion: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					if($row->type == "Medio")
					{
						
						$data = array(
			              'name'        => 'form_title',
			              'class'       => 'business-data',
			              'value'       => $row->form_title,
			              'size'		=> '50',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Titulo de formulario: " . form_input($data) . 
								"<div class = 'description'>Caracteres invalidos: [ ] { } \ ^ + \" ' ; : = | , > < </div></div>";
						
					
						$data = array(
			              'name'        => 'form_color',
			              'class'       => 'business-data',
			              'value'       => $row->form_color,
			              'size'		=> '10',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Color de forma: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
						
						$data = array(
			              'name'        => 'form_button_color',
			              'class'       => 'business-data',
			              'value'       => $row->form_button_color,
			              'size'		=> '10',
			              'style'       => 'width:50%',
			            );
			
						echo "<div class = \"business-issues\">Color de boton de forma: " . form_input($data) . 
								"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					}
					
					$data = array(
		              'name'        => 'data_base',
		              'class'       => 'business-data',
		              'value'       => $row->data_base,
		              'size'		=> '20',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Base de datos: " . form_input($data) . 
							"<div class = 'description'>No espacios en blanco. Caracteres invalidos: [ ] ( ) { } \ / $ ^ + & \" ' ; : * ! ? # % = | , > < . - @ </div></div>";
					
					if($row->type == "Simple")
					{
					
						$data = array(
			              'name'        => 'coupon_prefix',
			              'class'       => 'business-data',
			              'value'       => $row->coupon_prefix,
			              
			              'style'       => 'width:50%',
			              'readonly'	=> 'readonly',
			            );
			
						echo "<div class = \"business-issues\">Prefijo de cupon: " . form_input($data) . 
								"<div class = 'description'>Solo numeros.</div></div>";
						
						$data = array(
			              'name'        => 'coupons_total',
			              'class'       => 'business-data',
			              'value'       => $row->coupons_total,
			              
			              'style'       => 'width:50%',
			              'readonly'	=> 'readonly',
			            );
			
						echo "<div class = \"business-issues\">Total de cupones: " . form_input($data) . 
								"<div class = 'description'>Solo numeros.</div></div>";
						
						$data = array(
			              'name'        => 'coupons_generated',
			              'class'       => 'business-data',
			              'value'       => $row->coupons_generated,
			              
			              'style'       => 'width:50%',
			              'readonly'	=> 'readonly',
			            );
			
						echo "<div class = \"business-issues\">Cupones generados: " . form_input($data) . "</div>";
						
						$data = array(
			              'name'        => 'coupons_available',
			              'class'       => 'business-data',
			              'value'       => $row->coupons_available,
			              
			              'style'       => 'width:50%',
			              'readonly'	=> 'readonly',
			            );
			
						echo "<div class = \"business-issues\">Cupones disponibles: " . form_input($data) . "</div>";
						
						if($row->coupons_generated == $row->coupons_total){
						
							$data = array(
				              'name'        => 'coupons_additional',
				              'class'       => 'business-data',
				              'value'       => '',
				              
				              'style'       => 'width:50%',
				             
				            );
				
							echo "<div class = \"business-issues\">Cupones adicionales: " . form_input($data) . "</div>";
						
						}
					
					}

					if($row->type == "Simple" || $row->type == "Medio")
					{

						if($row->type == "Simple"){

							$data = array(
					              'name'        => 'contact_email',
					              'class'       => 'business-data',
					              'value'       => $row->contact_email,
					              
					              'style'       => 'width:50%',
					              'readonly'	=> 'readonly',
					              
					             
					            );
						}
						
						if($row->type == "Medio"){

							$data = array(
					              'name'        => 'contact_email',
					              'class'       => 'business-data',
					              'value'       => $row->contact_email,
					              
					              'style'       => 'width:50%',
					              //'readonly'	=> 'readonly',
					              
					             
					            );
						}
				
						echo "<div class = \"business-issues\">Email de contacto: " . form_input($data) . "</div>";

					}
					
					if($row->type == "Simple" || $row->type == "Medio")
					{
						
						$data = array(
			              'name'        => 'listID',
			              'class'       => 'business-data',
			              'value'       => $row->listID,
			              'size'		=> '20',
			              'style'       => 'width:50%',
			             
			            );
			
						echo "<div class = \"business-issues\">Identificador de lista MailChimp: " . form_input($data) . "</div>";
					
					}

					$data = array(
			              'name'        => 'm_tag_enable',
			              'class'       => 'business-data',
			              'value'       => $row->m_tag_enable,
	  					  'checked'     => $row->m_tag_enable,
		
			            );
							
					echo "<div class = \"business-issues\">Habilitar Marketing Tag: " . form_checkbox($data) . "</div>";
					
					//if($row->pixel != ""){
					if(!$this->session->userdata('status')){
						
						$data = array(
			              'name'        => 'pixel',
			              'class'       => 'business-data',
			              'value'       => $row->pixel,
			              
			              'style'       => 'width:100%',
			              'readonly'	=> 'readonly',
			            );
						
					} else {
						
						$data = array(
			              'name'        => 'pixel',
			              'class'       => 'business-data',
			              'value'       => $row->pixel,
			              
			              'style'       => 'width:100%',
			              
			            );
						
						
					}
					
					echo "<div class = \"business-issues\">Etiqueta Pixel: " . form_textarea($data) . "</div>";
					
					$data = array(
			              'name'        => 'pixel_tag_enable',
			              'class'       => 'business-data',
			              'value'       => $row->pixel_tag_enable,
	  					  'checked'     => $row->pixel_tag_enable,
		
			            );
							
					echo "<div class = \"business-issues\">Habilitar Pixel Tag: " . form_checkbox($data) . "</div>";
					
					if($this->session->userdata('status')){
					
						$data = array(
			              'name'        => 'enabled',
			              'class'       => 'business-data',
			              'value'       => $row->enabled,
	  					  'checked'     => $row->enabled,
		
			            );
			
						echo "<div class = \"business-issues\">Habilitado: " . form_checkbox($data) . "</div>";
						
					}
					
					if($row->type == "Basico"){ $validationString = "return validate('Basico');"; }
					if($row->type == "Simple"){ $validationString = "return validate('Simple');"; }
					if($row->type == "Medio"){ $validationString = "return validate('Medio');"; }
					
					$data = array(
		              'name'        => 'update',
		              'class'       => 'data-button',
		              'value'       => 'Actualizar',
		              'onClick'		=> $validationString,
		              //'onClick'		=> 'return validate();',
		              
		            );
					
					echo form_submit($data);
					
					if($this->session->userdata('status')){
						
						$data = array(
			              'name'        => 'delete',
			              'class'       => 'data-button',
			              'value'       => 'Borrar',
			              'onClick'		=> 'return deleteConfirm();',
			            );
						
						echo form_submit($data);
					
					}
					
					?>
					<script type="text/javascript">
                             CKEDITOR.replace( 'content' );
                             CKEDITOR.replace( 'contact_legend' );
                             CKEDITOR.replace( 'contact_address' );
                    </script>  
					
					<?php
					
					echo form_close();
				}
		
			} else if(isset($_POST['update']) && !isset($_POST['delete'])){
				
				$id = $this->uri->segment(3);
				
				if(isset($_POST['enabled'])) { $enabled = 1; }
				if(!isset($_POST['enabled'])) { $enabled = 0; }
				
				if(isset($_POST['m_tag_enable'])) { $m_tag_enable = 1; }
				if(!isset($_POST['m_tag_enable'])) { $m_tag_enable = 0; }
				
				if(isset($_POST['pixel_tag_enable'])) { $pixel_tag_enable = 1; }
				if(!isset($_POST['pixel_tag_enable'])) { $pixel_tag_enable = 0; }

							
				$data = array(
				
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
					//'form' => $this->input->post('form'),
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
					'coupons_total' => $this->input->post('coupons_total') + $this->input->post('coupons_additional'),
					'coupons_generated' => $this->input->post('coupons_generated'),
					'coupons_available' => $this->input->post('coupons_available') + $this->input->post('coupons_additional'),
					'contact_email' => $this->input->post('contact_email'),
					'listID' => $this->input->post('listID'),
					'enabled' => $enabled,
					
				);
				
				$this->db->where('id', $id);
				$this->db->update('businesses', $data);
				
				//$this->db->query('use ' . $this->input->post('data_base'));
				
				//$this->db->where('id', 1);
				//$this->db->update('business', $data);
				
				//$this->db->query('use click_mx');
				
				$concept = "Actualizacion de negocio \"" . $this->input->post('business_name') . "\".";
				
				$data_userdata = array(
				
					'username' => $this->session->userdata('username'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa"),
					'concept' => $concept,
					
				);
				
				$this->db->insert('user_history', $data_userdata);

				copy('./temp/' . $this->input->post('business_logo'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('business_logo'));
				
				if($this->input->post('business_type') == 'Simple'){
					
					copy('./temp/' . $this->input->post('coupon_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('coupon_image'));
					copy('./temp/' . $this->input->post('precoupon_image'), '../businesses/' . $this->input->post('data_base') . '/' . $this->input->post('precoupon_image'));
				}
				
				header("Location: " . base_url() . "manage");
				
			} else if(!isset($_POST['update']) && isset($_POST['delete'])){
				
				$id = $this->uri->segment(3);
				
				$this->db->delete('businesses', array('id' => $id)); 
				
				if($this->input->post('business_type') == 'Simple' || $this->input->post('business_type') == 'Medio'){
				
					$this->dbforge->drop_table($this->input->post('data_base'));
					
					if($this->input->post('business_type') == 'Simple'){
						$this->dbforge->drop_table($this->input->post('data_base')."_ratings");
					}
				
				}
				unlink('../businesses/' . $this->input->post('data_base') . '/.htaccess');
				
				$files = glob('../businesses/' . $this->input->post('data_base') . '/*'); // get all file names
				foreach($files as $file){ // iterate files
				  if(is_file($file))
				    unlink($file); // delete file
				}
				
				unlink('../businesses/' . $this->input->post('data_base') . '/include/connections.php');
				unlink('../businesses/' . $this->input->post('data_base') . '/include/mobile_detect.php');
				
				rmdir("../businesses/" . $this->input->post('data_base') . "/include");

				rmdir("../businesses/" . $this->input->post('data_base') . "/cgi-bin");
				
				rmdir("../businesses/" . $this->input->post('data_base'));
				
				$concept = "Eliminacion de negocio \"" . $this->input->post('business_name') . "\".";
				
				$data_userdata = array(
				
					'username' => $this->session->userdata('username'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa"),
					'concept' => $concept,
					
				);
				
				$this->db->insert('user_history', $data_userdata);
				
				header("Location: " . base_url() . "manage");
				
			}
		
		?>
		
	</div>
		
	
</div>
