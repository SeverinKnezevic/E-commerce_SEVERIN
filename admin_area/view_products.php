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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products.php"> Proizvodi </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Proizvodi </b></h1></div> 
<hr/>

</div>
<div class="col-md-10">
<table width="795" align="center" class="table table-bordered table-hover"> 
	<tr align="center">
		<td colspan="8"><a href="insert_product.php"><button class="btn btn-info">Dodaj proizvod</button></a>
		</td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>R.Broj</th>
		<th>Šifra</th>
		<th>Naziv</th>
		<th>Kategorija</th>
		<th>Slika</th>
		<th>Cijena</th>
		<th>Uređivanje</th>
		<th>Brisanje</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_cat = $row_pro['product_cat'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?>.</td>
		<td><?php echo $pro_id;?></td>
		<td><?php echo $pro_title;?></td>
		<td><?php echo $pro_cat;?></td>
		<td><img src="product_images/<?php echo $pro_image;?>" width="60" height="60"/></td>
		<td><?php echo $pro_price;?> KM</td>
		<td><a href="edit_pro.php?edit_pro=<?php echo $pro_id; ?>" class="btn btn-info edit"  aria-label="Settings">
                <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
              </a> </td>
		<td><a href="delete_pro.php?delete_pro=<?php echo $pro_id;?>" class="btn btn-danger edit" aria-label="Settings">
                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
              </a></td>
	
	</tr>
	<?php } ?>
</table>
</div>
<?php include ("podnozije3.php"); ?>