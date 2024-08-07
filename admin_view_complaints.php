<?php include 'admin_header.php' ?>
<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odtskin.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
<center>
	 <h1>View Complaints</h1>
<table class="table" style="width: 800px">
	<tr>
		<th>Sl.no</th>
		<th>Customer</th>
		<th>Phone</th>
		<th>Complaint</th>
		<th>Reply</th>
		<th>Date</th>
	</tr>
	<?php 
	$q="SELECT * FROM complaint INNER JOIN `customer` USING(customer_id)";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['fname'] ?>&nbsp;<?php echo $row['lname'] ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['complaint']; ?></td>
		<?php if ($row['reply']=='pending') 
		{
			?>
		<td><a class="btn btn-info" href="admin_send_reply.php?cmpid=<?php echo $row['complaint_id']; ?>">Send Reply</td>
			<?php
		} else{
			?>
			<td><?php echo $row['reply']; ?></td>
			<?php
		}?>
		<td><?php echo $row['date']; ?></td>
	</tr>
		<?php
	}
	 ?>
</table>   
</form>
</center> 


<?php include 'footer.php' ?>