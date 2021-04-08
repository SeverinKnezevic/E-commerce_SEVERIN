<?php include_once ('functions/functions.php') ?>

<!DOCTYPE html>

<html lang="en">
<head>
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
	tinymce.init({selector:'textarea'});
</script>
</head>
<link rel="shortcut icon" href="logo1.ico">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>SEVERIN doo</title>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="pocetna.css"/>
<link rel="stylesheet" type="text/css" href="products.css"/>
<link rel="stylesheet" type="text/css" href="onama.css"/>
<link rel="stylesheet" type="text/css" href="registracija.css"/>
<link rel="stylesheet" type="text/css" href="katalog.css"/>
<link rel="stylesheet" type="text/css" href="tablica.css"/
<style type="text/css">

</head>
<body background="pozadina.jpg">

<table background="pozadinabijela.jpg" border="0" cellspacing="5" cellpadding="5" align="center" width="80%" height="50%"  >
<tr  width="80%" height="505">
<td width="80%" height="505">

<!--http://getbootstrap.com/components/#navbar-default-->
<nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
	
<!--LOGO-->	
<div class="navbar-header" >
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"  >
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </button>
	<a class="navbar-brand" href="index.php"> <blink> <img alt="Brand" src="severin.png" height="30" width="170"></blink></a>
</div>
	
<!--GORNJI MENI -->	
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	<ul class="nav navbar-nav">
	
		<li><a href="onama2.php">O NAMA</a></li>
	
		<li class="dropdown"><a href="add_proizvod.php" lass="dropdown-toggle" data-toggle="dropdown"> PRODAJA <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
		<ul class="dropdown-menu" role="menu">
		<li><a href="view_orders.php" ><img id="user" src="buy.png"/> <b> NARUDŽBE</b></a></li>
		<li><a href="view_payments.php" ><img id="user" src="pay.png"/> <b> UPLATE </b></a></li>
		</ul>
		</li>
		
		<li class="dropdown"><a href="add_proizvod.php" lass="dropdown-toggle" data-toggle="dropdown">UPRAVLJANJE PROIZVODIMA <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
		<ul class="dropdown-menu" role="menu">
		
		<li><a href="view_products.php" ><img id="user" src="vidipro.png"/> <b>  PROIZVODI</b></a></li>
		<li class="divider"></li>
		<li><a href="view_cats.php" ><img id="user" src="uredifolder.png"/> <b> KATEGORIJE</b></a></li>
		</ul>
		</li>
		<li class="dropdown"><a href="add_proizvod.php" lass="dropdown-toggle" data-toggle="dropdown">REKLAMNI SADRŽAJ <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
		<ul class="dropdown-menu" role="menu">
		<li><a href="view_products1.php" ><img id="user" src="slajd.png"/> <b> NASLOVNA SLIKA</b></a></li>
		<li><a href="view_products2.php" ><img id="user" src="akcija.png"/> <b> AKCIJSKI PROIZVODI</b></a></li>
		<li><a href="view_catalog.php" ><img id="user" src="akcija.png"/> <b> KATALOG </b></a></li>
		<li><a href="forum.php" ><img id="user" src="akcija.png"/> <b>FORUM </b></a></li>
		</ul>
		</li>
		<li><a href="view_customers.php">KORISNICI</a></li>
	
	</ul>
	

<!--Lijevo gore-->			

<!--Kosarica-->
  <ul class="nav navbar-nav navbar-right">

<!--Profil-->	
		<li class="dropdown"><a href="#" lass="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-user"> </span> Admin <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a> 
		<ul class="dropdown-menu" role="menu">
		<li><a href="logout.php"><span class="glyphicon glyphicon-off" aria-hidden="true"> </span> Odjavi se </a></li>
		</ul>
		</li>
	</ul>
</div>
</div>
</nav>				
