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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products2.php">Akcijski proizvodi </a></li> <li class="active"><a href="edit_pro2.php">Upravljanje akcijskim proizvodima </a></li>
</ol></p> 
<!-- Naslov  -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Upravljanje akcijskim proizvodima </b></h1></div> 
<hr/>
</div>

<?php 

include("includes/db.php");

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro']; 
	
	$get_pro = "select * from products1 where product_id='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];

		
		
}
?>
<div class="col-md-10">
<form action="" method="post" enctype="multipart/form-data"> 
	<table align="center" width="795" class="table stats caps">
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Naziv proizvoda:</b></td>
			<td><input type="tex" name="product_title" size="60" value="<?php echo $pro_title;?>"/></td>
		</tr>		
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Slika proizvoda:</b></td>
			<td><input type="file" name="product_image" /><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Cijena proizvoda:</b></td>
			<td><input type="tex" name="product_price" value="<?php echo $pro_price;?>"/></td>
		</tr>
		
		<tr align="center" bgcolor="skyblue">
			<td colspan="7"><input type="submit" name="update_product" class="btn-bs-file btn btn-primary" value="Promjeni proizvod"/></td>
		</tr>
	
	</table>
</form>
</div>
<?php 

	if(isset($_POST['update_product'])){
	
		//getting the text data from the fields
		
		$update_id = $pro_id;	
		$product_title = $_POST['product_title'];	
		$product_price = $_POST['product_price'];

		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
		 $update_product = "update products1 set product_title='$product_title',product_price='$product_price',product_image='$product_image' where product_id='$update_id'";
		 
		 $run_product = mysqli_query($con, $update_product);
		 
		 if($run_product){
		 
		 echo "<script>alert('Uredili ste akcijski proizvod!')</script>";
		 
		 echo "<script>window.open('view_products2.php','_self')</script>";
		 
		 }
	}
?>
<?php include ("podnozije3.php"); ?>











