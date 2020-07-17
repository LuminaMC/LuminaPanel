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
	<title>Votre profil</title>
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
	<div class="container-fluid">

		<!-- Section: Edit Account -->
		<section class="section">
			<!-- First row -->
			<div class="row">
				<!-- First column -->
				<div class="col-lg-4 mb-4">

					<!--Section: Basic Info-->
					<section class="card profile-card mb-4 text-center wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="avatar z-depth-1-half">
							<img src="https://minotar.net/avatar/<?php echo $_SESSION["name"]; ?>" alt="" class="img-fluid">
						</div>
						<!--Card content-->
						<div class="card-body">
							<!--Title-->
							<h4 class="card-title"><strong><?php echo $_SESSION["name"]; ?></strong></h4>
							<h5><?php echo $rank; ?> sur <a href="">Lumina</a></h5>
						</div>

					</section>
					<!--Section: Basic Info-->

				</div>
				<!-- /.First column -->
				<!-- Second column -->
				<div class="col-lg-8 mb-4">

					<!--Card-->
					<div class="card card-cascade narrower">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header aqua-gradient mdb-color lighten-3">
							<h5 class="mb-0 font-weight-bold">Modifier votre compte</h5>
						</div>
						<!--/Card image-->

						<!-- Card content -->
						<div class="card-body card-body-cascade text-center">
							<!-- Edit Form -->
							<form>
								<!--First row-->
								<div class="row">
									<!--First column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="form1" class="form-control validate" value="LuminaMC" disabled>
											<label for="form1" data-error="wrong" data-success="right">Entreprise <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Cette information est fournie par votre administrateur système"></i></label>
										</div>
									</div>
									<!--Second column-->
									<div class="col-md-6">
										<div class="md-form mb-0">
											<input type="text" id="form2" value="Premium" class="form-control validate" disabled>
											<label for="form2" data-error="wrong" data-success="right">Votre plan</label>
										</div>
									</div>
								</div>
								<!--/.First row-->
								<!--First row-->
								<div class="row justify-content-center">
									<div class="alert alert-danger" role="alert">
										<h4 class="alert-heading">LuminaPanel Security </h4>
										<p>Si vous souhaitez modifier votre mot de passe, LuminaPanel Security doit être sûr de votre identité. Veuillez alors faire la commande suivante.</p>
										<hr>
										<p class="mb-0">/luminapassword NouveauMotDePasse (La commande n'est pas enregistrée dans les logs)</p>
									</div>
								</div>
								<!--/.First row-->
							</form>
							<!-- Edit Form -->
						</div>
						<!-- /.Card content -->

					</div>
					<!--/.Card-->
				</div>
				<!-- /.Second column -->
			</div>
			<!-- /.First row -->
		</section>
		<!-- /.Section: Edit Account -->

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
