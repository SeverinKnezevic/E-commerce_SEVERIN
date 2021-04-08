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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="edit_account.php"> Postavke korisničkih podataka </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Postavke korisničkih podataka </b></h1></div> 
<hr/>
</div>

<?php
include("includes/db.php");

if(isset($_GET['edit_c'])){

	$get_id = $_GET['edit_c']; 
	
	$get_c = "select * from customers where c_id='$get_id'";
	
	$run_c = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	$row_c=mysqli_fetch_array($run_c);
		
				$c_id = $row_customer['customer_id'];
				$c_name = $row_customer['customer_name'];
				$c_lastname = $row_customer['customer_lastname'];
				$c_email = $row_customer['customer_email'];
				$c_username = $row_customer['customer_username'];
				$c_pass = $row_customer['customer_pass'];
				$c_image = $row_customer['customer_image'];
		
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
							<td><input type="tex" name="c_lastname" value="<?php echo $lastname;?>" required/></td>
						</tr>
						
						<tr bgcolor="skyblue">
							<td align="right">E-MAIL:</td>
							<td><input type="tex" name="c_email" value="<?php echo $email;?>" required/></td>
						</tr>
						
						<tr bgcolor="skyblue">
							<td align="right">KORISNIČKO IME:</td>
							<td><input type="tex" name="c_username" value="<?php echo $username;?>" required/></td>
						</tr>
						
						<tr bgcolor="skyblue">
							<td align="right">LOZINKA:</td>
							<td><input type="password" name="c_pass" value="<?php echo $pass;?>" required/></td>
						</tr>
						
						<tr bgcolor="skyblue">
							<td align="right">SLIKA:</td>
							<td><input type="file" name="c_image"/><img src="customer_images/<?php echo $image; ?>" width="50" height="50"/></td>
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
		
	
		
		move_uploaded_file($c_image_tmp,"customer_images/$c_image");
		
		 $update_c = "update customers set customer_name='$c_name',customer_lastname='$c_lastname', customer_email='$c_email',customer_username='$c_username', customer_pass='$c_pass',customer_image='$c_image' where customer_id='$customer_id'";
	
		$run_update = mysqli_query($con, $update_c); 
		
		if($run_update){
		
		echo "<script>alert('Uspješno ste promjenili korisničke podatke')</script>";
		echo "<script>window.open('view_.php','_self')</script>";
		
		}
	}

?>
<?php include ("podnozije2.php"); ?>