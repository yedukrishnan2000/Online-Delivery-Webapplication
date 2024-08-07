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

<h1>View Sales</h1>
<table border="5" class="table" style="width: 600px;">
	<tr>
		<th>Sl.no</th>
		<th>Product</th>
		<th>Image</th>
		<th>Quantity</th>
		<th>Amount</th>
		<th>Date</th>
		<th>Customer Name</th>
	</tr>
	<?php 
	$q="SELECT *,`order_detail`.`quantity` AS qun,`order_detail`.`amount` AS amou FROM order_detail INNER JOIN `order_master` USING(`omaster_id`) INNER JOIN `product` USING(product_id) INNER JOIN customer USING(customer_id) WHERE STATUS='delivered'";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['product']; ?></td>
		<td><img src="<?php echo $row['image']; ?>" height="100" width="100"></td>
		<td><?php echo $row['qun']; ?></td>
		<td><?php echo $row['amou']; ?></td>
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['fname'];echo" ";echo $row['lname']; ?></td>
	</tr>
	<?php } ?>
</table> 

</center>


<?php include 'footer.php' ?>