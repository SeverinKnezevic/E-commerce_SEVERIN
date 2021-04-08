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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_catalog.php"> Katalozi </a> </li> <li class="active"><a href="insert_catalog.php">Dodaj katalog </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Dodaj novi katalog </b></h1></div> 
<hr/>
</div>

<div class="col-md-10">
<form action="insert_catalog.php" method="post" enctype="multipart/form-data"> 
	<table align="center" width="795" class="table stats caps">
		
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Naziv:</b></td>
			<td><input type="tex" name="catalog_title" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Slika:</b></td>
			<td><input type="file" name="catalog_image" /></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Katalog:</b></td>
			<td><input type="file" name="catalog_image2" /></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Opis:</b></td>
			<td><textarea name="catalog_desc" cols="20" rows="10"></textarea></td>
		</tr>
		
		<tr align="center" bgcolor="skyblue">
			<td colspan="7"><input type="submit" name="insert_post" class="btn-bs-file btn btn-primary" value="Dodaj katalog"/></td>
		</tr>
	
	</table>
</form>

</div>
<?php 

if(isset($_POST['insert_post'])){

	//getting the text data from the fields
	$catalog_title = $_POST['catalog_title'];

	$catalog_desc = $_POST['catalog_desc'];

	//getting the image from the field
	$catalog_image = $_FILES['catalog_image']['name'];
	$catalog_image_tmp = $_FILES['catalog_image']['tmp_name'];
	
	move_uploaded_file($catalog_image_tmp,"catalog_images/$catalog_image");
	
	$catalog_image2 = $_FILES['catalog_image2']['name'];
	$catalog_image2_tmp = $_FILES['catalog_image2']['tmp_name'];
	
	move_uploaded_file($catalog_image2_tmp,"catalog_images/$catalog_image2");

	 $insert_catalog = "insert into catalogs (catalog_title,catalog_desc,catalog_image,catalog_image2) values ('$catalog_title','$catalog_desc','$catalog_image','$catalog_image2')";
	 
	 $insert_catalog = mysqli_query($con, $insert_catalog);
	 
	 if($insert_catalog){
	 
	 echo "<script>alert('Dodali ste novi katalog!')</script>";
	 echo "<script>window.open('view_catalog.php','_self')</script>";
	 
	 }
}

?>

<?php include ("podnozije3.php"); ?>

