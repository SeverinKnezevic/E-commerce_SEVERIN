<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">
<!-- Navigacija -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="cart.php"> Blagajna </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Blagajna </b></h1></div> 
<hr/>


</div>

<div class="col-md-10">	
<div id="products_box">
		
		<form action="" method="post" enctype="multipart/form-data">
		
			<table align="center" width="700" class="table stats caps" >
				
				<tr align="center" bgcolor=" #d9d9d9">
					<th>Obriši</th>
					<th>Naziv</th>
					<th>Količina</th>
					<th>Cijena</th>
					
				
				</tr>
				
	<?php 
	$total = 0;
$overallTotal = 0;

	global $con;

	$ip = getIp();

	$sel_price = "select * from cart where ip_add='$ip'";

	$run_price = mysqli_query($con, $sel_price);

	while($p_price=mysqli_fetch_array($run_price)){

		$pro_id = $p_price['p_id'];

		$pro_price = "select * from products where product_id='$pro_id'";

		$run_pro_price = mysqli_query($con,$pro_price);

		while ($pp_price = mysqli_fetch_array($run_pro_price)){

		$product_price = array($pp_price['product_price']);

		$product_title = $pp_price['product_title'];

		$product_image = $pp_price['product_image'];

		$single_price = $pp_price['product_price'];

		$values = array_sum($product_price);

		$overallTotal += $values;

		$total = $pp_price['product_price'];

				?>
				
				
			<tr align="center">
					<td><input  type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
					<td><?php echo $product_title; ?><br>
					<img src="../admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
					</td>
					<?php
					if(isset($_POST['update_cart'])){
					$qty = $_POST['qty'][$p_price['p_id']];
					$update_qty = "update cart set qty='$qty' where p_id='".$p_price['p_id']."'";

					$run_qty = mysqli_query($con, $update_qty);
					$_SESSION['qty'][$p_price['p_id']]=$qty;
					$total = $total*$qty;

					$sum = $total-($total/$qty);
					$overallTotal += $sum;
					$_SESSION['overallTotal'] = $overallTotal;
					}


?>
					<td><input type="tex" size="4" name="qty[<?php echo $p_price['p_id']; // ovdje smo dodali da količinu gleda kao niz s određenim id-om?>]" value="<?php if (isset($_SESSION['qty'][$p_price['p_id']]) && intval($_SESSION['qty'][$p_price['p_id']]) != 0) echo $_SESSION['qty'][$p_price['p_id']]; else echo 1; ?>"/></td>

					
					
					<td><?php echo  $single_price . "KM" ; ?></td>
					
			</tr>
				
				
			<?php } } ?>
			
			<tr>
					<td colspan="3" align="right" bgcolor=" #d9d9d9"><b>Ukupna cijena:</b></td>
					<td align="center" bgcolor=" #d9d9d9"><?php if (isset($_SESSION['overallTotal'])) {
					echo $_SESSION['overallTotal']."KM";
					} else {
					echo $overallTotal;
					}   ?></td>
			</tr>
				
	<tr>
	<td align="center"><input type="submit" name="update_cart" value="Osvježi"  class="btn-bs-file btn btn-primary"/></td>
	<td align="center"> <input type="submit" name="yes" value="Očisti košaricu"  class="btn-bs-file btn btn-success" > </input></td>
	<td align="center"><input type="submit" name="continue" value="Vrati se u kupovinu" class="btn-bs-file btn btn-warning"/></td>
	<td align="center"><a href="checkout.php" style="text-decoration:none; color:black;" class="btn-bs-file btn btn-danger"></i> KUPI</a></td>
	</tr>
	
</table> 	
</form>
		
<?php 
	
function updatecart(){
	
	global $con; 
	
	$ip = getIp();
	
	if(isset($_POST['update_cart'])){
	
		foreach($_POST['remove'] as $remove_id){
		
		$delete_product = "delete from cart where p_id='$remove_id' AND ip_add='$ip'";
		
		$run_delete = mysqli_query($con, $delete_product); 
		
		if($run_delete){
		
		echo "<script>window.open('cart.php','_self')</script>";
		
		}
		
		}
	
	}
	if(isset($_POST['continue'])){
	
	echo "<script>window.open('','_self')</script>";
	
	}

}
echo @$up_cart = updatecart();

?>

			
			</div>
</div>		
<?php 
include("includes/db.php"); 



if(isset($_POST['yes'])){

$delete_product = "delete from cart where  ip_add='$ip'";

$run_delete = mysqli_query($con, $delete_product); 


echo "<script>window.open('cart.php','_self')</script>";
}


?>




<?php include ("podnozije2.php"); ?>
