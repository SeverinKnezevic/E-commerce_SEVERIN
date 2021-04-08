<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<!-- Navigacija -->	
<div class="col-md-10">
<div class="row carousel-holder">
<p><ol class="breadcrumb">
<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="trebatepomoc2.php">Trebate pomoć?</a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Trebate pomoć? </b></h1></div> 
<hr>
	<section id="kakosereg" class="cd-section">
	<h3 align="center"> Kako se registrirati? </h3>
			<text align="center">
				1. Kliknite na <a href="customer_register.php">link za registraciju</a>  </br>						
				2. Upišite svoje podatke za registraciju </br>
				3. Jednostavno zar ne? Pridružite nam se! </br>
				4. Istražite i ostale pogodnosti 
			</text>
		</br>
		</br>
	</section>
	<hr>
		
	<section id="kakokupovati" class="cd-section">
	<h3 align="center"> Kako kupovati? </h3>
			<text align="center">
				Korak 1 : Registracija i odabir proizvoda</a>  </br>						
				Korak 2 : Odabir dostave </br>
				Korak 3 : Način plaćanja </br>							
				Kraj : Uspješno kreirana narudžba 
			</text>
		</br>
		</br>
	</section>
	<hr>
	
	<section id="narudzbe" class="cd-section">
	<h3 align="center"> Naručiti telefonom ili E-mailom </h3>
			<text align="center">
				Naručiti možete pozivom na broj ++387 63 619 978 </br>
				ili </br>
				e-mailom tako sto ce te ispuniti obrazac <a href="" >kontakt</a> .
			</text>
		</br>
		</br>
	</section>
	<hr>
	
	<section id="cestapitanja" class="cd-section">
	<h3 align="center"> Česta pitanja </h3>
			<text align="center">
				<b>Koji je trošak dostave?</b><br>
				Dostava je besplatna za sve narudžbe iznad 100 KM. Za naručenu robu u iznosu manjem od 100 KM, dostava se naplaćuje u ovisnosti o težini proizvoda.
				<br>
				<br>
				<b>Mogu li naručiti dostavu proizvoda na svoju adresu?</b><br>
				Naravno, potrebno je samo da u polja adrese za dostavu upišete svoje podatke.
				<br>
				<br>
				<b>Mogu li proizvod sam preuzeti, da ne plaćam troškove dostave?</b><br>
				Možete. Na koraku odabira dostave odaberite „Osobno preuzimanje“. Osobno preuzimanje moguće je u našem skladištu u Distribucijskom centru na adresi:
					SEVERIN doo, <br>
					Ugljara 198, <br>
					76270, ORAŠJE
				<br>
				<br>
				<b>Koliko je online plaćanje sigurno?</b><br>
				Bez obzira koji način plaćanja odaberete, vaša transakcija će proći sigurno, za to jamči vodeći svjetski SSL certifikat. 
				<br>
				<br>
				<b>Kako mogu platiti svoju narudžbu?</b><br>
				1. Plaćanje gotovinom po primitku pošiljke: <br>
				2. Plaćanje karticama <br>
				3. Virmansko plaćanje <br>
			</text>
		</br>
		</br>
	</section>
												
</div>
</div>
</br>
</br>

<?php include ("podnozije3.php"); ?>