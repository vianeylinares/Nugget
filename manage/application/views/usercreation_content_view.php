<div class = "content-wrapper">
	
	<div class = "business-data-box">
	
	
	<?php
	
		if(!isset($_POST['create'])){
	
	
			$attributes = array('id' => 'myform');
			
			echo form_open('/manage/create_user/', $attributes);
			
				echo "<h1 class = \"item-title\">Crear Usuario</h1>";
			
				$user = array(
	              'name'        => 'username',
	              'id'          => 'username',
	              'value'       => '',
	              'maxlength'   => '20',
	              'size'        => '30',
	              'style'       => 'width: 40%',
	            );
				
				$user_realname = array(
	              'name'        => 'user_realname',
	              'id'          => 'user_realname',
	              'value'       => '',
	              'maxlength'   => '20',
	              'size'        => '30',
	              'style'       => 'width: 40%',
	            );
			
				echo "Escriba nuevo 'username': ";
				echo form_input($user);
				echo "<br/>";
				
				echo "Escriba el nombre del nuevo 'username': ";
				echo form_input($user_realname);
				echo "<br/>";
				
				
				$pass = array(
	              'name'        => 'password',
	              'id'          => 'password',
	              'value'       => '',
	              'maxlength'   => '20',
	              'size'        => '30',
	              'style'       => 'width: 40%',
	            );
				
				
				$habilitado = array(
	              'name'        => 'enabled',
	              'id'          => 'enabled',
	              'value'       => '',
	              'checked'		=> '',
	             
	            );
				
				echo "Escriba nuevo 'password': ";
				echo form_password($pass);
				echo "<br/>";
				echo "<br/>";
				
				echo "Superuser: ";
				echo form_radio('role[]', 'superuser', TRUE);
				echo "<br/>";
				echo "<br/>";
				
				echo "Editor: ";
				echo form_radio('role[]', 'editor', FALSE);
				echo "<br/>";
				echo "<br/>";
				
				echo "Habilitado: ";
				echo form_checkbox($habilitado);
				echo "<br/>";
				echo "<br/>";
			
				echo form_submit('create', 'Crear!');
			
			
			echo form_close();
			
		}

		if(isset($_POST['create'])){
			
			/*$username = $_POST['username'];
			$user_realname = $_POST['user_realname'];
			$password = $_POST['password'];
			$hashed_password = sha1($password);*/
			$role = $_POST['role'];
			
			if($role[0] == 'superuser')
				{$superuser = 1; $editor = 0;}
			
			if($role[0] == 'editor')
				{$superuser = 0; $editor = 1;}
				
			if(!isset($_POST['enabled'])) { $enabled = 0; }
			if(isset($_POST['enabled'])) { $enabled = 1; }
				
				
			$query = $this->db->get_where('users', array('username' => $this->input->post('username')));
			if($query->num_rows() > 0){
				
				echo "<div class = \"announcement\">El usuario {$this->input->post('username')} no puede ser registrado, pues este 'username' ya es utilizado.</div>";
				
				echo "<div class = \"return\">";
					echo anchor("/manage", "Regresar a Administraci&oacute;n");
				echo "</div>";
				
			} else {
				
				$session_username = $this->session->userdata('username');
					
				date_default_timezone_set("America/Tijuana"); 
				
				$today_date = date("Y/m/d");
				$time = date("h:i:sa");
				
				$concept = "Creacion de usuario " . $this->input->post('username') . ".";
				
				$data_user = array(
				
					'username' => $this->input->post('username'),
					'user_realname' => $this->input->post('user_realname'),
					'hashed_password' => sha1($this->input->post('password')),
					'enabled' => $enabled,
					'superuser' => $superuser,
					'editor' => $editor,
				
				);
				
				
				$this->db->insert('users', $data_user);
				
				$data_userdata = array(
				
					'username' => $this->session->userdata('username'),
					'date' => date("Y/m/d"),
					'time' => date("h:i:sa"),
					'concept' => $concept,
					
				);
				
				$this->db->insert('user_history', $data_userdata);
				
				
				
				echo "<div class = \"return\">";
					echo anchor("/manage", "Regresar a Administraci&oacute;n");
				echo "</div>";
				
				
			}



		}
		
	?>
			
	</div>
		
	
</div>

