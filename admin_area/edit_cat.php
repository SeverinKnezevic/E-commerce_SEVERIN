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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="edit_cat.php"> Promjeni naziv kategorije </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Promjeni naziv kategorije </b></h1></div> 
<hr/>
</div>

<?php 


if(isset($_GET['edit_cat'])){

	$cat_id = $_GET['edit_cat']; 
	
	$get_cat = "select * from categories where cat_id='$cat_id'";

	$run_cat = mysqli_query($con, $get_cat); 
	
	$row_cat = mysqli_fetch_array($run_cat); 
	
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];
}


?>

<div class="col-md-3"></div>
<div class="col-md-2">
<form action="" method="post" >
<table border="1" width="" align="center" class="table table-bordered table-hover">
 <th ><p align="center">Promjeni kategoriju:</p></th>
 <tr><td><input type="cat"name="new_cat" value="<?php echo $cat_title;?>" required/></td></tr>
 <tr><td><input type="submit" name="update_cat"  value="Dodaj" class="btn btn-primary btn-block"> </td></tr>
</table>
</form>
</div>

<?php 


	if(isset($_POST['update_cat'])){
	
	$update_id = $cat_id;
	
	$new_cat = $_POST['new_cat'];
	
	$update_cat = "update categories set cat_title='$new_cat' where cat_id='$update_id'";

	$run_cat = mysqli_query($con, $update_cat); 
	
	if($run_cat){
	
	echo "<script>alert(' Kategorija je promjenjena!')</script>";
	echo "<script>window.open('view_cats.php','_self')</script>";
	}
	}

?>

<?php include ("podnozije3.php"); ?>
