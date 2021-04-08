<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_forum'])){
	
	$delete_id = $_GET['delete_forum'];
	
	$delete_forum = "delete from forums where forum_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_forum); 
	
	if($run_delete){
	
	
	echo "<script>window.open('forum.php','_self')</script>";
	}
	}
?>