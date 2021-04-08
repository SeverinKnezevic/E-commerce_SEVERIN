<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">
<!-- Navigacija -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="delete_account.php"> Obriši profil </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Obriši profil </b></h1></div> 
<hr/>
</div>

<br>
<br>
<br>

<h3 style="text-align:center; ">Stvarno želite obrisati svoj korisnički račun?!</h3>
<div class="col-md-4"></div>
<div class="col-md-6">

<br>
<br>

<form action="" method="post">
<input type="submit" name="yes" value="DA !" /> 
<input type="submit" name="no" value="ODUSTANI" />
</form>

</div>
<?php 
include("includes/db.php"); 

	$user = $_SESSION['customer_email']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from customers where customer_email='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('Upravo ste obrisali svoj korisnički račun!')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
	
	
	echo "<script>window.open('my_account.php','_self')</script>";
	
	}
?>

<?php include ("podnozije2.php"); ?>