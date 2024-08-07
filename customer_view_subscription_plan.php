<?php include 'customer_header.php';
 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odt1.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: Black">View Subscription Plan</h1>
<table class="table" style="width: 700px">
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
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['amount']; ?></td>
		<td><a class="btn btn-info" href="customer_subscribe_plan.php?sub_id=<?php echo $row['subscription_id'] ?>&amt=<?php echo $row['amount'] ?>">Subscribe Plan</a></td>
	</tr>
		<?php
	}
	 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>