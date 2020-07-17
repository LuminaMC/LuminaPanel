<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ConnectionRegister extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	/**
	 * @param $username
	 * @param $password
	 * @return bool
	 */
	public function checkCredentials($username, $password) {
		$query = $this->db->where('pseudo', $username)->get('users')->row();


		if (password_verify($password, $query->password)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

}
