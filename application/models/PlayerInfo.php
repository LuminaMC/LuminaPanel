<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

/**
 * Class PlayerInfo
 */
class PlayerInfo extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	/**
	 * @param $player
	 * @return string
	 */
	public function getUUID($player) {
		$playername = $player;
		$url = "https://api.mojang.com/users/profiles/minecraft/" . urlencode($playername);
		$result = file_get_contents($url);
		$json = json_decode($result);

		if ($json == NULL) {
			return("Erreur");
		}else {
			$uuid = $json->id;
			return($uuid);
		}
	}

	/**
	 * @param $type
	 * @param $player
	 * @return string
	 */
	public function getRank($type, $player) {
		$uuid = $this->getUUID($player);
		$realuuid = substr($uuid, 0, 8) . '-' . substr($uuid, 8, 4) . '-' . substr($uuid, 12, 4) . '-' . substr($uuid, 16, 4) . '-' . substr($uuid, 20, 12);
		$pexDB = $this->load->database('luckperms', TRUE);
		$query = $pexDB->where('uuid', $realuuid)->get('luckperms_players')->row();
		if(isset($query->primary_group)) {
			$rank = $query->primary_group;
		} else {
			$rank = "default";
		}

		if ($type == "system") {
			return($rank);
		} else if ($type == "text") { //Formatage des grades pour un affichage utilisateur. Ex: default => Joueur car le staff est pas assez intelligent (cc Swap) pour comprendre
			if ($rank == "default") {
				return("Joueur");
			} else if ($rank == "vip") {
				return("VIP");
			} else if ($rank == "vipplus") {
				return("VIP+");
			} else if ($rank == "mvp") {
				return("MVP");
			} else if ($rank == "youtuber") {
				return ("Youtuber");
			} else if ($rank == "Builder") {
				return("Builder");
			} else if ($rank == "guide") {
				return("Guide");
			} else if ($rank == "modo") {
				return("Modérateur");
			} else if ($rank == "developpeur") {
				return("Développeur");
			} else if ($rank == "admin") {
				return("Administrateur");
			}
		}
	}

	/**
	 * @param $player
	 * @return string
	 */
	public function getLumines($player) {
		$uuid = $this->getUUID($player);
		$realuuid = substr($uuid, 0, 8) . '-' . substr($uuid, 8, 4) . '-' . substr($uuid, 12, 4) . '-' . substr($uuid, 16, 4) . '-' . substr($uuid, 20, 12); //Car ByToByX emmerde à stocker des UUID n'importe comment
		$luminesDB = $this->load->database('money', TRUE);
		$query = $luminesDB->where('uuid', $realuuid)->get('accounts')->row();
		if(isset($query->lumines)) {
			return($query->lumines);
		} else {
			return("Aucun compte");
		}
	}

	/**
	 * @param $player
	 * @return string
	 */
	public function isPlayerBan($player) {
		$uuid = $this->getUUID($player);
		$advancedbanDB = $this->load->database('advancedban', TRUE);
		$query = $advancedbanDB->where('uuid', $uuid)->group_start()->where('punishmentType', "BAN")->or_where('punishmentType', "TEMP_BAN")->group_end()->from("Punishments")->count_all_results();
		if ($query == "0") {
			return("Non");
		} else {
			return("Oui");
		}
	}

	/**
	 * @param $player
	 * @return string
	 */
	public function isPlayerMute($player) {
		$uuid = $this->getUUID($player);
		$advancedbanDB = $this->load->database('advancedban', TRUE);
		$query = $advancedbanDB->where('uuid', $uuid)->group_start()->where('punishmentType', "MUTE")->or_where('punishmentType', "TEMP_MUTE")->group_end()->from("Punishments")->count_all_results();
		if ($query == "0") {
			return("Non");
		} else {
			return("Oui");
		}
	}

	/**
	 * @param $player
	 * @return string
	 */
	public function getPunishments($player) {
		$uuid = $this->getUUID($player);
		$advancedbanDB = $this->load->database('advancedban', TRUE);
		$query = $advancedbanDB->where('uuid', $uuid)->from("PunishmentHistory")->count_all_results();
		if ($query == "0") {
			return("NO_DATA");
		} else {
			$query2 = $advancedbanDB->order_by('id', 'DESC')->get_where('PunishmentHistory', array('uuid' => $uuid));
			return $query2->result_array();
		}
	}

}
