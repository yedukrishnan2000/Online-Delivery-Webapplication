<?php include 'customer_header.php';

if (isset($_POST['send'])) 
{
	extract($_POST);
	echo $q2="INSERT INTO `complaint` VALUES(NULL,'$cus_id','$com','pending',curdate())";
	insert($q2);
	alert("add successfully.....!");
	return redirect("customer_send_complaints.php");
}
 ?>
 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odt3.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                	<form method="post">     
                	<center>        
	<h1 style="color: white">Send Complaints</h1>
	<table class="table" style="width: 500px;background-color: rgb(200,100,100,0.3);">
		<tr>
			<th style="color: white">Complaint</th>
			<td><input type="text" name="com" required="" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="send" value="SEND" class="btn btn-info"></td>
		</tr>
	</table>
           
                </div>
            </div>
        </div>
    </div>
</div>

  <center>
 <h1>View Complaints</h1>
<table class="table" style="width: 600px">
	<tr>
		<th>Sl.no</th>
		<th>Complaint</th>
		<th>Reply</th>
		<th>Date</th>
	</tr>
	<?php 
	$q="SELECT * FROM complaint";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['complaint'] ?></td>
		<td><?php echo $row['reply'] ?></td>
		<td><?php echo $row['date'] ?></td>
	</tr>
		<?php
	}
	 ?>
</table> 
</form>
</center>  


<?php include 'footer.php' ?>