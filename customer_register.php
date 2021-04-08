<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje.php"); ?>
<?php include ("izbornik.php"); ?>
<?php include ("pretrazivac.php"); ?>
<div class="col-md-10">
<div class="row carousel-holder">
<!-- Navigacija -->
		<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
		<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="customer_register.php">Registracija</a></li>
		</ol></p>  
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Registracija </b></h1></div> <hr/>
<!-- Registracija  https://bootsnipp.com/snippets/featured/register-page-->
<table id="registracija" align="center">
	<tr>		
	<td id="prvopolje">
			<div class="row main">
				<div class="main-login main-center">
				<h4 align="center"><b> Registriraj se i postani član naše obitelji.</b></h4>
					<form class="" method="post" action="customer_register.php" enctype="multipart/form-data">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Ime</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_name" id="name"  placeholder="Unesite ime korisnika" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Prezime</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_lastname" id="lastname"  placeholder="Unesite prezime korisnika" required/>
								</div>
							</div>
						</div>


						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">E-mail</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_email" id="email"  placeholder="Unesite E-mail korisnika" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Korisničko ime</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_username" id="username"  placeholder="Unesi korisničko ime" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Šifra</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="c_pass" id="password"  placeholder="Unesite šifru" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Korisnička slika</label>
						<div class="cols-sm-10">
						<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
						<input type="file" name="c_image" class="form-control" required/>	
						</div>	
						</div>
						</div>
						
						<div class="checkbox">
							<label>
								<input checked type="checkbox"> <em>Prihvaćam <a href="#" id="uvjetiposlovanja1">opće uvijete poslovanja</a></em>
							</label>
						</div>

						<div class="form-group ">
							<input type="submit" title="Registriraj se" name="register" value="Registriraj se"  class="btn btn-primary btn-lg btn-block login-button" />
						</div>
						
					</form>
				</div>
			</div>
	</td>
	</tr>
</table>
	
</div>
</div>

<?php include ("podnozije.php"); ?>

<?php 
if(isset($_POST['register'])){

	
	$ip = getIp();
	
	$c_name = $_POST['c_name'];
	$c_lastname = $_POST['c_lastname'];
	$c_email = $_POST['c_email'];
	$c_username = $_POST['c_username'];
	$c_image = $_FILES['c_image']['name'];
	$c_image_tmp = $_FILES['c_image']['tmp_name'];
	$c_pass = $_POST['c_pass'];

	move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
	
	 $insert_c = "insert into customers (customer_ip,customer_name,customer_lastname,customer_email,customer_username,customer_image,customer_pass) values ('$ip','$c_name','$c_lastname','$c_email','$c_username','$c_image','$c_pass')";

	$run_c = mysqli_query($con, $insert_c); 
	
	$sel_cart = "select * from cart where ip_add='$ip'";
	
	$run_cart = mysqli_query($con, $sel_cart); 
	
	$check_cart = mysqli_num_rows($run_cart); 
	
	if($check_cart==0){
	
	$_SESSION['customer_email']=$c_email; 
	
	echo "<script>alert('Uspješno ste napravili svoj korisnički račun!')</script>";
	echo "<script>window.open('customer/index.php','_self')</script>";
	
	}
	
}
?>
