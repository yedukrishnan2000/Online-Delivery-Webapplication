<?php include 'admin_header.php';

if (isset($_POST['manage'])) 
{
	extract($_POST);
	echo $q2="INSERT INTO `subscriptions` VALUES(NULL,'$title','$amt')";
	insert($q2);
	alert("add successfully.....!");
	return redirect("admin_manage_different_subscription_Plans.php");
}

if(isset($_POST['update']))
{
	extract($_POST);
	echo $qr1="update subscriptions set title='$title',amount='$amt' where subscription_id='$upid'";
	update($qr1);
	alert("Updated Successfull");
	return redirect("admin_manage_different_subscription_Plans.php");
}

if(isset($_GET['deid']))
{
	$qq="delete from subscriptions where subscription_id='$deid'";
	delete($qq);
	alert("Deleted.....!");
	return redirect("admin_manage_different_subscription_Plans.php");
}

 ?>
 <center>
<form method="post">
 
  <?php
if(isset($_GET['upid']))
{
	$q="select * from subscriptions where subscription_id='$upid' ";
	$res1=select($q);
?>        

  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="images/img3.jpg" alt="">
                <div class="text-content">

                	 <center>    
                <h1>Update Subscription</h1>
<table class="table" style="width: 500px;background-color: rgb(200,100,100,0.4);">

	<tr>
		<th>Title</th>
		<td><input type="text" value="<?php echo $res1[0]['title'] ?>" required="" name="title" class="form-control"></td>
	</tr>
	<tr>
		<th>Amount</th>
		<td><input type="text" value="<?php echo $res1[0]['amount'] ?>" required="" name="amt" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" class="btn btn-info" name="update" value="Update"></td>
	</tr>
</table> 

                	</div>
                </div>
            </div>
        </div>
    </div>


 
  <?php
}
else
{
?>  
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="images/img2.jpg" alt="">
                <div class="text-content">
<center>
                	<h1 style="color: white">Manage Subscription Plan</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,100,100,0.4);">
	<tr>
		<th>Title</th>
		<td><input type="text" required="" name="title" class="form-control"></td>
	</tr>
	<tr>
		<th>Amount</th>
		<td><input type="text" required="" name="amt" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="manage" class="btn btn-info" value="Manage"></td>
	</tr>
	</table>
</center>

                	</div>
                </div>
            </div>
        </div>
    </div>

	
               
  <?php }
?> 
	 <h1>View Subscription Plans</h1>
<table class="table" style="width: 700px;">
	<tr>
		<th>Sl.no</th>
		<th>Title</th>
		<th>Amount</th>
	</tr>
	<?php 
	$q="SELECT * FROM subscriptions";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['title'] ?></td>
		<td><?php echo $row['amount']; ?></td>
		<td><a class="btn btn-info" href="?upid=<?php echo $row['subscription_id']; ?>">Update</td>
 		<td><a class="btn btn-info" href="?deid=<?php echo $row['subscription_id']; ?>">Delete</td> 

	</tr>
		<?php
	}
	 ?>
</table>   
</form>
</center> 


<?php include 'footer.php' ?>