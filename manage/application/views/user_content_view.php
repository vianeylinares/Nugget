<div class = "content-wrapper">
	
	<div class = "business-data-box">
		
		<?php
		
			if(!isset($_POST['update'])){
		
				foreach ($user as $row) {
					
					$user_id = $row->id;
					$user_name = $row->username;
					$user_realname = $row->user_realname;
					$user_hashedpassword = $row->hashed_password;
				
					
					if($row->enabled == 1){ $user_enable = "Habilitado"; $user_enabled = 1; }
					if($row->enabled == 0){ $user_enable = "No habilitado"; $user_enabled = 0; }
					
					if($row->superuser == 1){ $user_status = "Superuser"; $user_superuser = 1; $user_editor = 0; }
					if($row->editor == 1){ $user_status = "Editor"; $user_superuser = 0; $user_editor = 1; }
					
					
				}
				
				
				echo "<h1 class = \"item-title\">Datos de usuario '" . $user_name . "': </h1>";
				
				$data = array(
		             
		             array('Username: ', $user_name),
		             array('Nombre: ', $user_realname),
		             array('Habilitado: ', $user_enable),
		             array('Nivel: ', $user_status),
		             );
				
				$tmpl = array (
					'table_open'  => '<table class= "mytable" >'
				
				 );
	
				$this->table->set_template($tmpl);
		
				$this->table->set_heading(null); 
				echo $this->table->generate($data);
			
			
			
			
	
		
				$attributes = array('id' => 'myform');
				
				echo form_open('/manage/user/' . $user_id , $attributes);
				
					echo "<h1 class = \"item-title\">Actualizar Usuario</h1>";
				
					$username = array(
		              'name'        => 'username',
		              'id'          => 'username',
		              'value'       => $user_name,
		              'readonly'	=> 'readonly'
		             
		            );
					
					$userrealname = array(
		              'name'        => 'user_realname',
		              'id'          => 'user_realname',
		              'value'       => $user_realname,
		            
		            );
					
					$userhashedpassword = array(
		              'name'        => 'user_hashedpassword',
		              'id'          => 'user_hashedpassword',
		              'value'       => $user_hashedpassword,
		              'readonly'	=> 'readonly',
		            
		            );
				
					echo "Username: ";
					echo form_input($username);
					echo "<br/>";
					
					echo "Nombre real: ";
					echo form_input($userrealname);
					echo "<br/>";
					
					echo "Password (codificado): ";
					echo form_password($userhashedpassword);
					echo "<br/>";
					
					
								
					$userenabled = array(
		              'name'        => 'enabled',
		              'id'          => 'enabled',
		              'value'       => $user_enabled,
		              'checked'		=> $user_enabled,
		             
		            );
					
									
					echo "Superuser: ";
					echo form_radio('role[]', 'superuser', $user_superuser);
					echo "<br/>";
					echo "<br/>";
					
					echo "Editor: ";
					echo form_radio('role[]', 'editor', $user_editor);
					echo "<br/>";
					echo "<br/>";
					
					echo "Habilitado: ";
					echo form_checkbox($userenabled);
					echo "<br/>";
					echo "<br/>";
				
					echo form_submit('update', 'Actualizar!');
				
				
				echo form_close();
			
			}

			if(isset($_POST['update'])){
			
				$user_id  = $this->uri->segment(3);
							
				$role = $_POST['role'];
				
				if($role[0] == 'superuser')
					{$superuser = 1; $editor = 0;}
				
				if($role[0] == 'editor')
					{$superuser = 0; $editor = 1;}
					
				if(!isset($_POST['enabled'])) { $enabled = 0; }
				if(isset($_POST['enabled'])) { $enabled = 1; }
					
							
				date_default_timezone_set("America/Tijuana"); 
							
				$concept = "Actualizacion de usuario " . $this->input->post('username') . ".";
				
				$data_user = array(
				
					'username' => $this->input->post('username'),
					'user_realname' => $this->input->post('user_realname'),
					'hashed_password' => $this->input->post('user_hashedpassword'),
					'enabled' => $enabled,
					'superuser' => $superuser,
					'editor' => $editor,
				
				);
				
				$this->db->where('id', $user_id);
				$this->db->update('users', $data_user); 
				
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
		
			
			
			
			echo "<h2 class = \"item-title\">Historial:</h2>";
			
			?>
			<table class = "myOtherTable">
					
					<tr class = "table-title">
						<td>Fecha</td><td>Hora</td><td>Actividad</td>
					</tr>
					
					<tr>
					
						<?php
						
						foreach ($user_history as $row) {
							
							//$user_id = $row->id;
							$username = $row->username;
							$data = $row->date;
							$time = $row->time;
							$concept = $row->concept;
							
							?>
				
				
						<td><?php echo $data; ?></td><td><?php echo $time; ?></td><td><?php echo $concept; ?></td>
					
					
					</tr>
					
						
					<?php
					
					}
				
				?>
			
			</table>
			
			<?php
			
		?>
		
		
	</div>
		
	
</div>

