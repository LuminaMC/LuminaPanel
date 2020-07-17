<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

//PAGE DE CONNEXION

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('cookie');

		$cookiecheck = $this->input->cookie('luminapanel_remember',true);

		if (isset($cookiecheck)) {
			$_SESSION["name"] = $this->input->cookie('luminapanel_remember'); //Voir plus bas pour une bonne rigolade
		}

		if(isset($_SESSION['name'])) redirect("Accueil");

		$this->load->helper('form');
		$attributes = array('class' => 'form-signin', 'id' => 'loginform');

	}

	public function index(){

		if (!isset($_POST["inputPseudo"])) {
			$this->load->view("v_login");
		}

		if (isset($_POST["inputPseudo"])) {

			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('inputPseudo', 'Pseudo', 'required',
				array('required' => 'Vous devez renseigner le %s.')
			);
			$this->form_validation->set_rules('inputPassword', 'Mot de passe', 'required',
				array('required' => 'Vous devez renseigner le %s.')
			);

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('v_login');
			} else {
				$username = $_POST["inputPseudo"];
				$password = $_POST["inputPassword"];

				$this->load->model('ConnectionRegister');

				if ($this->ConnectionRegister->checkCredentials($username, $password)) {
					$_SESSION["name"] = $_POST["inputPseudo"];
					$pseudo = $_SESSION["name"];
					$_SESSION['notif'] = "Connexion réussie ! Bienvenue $pseudo";
					$this->session->mark_as_flash('notif');
					//Ce cookie est littéralement une faille de sécurité.
					//On va dire que c'est une backdoor pour Fyroeo mais il a surtout eu la flemme de faire autrement face au staff qui se plaignait de toujours se faire déco.
					//#MORT AU STAFF
					$cookie= array(

						'name'   => 'luminapanel_remember',
						'value'  => "$pseudo",
						'expire' => '2147483647',
						'secure' => TRUE

					);
					$this->input->set_cookie($cookie);
					redirect("Accueil");
				} else {
					$data['error'] = "incorrect";
					$this->load->view('v_login', $data);
				}

			}
		}
	}


}
