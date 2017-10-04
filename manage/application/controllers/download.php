<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends CI_Controller{
	
	public function download_csv(){
 
 		$this->load->dbutil();
 
 		$table = $this->uri->segment(3);
		$business_name = $this->uri->segment(4);
		
		$business_name = str_replace("%20", " ", $business_name);
		
		date_default_timezone_set("America/Tijuana");
		$today_date = date("m-d-Y");
		$current_time = date("H:i:s");
		
		$system_title = "Sistema generador de sitios - Click-MX\n";
		$title = "Reporte de ratings de '" . $business_name . "'\n";
		$date = "Fecha: " . $today_date . "\n";
		$time = "Hora: " . $current_time . "\n";
 
		$query = $this->db->get($table);
		
		$datas = $this->dbutil->csv_from_result($query);

		write_file('./application/views/csv.csv', $system_title);
		write_file('./application/views/csv.csv', $title, 'a');
		write_file('./application/views/csv.csv', $date, 'a');
		write_file('./application/views/csv.csv', $time, 'a');
		write_file('./application/views/csv.csv', $datas, 'a');
		
		
		include_once('../PHPMailer/class.phpmailer.php');
									
		$body = '<p>Reporte de ratings en formato CSV</p>';
		
		$email = new PHPMailer();
		$email->From      = 'vianeylinares@gmail.com';
		$email->FromName  = 'Sistema de generacion de sitios - Click-MX';
		$email->Subject   = $title;
		$email->Body      = $body;
		$email->IsHTML(true);
		$email->AddAddress('vianeylinares@gmail.com');
		$email->AddCC('btst91@gmail.com');
		
		$email->AddAttachment('./application/views/csv.csv');													
	
		$email->Send();
		
		
		 
		//echo json_encode($output_string);
	}
 }
