<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>
<?php include ("izbornik2.php"); ?>
<?php include ("pretrazivac2.php"); ?>
<!-- Navigacija -->
<div class="col-md-10">
<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u:</text> <li class="active"><a href="products.php?cat=$cat_id"></a></li>
 <?php
if(isset($_GET['cat'])){

	$cat_id = $_GET['cat']; 
	
	$get_cat = "select * from categories where cat_id='$cat_id'";

	$run_cat = mysqli_query($con, $get_cat); 
	
	$row_cat = mysqli_fetch_array($run_cat); 
	
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];


	
	echo "<a href='products.php?cat=$cat_id'>   $cat_title</a>";
    
    }
    
    ?>
</ol></p> 
</div>		
<!-- Naslov -->
<div class="col-md-10">
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=""><b>
<?php
if(isset($_GET['cat'])){

	$cat_id = $_GET['cat']; 
	
	$get_cat = "select * from categories where cat_id='$cat_id'";

	$run_cat = mysqli_query($con, $get_cat); 
	
	$row_cat = mysqli_fetch_array($run_cat); 
	
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];


	
	echo "$cat_title";
    
    }
    
    ?>
</b></h1></div>

<hr>
<div id="products_box">
<!--https://bootsnipp.com/snippets/zDAbr-->						
	<?php getPro(); ?>
	<?php getCatPro(); ?>
						
</div>
</div>

<div class="col-md-2"></div>
<div class="col-md-10">
<nav class="brstranice" align="center">
<ul class="pagination">
	<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
	<li class="active"><a href="vrt.html">1 <span class="sr-only">(current)</span></a></li>
	<li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
</ul>
</nav>
	
</div>	 

<?php include ("podnozije2.php"); ?>
