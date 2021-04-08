<!-- Pokretne slike-->
<div class="col-md-10">
<div class="row carousel-holder">

<!-- http://getbootstrap.com/javascript/#carousel--> 
<div class="col-md-12" >
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	
	<div class="carousel-inner">
<!--Prva slika-->		
		<div class="item active">
			<?php getPro1(); ?>
		</div>
<!--Druga slika-->					
		<div class="item">
			<?php getPro2(); ?>
		</div>
<!--Treća slika-->					
		<div class="item">                                   
			<?php getPro3(); ?>
		</div>
		
	</div>
	
<!--Pokazivači lijevo i desno-->		
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
	
</div>
</div>

</div>
</div>
</br>
</br>
			
<!--POKRETNI PROIZVODI https://bootsnipp.com/snippets/z4Wor--------------------------------------------------------------------------------------------------------->
<div  class="col-md-12">
<br>
<div id="akcija">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  
		<div class="carousel-inner">
			
<div class="item active">	
<!--Prvi proizvod-->										
	<div class="col-xs-6 col-sm-3">
			<?php getPro01(); ?>
	</div>
<!--Drugi proizvod-->	                                				
	<div class="col-xs-6 col-sm-3">
			<?php getPro02(); ?>
	</div>
<!--Treći proizvod-->	        
	<div class="col-xs-6 col-sm-3">
			<?php getPro03(); ?>
	</div>
<!--Četvrti proizvod-->	
	<div class="col-xs-6 col-sm-3">
			<?php getPro04(); ?>
	</div>
			
</div>

<!--Druga 4 proizvoda-->					
<div class="item ">
<!--Peti proizvod-->				
	<div class="col-xs-6 col-sm-3">	        
			<?php getPro05(); ?>
	</div>
<!--šesti proizvod-->										
	<div class="col-xs-6 col-sm-3">
			<?php getPro06(); ?>
	</div>
<!--Sedmi proizvod-->								
	<div class="col-xs-6 col-sm-3">
			<?php getPro07(); ?>
	</div>
<!--Osmi proizvod-->								
	<div class="col-xs-6 col-sm-3">
			<?php getPro08(); ?>
	</div>
		
</div>
			
<!--Treća 4 proizvoda-->				
<div class="item ">
<!--Deveti proizvod-->
	<div class="col-xs-6 col-sm-3">
			<?php getPro09(); ?>
	</div>
<!--Deseti proizvod-->										
	<div class="col-xs-6 col-sm-3">
			<?php getPro010(); ?>
	</div>
<!--Jedanaesti proizvod-->								
	<div class="col-xs-6 col-sm-3">
			<?php getPro011(); ?>
	</div>
<!--Dvanaesti proizvod-->								
	<div class="col-xs-6 col-sm-3">
			<?php getPro012(); ?>
	</div>
		
</div>				
			
					
		</div>
			
	</div>
						
</div>                      
</div>
</div>
	 
<!---------------------------------------------------------------------------------------------------------------------------->

<!--Mini tablica-->
<table id="tabmlicamini" >
<tr>
<td id="jedan" >
	<strong> Dobrodošli na našu web stranicu! </strong>  </br>
	<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><a href="trebatepomoc.php#narudzbe"  > <em> <i> Narudžbe telefonom ili e-mailom </i> </em></a> </br>
	<span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="trebatepomoc.php#kakosereg"  > <em> <i> Kako se registrirati </i> </em> </a> </br>
	<span class="glyphicon glyphicon-book" aria-hidden="true"></span><a href="trebatepomoc.php" > <em> <i> Kako koristiti našu web stranicu? </i> </em> </br>
	
</td  >

<td id="dva">
<strong text-align="center"> Prijavi se </strong>  </br>
	Prijavite se kako bi mogli kupovati i uživati u ostalim prednostima naše internet trgovine. </br>
	<div class="dropdown"> <button id="p" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><b> PRIJAVI SE </b></button> 
	<ul id="login-dp" class="dropdown-menu" >
		<li>
		<li>
		Prijavi se 	
		<form method="post" action="" action="login" accept-charset="UTF-8" id="login-nav"> 
		
		<div class="form-group">
		<label class="sr-only" for="exampleInputEmail2"> E-mail adresa</label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="E-mail adresa" required>
		</div>
		<div class="form-group">
		<label class="sr-only" for="exampleInputPassword2">Šifra</label>
		<input type="password"  name="pass" class="form-control" id="exampleInputPassword2" placeholder="Šifra" required>
		<div class="help-block text-right"><a href="">Zaboravljena šifra ?</a>
		</div>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-primary btn-block" name="login" value="Prijavi se" />
		</div>
		</form>
		</li>
		</li>
	</ul>
	</div>
	
	</br>

	<a href="registracija.html"> <strong>Novi korisnik?</strong></a> </br>
	Pridružite se naših kupaca koji već uživaju u svim prednostima koje nudi naša stranica. </br>
	<a href="customer_register.php"><button id="r"><b> REGISTRIRAJ SE </b></button></a>

</td>
</tr>
</table>
	

	