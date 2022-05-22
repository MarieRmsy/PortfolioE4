
				<!-- Main -->
                <div id="main">
						<div class="inner">
							<section>
								<img src="assets/stuff/chamo/chamo.png" style="float: right; margin: 0 5em;" width="12%" height="12%" />	
								<header class="major">
									<h6  style="
									font-weight: bold;
									">Chamo  <nobr class="typeProj">.ts</nobr>
									</h6>
								</header>
							</section>

							<!--Content-->
							<div class="box">
							<div class="row gtr-200">
								<div class="col-6 col-12-medium">
									<div class="row">
									
										<div class="col-14 col-12-small">
											
											<dl>
													
											<dt style="border-radius: 10px; border: 3px solid #168fac;" >
												  ◆ Présentation</dt>
												<dd>Voici le projet principal réalisé dans mon entreprise au cours de ces deux dernières années.
													ChaMo, pour Chantier Mobile : Une application web de gestion des chantiers et bien plus.
													À mon arrivée, le projet avait démarré depuis 1an. J'ai rejoins l'équipe de développeur, et nous sommes deux actuellement à coder le projet.

													<a target="_blank" href="https://angularjs.org/"> Angular.js</a>
													et <a target = "_blank" href="https://material.angular.io/">Angular Material</a> .
													<br /><br /><br /><br /> 
												</dd>

										<dt style="border-radius: 10px; border: 3px solid #168fac;">
											  ➤ Caractéristiques</dt>
											<dd>
												<ul class="alt">
													<li>Objet : Projet personnel</li>
													<li>Type : Coder pour apprendre et s'amuser</li>
													<li>Période : 2019-2020</li>
													<li>Outis : Visual Studio Code, console Node.js</li>
												</ul>
											</dd>

											</dl>
										</div>
									</div>
								
								</div>
							
								<div class="col-6 col-12-medium">
								<img src="assets/stuff/chamo/chamo1.png" class="virtuozIMG" style="border: none;" />	
									
								</div>
							</div>

							<!-- Exemples -->
							</div>
							<br/><br/><br/>
								<header class="major">
									<h2> La numérisation au coeur du projet</h2>
								</header>
							
							<div class="row">
								<div class="col-6 col-12-medium">
								<p>Accès direct au dossiers des chantiers</p>
									<img src="assets/stuff/chamo/chantier.png" class="chamoIMG"/>
								</div>
								<div class="col-6 col-12-medium">
								<p>Numérisation de formulaire papierss</p>
									<img src="assets/stuff/chamo/formulaires.png" class="chamoIMG"/>
								</div>
								
								<div class="col-6 col-12-medium mt-4">
								<p>Complétez sur votre téléphone, tablette, et PC</p>
									<img src="assets/stuff/chamo/causerie.png" class="chamoIMG"/>
								</div>
								<div class="col-6 col-12-medium mt-4" >
								<p>Mise à disposition de tutoriels</p>
									<img src="assets/stuff/chamo/tuto.png" class="chamoIMG"/>
								</div>
								<div class="col-6 col-12-medium">
								<p>Glitch lors des malus</p>
									<img src="assets/stuff/chamo/glitch.gif" class="chamoIMG"/>
								</div>



							</div>


							<br/><br/>
							<!-- Jeu Python -->
							<section>
								<header class="major">
									<h2>Love Command</h2>
								</header>
									<p>La &lt;love command&gt; est une fonctionnalité fun et amusante. 
									Celle-ci renvoie votre compatibilité amoureuse avec un autre membre du serveur. 
									Voici l'extrait du code en question, n'hésitez pas à lire mes <font color = #40be21 >//commentaires</font> à droite.<br/><br/><br/></p>
							
								<div class="row">
									<!--ROLES-->
									
									<div class="col-4 col-12-medium">
											<p id="p1">Utiliser Maths.sin(x)</p>
													
													<h3>Problème : </h3>
													<dd>Trouver un moyen de contrôler l'output de la commande, de manière à ce que celle-ci renvoie un pourcentage de compatiblité entre 0 et 100.	<br/> <br/> <br/></dd>

													
													<h3>Solution : </h3>
													<dd>La fonction sinus.
													C'est peut-être simpliste, mais c'était l'une des premières fois que j'ai eue
													l'occasion d'utiliser mes cours de maths dans un de mes projets personnels !</dd>

													<br/><br/>
													<a href="https://www.geogebra.org/calculator/auzhrq9v" class="button" target = "_blank" >Visualisez la fonction !</a>

												<br/>
									</div>
										
										
										
									<br/><br/>
									<div class="col-6 col-12-medium" style="
									margin: 0 0 0 6em;
									height: 450px;
									width: 800px; 
									overflow: auto; 
									border-radius: 0.375em;
									border: solid 1px rgba(210, 215, 217, 0.75);
									margin-bottom: 2em;
									padding: 1.5em;
									background: rgba(230, 235, 237, 0.25);">
								
									<pre>
										const { RichEmbed } = require("discord.js");
										const { getMember } = require("../../functions.js");
																
										module.exports = {
											name: "lovetest",
											aliases: ["affinité"],
											category: "fun",
											description: "Calcule le % d'amour que vous avez pour quelqu'un :rose:",
											usage: "mention",
											run: async (client, message, args) => {

											let person = getMember(message, args[0]);				<font color = #40be21 >// Récupére un membre depuis une mention, une ID, ou un pseudo</font>
											let author = message.author
											
											if (!person || message.author.id === person.id) {
												person = message.guild.members					<font color = #40be21 >// Si l'utilisateur n'a mentionné aucun autre membre</font>
												.filter(m => m.id !== message.author.id)				<font color = #40be21 >// Le bot va désigner un membre au hasard sur le serveur</font>
												.random();
											}

											function print(a) {								<font color = #40be21 >// FONCTION PRINT()</font>
												return message.channel.send(a)				<font color = #40be21 >// Simplifie l'expression des lignes de code</font>
											}

											function lovetest(x) {							<font color = #40be21 >// FONCTION CALCUL LOVE</font>
												return (Math.floor(50*Math.sin(x/20)+50))	<font color = #40be21 >// Utilise la fonction sinus pour borner le résultat entre 0 et 100</font>
											}

											function conv(liste) {							<font color = #40be21 >// FONCTION DE CONVERSION</font>
												parseInt(liste)								<font color = #40be21 >// Convertis les 0 de l'ID soient convertis en 1</font>
												var NewList = new Array(18);

												for (let a = 0; a < 18; a++) { 

													if(liste[a] == 0) {
														NewList[a]  = parseInt(liste[a] + 1)
														//print(" Terme n° "+ [a] + " >>>" + NewList[a])	<font color = #40be21 >// Exprime l'indice du 0 qui a été converti</font>
													} else {
														NewList[a] = liste[a]
													}
												}
																			
											return(NewList) }
																
																		
											let x = conv(person.id)								<font color = #40be21 >// DECLARATION ET CONVERTION DE L'ID</font>
											let y = conv(author.id)  
																		
											let ChaineUn = parseInt(x[2] + x[6] + x[9])				<font color = #40be21 >// CONCATENE 3 NOMBRES DE L'ID</font>
											let ChaineDeux = parseInt(y[2] + y[6] + y[9])
																		
											let numeros = lovetest(parseInt(ChaineUn + ChaineDeux))		<font color = #40be21 >// ADDITIONE LES DEUX NOMBRES ET CALCUL LE LOVE</font>
																		
											//VERIFICATIONS DES VALEURS
																
											// print("A avant conv = " + person.id)						<font color = #40be21 >// A = Mentionné</font>
											// print("A après conv = " + x)
											// print("Nombres A = " + ChaineUn + " : " + typeof ChaineUn) 
																	
											// print("ID B avant conv = " + author.id)						<font color = #40be21 >// B = Auteur</font>
											// print("ID B après conv = " + y)
											// print("Nombres B = " + ChaineDeux + " : " + typeof ChaineDeux) 
												
											// print("Addition A + B = " + numeros + " : " + typeof numeros)


											const love = lovetest(numeros); print("Love = " + love)							<font color = #40be21 >// APPLIQUE LA FONCTION LOVE AU NOMBRE</font>
																		
											const loveIndex = Math.floor(love / 10); print("Love Index = " + loveIndex)		<font color = #40be21 >// DIVISE LE RESULTAT PAR 10</font>
																	
											const loveLevel = "🌹".repeat(loveIndex) + "🖤".repeat(10 - loveIndex);			<font color = #40be21 >// GENERE LA BARRE D'AFFECTION</font>
																
																
											const embed = new RichEmbed()											<font color = #40be21 >// CREE LE MESSAGE EMBED A ENVOYER</font>
												.setColor("#d12c10")
												.addField(`**${person.displayName}** est compatible avec **${message.member.displayName}** à:`,
												`||${Math.floor(love)}%|| \n\n${loveLevel}`);
																		
											message.channel.send(embed)
																
											const result = loveIndex
																
											setTimeout(function()   {    <font color = #40be21 >// ENVOIE UN MESSAGE PERSONNALISE SELON LA COMPATIBILITE</font>
																		
											if(result == 0) {message.channel.send("Il semble que vous n'êtes pas fait pour vous entendre capitaine... <:EMO_rita_shy:676813964654542891>")
											} else if(result == 1) { print("Toute mes condoléances capitaine... :rose: ")
											} else if(result == 2) { print("Vous semblez être distant, mieux vaut ne pas forcer les choses entre vous... <:EMO_rita_shy:676813964654542891>")
											} else if(result == 3) { print("Relativisez capitaine, la friendzone n'est pas si déplaisante... <:EMO_rita_stare:676813902482374675>")
											} else if(result == 4) { print("Vous avez l'air d'être bon amis... :rose:")
											} else if(result == 5) { print("Amour ou amitié ? Vous avez le choix capitaine... <:EMO_rita_coffee:676813934770257921>")
											} else if(result == 6) { print("Un premier rendez-vous est envisageable capitaine :rose:")
											} else if(result == 7) { print("Une relation stable est envisageable entre vous capitaine :rose:")
											} else if(result == 8) { print("Il semblerait que vous ayez trouvé l'amour ! <:EMO_rita_shy:676813964654542891>")
											} else if(result == 9) { print("A quand votre mariage capitaine " + message.author + " ? <:EMO_rita_coffee:676813934770257921>")
											} else { print ("Félicitation capitaine, vous avez trouvé l'âmes soeur ! <:EMO_rita_coffee:676813934770257921>")}

											}, 1000);                   <font color = #40be21 >// DELAIS</font>
										}}
									</pre>
									</div>
										<div class="image">
											<!-- <embed src="assets/stuff/Love Discord Command (Marie.R).pdf#page=1&zoom=120" style="float: right; margin: 0em; border-radius: 30px; border: 4px solid #ffffff;" width=700 height=500 type='application/pdf'/>
										-->
										</div>

									
								
								</div>
							</section>
							
									<br/><br/>
						</div>
					</div>