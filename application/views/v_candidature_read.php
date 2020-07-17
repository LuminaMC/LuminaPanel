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
	<title><?php echo $page; ?></title>
	<!-- Font Awesome -->
	<link href="../../../assets/css/please-wait.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
	<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
	<!-- Material Design Bootstrap -->
	<link rel="stylesheet" href="../../../assets/css/mdb.min.css">
	<link rel="stylesheet" href="../../../assets/css/odometer-theme-default.css" />
	<link rel='manifest' href='manifest.json'>
	<script src="../../../assets/js/odometer.min.js"></script>
	<script src="../../../assets/js/tinymce/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: "textarea",
			language: "fr_FR",
			language_url: "../../../assets/js/fr_FR.js",
			plugins: "link, media, image, fullscreen, emoticons, contextmenu, preview, textcolor, help",
			contextmenu: "link image inserttable | cell row column deletetable",
			media_live_embeds: true,
			readonly : 1
		});
	</script>

	<!-- Your custom styles (optional) -->
	<style>

	</style>
</head>

<body class="fixed-sn white-skin" ng-controller="MainCtrl">
<script type="text/javascript" src="../../../assets/js/please-wait.min.js"></script>
<script type="text/javascript">
	var loading_screen = window.pleaseWait({
		logo: "../../../assets/img/logos/logo.png",
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

					<!--Card-->
					<div class="card card-cascade narrower">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header aqua-gradient mdb-color lighten-3">
							<h5 class="mb-0 font-weight-bold">Informations</h5>
						</div>
						<!--/Card image-->

						<!-- Card content -->
						<div class="card-body card-body-cascade text-center">
							<?php if($this->PlayerInfo->getRank("system", $_SESSION["name"]) == "admin"): ?>
								<div class="md-form mt-3">
									<input type="text" disabled id="materialSubscriptionFormPasswords" value="<?php echo htmlspecialchars_decode($candid[0]['pseudomc']); ?>" class="form-control">
									<label for="materialSubscriptionFormPasswords">Pseudo Minecraft</label>
								</div>
								<br />
								<div class="md-form mt-3">
									<input type="text" disabled id="materialSubscriptionFormPasswords" value="<?php echo htmlspecialchars_decode($candid[0]['pseudodiscord']); ?>" class="form-control">
									<label for="materialSubscriptionFormPasswords">Pseudo Discord</label>
								</div>
								<br />
								<div class="md-form mt-3">
									<input type="text" disabled id="materialSubscriptionFormPasswords" value="<?php echo htmlspecialchars_decode($candid[0]['email']); ?>" class="form-control">
									<label for="materialSubscriptionFormPasswords">Adresse-Mail</label>
								</div>
								<?php if($candid[0]['statut'] == "traitement"): ?>
									<br />
									<br />
									<button type="button" onclick="window.location.href='<?php echo $linkBuilder . "accept"; ?>'" class="btn btn-success btn-rounded btn-sm waves-effect waves-light"> Accepter la candidature</button>
									<button type="button" onclick="window.location.href='<?php echo $linkBuilder . "decline"; ?>'" class="btn btn-danger btn-rounded btn-sm waves-effect waves-light"> Refuser la candidature</button>
								<?php endif; ?>
								<?php else: ?>
								<div class="alert alert-danger" role="alert">
									<h4 class="alert-heading">Erreur survenue dans l'obtention des informations</h4>
									<p>Le serveur de traitement ne permet pas à votre grade l'obtention des informations de contact de la personne</p>
									<hr>
									<p class="mb-0">Message automatique du serveur de traitement</p>
								</div>
							<?php endif; ?>
						</div>
						<!-- /.Card content -->

					</div>
					<!--/.Card-->

				</div>
				<!-- /.First column -->
				<!-- Second column -->
				<div class="col-lg-8 mb-4">

					<!--Card-->
					<div class="card card-cascade narrower">

						<!--Card image-->
						<div class="view view-cascade gradient-card-header aqua-gradient mdb-color lighten-3">
							<h5 class="mb-0 font-weight-bold">Candidature</h5>
						</div>
						<!--/Card image-->

						<!-- Card content -->
						<div class="card-body card-body-cascade text-center">
							<textarea id="candidtext" name="candidtext" disabled><?php echo htmlspecialchars_decode($candid[0]['candidature']); ?></textarea>
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
<script src="../../../assets/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../../assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../../assets/js/bootstrap.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../../assets/js/mdb.js"></script>
<script type="text/javascript" src="../../../assets/js/addons/datatables.min.js"></script>
<script>
	loading_screen.finish();
	new WOW().init();
</script>
</body>

</html>



