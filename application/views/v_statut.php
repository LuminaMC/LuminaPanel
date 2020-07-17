<?php
/**
 * Copyright (c) 2020. Groupe Fyroeo.
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en" ng-app="AngularApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Statut du réseau de LuminaMC</title>
	<!-- Font Awesome -->
	<link href="../../assets/css/please-wait.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
	<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="../../assets/css/mdb.min.css">
	<link rel="stylesheet" href="../../assets/css/odometer-theme-default.css" />
	<link rel='manifest' href='manifest.json'>
	<script src="../../assets/js/odometer.min.js"></script>

	<!-- Your custom styles (optional) -->
	<style>

	</style>
</head>

<body class="fixed-sn white-skin" ng-controller="MainCtrl">
<script type="text/javascript" src="../../assets/js/please-wait.min.js"></script>
<script type="text/javascript">
	var loading_screen = window.pleaseWait({
		logo: "../../assets/img/logos/logo.png",
		backgroundColor: '#2d2d2b',
		loadingHtml: "<div class='spinner'><div class='double-bounce1'></div><div class='double-bounce2'></div></div>"
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>

<main>
	<h5>Vous devez raffraichir la page pour mettre à jour les statuts</h5>
	<div class="container-fluid">
		<!--Section: Main panel-->
		<section class="mb-5">

			<!--Card-->
			<div class="card card-cascade narrower">

				<!--Section: Table-->
				<section>

					<div class="card card-cascade narrower z-depth-0">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header peach-gradient lighten-1">
							<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Serveurs minecraft</h2>
						</div>
						<!--/Card image-->
						<br />
						<div class="px-4">

							<div class="row">

							<!--Grid column-->
							<div class="col-md-6 mb-4">
								<!-- Card -->
								<div class="card gradient-card waves-effect">

									<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

										<!-- Content -->
										<a href="#!">
											<div class="text-white d-flex h-100 mask peach-gradient-rgba">
												<div class="first-content align-self-center p-3">
													<h3 class="card-title">Proxy <?php $this->ServerInfo->serverState("proxy"); ?></h3>
													<p class="lead mb-0">Permet la liaison des différents serveurs</p>
												</div>
											</div>
										</a>

									</div>
								</div>
								<!-- Card -->
							</div>
							<!--Grid column-->
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask aqua-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">SkyBlock <?php $this->ServerInfo->serverState("skyblock"); ?></h3>
														<p class="lead mb-0">Serveur principal de Lumina avec le gameplay</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask aqua-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">Développement <?php $this->ServerInfo->serverState("dev"); ?></h3>
														<p class="lead mb-0">Serveur sur lequel les plugins de Lumina sont test et vérifiés</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
							</div>
					</div>

				</section>
				<!--Section: Table-->

			</div>
			<!--Card-->
			<div class="card card-cascade narrower">

				<!--Section: Table-->
				<section>

					<div class="card card-cascade narrower z-depth-0">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header aqua-gradient lighten-1">
							<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Autres</h2>
						</div>
						<!--/Card image-->
						<br />
						<div class="px-4">

							<div class="row">

								<!--Grid column-->
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask peach-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">Base de données <?php $this->ServerInfo->serverState("bdd"); ?></h3>
														<p class="lead mb-0">Stocke toutes les informations au niveau des joueurs et sanctions</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
								<!--Grid column-->
								<!--Grid column-->
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask blue-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">LuminaPanel API <?php $this->ServerInfo->serverState("api"); ?></h3>
														<p class="lead mb-0">Serveur permettant la communication des serveurs avec LuminaPanel</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
							</div>
							<div class="row">

								<!--Grid column-->
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask purple-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">Boutique Tebex <?php $this->ServerInfo->serverState("tebex"); ?></h3>
														<p class="lead mb-0">Site Web géré par la société Tebex pour la boutique de Lumina</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
								<!--Grid column-->
								<!--Grid column-->
								<div class="col-md-6 mb-4">
									<!-- Card -->
									<div class="card gradient-card waves-effect">

										<div class="card-image" style="background-image: url(https://www.luminamc.fr/header.png)">

											<!-- Content -->
											<a href="#!">
												<div class="text-white d-flex h-100 mask aqua-gradient-rgba">
													<div class="first-content align-self-center p-3">
														<h3 class="card-title">Panel de gestion <?php $this->ServerInfo->serverState("pufferpanel"); ?></h3>
														<p class="lead mb-0">Permet l'administration des différens serveurs de jeu</p>
													</div>
												</div>
											</a>

										</div>
									</div>
									<!-- Card -->
								</div>
								<!--Grid column-->
							</div>
						</div>
					</div>

				</section>
				<!--Section: Table-->

			</div>
	</div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer fixed-bottom pt-0 mt-5 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

	<!--Copyright-->
	<div class="footer-copyright py-3 text-center">
		<div class="container-fluid">
			© 2019 Copyright:  Groupe Fyroeo </a>

		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->
<script>window.$ = window.jQuery = require('jquery');</script>
<script src="../../assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../assets/js/mdb.js"></script>
<script type="text/javascript" src="../../assets/js/addons/datatables.min.js"></script>
<script>
	loading_screen.finish();
	new WOW().init();
</script>
</body>

</html>
