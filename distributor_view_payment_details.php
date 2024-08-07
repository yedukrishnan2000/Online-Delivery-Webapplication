<?php include 'distributor_header.php';
 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img3.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>


	<?php 
	$q="SELECT *,`order_detail`.`quantity` AS qun,`order_detail`.`amount` AS amou FROM order_detail INNER JOIN `order_master` USING(`omaster_id`) INNER JOIN `product` USING(product_id) WHERE customer_id='$sub_id' AND STATUS='paid'";
	$r=select($q);
	if ($r) 
	{

		$total=$r[0]['total'];
	// echo $total;
	$i=1;
	?>

	<h1>Orders</h1> 
<table border="5" class="table" style="width: 600px">
	<tr>
		<th></th>
		<th>Product</th>
		<th>Image</th>
		<th>Quantity</th>
		<th>Amount</th>
	</tr>
	<?php  
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['product']; ?></td>
		<td><img src="<?php echo $row['image']; ?>" height="100" width="100"></td>
		<td><?php echo $row['qun']; ?></td>
		<td><?php echo $row['amou']; ?></td>
	</tr>
	
		<?php
	}
	 ?>
	 <tr>
	 	<th colspan="2" align="center">Total</th>
		<td colspan="3" align="center"><input type="text" name="amtt" readonly value="<?php echo $total ?>"></td>
	</tr>
	
	<tr><td align="center"><a class="btn btn-success" href="distributor_view_orderdetails.php?sub_id=<?php echo $row['customer_id'] ?>">Take Order</a></td></tr>
	<?php } 

	else
	{
		?>
		<h2 style="color:Tomato;font-family: Garamond, serif;">No Orders Placed</h2>
		<?php  
	} 
		// code...
	 ?>

</table> 

</center>


<?php include 'footer.php' ?>