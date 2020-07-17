<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

//Si jamais Lumina est KC.
//PS: ça arrive souvent

defined('BASEPATH') OR exit('No direct script access allowed');

class ServerInfo extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	/**
	 * @param $server
	 */
	public function serverState($server){
		if ($server == "proxy") {
			$host = "62.210.96.27"; //Je pense que c'est assez transparent pour que ça ne mérite pas une explication
			$port = 25565;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger wow pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "hub") {
			$host = "62.210.96.27";
			$port = 25566;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "skyblock") {
			$host = "62.210.96.27";
			$port = 25568;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "dev") {
			$host = "62.210.96.27";
			$port = 25567;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "build") {
			$host = "149.202.86.50";
			$port = 1901;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "bdd") {
			$host = "62.210.96.27";
			$port = 3306;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "api") {
			$host = "luminapanel.fyroeo.fr"; //car Fyroeo adore héberger des trucs qu'on ne lui paye pas :]
			$port = 3306;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "tebex") {
			$host = "mc-lumina.buycraft.net";
			$port = 443;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
		if ($server == "pufferpanel") {
			$host = "62.210.96.27";
			$port = 443;
			$connection = @fsockopen($host, $port);
			if (is_resource($connection)) {
				echo "<span class=\"btn-floating btn-sm btn-success pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
				fclose($connection);
			} else {
				echo "<span class=\"btn-floating btn-sm btn-danger pulse animated infinite slow\" style=\"visibility: visible; animation-name: pulse;\"></span>";
			}
		}
	}


}
