<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Query extends CI_Model {


	public function setUserContext($userEmail){
		$sql = "select * from user where  email = '".$userEmail."'";
		return $this->db->query($sql)->result_array();	
	}

}

