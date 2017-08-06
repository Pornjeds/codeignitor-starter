<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('UsersModel');
	}

	public function index()
	{
		$users = $this->UsersModel->get_all_users();
		$data['users'] = $users;
		$data['content'] = '/users/users';
		$this->load->view('/shared/main', $data);
	}
}
