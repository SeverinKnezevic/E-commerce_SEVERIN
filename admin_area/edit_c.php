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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="view_customers.php">Korisnici </a></li> <li class="active"><a href="edit_account.php">Postavke korisničkih podataka </a></li>
</ol></p> 
<!-- Naziv -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Postavke korisničkih podataka </b></h1></div> 
<hr/>
</div>

<?php
if(isset($_GET['edit_c'])){

	$c_id = $_GET['edit_c']; 
	
	$get_c = "select * from customers where customer_id='$c_id'";
	

	$run_c = mysqli_query($con, $get_c); 
	
	$row_c = mysqli_fetch_array($run_c); 
	
	$c_id = $row_c['customer_id'];
		$c_name = $row_c['customer_name'];
		$c_lastname = $row_c['customer_lastname'];
		$c_email = $row_c['customer_email'];
		$c_username = $row_c['customer_username'];
		$c_image = $row_c['customer_image'];
		$c_pass = $row_c['customer_pass'];
	
}
			
		?>
		
<div class="col-md-2"></div>
<div class="col-md-4">
	<form action="" method="post" enctype="multipart/form-data">
		
		<table align="center"  class="table stats caps">
			
			
			
			<tr bgcolor="skyblue">
				<td align="right">Ime:</td>
				<td><input type="tex" name="c_name" value="<?php echo $c_name;?>" required/></td>
			</tr>
			<tr bgcolor="skyblue">
				<td align="right">Prezime:</td>
				<td><input type="tex" name="c_lastname" value="<?php echo $c_lastname;?>" required/></td>
			</tr>
			
			
			<tr bgcolor="skyblue">
				<td align="right">E-MAIL:</td>
				<td><input type="tex" name="c_email" value="<?php echo $c_email;?>" required/></td>
			</tr>
			
			<tr bgcolor="skyblue">
				<td align="right">KORISNIČKO IME:</td>
				<td><input type="tex" name="c_username" value="<?php echo $c_username;?>" required/></td>
			</tr>
			
			<tr bgcolor="skyblue">
				<td align="right">LOZINKA:</td>
				<td><input type="tex" name="c_pass" value="<?php echo $c_pass;?>" required/></td>
			</tr>
			
			<tr bgcolor="skyblue">
				<td align="right">SLIKA:</td>
				<td><input type="file" name="c_image"/><img src="../customer/customer_images/<?php echo $c_image; ?>" width="50" height="50"/></td>
			</tr>
			
			
			
			
			
			<tr align="center" bgcolor="skyblue">
				<td colspan="6"><input type="submit" name="update" value="Promjeni korisničke podatke" class="btn-bs-file btn btn-primary" /></td>
			</tr>
							
		</table>
	
	</form>
</div>	

<?php 

if(isset($_POST['update'])){

	
	$ip = getIp();
	
	$customer_id = $c_id;
	
	$c_name = $_POST['c_name'];
	$c_lastname = $_POST['c_lastname'];
	$c_email = $_POST['c_email'];
	$c_username = $_POST['c_username'];
	$c_pass = $_POST['c_pass'];
	$c_image = $_FILES['c_image']['name'];
	$c_image_tmp = $_FILES['c_image']['tmp_name'];
	

	
	move_uploaded_file($c_image_tmp,"../customer/customer_images/$c_image");
	
	 $update_c = "update customers set customer_name='$c_name',customer_lastname='$c_lastname', customer_email='$c_email',customer_username='$c_username', customer_pass='$c_pass',customer_image='$c_image' where customer_id='$customer_id'";

	$run_update = mysqli_query($con, $update_c); 
	
	if($run_update){
	
	
	echo "<script>window.open('view_customers.php','_self')</script>";
	}
}
?>
<?php include ("podnozije3.php"); ?>