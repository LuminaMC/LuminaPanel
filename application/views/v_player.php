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
	<title>Profil de <?php echo $search; ?></title>
	<link href="../../../assets/css/please-wait.css" rel="stylesheet">
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

	<!-- Your custom styles (optional) -->
	<style>

	</style>
</head>

<body class="fixed-sn white-skin" ng-controller="MainCtrl">
<script type="text/javascript" src="../../../assets/js/please-wait.min.js"></script>
<script type="text/javascript">
	var loading_screen = window.pleaseWait({
		logo: "../../..//assets/img/logos/logo.png",
		backgroundColor: '#2d2d2b',
		loadingHtml: "<div class='spinner'><div class='double-bounce1'></div><div class='double-bounce2'></div></div>"
	});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
<!--Main layout-->
<main>
	<div class="container-fluid">
		<!--Section: Profile-->
		<section>

			<!--Grid row-->
			<div class="row mt-5">

				<!--Grid column-->
				<div class="col-lg-4 col-md-12">

					<!--Section: Basic Info-->
					<section class="card profile-card mb-4 text-center wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="avatar z-depth-1-half">
							<img src="https://minotar.net/avatar/<?php echo $search; ?>" alt="" class="img-fluid">
						</div>
						<!--Card content-->
						<div class="card-body">
							<!--Title-->
							<h4 class="card-title"><strong><?php echo $search; ?></strong></h4>
							<h5><?php echo $rank; ?> sur <a href="">Lumina</a></h5>
							<button type="button" class="btn btn-info btn-rounded btn-sm waves-effect waves-light" onclick="copySuccess()" data-clipboard-action="copy" data-clipboard-text="<?php echo $share ?>">Partager le profil<i class="fa fa-paper-plane ml-2"></i></button>

						</div>

					</section>
					<!--Section: Basic Info-->

					<!--Section: Experience-->
					<section class="card mb-4 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
						<div class="card-body">

							<h5 class="text-center mb-4"><strong>Stats de <?php echo $search; ?></strong></h5>

							<ul class="list-unstyled pt-4">
								<li>
									<p>Lumines <span class="badge badge-primary pull-right"><?php echo $lumines; ?></span></p>
								</li>
								<hr>
								<li>
									<p>Actuellement ban <span class="badge badge-primary pull-right"><?php echo $ban; ?></span></p>
								</li>
								<hr>
								<li>
									<p>Actuellement mute <span class="badge badge-primary pull-right"><?php echo $mute; ?></span></p>
								</li>

							</ul>

						</div>
					</section>
					<!--Section: Experience-->

				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-8 col-md-12 text-center">

					<!-- Heading -->
					<div class="text-center mt-3 mb-5 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

						<h4><strong>Sanctions de <?php echo $search; ?></strong></h4>

					</div>
					<!-- Heading -->

					<?php if ($sanctions != "NO_DATA") { ?>

					<?php
					echo "<div class=\"card-deck wow fadeInUp animated\" style=\"visibility: visible; animation-name: fadeInUp;\">";
					$i = 0;
					?>

					<?php foreach ($sanctions as $punish): ?>

						<!--Card-->
						<div class="card card-cascade narrower card-ecommerce mb-5">

							<!--Card image-->
							<div class="view view-cascade overlay">
								<img src="../../../assets/img/nopreuve.png" class="img-fluid" alt="">
								<a href="#">
									<div class="mask"></div>
								</a>
							</div>

							<!--Card content-->
							<div class="card-body card-body-cascade">
								<!--Title-->
								<h4 class="card-title"><?php echo $punish["punishmentType"]; ?></h4>
								<!--Text-->
								<p class="card-text"><?php echo $punish["reason"]; ?>
								</p>

							</div>

							<!--Card footer-->
							<div class="card-footer links-light">
								<span class="float-left pt-2">
									<div class="chip aqua-gradient lighten-4 waves-effect waves-effect">
										<img src="https://minotar.net/avatar/<?php echo $punish["operator"]; ?>" alt="Contact Person"> <?php echo $punish["operator"]; ?>
									</div>
									<?php if ($punish["end"] < time() || $punish["end"] == -1) {
										echo "<div class=\"chip young-passion-gradient lighten-4 waves-effect waves-effect\"> Sanction en cours </div>";
									} else {
										echo "<div class=\"chip aqua-gradient lighten-4 waves-effect waves-effect\"> Sanction terminée</div>";
									}
									?>
								</span>
							</div>

						</div>
						<!--/.Card-->
						<?php
						$i++;
						if ($i % 2 == 0 && $i != count($sanctions)) {
							echo "</div><div class=\"card-deck wow fadeInUp animated\" style=\"visibility: visible; animation-name: fadeInUp;\">";
						}
						?>

					<?php endforeach; ?>
					<?php echo "</div>"; ?>

					<?php } else {
						echo "<div class=\"alert alert-danger wow fadeInUp animated\" role=\"alert\"><h4 class=\"alert-heading\">Quelle horreur !</h4><p>Cette personne ne dispose d'aucune sanction. Ceci signifie donc que vous faites mal votre travail. Alors, au boulot !</p><hr><p class=\"mb-0\">Ceci reste une blague hein</p></div>";
					}

					?>


				</div>
				<!--Grid column-->

			</div>
			<!--Grid row-->

		</section>
		<!--Section: Profile-->

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
<script src="../../../assets/js/clipboard.min.js"></script>
<script>
	loading_screen.finish();
	new WOW().init();

	new ClipboardJS('.btn');

	function copySuccess() {
		toastr.success('Lien copié dans le presse-papier');
	}

</script>
</body>

</html>
