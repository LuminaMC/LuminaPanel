<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

//PAGE D'ACCUEIL AVEC LES DIFFÉRENTES INFORMATIONS DE BASES

class Accueil extends CI_Controller {

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
		$data["page"] = "Accueil";
		$this->load->view("v_accueil");
		$this->load->view("v_navigation", $data);
	}

	public function disconnect() {
		$this->load->helper('cookie');
		$_SESSION['notif'] = "Déconnexion réussie ! ";
		$this->session->mark_as_flash('notif');
		unset($_SESSION["name"]);
		delete_cookie("luminapanel_remember");
		redirect("Login");
	}

}
