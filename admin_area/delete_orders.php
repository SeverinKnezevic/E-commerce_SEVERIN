<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_orders'])){
	
	$delete_id = $_GET['delete_orders'];
	
	$delete_orders = "delete from orders where order_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_orders); 
	
	if($run_delete){
	
	
	echo "<script>window.open('view_orders.php','_self')</script>";
	}
	
	}
?>