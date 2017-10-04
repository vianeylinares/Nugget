<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<?php
		
			if(!isset($_POST['update']) && !isset($_POST['delete'])){
		
				foreach ($medium_business as $row) {
					
					echo "<h2>Datos de '" . $row->business_name . "':</h2>";
					
					echo form_open('manage/simple/' . $row->id);
					
					$data = array(
		              'name'        => 'business_type',
		              'class'       => 'business-data',
		              'value'       => $row->type,
		              'size'        => '15',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Tipo de negocio: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'creation_date',
		              'class'       => 'business-data',
		              'value'       => $row->creation_date,
		              'size'        => '15',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Fecha de creacion: " . form_input($data) . "</div>";
					
					
					
					$data = array(
		              'name'        => 'business_name',
		              'class'       => 'business-data',
		              'value'       => $row->business_name,
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Nombre de negocio: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'business_logo',
		              'class'       => 'business-data',
		              'value'       => $row->logo,
		              'size'        => '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Logo: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'content_title',
		              'class'       => 'business-data',
		              'value'       => $row->content_title,
		              'size'        => '50',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Titulo de contenido: " . form_input($data) . "</div>";
					
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
		
					echo "<div class = \"business-issues\">Caracteristica 1: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'feature_two',
		              'class'       => 'business-data',
		              'value'       => $row->feature_two,
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 2: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'feature_three',
		              'class'       => 'business-data',
		              'value'       => $row->feature_three,
		              'size'        => '100',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Caracteristica 3: " . form_input($data) . "</div>";
					
					/*$data = array(
		              'name'        => 'coupon_image',
		              'class'       => 'business-data',
		              'value'       => $row->coupon_image,
		              'size'        => '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Imagen de cupon: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'precoupon_image',
		              'class'       => 'business-data',
		              'value'       => $row->precoupon_image,
		              'size'        => '25',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Imagen de pre-cupon: " . form_input($data) . "</div>";*/
					
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
		              'name'        => 'form',
		              'class'       => 'business-data',
		              'value'       => $row->form,
		             
		              'style'       => 'width:100%',
		            );
		
					echo "<div class = \"business-issues\">Forma de contacto: " . form_textarea($data) . "</div>";
					
					$data = array(
		              'name'        => 'background_color',
		              'class'       => 'business-data',
		              'value'       => $row->background_color,
		              'size'		=> '10',
		              'style'       => 'width:50%',
		            );
		
					echo "<div class = \"business-issues\">Color de fondo: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'data_base',
		              'class'       => 'business-data',
		              'value'       => $row->data_base,
		              'size'		=> '20',
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Base de datos: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'coupon_prefix',
		              'class'       => 'business-data',
		              'value'       => $row->coupon_prefix,
		              
		              'style'       => 'width:50%',
		              'readonly'	=> 'readonly',
		            );
		
					echo "<div class = \"business-issues\">Prefijo de cupon: " . form_input($data) . "</div>";
					
					$data = array(
		              'name'        => 'enabled',
		              'class'       => 'business-data',
		              'value'       => $row->enabled,
  					  'checked'     => $row->enabled,
	
		            );
		
					echo "<div class = \"business-issues\">Habilitado: " . form_checkbox($data) . "</div>";
					
					$data = array(
		              'name'        => 'update',
		              'class'       => 'data-button',
		              'value'       => 'Actualizar',
		              
		            );
					
					echo form_submit($data);
					
					$data = array(
		              'name'        => 'delete',
		              'class'       => 'data-button',
		              'value'       => 'Borrar',
		              
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
				}
		
			} else if(isset($_POST['update']) && !isset($_POST['delete'])){
				
				$id = $this->uri->segment(3);
				
				if(isset($_POST['enabled'])) { $enabled = 1; }
				if(!isset($_POST['enabled'])) { $enabled = 0; }

							
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
					'contact_legend' => $this->input->post('contact_legend'),
					'contact_address' => $this->input->post('contact_address'),
					'map' => $this->input->post('map'),
					'form' => $this->input->post('form'),
					'background_color' => $this->input->post('background_color'),
					'data_base' => $this->input->post('data_base'),
					'coupon_prefix' => $this->input->post('coupon_prefix'),
					'enabled' => $enabled,
					
				);
				
				$this->db->where('id', $id);
				$this->db->update('businesses', $data); 
				
				header("Location: " . base_url() . "manage");
				
			} else if(!isset($_POST['update']) && isset($_POST['delete'])){
				
				$id = $this->uri->segment(3);
				
				$this->db->delete('businesses', array('id' => $id)); 
				
			}
		
		?>
		
	</div>
		
	
</div>
