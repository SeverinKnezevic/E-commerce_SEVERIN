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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_cats.php">Kategorije </a></li>
</ol></p> 

<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Kategorije </b></h1></div> 
<hr/>

</div>
<div class="col-md-10">
<table width="795" align="center" class="table table-striped table-bordered table-list"> 
	<tr align="center">
		<td colspan="8"><a href="insert_cat.php"><button class="btn btn-info">Dodaj kategoriju</button></a>
		</td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th><b>R. Broj</b></th>
		<th><b>Naziv</b></th>
		<th><b>Uređivanje</b></th>
		<th><b>Brisanje</b></th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categories";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?>.</td>
		<td><b><?php echo $cat_title;?><b></td>
		<td><a href="edit_cat.php?edit_cat=<?php echo $cat_id; ?>" class="btn btn-info">Uredi</a></td>
		<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>" class="btn btn-danger">Obriši</a></td>
	
	</tr>
	<?php } ?>

</table>
</div>

<?php include ("podnozije3.php"); ?>
