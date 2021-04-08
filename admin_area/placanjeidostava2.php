<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<div class="col-md-10">
<div class="row carousel-holder">
<!-- Navigacija -->
<p><ol class="breadcrumb">
<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="trebatepomoc2.php">Trebate pomoć?</a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Plaćanje i dostava </b></h1></div> 
<hr>
	
		<section id="nacinplacanja" class="cd-section">
		<h3 align="center"> Način plaćanja </h3>
				<text align="center">
					1. Plaćanje gotovinom po primitku pošiljke: <br>
					2. Plaćanje karticama <br>
					3. Virmansko plaćanje 
				</text>
			</br>
			</br>
		</section>
		<hr>
		
		<section id="sigurnoplacanje" class="cd-section">
		<h3 align="center"> Sigurno plaćanje </h3>
				<text align="center">
					Bez obzira koji način plaćanja odaberete, vaša transakcija će proći sigurno, za to jamči vodeći svjetski SSL certifikat.
				</text>
			</br>
			</br>
		</section>
		<hr>
		
		<section id="osobnopreuzimanje" class="cd-section">
		<h3 align="center"> Osobno preuzimanje </h3>
				<text align="center">
					Na koraku odabira dostave odaberite „Osobno preuzimanje“. Osobno preuzimanje moguće je u našem skladištu u Distribucijskom centru na adresi:
						SEVERIN doo, <br>
						Ugljara 198, <br>
						76270, ORAŠJE
				</text>
			</br>
			</br>
		</section>
		<hr>
		
		<section id="brzaipouzdanadostava" class="cd-section">
		<h3 align="center"> Brza i pouzdana dostava </h3>
				<text align="center">
					Dostava se vrši do ulaza u stambeni objekt željene adrese. Ukoliko se radi o stambenoj zgradi, dostavljač nije dužan nositi robu do kata na kojem se nalazi kupac već do ulaza u zgradu. Dostava se vrši putem prijevozničkih tvrtki koje obavljaju usluge transporta.
					<br><br>
					Dostava je besplatna za sve narudžbe iznad 100 KM. Za naručenu robu u iznosu manjem od 100 KM, dostava se naplaćuje u ovisnosti o težini proizvoda.
					<br><br>
					Dostavna služba dostavlja u roku 24 sata od preuzimanja pošiljke u skladištu.
					<br><br>
					Proizvodi će biti zapakirani tako da se uobičajenom manipulacijom u transportu ne mogu oštetiti. Kupac je dužan prilikom preuzimanja proizvoda provjeriti eventualna oštećenja i odmah ih reklamirati dostavnom radniku koji je robu dostavio, odnosno odbiti preuzeti pošiljku na kojoj su vidljiva vanjska oštećenja. Kupac je obavezan prilikom preuzimanja robe potpisati otpremnicu ili dostavnicu te je dostavna služba uzima kao potvrdu o preuzimanju.
					<br><br>
					NAPOMENA: Iznimka su mjesta koja ne podržavaju svakodnevnu dostavu, a gdje je dostava moguća prema rasporedu dostave. Pošiljke za otoke koji nisu na rasporedu, bit će dostavljene u roku od 3 radna dana.						
				</text>
			</br>
			</br>
		</section>
								
</div>
</div>
	</br>
	</br>


<?php include ("podnozije3.php"); ?>