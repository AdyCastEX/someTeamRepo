<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	This document is the controller of the search module for user accounts
*/
class search_controller extends CI_Controller {

	public function search(){
		$data['field'] = $_POST["field"];
		switch($_POST["field"]){
			case "name": {
				$data['fname'] = $_POST["firstname"];
				$data['mname'] = $_POST["middlename"];
				$data['lname'] = $_POST["lastname"];
				break;
			}

			case "stdno": {
				$data['student_no'] = $_POST["studentno"];
				break;
			}

			case "uname": {
				$data['username'] = $_POST["username"];
				break;
			}

			case "email": {
				$data['email'] = $_POST["emailadd"];
				break;
			}
		}
		$data['status'] = $_POST["status"];
		$this->load->model('query_model');
		$this->query_model->runQuery($this->query_model->generateQuery($data));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */