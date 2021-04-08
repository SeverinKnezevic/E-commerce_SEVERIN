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

<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css"/>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"/></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce/js/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"/></script>		

	
	
	
	
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
	<link rel="stylesheet" type="text/css" href="trebatepomoc.css"/>
	<link rel="stylesheet" type="text/css" href="placanjeidostava.css"/>
	<link rel="stylesheet" type="text/css" href="povratizamjena.css"/>
	<link rel="stylesheet" type="text/css" href="stranidrzavljani.css"/>
	<link rel="stylesheet" type="text/css" href="prijavljeni_korisnik.css"/>
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

<li><a href="onama2.php" title="Upoznajte nas">O NAMA</a></li>

<li><a href="kontakt.php" title="Nešto te zanima? Kontaktiraj nas!">KONTAKT</a></li>

<li><a href="katalog.php" title="Pogledaj" >KATALOG</a></li> 

<li><a href="forum.php" title="Pogledaj" > FORUM </a></li> 

<li><a href="my_orders.php" title="Vaše narudžbe" >NARUDŽBE</a></li>


<li class="dropdown">
<a href="#" title="Provjeri proizvode u košarici" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <span class="glyphicon glyphicon-shopping-cart"></span> Košarica <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
<ul class="dropdown-menu dropdown-cart" role="menu">

<form action="" method="post" enctype="multipart/form-data">
<table  align="center" width="200"  >
		
	<tr align="center" bgcolor="#e6e6e6">
		
		<th >Naziv</th>
		
		<th >Cijena</th>
		
	</tr>
		
<?php 
$total = 0;

global $con; 

$ip = getIp(); 

$sel_price = "select * from cart where ip_add='$ip'";

$run_price = mysqli_query($con, $sel_price); 

while($p_price=mysqli_fetch_array($run_price)){

$pro_id = $p_price['p_id']; 

$pro_price = "select * from products where product_id='$pro_id'";

$run_pro_price = mysqli_query($con,$pro_price); 

while ($pp_price = mysqli_fetch_array($run_pro_price)){

$product_price = array($pp_price['product_price']);

$product_title = $pp_price['product_title'];


$single_price = $pp_price['product_price'];

$values = array_sum($product_price); 

$total += $values; 
		
		?>
		
	<tr align="center" bgcolor=" #f2f2f2" >
		
		<td ><?php echo $product_title; ?><br></td>
		
		<td ><?php echo "" . $single_price; ?>KM</td>
		
	</tr>
		
	<?php } } ?>
	
	
<?php cart(); ?>
				
</table> 

</form>

<li class="divider"></li>
<li><a class="text-center" href="cart.php" title="Idući korak"><img id="user" src="blagajna.png"/></i><b> Blagajna </b></a></li>


</ul>
</li>	


<!--Lijevo gore-->			
</ul>
<!--Kosarica-->
  <ul class="nav navbar-nav navbar-right">



<!--korisnički podaci-->
<li class="dropdown"><a href="#" title="Vaši podaci" class="dropdown-toggle" role="button" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <b>  <?php 	
			$user = $_SESSION['customer_email'];
			$get_customer = "select * from customers where customer_email='$user'";
			$run_customer = mysqli_query($con, $get_customer); 
			$row_customer = mysqli_fetch_array($run_customer); 
			$username = $row_customer['customer_username'];
			?>  <?php echo $username;?>      </b>  <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></a>
			
			
	<ul class="dropdown-menu" role="menu">
	<li><a href="my_account.php"> <img id="user" src="profil.png"> </span>  Profil </a></li>
	<li><a href="edit_account.php"><span class="glyphicon glyphicon-wrench" aria-hidden="true"> </span> Postavke </a></li>
	<li class="divider"></li>
	<li><a href="delete_account.php" title="Želite obrisati svoj profil?!" ><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"> </span> Obriši profil </a></li>
	</ul>


<!--profil-->
	
	<li class="dropdown"><a href="#" title="Želite li se odjaviti?!" class="dropdown-toggle" role="button" data-toggle="dropdown"><b><i class="glyphicon glyphicon-off" aria-hidden="true"> </i></b></a>
	<ul class="dropdown-menu" role="menu">
	<li><a href="logout.php" ><span class="glyphicon glyphicon-off" aria-hidden="true"> </span> Odjavi se </a></li>
	</ul>
		
</div>
</div>
</nav>				
