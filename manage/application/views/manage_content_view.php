<div class = "content-wrapper">
	
	<div class = "user-logged">
		<?php
		
			echo "Usuario: " . ucfirst($this->session->userdata('username'));
			echo "<br/>";
			echo anchor("logout", "Logout");
		//print_r($this->session->all_userdata());
		?>
		
	</div>
	
	<div class = "manage-content-options">
		
		<div class = "create-business">
			<h2>Crear negocio:</h2>
			<ul>
				<li><a href="manage/create_business/Basico" target = "_blank">Basico</a></li>
				<li><a href="manage/create_business/Simple" target = "_blank">Simple</a></li>
				<li><a href="manage/create_business/Medio" target = "_blank">Medio</a></li>
			</ul>
			
		</div>
		
		<div class = "available-business">
			
			<h2>Negocios disponibles:</h2>
			<?php
			
				$this->get_data_model->displayBasicBusinessesData($basic_businesses);
				$this->get_data_model->displaySimpleBusinessesData($simple_businesses);
				$this->get_data_model->displayMediumBusinessesData($medium_businesses);
			
			?>
			
		</div>
		
		<?php
			if($this->session->userdata('status')){
			
			?>
			
			<div class = "available-users">
				<h2>Usuarios:</h2>
				<?php
				
					$this->get_data_model->displayUsersData($users);			
				
				?>			
				
				
				
			</div>
		
			<?php
			}
		?>
		
	</div>
		
	
</div>
