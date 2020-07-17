<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

//Class des candid

defined('BASEPATH') OR exit('No direct script access allowed');

class Candidature extends CI_Controller {

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
		$this->load->model('CandidatureInfo');

	}

	public function index() {
		$data["page"] = "Liste des candidatures";
		$data["statut0"] = $this->CandidatureInfo->getCandidatures(0);
		$data["statut1"] = $this->CandidatureInfo->getCandidatures(1);
		$data["statut2"] = $this->CandidatureInfo->getCandidatures(2);
		$data["number0"] = $this->CandidatureInfo->getCandidNumber(0);
		$data["number1"] = $this->CandidatureInfo->getCandidNumber(1);
		$data["number2"] = $this->CandidatureInfo->getCandidNumber(2);
		$data["linkBuilder"] = current_url()."/read/";
		$this->load->view("v_candidature_index", $data);
		$this->load->view("v_navigation", $data);
	}

	public function read($codesuivi = null , $action = null) {
		if (!isset($codesuivi)) {
			$_SESSION['error'] = "Une erreur est survenue dans la lecture.";
			$this->session->mark_as_flash('error');
			redirect("Candidature");
		}
		if (isset($codesuivi) && isset($action) && $this->PlayerInfo->getRank("system", $_SESSION["name"]) != "admin") {
			$_SESSION['error'] = "Vous n\'avez pas la permission de faire cette action.";
			$this->session->mark_as_flash('error');
			redirect("Candidature");
		}
		if (isset($codesuivi) && isset($action) && $this->PlayerInfo->getRank("system", $_SESSION["name"]) == "admin" && $this->CandidatureInfo->getCandidData($codesuivi)[0]["statut"] == "traitement") {
			if ($action == "accept") { //LARBIN EN PLUS
				$this->CandidatureInfo->setCandidState($codesuivi, "accept");
				$_SESSION['notif'] = "Candidature $codesuivi acceptée.";
				$this->session->mark_as_flash('notif');
				redirect("Candidature");
			}
			else if ($action == "decline") { //LARBIN EN MOINS
				$this->CandidatureInfo->setCandidState($codesuivi, "decline");
				$_SESSION['notif'] = "Candidature $codesuivi refusée.";
				$this->session->mark_as_flash('notif');
				redirect("Candidature");
			}
			else { //FYROEO NE SAIT PAS CODER
				$_SESSION['error'] = "Cette action est invalide.";
				$this->session->mark_as_flash('error');
				redirect("Candidature");
			}
		} elseif (isset($codesuivi) && isset($action) && $this->PlayerInfo->getRank("system", $_SESSION["name"]) == "admin" && $this->CandidatureInfo->getCandidData($codesuivi)[0]["statut"] != "traitement") {
			$_SESSION['error'] = "Cette candidature a déjà été traitée.";
			$this->session->mark_as_flash('error');
			redirect("Candidature");
		}
		if (isset($codesuivi) && !isset($action)) {
			if ($this->CandidatureInfo->getCandidData($codesuivi) == "NO_DATA") { //SERAIT-CE UN TROU NOIR ?
				$_SESSION['error'] = "Cette candidature n\'existe pas";
				$this->session->mark_as_flash('error');
				redirect("Candidature");
			} else {
				$data["page"] = "Candidature $codesuivi";
				$data["candid"] = $this->CandidatureInfo->getCandidData($codesuivi);
				$data["linkBuilder"] = current_url()."/$codesuivi/";
				$this->load->view("v_candidature_read", $data);
				$this->load->view("v_navigation", $data);
			}
		}
	}

}


