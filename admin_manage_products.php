<?php include 'admin_header.php';
 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img2.jpeg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: Black">View Products and Category</h1>
<table class="table" style="width: 700px">
	<tr>
		<th>Sl.no</th>
		<th>Category</th>
		<th>Product</th>
		<th>Image</th>
		<th>Quantity</th>
		<th>Rate</th>
	</tr>
	<?php 
	$q="SELECT * FROM category INNER JOIN `product` USING(`category_id`)";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['category']; ?></td>
		<td><?php echo $row['product']; ?></td>
		<td><img src="<?php echo $row['image']; ?>" width="100" height="100"></td>
		<td><?php echo $row['quantity']; ?></td>
		<td><?php echo $row['rate'] ?></td>
		<td><a class="btn btn-primary" href="admin_add_stocks.php?pro_id=<?php echo $row['product_id'] ?>">Add Stocks</a></td>
	</tr>
		<?php
	}
	 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>