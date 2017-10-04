<?php

	class Login_model extends CI_Model{
	
		public function get_user($name, $password){
			
			$query = $this->db->get_where('users', array('username' => $name));
			if($query->num_rows() > 0){
				
				$query = $query->row_array();
				$username = $query['username'];
				$user_password = $query['hashed_password'];
				$status = $query['superuser'];
				$enabled = $query['enabled'];
				
				if($name === $username){
					
					//$userdata = array('username' => $username);
					//$this->session->set_userdata($userdata);
					$password = sha1($password);
					
					if($enabled != 1){
						
						return false;
						
					}
					
					if($password != $user_password){
						
						return false;
						
					} else {
						
						$userdata = array('username' => $username, 'status' => $status, 'enabled' => $enabled);
						$this->session->set_userdata($userdata);
						return true;
						
					}
					
					
				} 
					
			} else {
					
				return false;
				
			}
			
		}
		
		
	}