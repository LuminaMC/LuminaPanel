<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

//Cette page servait littéralement à rien. Il s'agissait plus d'un endroit pour debug les ranks.

class Profil extends CI_Controller {

	public function __construct()
	{
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

	public function index() {
		$this->load->model('PlayerInfo');
		$user = $_SESSION["name"];
		$data["rank"] = $this->PlayerInfo->getRank("text", $_SESSION["name"]);
		$data["page"] = "Votre profil ($user)";
		$this->load->view('v_profil', $data);
		$this->load->view('v_navigation', $data);
	}


}
