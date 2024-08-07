<?php include 'admin_header.php';
 ?>
 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odtlemon.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: Black">View Customer Details</h1>
<table class="table" style="width: 900px">
	<tr>
		<th>Sl.no</th>
		<th>Customer</th>
		<th>Area</th>
		<th>Place</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<?php 
	$q="SELECT * FROM `customer` INNER JOIN `area` USING(`area_id`)";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['fname']; ?>&nbsp;<?php echo $row['lname']; ?></td>
		<td><?php echo $row['area']; ?></td>
		<td><?php echo $row['place']; ?></td>
		<td><?php echo $row['phone'] ?></td>
		<td><?php echo $row['email'] ?></td>
		<td><a class="btn btn-info" href="admin_view_subscription_plan.php?sub_id=<?php echo $row['customer_id'] ?>">Subscription Plans</a></td>
		<td><a class="btn btn-success" href="admin_view_payment_details.php?sub_id=<?php echo $row['customer_id'] ?>">Payment Details</a></td>
	</tr>
		<?php
	}
	 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>