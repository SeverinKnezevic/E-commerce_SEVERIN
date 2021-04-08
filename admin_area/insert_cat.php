<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<div class="col-md-10">
<!-- Navigacija -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_cats.php"> Kategorije </a></li> <li class="active"><a href="insert_cat.php">Dodaj kategoriju </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Dodaj kategoriju </b></h1></div> 
<hr/>
</div>

<div class="col-md-3"></div>
<div class="col-md-2">

<form action="" method="post" >
<table border="1" width="" align="center" class="table table-bordered table-hover">
 <tr bgcolor="skyblue"><th ><p align="center">Dodaj Kategoriju:</p></th></tr>
 <tr><td><input type="cat" name="new_cat" placeholder="Upiši kategoriju" required/></td></tr>
 <tr><td><input type="submit" name="add_cat" value="Dodaj" class="btn btn-primary btn-block"> </td></tr>
</table>
</form>
</div>
<?php 
include("includes/db.php"); 

	if(isset($_POST['add_cat'])){
	
	$new_cat = $_POST['new_cat'];
	
	$insert_cat = "insert into categories (cat_title) values ('$new_cat')";

	$run_cat = mysqli_query($con, $insert_cat); 
	
	if($run_cat){
	
	echo "<script>alert('Dodali ste novu kategoriju!')</script>";
	echo "<script>window.open('view_cats.php','_self')</script>";
	}
	}

?>
<?php include ("podnozije3.php"); ?>
