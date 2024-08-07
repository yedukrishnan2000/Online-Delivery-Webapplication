<?php include 'admin_header.php';
 ?>
 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img1.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: black">View Subscription Plan</h1>
<table class="table" style="width: 600px">
	<tr>
		<th>Sl.no</th>
		<th>Title</th>
		<th>Amount</th>
	</tr>
	<?php 
	$q="SELECT * FROM subscriptions INNER JOIN `subscribed` USING(subscription_id) WHERE customer_id='$sub_id'";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['amount']; ?></td>
	</tr>
		<?php
	}
	 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>