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
		<title>Connexion</title>
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
			:root {
				--input-padding-x: 1.5rem;
				--input-padding-y: .75rem;
			}

			body {
				background: #007bff;
				background: linear-gradient(to right, #0062E6, #33AEFF);
			}

			.card-signin {
				border: 0;
				border-radius: 1rem;
				box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
			}

			.card-signin .card-title {
				margin-bottom: 2rem;
				font-weight: 300;
				font-size: 1.5rem;
			}

			.card-signin .card-body {
				padding: 2rem;
			}

			.form-signin {
				width: 100%;
			}

			.form-signin .btn {
				font-size: 80%;
				border-radius: 5rem;
				letter-spacing: .1rem;
				font-weight: bold;
				padding: 1rem;
				transition: all 0.2s;
			}

			.form-label-group {
				position: relative;
				margin-bottom: 1rem;
			}

			.form-label-group input {
				height: auto;
				border-radius: 2rem;
			}

			.form-label-group>input,
			.form-label-group>label {
				padding: var(--input-padding-y) var(--input-padding-x);
			}

			.form-label-group>label {
				position: absolute;
				top: 0;
				left: 0;
				display: block;
				width: 100%;
				margin-bottom: 0;
				/* Override default `<label>` margin */
				line-height: 1.5;
				color: #495057;
				border: 1px solid transparent;
				border-radius: .25rem;
				transition: all .1s ease-in-out;
			}

			.form-label-group input::-webkit-input-placeholder {
				color: transparent;
			}

			.form-label-group input:-ms-input-placeholder {
				color: transparent;
			}

			.form-label-group input::-ms-input-placeholder {
				color: transparent;
			}

			.form-label-group input::-moz-placeholder {
				color: transparent;
			}

			.form-label-group input::placeholder {
				color: transparent;
			}

			.form-label-group input:not(:placeholder-shown) {
				padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
				padding-bottom: calc(var(--input-padding-y) / 3);
			}

			.form-label-group input:not(:placeholder-shown)~label {
				padding-top: calc(var(--input-padding-y) / 3);
				padding-bottom: calc(var(--input-padding-y) / 3);
				font-size: 12px;
				color: #777;
			}

			.btn-google {
				color: white;
				background-color: #ea4335;
			}

			.btn-facebook {
				color: white;
				background-color: #3b5998;
			}
		</style>
	</head>

	<body class="login-page" onload="init()" ng-controller="MainCtrl">
	<div class="inner" ng-view>
	</div>
	<script type="text/javascript" src="../../assets/js/please-wait.min.js"></script>
	<script type="text/javascript">
		var loading_screen = window.pleaseWait({
			logo: "../assets/img/logos/logo.png",
			backgroundColor: '#2d2d2b',
			loadingHtml: "<div class='spinner'><div class='double-bounce1'></div><div class='double-bounce2'></div></div>"
		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h5 class="card-title text-center">LuminaPanel</h5>
						<?php echo validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
						<?php if (isset($error) && $error = "incorrect") {echo '<div class="alert alert-danger" role="alert">Utilisateur ou mot de passe incorrect</div>';} ?>
						<?php echo form_open('Login'); ?>
							<div class="form-label-group">
								<input type="text" id="inputPseudo" name="inputPseudo" value="<?php echo set_value('inputPseudo'); ?>" class="form-control" placeholder="Pseudonyme" required autofocus>
								<label for="inputPseudo">Pseudonyme</label>
							</div>

							<div class="form-label-group">
								<input type="password" id="inputPassword" name="inputPassword" value="<?php echo set_value('inputPassword'); ?>" class="form-control" placeholder="Mot de passe" required>
								<label for="inputPassword">Mot de passe</label>
							</div>

							<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Se connecter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Footer-->
	<footer class="page-footer pt-0 mt-5 rgba-stylish-light fixed-bottom">

		<!--Copyright-->
		<div class="footer-copyright py-3 text-center">
			<div class="container-fluid">
				© 2019 Copyright: Groupe Fyroeo | Génération: {elapsed_time} secondes</a>

			</div>
		</div>
		<!--/.Copyright-->

	</footer>
	<!--/.Footer-->
</header>

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script>window.$ = window.jQuery = require('jquery');</script>
	<script src="../../assets/js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="../../assets/js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="../../assets/js/mdb.js"></script>
	<script type="text/javascript" src="../../assets/js/addons/datatables.min.js"></script>
	<!--Initializations-->
	<script>
		loading_screen.finish();
	</script>
	<script>
		new WOW().init();
	</script>

	<?php

	if(isset($_SESSION["notif"])) {
		$notif = $_SESSION["notif"];
		echo "<script>toastr.error('$notif', 'LuminaPanel Security');</script>";
	}

	?>

	<!-- Charts -->

	</body>

	</html>
