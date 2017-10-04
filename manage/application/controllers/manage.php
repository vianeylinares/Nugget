<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
				$this->load->model('get_data_model');
				$data['basic_businesses'] = $this->get_data_model->getBasicBusinessesData();
				$data['simple_businesses'] = $this->get_data_model->getSimpleBusinessesData();
				$data['medium_businesses'] = $this->get_data_model->getMediumBusinessesData();
				$data['users'] = $this->get_data_model->getUsersData();
				
				$this->load->view('header_view');
				$this->load->view('manage_content_view', $data);
				$this->load->view('footer_view');
			
			}

	}
	
	
	function business(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
		
				$business_id = $this->uri->segment(3);
				
				$this->load->dbforge();
				
				$this->load->model('get_data_model');
				$data['business'] = $this->get_data_model->getBusinessData($business_id);
				
				$this->load->view('header_view');
				$this->load->view('business_content_view', $data);
				$this->load->view('footer_view');
			
			}
		
	}

	function create_business(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
				$this->load->model('get_data_model');
				
				$data['business_type'] = $this->uri->segment(3);
				
				$this->load->dbforge();
				
		
				$this->load->view('header_view');
				$this->load->view('create_business_content_view', $data);
				$this->load->view('footer_view');
				
			}
		
	}
	
	function user(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
		
				$user_id = $this->uri->segment(3);
				
				$this->load->model('get_data_model');
				$data['user'] = $this->get_data_model->getUserData($user_id);
				
				foreach ($data["user"] as $row) {
						
						$username = $row->username;
						
					}
				
				$data['user_history'] = $this->get_data_model->getUserHistoryData($username);
				
				$this->load->library('table');
				
				$this->load->view('header_view');
				$this->load->view('user_content_view', $data);
				$this->load->view('footer_view');
		
			}
		
	}
	
	function create_user(){
			
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
			
				$this->load->model('get_data_model');
				//$country  = $this->uri->segment(3);
				
				//$item = $this->uri->segment(3);
				
				//$data["swt"] = $this->model_get_data->getSWTHomeData();
				$this->load->view('header_view');
				$this->load->view('usercreation_content_view');
				$this->load->view('footer_view');
			}
			
		}

	function report(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
				$business = $this->uri->segment(3);
				$data['business_table'] = $this->uri->segment(3);
				//$data['business_name'] = $this->uri->segment(4);
				$data['business_name'] = str_replace("%20", " ", $this->uri->segment(4));
				
				$this->load->library('table');
				
				$this->load->model('get_data_model');
				$data['business'] = $this->get_data_model->getBusinessReportData($business);
				$data['business_listID'] = $this->get_data_model->getBusinessListID($business);
				
				$this->load->view('header_view');
				$this->load->view('report_content_view', $data);
				$this->load->view('footer_view');
			
			}
		
	}
	
	function report_email(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
				$business = $this->uri->segment(3);
				$data['business_table'] = $this->uri->segment(3);
				//$data['business_name'] = $this->uri->segment(4);
				$data['business_name'] = str_replace("%20", " ", $this->uri->segment(4));
				
				$this->load->library('table');
				
				$this->load->model('get_data_model');
				$data['business'] = $this->get_data_model->getBusinessReportData($business);
				$data['business_listID'] = $this->get_data_model->getBusinessListID($business);
				
				$this->load->view('header_view');
				$this->load->view('report_email_content_view', $data);
				$this->load->view('footer_view');
			
			}
		
	}
	
	function report_ratings(){
		
		if(!$this->session->userdata('username')){
				
				redirect(base_url() . "login");
				
			} else {
		
				$business = $this->uri->segment(3);
				$data['business'] = $business;
				//$data['business_name'] = $this->uri->segment(4);
				
				$data['business_name'] = str_replace("%20", " ", $this->uri->segment(4));
				
				$this->load->helper('file');
				$this->load->helper('download');
				$this->load->dbutil();
				$this->load->library('table');
				
				$this->load->model('get_data_model');
				$data['business_rating'] = $this->get_data_model->getBusinessReportData($business);
				
				
				$this->load->view('header_view');
				$this->load->view('report_rating_content_view', $data);
				$this->load->view('footer_view');
				
			}
		
	}
	
	


}