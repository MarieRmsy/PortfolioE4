<!DOCTYPE HTML>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=ProductSans' rel='stylesheet' type='text/css'>
		<title>Marie Ramssamy - Mon Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
		<link rel="shortcut icon" type="image/png" href="assets/stuff/MR.png"/>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php

					if(!isset($_REQUEST['action']))
					{
						$action = 'main';
					}else{
						$action = $_REQUEST['action'];
					}

					switch($action)
					{
						
					case 'main':
					include("vues/accueil.php");
					break;

					case 'projets' :
					include("vues/projets.php");
					break;

					case 'e4' :
					include("vues/E4/btssio.php");
					break;

					case 'veille' :
					include("vues/E4/veille.php");
					break;

					default: include("sections/accueil.php");
					break;
					}
				?>
                    
				<!-- Sidebar -->
					

                <div id="sidebar">
						<div class="inner">
							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<h2><font color = #ffffff >Me contacter</font:></h2>
											<ul class="contact">
												<a href="mailto:ramssamy.marie@gmail.com"><a href="mailto:ramssamy.marie@gmail.com"><li class="icon solid fa-envelope">ramssamy.marie@gmail.com</li></a></a>
											</ul>
									</form>
								</section>
								<!-- Triangle -->
								<div id="triangle-code" style="display:inline-block; 
								height:  0em;
								width: 0;
								border-top: 2em solid #168fac;
								border-right: 3em solid transparent;
								margin: 0em 0em 0em 20.7em;
								">
								</div>

                                <!-- NAV -->

								<?php
									switch($action)
									{

									case 'projets' :
									include("sections/navProjet1.php");
									break;

									case 'e4' :
									include("sections/navE4.php");
									break;
									
									case 'veille' :
									include("sections/navE4.php");
									break;

									default: include("sections/navMain.php");
									break;
									}
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