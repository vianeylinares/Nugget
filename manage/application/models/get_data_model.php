<?php

	class Get_data_model extends CI_Model{
	
		function getSimpleBusinessesData(){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE type = 'Simple'");
			return $query->result();
		
		}
		
		function getBasicBusinessesData(){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE type = 'Basico'");
			return $query->result();
		
		}
		
		
		function getMediumBusinessesData(){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE type = 'Medio'");
			return $query->result();
		
		}
		
		function getBusinessData($business_id){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE id = {$business_id}");
			return $query->result();
		
		}

		function getBusinessReportData($business){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from {$business}");
			return $query->result();
		
		}
		
		function getBusinessRatingReportData($business){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from {$business}_rating");
			return $query->result();
		
		}
		
		function getUsersData(){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from users");
			return $query->result();
		
		}
		
		function getUserData($user_id){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from users WHERE id = {$user_id}");
			return $query->result();
		
		}
		
		function getMediumBusinessData($medium_business){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE id = {$medium_business} AND type = 'Medio'");
			return $query->result();
		
		}
		
		function getUserHistoryData($username){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from user_history WHERE username = '{$username}'");
			return $query->result();
		
		}
		
		function getBusinessListID($business){
			//$query = $this->db->get_where("subjects", array("item" => 1));
			
			$query = $this->db->query("SELECT * from businesses WHERE data_base = '{$business}'");
			
			$data = $query->row_array();
 
 			$listID = $data['listID'];
			
			//foreach ($query as $row) {
					
				//	$listID = $row['listID'];
					
				//}
			
			return $listID;
		
		}
		
		function displayBasicBusinessesData($basic_businesses){
			?>
			<h3>Basicos:</h3>
			<ul>
			<?php	
				
				foreach ($basic_businesses as $row) {
					
					if($row->enabled == 1) { $enabled = "En Linea"; }
					if($row->enabled == 0) { $enabled = "Fuera de Linea"; }
					
					echo "<li>" . anchor('manage/business/' . $row->id, $row->business_name, 'target = "_blank"') . " | " . $enabled . "</li>";
					
				}
				
				
			
			?>
			</ul>
			<?php
			
		}
		
		function displaySimpleBusinessesData($simple_businesses){
			?>
			<h3>Simples:</h3>
			<ul>
			<?php	
				
				foreach ($simple_businesses as $row) {
					
					if($row->enabled == 1) { $enabled = "En Linea"; }
					if($row->enabled == 0) { $enabled = "Fuera de Linea"; }
					
										
					echo "<li>" . anchor('manage/business/' . $row->id, $row->business_name, 'target = "_blank"') . " | " .
					 $enabled . " | " .
					 anchor('manage/report/' . $row->data_base . '/' . $row->business_name, "Reporte cupones", 'target = "_blank"');
					 
					 if($row->id == 73 || $row->id == 75 || $row->id == 76 || $row->id == 77 || $row->id == 78 || $row->id == 83 || $row->id == 85){
						echo "</li>";
						
					} else {
					 
						 echo " | " .
						 anchor('manage/report_ratings/' . $row->data_base . '_ratings/' . $row->business_name, "Reporte Ratings", 'target = "_blank"') .
						 "</li>";
					}
					
				}
				
				
			
			?>
			</ul>
			<?php
			
		}
		
		function displayMediumBusinessesData($medium_businesses){
			?>
			<h3>Medios:</h3>
			<ul>
			<?php	
				
				foreach ($medium_businesses as $row) {
					
					if($row->enabled == 1) { $enabled = "En Linea"; }
					if($row->enabled == 0) { $enabled = "Fuera de Linea"; }
					
					echo "<li>" . anchor('manage/business/' . $row->id, $row->business_name, 'target = "_blank"') . " | " . $enabled . " | " .// . "</li>";
					 anchor('manage/report_email/' . $row->data_base . '/' . $row->business_name, "Reporte emails", 'target = "_blank"') . "</li>";
						 
						 
					}
				
				
			?>
			</ul>
			<?php
			
		}
		
		function displayUsersData($users){
			?>
			
			<ul>
				<?php	
					
					foreach ($users as $row) {
						
						if($row->enabled == 1) { $enabled = "Habilitado"; }
						if($row->enabled == 0) { $enabled = "Deshabilitado"; }
						
						if(($row->superuser == 1) && ($row->editor == 0)) { $rank = "Superuser"; }
						if(($row->superuser == 0) && ($row->editor == 1)) { $rank = "Editor"; }
						
						echo "<li>" . anchor('manage/user/' . $row->id, $row->username, 'target = "_blank"') . " | " . $enabled . " | " . $rank . "</li>";
						
					}
					
					
				
				?>
				<li class = "additional"><a href="manage/create_user" target = "_blank">Crear usuario nuevo</a></li>
			</ul>
			<?php
			
		}
		
		
		
	}