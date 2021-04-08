<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">

<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u: </text><li class="active"><a href="placanje.php">OBAVIJEST! </a></li>
</ol></p>
<!-- Naslov --> 
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b>Upravo ste naručili proizvod! </b></h1></div> 
<hr>
</div>




  
<?php 
		include("includes/db.php");
		
		//this is all for product details
		
		$total = 0;
		
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
			
			$product_id = $pp_price['product_id'];
			
			$pro_name = $pp_price['product_title'];
			
			
			$values = array_sum($product_price);
			
			$total +=$values;
			
			}
		
		
		}
		
			// getting Quantity of the product 
			$get_qty = "select * from cart where p_id='$pro_id'";
			
			$run_qty = mysqli_query($con, $get_qty); 
			
			$row_qty = mysqli_fetch_array($run_qty); 
			
			$qty = $row_qty['qty'];
			
			if($qty==0){
			
			$qty=1;
			}
			else {
			
			$qty=$qty;
			
			$total = $total*$qty;
			
			
			}
			
			// this is about the customer
			$user = $_SESSION['customer_email'];
				
			$get_c = "select * from customers where customer_email='$user'";
				
			$run_c = mysqli_query($con, $get_c); 
				
			$row_c = mysqli_fetch_array($run_c); 
				
			$c_id = $row_c['customer_id'];
			$c_email = $row_c['customer_email'];
			$c_name = $row_c['customer_name']; 


			$invoice = mt_rand();
				
				
				$insert_order = "insert into orders (p_id, c_id, qty, invoice_no, order_date,status) values ('$pro_id','$c_id','$qty','$invoice',NOW(),'in Progress')";
				$run_order = mysqli_query($con, $insert_order); 
				
				
				$empty_cart = "delete from cart";
				$run_cart = mysqli_query($con, $empty_cart);
				
				
?>

<h2 align="center" > <a href="index.php"> <i class="glyphicon glyphicon-hand-left"></i> Vrati se nazad kupovati </a> </h2>

<?php include ("podnozije2.php"); ?>
