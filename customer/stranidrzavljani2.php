<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<!-- Navigacija-->	
<div class="col-md-10">
<div class="row carousel-holder">

<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="stranidrzavljani2.php">Strani državljani</a></li>
</ol></p> 
<!-- Naslovnica -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Strani državljani </b></h1></div> 
<hr>	
	<section id="placanje" class="cd-section">
		<h3 align="center"> Plaćanje </h3>
			<text align="center">
				<em>Plaćanje isključivo u Kovertibilnim markama (KM)!</em>
				<br>
				1. Plaćanje gotovinom po primitku pošiljke: <br>
				2. Plaćanje karticama <br>
				3. Virmansko plaćanje 
			</text>
</br>
</br>
	</section>
<hr>
	<section id="povratporeza" class="cd-section">
		<h3 align="center"> Povrat poreza </h3>
			<text align="center">
				Strani državljani, ličnom kupnjom u nekoj od naših trgovina, u iznosu većem do 100KM, ostvaruju pogodnost za povrat poreza!
			</text>
</br>
</br>
	</section>
                    					
</div>
</div>
</br>
</br>

<?php include ("podnozije2.php"); ?>