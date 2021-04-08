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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products.php"> Proizvodi </a></li><li class="active"><a href="insert_product.php">Dodaj proizvod </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Dodaj proizvod </b></h1></div> 
<hr/>
</div>

<div class="col-md-10">
<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
	<table align="center" width="750"  class="table stats caps">
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Naziv proizvoda:</b></td>
			<td><input type="tex" name="product_title" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Kategorija proizvoda:</b></td>
			<td>
			<select name="product_cat" >
				<option>Izaberi kategoriju</option>
				<?php 
	$get_cats = "select * from categories";

	$run_cats = mysqli_query($con, $get_cats);

	while ($row_cats=mysqli_fetch_array($run_cats)){

	$cat_id = $row_cats['cat_id']; 
	$cat_title = $row_cats['cat_title'];

	echo "<option value='$cat_id'>$cat_title</option>";


}
				
				?>
			</select>
			
			
			</td>
		</tr>
		
		
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Slika proizvoda:</b></td>
			<td><input type="file" name="product_image" /></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right" ><b>Cijena proizvoda:</b></td>
			<td><input type="tex" name="product_price" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right" ><b>Opis proizvoda:</b></td>
			<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Ključna riječ:</b></td>
			<td><input type="tex" name="product_keywords" size="50" required/></td>
		</tr>
		
		<tr align="center" bgcolor="skyblue">
			<td colspan="7"><input type="submit" class="btn-bs-file btn btn-primary" name="insert_post" value="Dodaj proizvod"/></td>
		</tr>
	
	</table>
</form>
</div>

</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
		 $insert_product = "insert into products (product_cat,product_title,product_price,product_desc,product_image,product_keywords) values ('$product_cat','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Dodali ste novi proizvod!')</script>";
		 echo "<script>window.open('view_products.php?insert_product','_self')</script>";
		 
		 }
	}

?>

<?php include ("podnozije3.php"); ?>

