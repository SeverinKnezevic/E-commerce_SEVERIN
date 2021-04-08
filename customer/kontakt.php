<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<?php include('form_process.php'); ?>
<!-- POKRETNE SLIKE-->	
	<div class="col-md-10">
	<div class="row carousel-holder">
<!-- Navigacija -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li>
	<text id="nalazitese">  Nalazite se u: </text><li class="active"><a href="kontakt.html">Kontakt</a></li>
</ol></p>	
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Kontakt </b></h1></div> 

<!-- Forma za kontakt  https://bootsnipp.com/snippets/762Z8 -->
<hr>
<section id="contact" style="">
<div class="row">
<p style="" align="center">Imaš pitanje, prijedlog, kritiku ili pohvalu? Kontaktiraj nas putem obrasca u nastavku.</br>
Odgovor ti stiže u najkraćem mogućem roku. Ukoliko ga ne dobiješ, to je znak da tvoja poruka nije stigla do nas.</br>
U tom te slučaju molimo da ponoviš upit. </p>
<hr>
</div>

	<div class="panel-body">
	<div class="row">
		<div class="col-md-8">
			<form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" name="sentMessage" id="contactForm" >
				<div class="row">
					<div class="col-md-6">
					
						<div class="form-group">
						 <fieldset>
							<input type="tex" class="form-control" placeholder="Ime *" name="name" value="<?= $name ?>" id="name" >
							<p class="help-block text-danger"></p>

						 </fieldset> 
						</div>
						
						<div class="form-group">
						<fieldset>
							<input type="email" class="form-control" placeholder="E-mail *" name="email" value="<?= $email ?>" id="email" >
						</fieldset>   
						</div>
						
						<div class="form-group">
						<fieldset>
							<input type="tel" class="form-control" placeholder="Kontakt broj *" id="phone">
						</fieldset>   
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<fieldset>
							<textarea class="form-control" placeholder="Tekst poruke *" id="message" value="<?= $message ?>" name="message" type="text"></textarea>
						</fieldset>    
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="col-lg-12 text-center">
						<div id="success"></div>
						<button type="submit" class="btn btn-xl get" data-submit="...Sending" name="submit">Pošalji poruku</button>
					</div>
				</div>
			</form>
		</div>
		
		<div class="col-md-4">
			<p style="">
				<strong><i class="fa fa-map-marker"></i> Adresa</strong><br>
				Ugljara 198, Orašje
			</p>
			<p style=""><strong><i class="fa fa-phone"></i> Kontakt broj</strong><br>
				++387 63 619 978</p>
			<p style="">
				<strong><i class="fa fa-envelope"></i>  E-mail adresa</strong><br>
			   kontakt@severin.com</p>
			</div><br>
		<iframe  width="200" height="150" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.508748663681!2d18.685240999999998!3d45.034897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDXCsDAyJzA1LjYiTiAxOMKwNDEnMDYuOSJF!5e0!3m2!1sen!2sba!4v1491834225791"  allowfullscreen></iframe>
   </div>
   </div>
                  								
</section>		
</div>
</div>					
																				
</br>
</br>


<?php include ("podnozije2.php"); ?>