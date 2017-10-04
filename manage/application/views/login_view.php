<div class = "content-wrapper">
	
	<div class = "business-data-box">
	
	<div class = "login-box">
		<?php
		
			//print_r($this->session->all_userdata());
			
			if(!empty($error_message)){
				
				echo $error_message;

				
			}
			
			echo form_open();
				
				$data = array(
					'name' => 'username',
					'value' => '',
					'class' => 'data-input',
				);
				
				echo form_label("Usuario:");
				echo form_input($data);
				echo form_error('username');
				
				
				$data = array(
					'name' => 'password',
					'value' => '',
					'class' => 'data-input',
				);
				
				echo form_label("Password:");
				echo form_password($data);
				echo form_error('password');
				
				$data = array(
					'name' => 'login',
					'value' => 'Login',
					'class' => 'login-button',
	
				);
				
				
			
				echo form_submit($data);
			
			
			echo form_close();
			
			
		?>
	</div>
		
	
</div>