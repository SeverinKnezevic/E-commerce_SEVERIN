<?php
session_start();
include_once ("functions/functions.php");
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">
<!-- Naslov -->
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="paypal_success"> Uspješno ste platili </a></li>
</ol></p> 

<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b> Uspješno ste platili ! </b></h1></div> 
<hr/>

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
			
			//payment details from paypal
			
			$amount = $_GET['amt']; 
			
			$currency = $_GET['cc']; 
			
			$trx_id = $_GET['tx']; 

			$invoice = mt_rand();
				
				//inserting the payment to table 
				$insert_payment = "insert into payments (amount,customer_id,product_id,trx_id,currency,payment_date) values ('$amount','$c_id','$pro_id','$trx_id','$currency',NOW())";
				
				$run_payment = mysqli_query($con, $insert_payment); 
				
				// inserting the order into table
				$insert_order = "insert into orders (p_id, c_id, qty, invoice_no, order_date,status) values ('$pro_id','$c_id','$qty','$invoice',NOW(),'in Progress')";
				$run_order = mysqli_query($con, $insert_order); 
				
				//removing the products from cart
				$empty_cart = "delete from cart";
				$run_cart = mysqli_query($con, $empty_cart);
				
				
				
		if($amount==$total){
		
		echo  "</h2>";
		
		
		}
		else {
		
		echo " Plaćanje nije uspjelo</h2><br>";
		
		
		}
		
		
		
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From: <projektseverin@outlook.com.com>' . "\r\n";
			
			$subject = "Detalji narudžbe";
			
			$message = "<html> 
			<p>
			
			Poštovni <b style='color:blue;'>$c_name</b>, obavještajemo Vas da ste uspješno obavili narudžbu na 'severin.000webhostapp.com'. Vaša će se narudžba u najkraćem roku dostaviti putem kurirske služne. Hvala! </p>
			
				<table width='600' align='center' bgcolor='#FFCC99' border='2'>
			
					<tr align='center'><td colspan='6'><h2></h2></td></tr>
					
					<tr align='center'>
						<th><b></b></th>
						<th><b>Naziv proizvoda</b></th>
						<th><b>Količina</b></th>
						<th><b>Cijena</th></th>
						<th>Broj računa</th>
					</tr>
					
					<tr align='center'>
						<td></td>
						<td>$pro_name</td>
						<td>$qty</td>
						<td>$amount KM</td>
						<td>$invoice</td>
					</tr>
			
				</table>
				
				<h3>Molimo Vas idite na svoj korisnički račun i pogledajte pojedinosti o narudžbi!</h3>
				
				<h2> <a href='https://severin.000webhostapp.com/customer/index.php'>Klikni ovdje</a> i prijavi se na svoj korisnički račun!</h2>
				
				<h3> Hvala na kupovini! Lijep pozdrav!</h3>
				<br>
				<h2> Vaš <b>SEVERIN d.o.o.</b></h2>
				
			</html>
			
			";
			
			mail($c_email,$subject,$message,$headers);
			
				

?>

<?php include ("podnozije2.php"); ?>