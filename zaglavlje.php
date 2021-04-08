<?php include_once ('functions/functions.php') ?>
<!DOCTYPE html>

<html lang="en">
  <head>
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
	<link rel="stylesheet" type="text/css" href="kontakt.css"/>
	<link rel="stylesheet" type="text/css" href="registracija.css"/>
	<link rel="stylesheet" type="text/css" href="trebatepomoc.css"/>
	<link rel="stylesheet" type="text/css" href="placanjeidostava.css"/>
	<link rel="stylesheet" type="text/css" href="povratizamjena.css"/>
	<link rel="stylesheet" type="text/css" href="stranidrzavljani.css"/>
	<link rel="stylesheet" type="text/css" href="katalog.css"/
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
		
			<li><a href="onama.php">O NAMA</a></li>
		
			<li><a href="kontakt.php" title="Nešto te zanima? Kontaktiraj nas">KONTAKT</a></li>
			
			<li><a href="katalog.php" title="Nešto te zanima? Kontaktiraj nas">KATALOG</a></li>
		
		</ul>
	
<!--Lijevo gore-->			
		 <ul class="nav navbar-nav navbar-right">

			<li><a href="customer_register.php"><img id="useradd" src="useradd.png"/> Registracija</a></li>
		
			
			<li class="dropdown"><a href="#" lass="dropdown-toggle" data-toggle="dropdown" ><img id="user" src="user.png"/> Prijava</span></a> 
			<ul id="login-dp" class="dropdown-menu">
			</li>
						
<!--LOGIN  link:http://getbootstrap.com/css/#forms-example -->
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
			</ul>
			
	</div>
	</div>
	</nav>			
<?php 
	if(isset($_POST['login'])){
	
		$c_email = $_POST['email'];
		$c_pass = $_POST['pass'];
		
		$sel_c = "select * from customers where customer_pass='$c_pass' AND customer_email='$c_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_customer = mysqli_num_rows($run_c); 
		
		if($check_customer==0){
		
		
		echo "<script>window.open('greska.php','_self')</script>";
		}
		$ip = getIp(); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_customer>0 AND $check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		
		echo "<script>window.open('customer/index.php','_self')</script>";
		
		}
		
	}
	
	
	?>
		
<!--Login kraj-->
