<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

//CASIER JUDICIAIRE DES JOUEURS.
//BAM DANS TA FACE LE MEC QUI A "rien fait".

defined('BASEPATH') OR exit('No direct script access allowed');

class Player extends CI_Controller {

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
		if(!isset($_POST["searchform"])) redirect("Accueil");
		$player = $_POST["searchform"];
		redirect("Player/view/$player");
	}

	public function view($player) {
		$this->load->model('PlayerInfo');
		if(!isset($player)) redirect("Accueil");
		$data["page"] = "Profil de $player";
		$data["search"] = $player;
		$data["rank"] = $this->PlayerInfo->getRank("text", $player);
		$data["lumines"] = $this->PlayerInfo->getLumines($player); //de toute façon personne est plus riche que Fyroeo
		$data["ban"] = $this->PlayerInfo->isPlayerBan($player);
		$data["mute"] = $this->PlayerInfo->isPlayerMute($player);
		$data["sanctions"] = $this->PlayerInfo->getPunishments($player);
		$data["share"] = current_url();
		$this->load->view("v_player", $data);
		$this->load->view("v_navigation", $data);
	}

}
