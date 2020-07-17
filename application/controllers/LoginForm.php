<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

//FORMULAIRE DE CONNEXION

class LoginForm extends CI_Controller {
	public function index() {
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('inputPseudo', 'Pseudo', 'required',
			array('required' => 'Vous devez renseigner le %s.')
		);
		$this->form_validation->set_rules('inputPassword', 'Mot de passe', 'required',
			array('required' => 'Vous devez renseigner le %s.')
		);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('v_login');
		}
		else
		{
			$this->load->view('formsuccess');
		}
	}
}
