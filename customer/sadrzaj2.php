
		
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
				
<!--Prvi proizvod-->										
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

<!---------------------------------------------------------------------------------------------------------------------------->