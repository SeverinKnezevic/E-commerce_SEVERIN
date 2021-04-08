
<?php 
session_start(); 
include('includes/db.php');
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<?php include ("sadrzaj3.php"); ?>
<?php include ("podnozije3.php"); ?>
<?php } ?>