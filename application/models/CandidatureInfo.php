<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class CandidatureInfo extends CI_Model {

	/**
	 * @param $statut
	 * @return string
	 */
	public function getCandidatures($statut) {
		$candidDB = $this->load->database('candid', TRUE);
		if ($statut == 0) {
			$query = $candidDB->where('statut', "traitement")->from("users")->count_all_results();
			if ($query == "0") {
				return("NO_DATA");
			} else {
				$query2 = $candidDB->order_by('id', 'ASC')->get_where('users', array('statut' => "traitement"));
				return $query2->result_array();
			}
		}
		if ($statut == 1) {
			$query = $candidDB->where('statut', "acceptee")->from("users")->count_all_results();
			if ($query == "0") {
				return("NO_DATA");
			} else {
				$query2 = $candidDB->order_by('id', 'ASC')->get_where('users', array('statut' => "acceptee"));
				return $query2->result_array();
			}
		}
		if ($statut == 2) {
			$query = $candidDB->where('statut', "refusee")->from("users")->count_all_results();
			if ($query == "0") {
				return("NO_DATA");
			} else {
				$query2 = $candidDB->order_by('id', 'ASC')->get_where('users', array('statut' => "refusee"));
				return $query2->result_array();
			}
		}
	}

	/**
	 * @param $statut
	 * @return mixed
	 */
	public function getCandidNumber($statut) {
		$candidDB = $this->load->database('candid', TRUE);
		if ($statut == 0) {
			$query = $candidDB->where('statut', "traitement")->from("users")->count_all_results();
			return $query;
		}
		if ($statut == 1) {
			$query = $candidDB->where('statut', "acceptee")->from("users")->count_all_results();
			return $query;
		}
		if ($statut == 2) {
			$query = $candidDB->where('statut', "refusee")->from("users")->count_all_results();
			return $query;
		}
	}

	/**
	 * @param $codesuivi
	 * @return string
	 */
	public function getCandidData($codesuivi) {
		$candidDB = $this->load->database('candid', TRUE);
		$query = $candidDB->where('codesuivi', $codesuivi)->from("users")->count_all_results();
		if ($query == "0") {
			return("NO_DATA");
		} else {
			$query2 = $candidDB->get_where('users', array('codesuivi' => $codesuivi));
			return $query2->result_array();
		}
	}

	/**
	 * @param $codesuivi
	 * @param $state
	 */
	public function setCandidState($codesuivi, $state) {
		$candidDB = $this->load->database('candid', TRUE);
		if ($state == "accept") {
			$candidDB->set('statut', 'acceptee')->where('codesuivi', $codesuivi)->update("users");
		}
		if ($state == "decline") {
			$candidDB->set('statut', 'refusee')->where('codesuivi', $codesuivi)->update("users");
		}
	}

}
