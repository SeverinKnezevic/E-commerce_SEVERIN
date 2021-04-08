<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_catalog'])){
	
	$delete_id = $_GET['delete_catalog'];
	
	$delete_catalog = "delete from catalogs where catalog_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_catalog); 
	
	if($run_delete){
	
	echo "<script>alert('Uspješno ste izbrisali katalog!')</script>";
	echo "<script>window.open('view_catalog.php','_self')</script>";
	}
	}
?>