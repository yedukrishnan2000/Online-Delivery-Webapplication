<?php include 'customer_header.php' ;
?>

 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odt1.png" alt="" style="min-height: 500px;max-height: 800px;">
                <div class="text-content">
                
                	<h1 style="color:firebrick;font-family: Garamond, serif;">Your Previous Orders </h1>
 </div>
            </div>
        </div>
    </div>
</div>
<center>


	
	<?php 
	$q="SELECT *,`order_detail`.`quantity` AS qun,`order_detail`.`amount` AS amou FROM order_detail INNER JOIN `order_master` USING(`omaster_id`) INNER JOIN `product` USING(product_id) WHERE customer_id='$cus_id' AND STATUS='delivered'";
	$r=select($q);
	if ($r) 
	{

		$total=$r[0]['total'];
	// echo $total;
	$i=1;
	?>

	<table border="5" class="table" style="width: 600px;background-color: rgba(180,150,0,0.5);">


	<tr>
		<th style="color: white"></th>
		<th style="color: white">Product</th>
		<th style="color: white">Image</th>
		<th style="color: white">Quantity</th>
		<th style="color: white">Amount</th>
		<th style="color: white">Status</th>
		<th style="color: white">Delivered Date</th>

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
		<td><?php echo "Delivered" ; ?></td>
		<td><?php echo $row['date']; ?></td>
	</tr>
	
		<?php
	}
	 ?>
	 
	
	<?php }

	else {
		?>
		<h1 style="color:firebrick;font-family: Garamond, serif;">You Have no Current Orders </h1>
	 	<?php  
	 } ?>
</table> 
</center>


               

<?php include 'footer.php' ?>