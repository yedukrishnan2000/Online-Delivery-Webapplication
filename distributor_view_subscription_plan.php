<?php include 'distributor_header.php';
extract($_GET);

 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 600px;max-height: 800px;">
                <img src="images/odtlemon.png" alt="" style="min-height: 800px;max-height: 800px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
<!-- <h1 style="color: Black">View Subscription Plan</h1> -->

	<?php 
	$q="SELECT * FROM subscriptions INNER JOIN `subscribed` USING(subscription_id) WHERE customer_id='$sub_id'";
	$r=select($q);

	if($r)
	{
	$i=1;
	foreach ($r as $row) 
	{
		?>
		<table class="table" style="width: 600px;">
	<tr>
		<th></th>
		<th>Title</th>
		<th>Status</th>
	</tr>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo "Valid"; ?></td>
	</tr>
		<?php
	}
}
else
{

	 ?>
	 <h1>No Subscriptions by the User</h1>
	 <?php 
}
 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>