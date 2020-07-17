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
	<title>Candidatures</title>
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
	<link rel='manifest' href='../../assets/js/manifest.json'>
	<script src="../../assets/js/odometer.min.js"></script>

	<!-- Your custom styles (optional) -->
	<style>

	</style>
</head>

<body class="fixed-sn white-skin" onload="init()" ng-controller="MainCtrl">
<div class="inner" ng-view>
</div>
<script type="text/javascript" src="../../assets/js/please-wait.min.js"></script>
<script type="text/javascript">
	var loading_screen = window.pleaseWait({
		logo: "../../assets/img/logos/logo.png",
		backgroundColor: '#2d2d2b',
		loadingHtml: "<div class='spinner'><div class='double-bounce1'></div><div class='double-bounce2'></div></div>"
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
<!--Main Navigation-->


<!--Main layout-->
<main>
	<div class="container-fluid">

		<!--Section: Intro-->
		<section class="mt-lg-5">

			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-xl-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card card-cascade cascading-admin-card">

						<!--Card Data-->
						<div class="admin-up">
							<i class="fa fa-question-circle warning-color"></i>
							<div class="data">
								<p>NOUS SOMMES LE</p>
								<h4 class="font-weight-bold dark-grey-text"><?php echo date("d/m/Y"); ?></h4>
							</div>
						</div>
						<!--/.Card Data-->

					</div>
					<!--/.Card-->

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-xl-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card card-cascade cascading-admin-card">

						<!--Card Data-->
						<div class="admin-up">
							<i class="fa fa-users grey lighten-1"></i>
							<div class="data">
								<p>EN ATTENTE</p>
								<h4 class="font-weight-bold dark-grey-text odometer"><?php echo $number0; ?></h4>
							</div>
						</div>
						<!--/.Card Data-->

					</div>
					<!--/.Card-->

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-xl-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card card-cascade cascading-admin-card">

						<!--Card Data-->
						<div class="admin-up">
							<i class="fa fa-check green accent-2"></i>
							<div class="data">
								<p>ACCEPTÉES</p>
								<h4 class="font-weight-bold dark-grey-text odometer"><?php echo $number1; ?></h4>
							</div>
						</div>
						<!--/.Card Data-->

					</div>
					<!--/.Card-->

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-xl-3 col-md-6 mb-4">

					<!--Card-->
					<div class="card card-cascade cascading-admin-card">

						<!--Card Data-->
						<div class="admin-up">
							<i class="fa fa-times red accent-2"></i>
							<div class="data">
								<p>REFUSÉES</p>
								<h4 class="font-weight-bold dark-grey-text odometer"><?php echo $number2; ?></h4>
							</div>
						</div>
						<!--/.Card Data-->

					</div>
					<!--/.Card-->

				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
		<!--Section: Intro-->

		<div style="height: 5px"></div>

		<!--Section: Main panel-->
		<section class="mb-5">

			<!--Card-->
			<div class="card card-cascade narrower">

				<!--Section: Table-->
				<section>

					<div class="card card-cascade narrower z-depth-0">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header heavy-rain-gradient lighten-3">
							<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Candidatures en attentes</h2>
						</div>
						<!--/Card image-->

						<div class="px-4">

							<div data-simplebar class="table-responsive wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
								<br />

								<?php if ($statut0 == "NO_DATA"): ?>

								<div class="alert alert-danger" role="alert">
									<h4 class="alert-heading">Aucune candidature en attente</h4>
									<p>Si aucune candidature est en attente, c'est qu'aucun joueur n'a fait de candidature ou vous les avez toutes traitées</p>
									<hr>
									<p class="mb-0">Message automatique du serveur de traitement</p>
								</div>

								<?php else: ?>

								<!--Table-->
								<div class="table-responsive">
									<table class="table">
										<thead>
										<tr>
											<th scope="col">ID</th>
											<th scope="col">Code Suivi</th>
											<th scope="col">Action</th>
										</tr>
										</thead>
										<tbody>
										<?php foreach ($statut0 as $candidature): ?>
											<tr>
												<th scope="row"><?php echo $candidature["id"]; ?></th>
												<td><?php echo $candidature["codesuivi"]; ?></td>
												<td><button type="button" onclick="window.location.href='<?php echo $linkBuilder;?><?php echo $candidature["codesuivi"]; ?>'" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Lire la candidature</button></td>
											</tr>
										<?php endforeach; ?>
										</tbody>
									</table>
								</div>
								<!--Table-->

								<?php endif; ?>

							</div>

							<hr class="my-0">


						</div>
					</div>

				</section>
				<!--Section: Table-->

			</div>
			<!--/.Card-->

			<!--Card-->
			<div class="card card-cascade narrower">

				<!--Section: Table-->
				<section>

					<div class="card card-cascade narrower z-depth-0">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header aqua-gradient lighten-1">
							<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Candidatures acceptées</h2>
						</div>
						<!--/Card image-->

						<div class="px-4">

							<div data-simplebar class="table-responsive wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
								<br />

								<?php if ($statut1 == "NO_DATA"): ?>

									<div class="alert alert-danger" role="alert">
										<h4 class="alert-heading">Aucune candidature acceptée</h4>
										<p>Si aucune candidature est acceptée, c'est qu'aucun joueur n'a fait de candidature ou vous n'en avez acceptées aucunes.</p>
										<hr>
										<p class="mb-0">Message automatique du serveur de traitement</p>
									</div>

								<?php else: ?>

									<!--Table-->
									<div class="table-responsive">
										<table class="table">
											<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">Code Suivi</th>
												<th scope="col">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($statut1 as $candidature): ?>
												<tr>
													<th scope="row"><?php echo $candidature["id"]; ?></th>
													<td><?php echo $candidature["codesuivi"]; ?></td>
													<td><button type="button" onclick="window.location.href='<?php echo $linkBuilder;?><?php echo $candidature["codesuivi"]; ?>'" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Lire la candidature</button></td>
												</tr>
											<?php endforeach; ?>
											</tbody>
										</table>
									</div>
									<!--Table-->

								<?php endif; ?>
							</div>

							<hr class="my-0">


						</div>
					</div>

				</section>
				<!--Section: Table-->

			</div>
			<!--/.Card-->

			<!--Card-->
			<div class="card card-cascade narrower">

				<!--Section: Table-->
				<section>

					<div class="card card-cascade narrower z-depth-0">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header young-passion-gradient lighten-1">
							<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Candidatures refusées</h2>
						</div>
						<!--/Card image-->

						<div class="px-4">

							<div data-simplebar class="table-responsive wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
								<br />

								<?php if ($statut2 == "NO_DATA"): ?>

									<div class="alert alert-danger" role="alert">
										<h4 class="alert-heading">Aucune candidature refusée</h4>
										<p>Si aucune candidature est refusée, c'est qu'aucun joueur n'a fait de candidature ou vous n'en avez refusées aucunes.</p>
										<hr>
										<p class="mb-0">Message automatique du serveur de traitement</p>
									</div>

								<?php else: ?>

									<!--Table-->
									<div class="table-responsive">
										<table class="table">
											<thead>
											<tr>
												<th scope="col">ID</th>
												<th scope="col">Code Suivi</th>
												<th scope="col">Action</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($statut2 as $candidature): ?>
												<tr>
													<th scope="row"><?php echo $candidature["id"]; ?></th>
													<td><?php echo $candidature["codesuivi"]; ?></td>
													<td><button type="button" onclick="window.location.href='<?php echo $linkBuilder;?><?php echo $candidature["codesuivi"]; ?>'" class="btn btn-info btn-rounded btn-sm waves-effect waves-light"> Lire la candidature</button></td>
												</tr>
											<?php endforeach; ?>
											</tbody>
										</table>
									</div>
									<!--Table-->

								<?php endif; ?>
							</div>

							<hr class="my-0">


						</div>
					</div>

				</section>
				<!--Section: Table-->

			</div>
			<!--/.Card-->

		</section>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="page-footer pt-0 mt-5 rgba-stylish-light">

	<!--Copyright-->
	<div class="footer-copyright py-3 text-center">
		<div class="container-fluid">
			© 2019 Copyright: Groupe Fyroeo | Génération: {elapsed_time} secondes</a>

		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->


<!-- SCRIPTS -->
<!-- JQuery -->
<script>
	const customTitlebar = require('custom-electron-titlebar');

	new customTitlebar.Titlebar({
		backgroundColor: customTitlebar.Color.fromHex('#444')
	});
</script>
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
	// SideNav Initialization

	var container = document.querySelector('.custom-scrollbar');
	Ps.initialize(container, {
		wheelSpeed: 2,
		wheelPropagation: true,
		minScrollbarLength: 20
	});
</script>
<!--Initializations-->
<script type="text/javascript">

</script>
<script>
	loading_screen.finish();
</script>
<script>
	new WOW().init();
</script>
<!-- Charts -->

</body>

</html>
