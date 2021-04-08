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
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="my_orders.php"> Narudžbe </a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Narudžbe </b></h1></div> 
<hr/>

</div>

<div class="col-md-10"> 

<table width="795" align="center" class="table table-bordered table-hover"> 

	<tr align="center" bgcolor="skyblue">
		<th>R. Broj</th>
		<th>Proizvod</th>
		<th>Količina</th>
		<th>Br. računa</th>
		<th>Datum narudžbe</th>
	</tr>

<?php 
include("includes/db.php");
	$user = $_SESSION['customer_email'];
	$get_c = "select * from customers where customer_email='$user' ";
	$run_c = mysqli_query ($con, $get_c);
	$row_c = mysqli_fetch_array($run_c);
	$c_email = $row_c['customer_email'];
	$c_name = $row_c['customer_name'];
	$c_id = $row_c['customer_id'];
	
	$get_order = "select * from orders where c_id='$c_id'";
	
	$run_order = mysqli_query($con, $get_order);
	
	$i = 0;
	
	while ($row_order=mysqli_fetch_array($run_order)){
		
		$order_id = $row_order['order_id'];
		$qty = $row_order['qty'];
		$pro_id = $row_order['p_id'];
		$invoice_no = $row_order['invoice_no'];
		$order_date = $row_order['order_date'];
		$status = $row_order['status'];
		$i++;
		
		$get_pro = "select * from products where product_id='$pro_id'";
		$run_pro = mysqli_query($con, $get_pro); 
		
		$row_pro=mysqli_fetch_array($run_pro); 
		
		$pro_image = $row_pro['product_image']; 
		$pro_title = $row_pro['product_title'];
?>
	
	<tr align="center">
		<td><?php echo $i;?>.</td>
		<td>
		<?php echo $pro_title;?>
		<img src="../admin_area/product_images/<?php echo $pro_image;?>" width="50" height="50" />
		</td>
		<td><?php echo $qty;?></td>
		<td><?php echo $invoice_no;?></td>
		<td><?php echo $order_date;?></td>
	</tr>

	<?php } ?>
</table>
</div>

<?php include ("podnozije2.php"); ?>
