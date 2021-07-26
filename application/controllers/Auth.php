<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {



	public function login(){
        $this->load->view('auth');
	}

	public function logout(){
		$this->session->sess_destroy();
		return redirect('');
	}

	public function setUserContext(){
		$userEmail = $this->input->get('userEmail');
		$this->load->model('query');
		$userDetail = $this->query->setUserContext($userEmail);
		$this->session->set_userdata("userDetails", $userDetail);
		echo json_encode(array("msg", "user context properly set!"));		

	}

}
