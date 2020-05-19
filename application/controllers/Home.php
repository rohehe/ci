<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$this->load->model('m_ngarot');
		$data['ngarotlelea']= $this->m_ngarot->get_data();

		$this->load->view('v_ngarot', $data);

	}
	
	
} 


?>  