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
    <title>Accueil</title>
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
        logo: "../assets/img/logos/logo.png",
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
                                <i class="fa fa-users light-blue lighten-1"></i>
                                <div class="data">
                                    <p>JOUEURS EN LIGNE</p>
                                    <h4 class="font-weight-bold dark-grey-text odometer" id="playersonline"></h4>
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
                                <i class="fa fa-bar-chart red accent-2"></i>
                                <div class="data">
                                    <p>NOMBRE DE SANCTIONS</p>
                                    <h4 class="font-weight-bold dark-grey-text odometer" id="nPunishments"></h4>
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
                                <i class="fa fa-server green accent-2"></i>
                                <div class="data">
                                    <p>TEMPS DE RÉPONSE</p>
                                    <h4 class="font-weight-bold dark-grey-text odometer" id="nPing"></h4>
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
							<div class="view view-cascade gradient-card-header peach-gradient lighten-3">
								<h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Informations</h2>
							</div>
							<!--/Card image-->

							<div class="px-4">

								<div data-simplebar class="table-responsive wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
									<br />
									<div class="alert alert-warning" role="alert">
										<h4 class="alert-heading">Mise à jour 3.1</h4> <!--J'avais la flemme de faire un système de News. Alors j'ai tout hardcoded-->
										<p>Divers FIX concernant la gestion des redirections, permettant des migrations plus simples en cas de problème</p>
										<hr>
										<p class="mb-0">Post par Fyroeo</p>
									</div>
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
                                <h2 class="h2-responsive mb-0 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">10 Dernières sanctions</h2>
                            </div>
                            <!--/Card image-->

                            <div class="px-4">

                                <div data-simplebar class="table-responsive wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                    <!--Table-->
                                    <table class="table table-hover mb-0" id="tableban">
                                    </table>
                                    <!--Table-->
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
    <script type="text/javascript"> //Pour les api, voir le repo des api de LuminaPanel
        function refreshPlayers() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function () {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('playersonline').innerText = req.responseText;
				}
			}
          req.open("GET", 'https://api.luminapanel.fyroeo.fr/players', true);
          req.send(null);
        }

        function refreshPunishments() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function () {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('nPunishments').innerText = req.responseText;
				}
			}
          req.open("GET", 'https://api.fyroeo.fr/lumina/numberPunishments.php', true);
          req.send(null);
        }

        function refreshPing() {
			var req = new XMLHttpRequest();
			req.onreadystatechange = function () {
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('nPing').innerText = req.responseText;
				}
			}
          req.open("GET", 'https://api.fyroeo.fr/lumina/ping.php', true);
          req.send(null);
        }

        function getPunishments() {
			var req = new XMLHttpRequest();
			req.open("GET", 'https://api.fyroeo.fr/lumina/backend/punishments.php', true);
			req.send(null);
			req.onreadystatechange = function () {
				if (req.readyState == 4 && req.status == 200) {
					dataSet = req.responseText;
					dataSet = dataSet.replace(/'/g, '"');
                dataSet = JSON.parse(dataSet);
                console.log(dataSet);
                $('#tableban').DataTable( {
                    data: dataSet,
                    "paging":   false,
                    "ordering": false,
                    "info":     false,
                    "searching":false,
                    columns: [
                        { title: "Pseudo" },
                        { title: "Type" },
                        { title: "Staff" },
                        { title: "Raison" }
                    ]
                } );
            }
          }
        }

        function init() {
          refreshPlayers();
          refreshPunishments();
          refreshPing();
          getPunishments();
          var int = self.setInterval(function () {
            refreshPlayers();
            refreshPunishments();
            refreshPing();
          }, 10000);
        }

      </script>
      <script>
        loading_screen.finish();
    </script>
    <script>
        new WOW().init();
	</script>
	<script>
		require('./renderer.js');
	</script>

    <!-- Charts -->

</body>

</html>
