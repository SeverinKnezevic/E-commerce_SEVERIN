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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_products1.php"> Naslovne slike </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Naslovne slike </b></h1></div> 
<hr/>


</div>
<div class="col-md-10">
<table width="795" align="center" class="table table-bordered table-hover"  > 

	<tr align="center"  >
		<th id="prvistupac">R.Broj</th>
		<th id="drugistupac">Naziv</th>
		<th id="trecistupac">Slika</th>
		<th id="cetvrtistupac">Uređivanje</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from actions";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_desc = $row_pro['product_desc'];
		$pro_image = $row_pro['product_image'];
		$i++;
	
	?>
	<tr align="center">
		<td id="prvistupac"><?php echo $i;?>.</td>
		<td id="drugistupac"><?php echo $pro_desc;?></td>
		<td id="trecistupac"><img src="product_images/<?php echo $pro_image;?>" width="120" height="60"/></td>
		<td id="cetvrtistupac"><a href="edit_pro1.php?edit_pro=<?php echo $pro_id; ?>"  class="btn btn-default"  aria-label="Settings"> <i class="glyphicon glyphicon-edit" aria-hidden="true"></i> Uredi</a></td>
	</tr>
	<?php } ?>
</table>
</div>
<?php include ("podnozije3.php"); ?>