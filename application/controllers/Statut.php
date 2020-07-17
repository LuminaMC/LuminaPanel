<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

class Statut extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		if(!isset($_SESSION['name'])) redirect("Login");
		$this->load->model('PlayerInfo');
		$autorized_rank = array("guide", "modo", "developpeur", "admin");
		if (!in_array($this->PlayerInfo->getRank("system", $_SESSION["name"]), $autorized_rank)) {
			$this->load->helper('cookie');
			$_SESSION['notif'] = "Votre grade ne permet pas l\'utilisation de LuminaPanel";
			$this->session->mark_as_flash('notif');
			unset($_SESSION["name"]);
			delete_cookie("luminapanel_remember");
			redirect("Login");
		}
		$this->load->helper('form');
	}

	public function index(){
		$data["page"] = "Statut du réseau de Lumina";
		$this->load->model('ServerInfo');
		$this->load->view("v_statut");
		$this->load->view("v_navigation", $data);
	}

}
