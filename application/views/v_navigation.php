<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<header>
	<!-- Sidebar navigation -->
	<div id="slide-out" class="side-nav sn-bg-4 fixed">
		<ul class="custom-scrollbar">
			<!-- Logo -->
			<li class="logo-sn waves-effect">
				<div class="text-center">
					<a href="#" class="pl-0"><img src="https://fyroeo.fr/icon.png" class="animated bounce infinite"></a>
				</div>
			</li>
			<!--/. Logo -->

			<!--Search Form-->
			<li>
				<?php $attributes = array('class' => 'search-form', 'id' => 'searchform'); echo form_open('Player', $attributes); ?>
					<div class="form-group md-form mt-0 pt-1 waves-light">
						<input type="text" id="searchform" name="searchform" class="form-control" placeholder="Rechercher un joueur">
					</div>
				</form>
			</li>
			<!--/.Search Form-->

			<!-- Side navigation links -->
			<li>
				<ul class="collapsible collapsible-accordion">
					<!-- Simple link -->
					<li><a href="<?php echo base_url();?>" class="collapsible-header waves-effect"><i class="fa fa-home"></i> Accueil</a></li>
					<li><a href="<?php echo site_url() . "/Statut"?>" class="collapsible-header waves-effect"><i class="fa fa-server"></i> Statut du réseau</a></li>
					<li><a href="<?php echo site_url() . "/Candidature"?>" class="collapsible-header waves-effect"><i class="fa fa-envelope"></i> Candidatures</a></li>

				</ul>
			</li>
			<!--/. Side navigation links -->
		</ul>
		<div class="sidenav-bg mask-strong"></div>
	</div>
	<!--/. Sidebar navigation -->

	<!-- Navbar -->
	<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
		<!-- SideNav slide-out button -->
		<div class="float-left">
			<a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
		</div>
		<!-- Breadcrumb-->
		<div class="breadcrumb-dn mr-auto">
			<p><?php echo $page; ?></p>
		</div>

		<!--Navbar links-->
		<ul class="nav navbar-nav nav-flex-icons ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profil</span></a>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="<?php echo site_url() . "/Profil"?>">Mon compte</a>
					<a class="dropdown-item" href="<?php echo site_url() . "/Accueil/disconnect"?>">Se déconnecter</a>
				</div>
			</li>

		</ul>
		<!--/Navbar links-->
	</nav>
	<!-- /.Navbar -->

</header>
<script>
	$(".button-collapse").sideNav();
</script>

<?php

if(isset($_SESSION["notif"])) {
	$notif = $_SESSION["notif"];
	echo "<script>toastr.success('$notif');</script>";
}
if(isset($_SESSION["error"])) {
	$notif = $_SESSION["error"];
	echo "<script>toastr.error('$notif', 'LuminaPanel Security');</script>";
}

?>

<!--Main Navigation-->
