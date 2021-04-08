<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">
<!-- Navigacija -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="my_account.php"> Profil </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Profil </b></h1></div> 
<hr/>
</div>

<br>
		
<div class="col-md-2">	</div>
	
<?php 	
		
		
		$user = $_SESSION['customer_email'];
		
		$get_customer = "select * from customers where customer_email='$user'";
		
		$run_customer = mysqli_query($con, $get_customer); 
		
		$row_customer = mysqli_fetch_array($run_customer); 
		
		$c_id = $row_customer['customer_id'];
		$name = $row_customer['customer_name'];
		$lastname = $row_customer['customer_lastname'];
		$email = $row_customer['customer_email'];
		$username = $row_customer['customer_username'];
		$pass = $row_customer['customer_pass'];
		$image = $row_customer['customer_image'];
		
		
?>
		
<div class="col-md-6">
		
<table border="0 " class="table stats caps"> 
	
	<tr align="center" >
	<td colspan="2" width="400" height=""  class="avatar" ><img src="customer_images/<?php echo $image; ?>" width="300" height="300" /></td>
	</tr>
	
	<tr bgcolor=" #d9d9d9">
	<td align="right" width="150" height="30">IME:</td>
	<td align="center" ><b><?php echo $name;?></b></td>
	</tr>
	
	<tr>
	<td align="right" height="30">PREZIME:</td>
	<td align="center" ><b><?php echo $lastname;?></b></td>
	</tr>
	
	<tr bgcolor=" #d9d9d9">
	<td align="right" height="30" >KORISNIČKO IME:</td>
	<td align="center" ><b><?php echo $username;?></b></td>
	</tr>
	
	<tr>
	<td align="right" height="30">E-MAIL</td>
	<td align="center" ><b><?php echo $email;?></b></td>
	</tr>
	
	<tr bgcolor=" #d9d9d9">
	<td align="right" height="30">VAŠE NARUDŽBE:</td>
	<td align="center" ><a href="my_orders.php"><img id="user" src="folder.png"/><b> Narudžbe<b> </a></td>
	</tr>
	
</table>
<br>	
</div>
</div>

<?php include ("podnozije2.php"); ?>
