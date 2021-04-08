<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje.php"); ?>
<?php include ("izbornik.php"); ?>
<?php include ("pretrazivac.php"); ?>
<!-- POKRETNE SLIKE-->	
	<div class="col-md-10">
	<div class="row carousel-holder">
	
			<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
		<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="povratizamjena.html">Povrat i zamjena</a></li>
		</ol></p> 
		
			<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Povrat i zamjena </b></h1></div> 
			<hr>
			
			<section id="reklamacijeiprigovori" class="cd-section">
				<h3 align="center"> Reklamacije i prigovori </h3>
						<text align="center">
							Nezadovoljni ste proizvodom  kojeg ste kupili na našoj stranici? Obratite nam se s povjerenjem i Vašu ćemo reklamaciju riješiti u najkraćem mogućem roku.
						</text>
					</br>
					</br>
				</section>
				<hr>
				<section id="povrat" class="cd-section">
				<h3 align="center"> Povrat </h3>
						<text align="center">
						U slučaju povrata robe morate nas kontaktirati putem telefona ili e-maila.
						<br>
						Robu možete vratiti u roku od 14 dana od datuma isporuke.
						<br>
						Za robu koju vraćate sami snosite troškove transporta.
						<br>
						U slučaju da je roba oštećena, vrati će Vam se umanjen iznos od cijene artikla. Umanjen će biti za postotak koliko je oštećenje.
						</text>
					</br>
					</br>
				</section>
				<hr>
				<section id="servis" class="cd-section">
				<h3 align="center"> Servis </h3>
						<text align="center">
							Ukoliko uređaj trebate servisirati, molimo da provjerite dokumentaciju o ovlaštenom servisu koju ste dobili uz uređaj te postupite u skladu s uputama ovlaštenog servisa. 

						</text>
					</br>
					</br>
				</section>
    </div>
	</div>
			</br>
			</br>
			



<?php include ("podnozije.php"); ?>