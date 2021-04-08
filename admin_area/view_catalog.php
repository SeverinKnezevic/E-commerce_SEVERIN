<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<div class="col-md-10">

<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_catalog.php"> Katalozi </a></li>
</ol></p> 

<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Katalozi </b></h1></div> 
<hr/>

</div>
<div class="col-md-10">
<div id="PricingTab">

<div class="row">
<!-- Tablica  https://bootsnipp.com/snippets/z71yy -->
<table width="795" align="center" class="table table-condensed table-hover"> 
	
	<tr align="center">
		<td colspan="6"><a href="insert_catalog.php"><button class="btn btn-info">Dodaj Katalog</button></a>
		<a href="katalog.php"><button class="btn btn-info">Idi na kataloge</button></a></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th class="tabco1">R.Broj</th>
		<th class="tabco2">Naziv</th>
		<th class="tabco3">Slika</th>
		<th class="tabco4">Katalog</th>
		<th class="tabco5">Opis</th>
		<th class="tabco6">Brisanje</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_catalog = "select * from catalogs";
	
	$run_catalog = mysqli_query($con, $get_catalog); 
	
	$i = 0;
	
	while ($row_catalog=mysqli_fetch_array($run_catalog)){
		
		$catalog_id = $row_catalog['catalog_id'];
		$catalog_title = $row_catalog['catalog_title'];
		$catalog_image = $row_catalog['catalog_image'];
		$catalog_image2 = $row_catalog['catalog_image2'];
		$catalog_desc = $row_catalog['catalog_desc'];
		$i++;
	
	?>
	<tr align="center">
		<td class="tabco1"><?php echo $i;?>.</td>
		<td class="tabco2"><?php echo $catalog_title;?></td>
		<td class="tabco3"><img src="catalog_images/<?php echo $catalog_image;?>" width="90" height="125"/></td>
		<td class="tabco4"> <a href="catalog_images/<?php echo $catalog_image2;?>" class="btn btn-warning" download><i class="glyphicon glyphicon-save" aria-hidden="true"></i>  Download</a></td>
		<td class="tabco5"><?php echo $catalog_desc;?></td>
		<td class="tabco6"><a href="delete_catalog.php?delete_catalog=<?php echo $catalog_id;?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i>  Obriši</a></td>
	
	</tr>
	<?php } ?>
</table>
</div>
</div>
</div>

<?php include ("podnozije3.php"); ?>