<?php

 $con = mysqli_connect("localhost","root","","severin");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}




   
function getip(){

   $ip = $_SERVER['REMOTE_ADDR'];


   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
     
     $ip = $_SERVER['HTTP_CLIENT_IP'];


   }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){

     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];


   }

    return $ip;
}


//Košarica
function cart(){

if(isset($_GET['add_cart'])){

	global $con; 
	
	$ip = getIp();
	
	$pro_id = $_GET['add_cart'];

	$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
	
	$run_check = mysqli_query($con, $check_pro); 
	
	if(mysqli_num_rows($run_check)>0){

	echo "";
	
	}
	else {
	
	$insert_pro = "insert into cart (p_id,ip_add) values ('$pro_id','$ip')";
	
	$run_pro = mysqli_query($con, $insert_pro); 
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	
}

}

 // Ukupne stavke
 
 function total_items(){
 
	if(isset($_GET['add_cart'])){
	
		global $con; 
		
		$ip = getIp(); 
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items); 
		
		$count_items = mysqli_num_rows($run_items);
		
		}
		
		else {
		
		global $con; 
		
		$ip = getIp(); 
		
		$get_items = "select * from cart where ip_add='$ip'";
		
		$run_items = mysqli_query($con, $get_items); 
		
		$count_items = mysqli_num_rows($run_items);
		
		}
	
	echo $count_items;
	}
  
// Ukupna cijena
	
	function total_price(){
	
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
			
			$values = array_sum($product_price);
			
			$total +=$values;
			
			}
		
		
		}
		
		echo "$" . $total;
		
	
	}

// Kategorije
function getCats(){
	
	global $con; 
	
	$get_cats = "select * from categories";
	
	$run_cats = mysqli_query($con, $get_cats);
	
	while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
	echo "<li><a href='products.php?cat=$cat_id'>$cat_title</a></li>";
	
	
	}


}

/*Proizvodi https://bootsnipp.com/snippets/zDAbr*/
function getPro(){

	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){

	global $con; 
	
	$get_pro = "select * from products order by RAND() LIMIT 0,6";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_cat = $row_pro['product_cat'];
		$pro_title = $row_pro['product_title'];
		$pro_price = $row_pro['product_price'];
		$pro_image = $row_pro['product_image'];
	
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
}

}

/*Porizvodi po kategorijama https://bootsnipp.com/snippets/zDAbr*/
function getCatPro(){

	if(isset($_GET['cat'])){
		
		$cat_id = $_GET['cat'];

	global $con; 
	
	$get_cat_pro = "select * from products where product_cat='$cat_id'";

	$run_cat_pro = mysqli_query($con, $get_cat_pro); 
	
	$count_cats = mysqli_num_rows($run_cat_pro);
	
	if($count_cats==0){
	
    	echo "<script>alert('Ova mapa nema proizvoda!')</script>";

    	echo "<script>window.open('index.php','_self')</script>";
	}
	
	while($row_cat_pro=mysqli_fetch_array($run_cat_pro)){
	
		$pro_id = $row_cat_pro['product_id'];
		$pro_cat = $row_cat_pro['product_cat'];
		$pro_title = $row_cat_pro['product_title'];
		$pro_price = $row_cat_pro['product_price'];
		$pro_image = $row_cat_pro['product_image'];
		$product_description = $row_cat_pro['product_desc'];
	
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
							
							<div class='add'><a href='cart.php?add_cart=$pro_id'  class='addtocart'><button class='btn btn-info' >Dodaj u košaricu</button></a></div>
						</div>							
					</div>
					
				</div>
		
		";
		
	
	}
	
}

}


/* Naslovna slika 1 */
function getPro1(){
	global $con; 
	
	$get_pro = "select * from actions where product_id='1'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		
		$product_description = $row_pro['product_desc'];;
		
		$pro_image = $row_pro['product_image'];
	
		echo "

                                <div class='item active'>
									<a href=''><div class='media'> <img src='../admin_area/product_images/$pro_image' alt='dsadas' width='100%'  > </div>
									<div class='media__body'>
									$product_description
									</div>
									</a>
                                </div>

		";
	
	}


}


/* Naslovna slika 2 */
function getPro2(){
	global $con; 
	
	$get_pro = "select * from actions where product_id='2'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		
		$product_description = $row_pro['product_desc'];;
		
		$pro_image = $row_pro['product_image'];
	
		echo "

                                <div class='item active'>
									<a href=''><div class='media'> <img src='../admin_area/product_images/$pro_image' alt='dsadas' width='100%'  > </div>
									<div class='media__body'>
									$product_description
									</div>
									</a>
                                </div>

		";
	
	}


}

/* Naslovna slika 3 */
function getPro3(){
	global $con; 
	
	$get_pro = "select * from actions where product_id='3'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		
		$product_description = $row_pro['product_desc'];;
		
		$pro_image = $row_pro['product_image'];
	
		echo "

                                <div class='item active'>
									<a href=''><div class='media'> <img src='../admin_area/product_images/$pro_image' alt='dsadas' width='100%'  > </div>
									<div class='media__body'>
									$product_description
									</div>
									</a>
                                </div>

		";
	
	}


}

/*AKCIJSKI PORIZVODI https://bootsnipp.com/snippets/z4Wor*/
function getPro01(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='1'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=1' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro02(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='2'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=2' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/

/*AKCIJSKI PORIZVODI*/
function getPro03(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='3'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=3' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/

/*AKCIJSKI PORIZVODI*/
function getPro04(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='4'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=4' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro05(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='5'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=5' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro06(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='6'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=6' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro07(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='7'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=1' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro08(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='8'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=2' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro09(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='9'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=3' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro010(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='10'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=4' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro011(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='11'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=5' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/**/
/*AKCIJSKI PORIZVODI*/
function getPro012(){
	global $con; 
	
	$get_pro = "select * from products1 where product_id='12'";

	$run_pro = mysqli_query($con, $get_pro); 
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
	
		echo "

                               
							   <a class='list-quotes' href='products.php?cat=6' width='230' height='150'>
								<!-- Recommended size 360X360 -->
								<img class='img-responsive' alt='img' src='../admin_area/product_images/$pro_image' width='230' height='150'>
									<div class='quotes'>
									
										<h1>$pro_price KM</h1>
										<span class='year'>AKCIJA</span>
										<p> $pro_title </p>
										
									</div>
								</a>
                        

		";
	
	}


}

/*Katalog*/
function getCatalog(){

	

	global $con; 
	
	$get_catalog = "select * from catalogs order by RAND() LIMIT 0,6";

	$run_catalog = mysqli_query($con, $get_catalog); 
	
	while($row_catalog=mysqli_fetch_array($run_catalog)){
		
		$catalog_id = $row_catalog['catalog_id'];
		$catalog_title = $row_catalog['catalog_title'];
		$catalog_image = $row_catalog['catalog_image'];
		$catalog_image2 = $row_catalog['catalog_image2'];
		$catalog_description = $row_catalog['catalog_desc'];
	
		echo "
		<div class='list-group'>
        <a href='' class='list-group-item active blue-bg'>

          <div class='row'>
            <div class='col-sm-7'><img src='../admin_area/catalog_images/$catalog_image' width='100%' height='200px'></div>
            <div class='col-sm-4'>
              <h4>
        			$catalog_title
        		</h4>
              <p1>$catalog_description</p1>
            </div>
          </div>
        </a>
        <div class='white-bg'>
         <a href='../admin_area/catalog_images/$catalog_image2' download><button class='btn button-default custom-button' href='' >Download</button></a>
        </div>
      </div>
	  
	  
		";
	
	}


}
		



?>