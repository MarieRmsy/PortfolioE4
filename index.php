<!DOCTYPE HTML>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=ProductSans' rel='stylesheet' type='text/css'>
		<title>Portfolio - Marie Ramssamy</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" type="text/css"/>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
		<link rel="shortcut icon" type="image/png" href="assets/stuff/MR.png"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php

					$nav = 1;

					if(!isset($_REQUEST['action']))
					{
						$action = 'main';
					}else{
						$action = $_REQUEST['action'];
					}


					if(!isset($_REQUEST['projet']))
					{
						$projet = 'none';
					}else{
						$projet = $_REQUEST['projet'];
					}
					
					if($nav == 2)
					{
						$action = 'none';
					}
					
					switch($action)
					{

					case 'main':
					$nav = 1;
					include("vues/accueil.php");
					break;

					case 'projets' :
					
					$nav = 2;

					switch($projet)
					{
						case 'menuProjet':
						include("vues/projets.php");
						break;

						case 'lightsout':
						include("vues/projets/scolaire/lightsout.php");
						break;
	
						case 'mandelbrot':
						include("vues/projets/perso/mandelbrot.php");
						break;

						case 'allumettes':
						include("vues/projets/scolaire/jeudesallumettes.php");
						break;
						
						case 'discord':
						include("vues/projets/perso/discord.php");
						break;

						case 'snake':
						include("vues/projets/scolaire/snake.php");
						break;

						case 'chamo':
						include("vues/projets/pro/chamo.php");
						break;

						case 'logoBir':
						include("vues/projets/autre/logoBir.php");
						break;

						case 'tutos':
						include("vues/projets/autre/tutos.php");
						break;

						case 'refontes':
						include("vues/projets/pro/refontes.php");
						break;

						case 'm2l':
						include("vues/projets/scolaire/m2l.php");
						break;

						case 'bwa':
						include("vues/projets/autre/bwa.php");
						break;

						case 'trad':
						include("vues/projets/autre/trad.php");
						break;

						case 'qv':
						include("vues/projets/perso/quentin.php");
						break;

						case 'calculatrice':
						include("vues/projets/scolaire/calculatrice.php");
						break;

						case 'virtuoz':
						include("vues/projets/scolaire/virtuoz.php");
						break;
					}
					break;

					case 'e4' :
					include("vues/E4/btssio.php");
					$nav = 3;
					break;

					case 'veille' :
					include("vues/E4/veille.php");
					$nav = 3;
					break;
	
					case 'entreprise':
					include("vues/E4/entreprise.php");
					$nav = 3;
					break;

					// default: include("nav/accueil.php");
					break;
					}

				?>
                    
				<!-- Sidebar -->
					

                <div id="sidebar">
						<div class="inner">
							<!-- Search -->
								<section id="search" class="alt">

								<p class="titrePort">Portfolio()</p>
								<?php

								
									switch($nav)
									{

									case 2 :
									echo("
									<h2 class='titrePage'>{ Projets }</h2>
									");
									break;

									case 3 :
									echo("
									<h2 class='titrePage'>{ Épreuve E4 }</h2>
									");
									break;

									default: echo("
									<h2 class='titrePage'>{ Welcome ! }</h2>
										
										");
										// <h2 class='toContact'>//Me contacter</h2>
										// <ul class='contact'>
										// 	<a href='mailto:ramssamy.marie@gmail.com'><a href='mailto:ramssamy.marie@gmail.com'><li class='icon solid fa-envelope'>ramssamy.marie@gmail.com</li></a></a>
										// </ul>
									break;
									}

									?>
								</section>
								<!-- Triangle -->
								<div id="triangle-code" class="triangleBleu">
								</div>

                                <!-- NAV -->

								<?php

								
									switch($nav)
									{

									case 2 :
									include("nav/navProjets.php");
									break;

									case 3 :
									include("nav/navE4.php");
									break;

									default: include("nav/navMain.php");
									break;
									}

									// switch($action)
									// {

									// case 'projets' :
									// include("nav/navProjet1.php");
									// break;

									// case 'e4' :
									// include("nav/navE4.php");
									// break;
									
									// case 'veille' :
									// include("nav/navE4.php");
									// break;

									// default: include("nav/navMain.php");
									// break;
									// }

									?>

                        </div>
                </div>


            </div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
		

	</body>
</html>