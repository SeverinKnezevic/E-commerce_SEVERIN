<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<div class="col-md-10">
<div id="products_box">
<?php 
	
	if(isset($_GET['search'])){
	
	$search_query = $_GET['user_query'];
	
	$get_pro = "select * from products where product_keywords like '%$search_query%'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
		$product_description = $row_pro['product_desc'];
	
		echo "
				
					<div class='col-lg-3 col-md-2 col-sm-6 col-xs-12'>
				
					<div class='my-list'>
						<img src='../admin_area/product_images/$pro_image' alt='dsadas'  />
						<h3><b>$pro_title <b></h3>
						<small> Cijena: $pro_price KM</small>
						<span class='pull-right'></span>	
						<div class='offer'>Šifra: $pro_id  </div>
						<div class='detail'>
							<p><b>$product_description</b></p>
							
							<div class='add'><a href='cart.php?add_cart=$pro_id'  class='addtocart' ><button class='btn btn-info' >Dodaj u košaricu</button></a></div>
						</div>							
					</div>
					
				</div>
		";
	
	}
	}
	?>
</div>
</div>
<?php include ("podnozije2.php"); ?>
