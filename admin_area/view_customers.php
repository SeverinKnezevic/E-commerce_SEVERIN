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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_customers.php"> Korisnici </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Korisnici </b></h1></div> 
<hr/>

</div>

<div class="col-md-10">
<!-- https://bootsnipp.com/snippets/VEr1B -->
<table width="795" align="center" bgcolor="pink" border="0" class="table table-bordered table-hover"> 
<tr align="center">
		<td colspan="10"><a href="customer_register.php"><button class="btn btn-info">Dodaj korisnika</button></a>
		</td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>R.Broj</th>
		<th>IP</th>
		<th>Ime</th>
		<th>Prezime</th>
		<th>E-Mail</th>
		<th>K. Ime</th>
		<th>Slika </th>
		<th>Lozinka:</th>
		<th>Uredi</th>
		<th>Obriši</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_c = "select * from customers";
	
	$run_c = mysqli_query($con, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['customer_id'];
		$c_ip = $row_c['customer_ip'];
		$c_name = $row_c['customer_name'];
		$c_lastname = $row_c['customer_lastname'];
		$c_email = $row_c['customer_email'];
		$c_username = $row_c['customer_username'];
		$c_image = $row_c['customer_image'];
		$c_pass = $row_c['customer_pass'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?>.</td>
		<td><?php echo $c_ip;?></td>
		<td><?php echo $c_name;?></td>
		<td><?php echo $c_lastname;?></td>
		<td><?php echo $c_email;?></td>
		<td><?php echo $c_username;?></td>
		<td class="avatar"><img src="../customer/customer_images/<?php echo $c_image;?>" width="50" height="50"/></td>
		<td><code><?php echo $c_pass;?><code></td>
		<td><a href="edit_c.php?edit_c=<?php echo $c_id;?>" title="Uredi korisnika!" class="btn-bs-file btn btn-primary" aria-label="Settings"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i></a></td>
		<td><a href="delete_c.php?delete_c=<?php echo $c_id;?>" title="Obriši korisnika!" class="btn btn-danger edit" aria-label="Settings"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
	</tr>
	<?php } ?>

</table>
</div>
<?php include ("podnozije3.php"); ?>
