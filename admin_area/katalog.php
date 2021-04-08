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
	<text id="nalazitese">  Nalazite se u: </text><li class="active"><a href="katalog.php">Katalog</a></li>
</ol></p> 
<!-- Naslov -->
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b>Katalog </b></h1></div> 
<hr>

<div class="container-fluid">
<div class="row">
<div id="products_box">
	
	<?php getCatalog(); ?>
			
</div>	
</div>	
</div>	
<br>	

</div>
<?php include ("podnozije3.php"); ?>