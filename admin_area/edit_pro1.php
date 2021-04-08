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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products1.php"> Naslovne slike </a></li> <li class="active"><a href="edit_pro1.php">Promjeni naslovnu sliku </a></li>
</ol></p> 
<!--Naslov-->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Promjeni naslovnu sliku  </b></h1></div> 
<hr/>

</div>
<?php 

include("includes/db.php");

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro']; 
	
	$get_pro = "select * from actions where product_id='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
		$pro_id = $row_pro['product_id'];
		$pro_image = $row_pro['product_image'];
		$pro_desc = $row_pro['product_desc']; 
		
}
?>
<div class="col-md-10">
	<form action="" method="post" enctype="multipart/form-data"> 
		<table align="center" width="795" class="table stats caps">
				
			<tr bgcolor="skyblue">
				<td align="right"><b>Slika:</b></td>
				<td><input type="file" name="product_image" /><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
			</tr>
			
			<tr bgcolor="skyblue">
				<td align="right"><b>Opis slike:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"><?php echo $pro_desc;?></textarea></td>
			</tr>
			
			<tr align="center" bgcolor="skyblue">
				<td colspan="7"><input type="submit" name="update_product" value="Promjeni sliku" class="btn-bs-file btn btn-primary"/></td>
			</tr>
		
		</table>	
	</form>
</div>

<?php 

if(isset($_POST['update_product'])){

	//getting the text data from the fields
	
	
	$update_id = $pro_id;
	
	
	
	
	$product_desc = $_POST['product_desc'];

	//getting the image from the field
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	
	move_uploaded_file($product_image_tmp,"product_images/$product_image");

	 $update_product = "update actions set product_desc='$product_desc',product_image='$product_image' where product_id='$update_id'";
	 
	 $run_product = mysqli_query($con, $update_product);
	 
	 if($run_product){
	 
	 echo "<script>alert('Uredili ste slajd show!')</script>";
	 
	 echo "<script>window.open('view_products1.php','_self')</script>";
	 
	 }
}
?>
<?php include ("podnozije3.php"); ?>











