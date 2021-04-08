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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products.php"> Svi proizvodi </a></li><li class="active"><a href="edit_pro.php"> Uredi proizvod </a></li>
</ol></p> 
<!-- Naslov  -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Uredi proizvod </b></h1></div> 
<hr/>

<?php 

include("includes/db.php");

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro']; 
	
	$get_pro = "select * from products where product_id='$get_id'";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_pro=mysqli_fetch_array($run_pro);
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$pro_desc = $row_pro['product_desc']; 
		$pro_keywords = $row_pro['product_keywords']; 
		$pro_cat = $row_pro['product_cat'];
		
		
		$get_cat = "select * from categories where cat_id='$pro_cat'";
		
		$run_cat=mysqli_query($con, $get_cat); 
		
		$row_cat=mysqli_fetch_array($run_cat); 
		
		$category_title = $row_cat['cat_title'];
		
		
}
?>

<form action="" method="post" enctype="multipart/form-data"> 
<table align="center" width="795"  class="table stats caps">
	
	<tr bgcolor="skyblue">
		<td align="right"><b>Naziv proizvoda:</b></td>
		<td><input type="tex" name="product_title" size="60" value="<?php echo $pro_title;?>"/></td>
	</tr>
	
	<tr bgcolor="skyblue">
		<td align="right"><b>Kategorija proizvoda:</b></td>
		<td>
		<select name="product_cat" >
			<option><?php echo $category_title; ?></option>
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
		<td><input type="file" name="product_image" /><img src="product_images/<?php echo $pro_image; ?>" width="60" height="60"/></td>
	</tr>
	
	<tr bgcolor="skyblue">
		<td align="right"><b>Cijena proizvoda:</b></td>
		<td><input type="tex" name="product_price" value="<?php echo $pro_price;?>"/></td>
	</tr>
	
	<tr bgcolor="skyblue">
		<td align="right"><b>Opis proizvoda:</b></td>
		<td><textarea name="product_desc" cols="20" rows="10"><?php echo $pro_desc;?></textarea></td>
	</tr>
	
	<tr bgcolor="skyblue">
		<td align="right"><b>Ključna riječ:</b></td>
		<td><input type="tex" name="product_keywords" size="50" value="<?php echo $pro_keywords;?>"/></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<td colspan="7"><input type="submit" name="update_product" value="Uredi proizvod" class="btn-bs-file btn btn-primary"/></td>
	</tr>

</table>
</form>

<?php 

if(isset($_POST['update_product'])){

	//getting the text data from the fields
	
	$update_id = $pro_id;
	
	$product_title = $_POST['product_title'];
	$product_cat= $_POST['product_cat'];
	
	$product_price = $_POST['product_price'];
	$product_desc = $_POST['product_desc'];
	$product_keywords = $_POST['product_keywords'];

	//getting the image from the field
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp = $_FILES['product_image']['tmp_name'];
	
	move_uploaded_file($product_image_tmp,"product_images/$product_image");

	 $update_product = "update products set product_cat='$product_cat',product_title='$product_title',product_price='$product_price',product_desc='$product_desc',product_image='$product_image', product_keywords='$product_keywords' where product_id='$update_id'";
	 
	 $run_product = mysqli_query($con, $update_product);
	 
	 if($run_product){
	 
	 echo "<script>alert('Uredili ste proizvod!')</script>";
	 
	 echo "<script>window.open('view_products.php','_self')</script>";
	 
	 }
}

?>

<?php include ("podnozije3.php"); ?>









