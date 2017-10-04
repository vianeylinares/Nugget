<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
		

	public function index()
		{
				
			
			
			if($this->session->userdata('username')){
				
				redirect(base_url() . "manage");
				
			} else {
			
				//$this->load->model("model_get_data");
				
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$this->form_validation->set_rules('username', 'Usuario', 'strip_tags|trim|required|xss_clean');
				$this->form_validation->set_rules('password', 'Password', 'required');
				
				if($this->form_validation->run() === false){
					
					$this->load->view('header_view');
					$this->load->view('login_view');
					$this->load->view('footer_view');
					
				} else {
					
					$name = $this->input->post('username');
					$password = $this->input->post('password');
					
					$this->load->model('login_model');
					$result = $this->login_model->get_user($name, $password);
					
					if($result === true){
						
						redirect(base_url() . 'manage');
						
					} else {
						
						$data['error_message'] = "Invalid login credentials";
						
						$this->load->view('header_view');
						$this->load->view('login_view', $data);
						$this->load->view('footer_view');
						
					}
					
					
					
					
				}
			
			
			}
			
		}		
			
			
}