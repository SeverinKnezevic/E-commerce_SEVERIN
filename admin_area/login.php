<?php 
session_start();
include('includes/db.php');
?>
<!DOCTYPE>
<html>
	<head>
	<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Prijava</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 

	</head>
	
<body>	
  
<div class="col-md-3"></div>
<div class="col-md-3">
<form method="post" action="login.php">
<table class="table stats caps"  align="center" height="200" >
<tr>
<td colspan="2" >Admin prijava</td>
</tr>
<tr>
<td>Email:</td>
<td>Lozinka</td>  
 </tr>
 <tr>
 <td><input type="email" name="email" placeholder="E-mail" required="required"/> </td>
 <td><input type="password" name="password" placeholder="Lozinka" required="required"/></td>
 </tr>
 <tr>
 <td colspan="2"><button type="submit" class="btn-bs-file btn btn-lg btn-danger" name="login">Prijavi se</button> </td>
 </tr>
 </table>
 </form>
</body>
</html>
</div>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = ($_POST['email']);
		$pass = ($_POST['password']);
	
	$sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in=You have successfully Logged in!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('Podaci nisu ispravni, try again!')</script>";
	
	}
		
	}
?>