<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje3.php"); ?>
<?php include ("izbornik3.php"); ?>
<?php include ("pretrazivac3.php"); ?>
<div class="col-md-10">

<p><ol class="breadcrumb">
	<li class="go_back"> <a href="javascript:history.back()"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><b>Povratak</b></a> </li> 
	<text id="nalazitese">  Nalazite se u: </text><li class="active"><a href="forum.php">Forum </a></li>
</ol></p>
<!-- Naslov --> 
<div align="center" style="margin-bottom: 20px;"><h1 class="elegantshd" style=";"><b>Forum </b></h1></div> 
<hr>
</div>

<div class="col-md-10">

	
<!-- Forum  https://bootsnipp.com/snippets/z1y7X-->

    <table class="table table-striped" border="0">
        <thead>
		    <tr  bgcolor="skyblue">
				<th colspan="5" ><h4 align="center"> <b> 
				
				
				
				
				
				</b></h4></th>
		    </tr>
			<tr class="active">
				<th width="100px" ><i>Ime</i></th>
				<th width="600px"><i>Poruka</i></th>
				<th><i>Datum</i></th>		
				<th>Obriši</th>
            </tr>			
		</thead>	
<?php 
	include("includes/db.php");
	
	$get_forum = "select * from forums";
	
	$run_forum = mysqli_query($con, $get_forum); 
	
	$i = 0;
	
	while ($row_forum=mysqli_fetch_array($run_forum)){
		
		$forum_id = $row_forum['forum_id'];
		$forum_teme = $row_forum['forum_teme'];
		$forum_date = $row_forum['forum_date'];
		$forum_messenger = $row_forum['forum_messenger'];
		$c_id = $row_forum ['c_id'];
		$i++;
		
		$get_c = "select * from customers where customer_id='$c_id'";
		$run_c = mysqli_query($con, $get_c); 
		
		$row_c=mysqli_fetch_array($run_c); 
		
		$c_email = $row_c['customer_email'];
		$c_username = $row_c['customer_username'];
		$image = $row_c['customer_image'];
	
		
		

	?>		
		<tbody>
            <tr>
				<td align="center"><img src="../customer/customer_images/<?php echo $image; ?>" width="50" height="50" /> <br>
				<b> <?php echo $c_username;?> </b> </td>
				<td> <?php echo $forum_messenger;?> </td>
				<td> <?php echo $forum_date;?> </td>
				
				<td><a href="delete_forum.php?delete_forum=<?php echo $forum_id;?>">Obriši</a></td>
            </tr>
		</tbody>
		<?php } ?>
      </table>

<!-- Poruka  https://bootsnipp.com/snippets/featured/contact-form-with-social-network-links-->	
	<div class="row">
	
            <form action="forum.php" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                     <textarea  class="form-control" placeholder="Poruka *" name="forum_messenger"></textarea> 
                    </div>
					<div class="col-md-3"></div>
					<div class="col-md-6">
                <div class="controls">
                    <input id="contact-submit" type="submit" class="btn btn-primary btn-block" value="Komentiraj" name="insert_post"/> 
                </div>
				</div>
            </form>
        </div>
<br>
</div>
<?php 
	
	if(isset($_POST['insert_post'])){
	
		$ip = getIp();
		$forum_messenger = $_POST['forum_messenger'];
		$forum_id = $row_forum['forum_id'];
		$forum_teme = $row_forum['forum_teme'];
		$forum_date = $row_forum['forum_date'];
		$forum_customer = $row_forum['forum_customer'];
	
		
			
	
		 $insert_forum = "insert into forums (forum_messenger,forum_id,forum_teme,c_id,forum_date) values ('$forum_messenger','$forum_id','$forum_teme','15',NOW())";
		 
		 $insert_forum = mysqli_query($con, $insert_forum);
		 
		 if($insert_forum){
		 
		
		 echo "<script>window.open('forum.php?forum','_self')</script>";
		 
		 }
	}

?>
<?php include ("podnozije3.php"); ?>
