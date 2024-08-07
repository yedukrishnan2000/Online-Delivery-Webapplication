<?php include 'admin_header.php';


if (isset($_POST['add'])) 
{
	extract($_POST);
	$dir = "images/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
	echo $q2="INSERT INTO `product` VALUES(NULL,'$cat_id','$pro','$target','$qun','$rate')";
		insert($q2);
		alert("add successfully.....!");
		return redirect("admin_add_products.php?cat_id=$cat_id");
	}
		else
		{
			echo "file uploading error occured";
		}

}

 ?>
 
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img3.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                	<form method="post" enctype="multipart/form-data">

       <center>            
	<h1 style="color: white">Add Products</h1>
	<table class="table" style="width: 600px;background: rgb(200,200,100,0.4);">
		<tr>
			<th>Product</th>
			<td><input type="text" name="pro" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>Image</th>
			<td><input type="file" name="img" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>Quantity</th>
			<td><input type="text" name="qun" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>Rate</th>
			<td><input type="text" name="rate" required="" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="add" value="ADD" class="btn btn-info"></td>
		</tr>
	</table>
                </div>
            </div>
        </div>
    </div>
</div>

           
  <center>
 <h1>Add Products</h1>
<table class="table" style="width: 600px;">
	<tr>
		<th>Sl.no</th>
		<th>Product</th>
		<th>Image</th>
		<th>Quantity</th>
		<th>Rate</th>
	</tr>
	<?php 
	$q="SELECT * FROM product where category_id='$cat_id'";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['product'] ?></td>
		<td><a class="btn btn-info" href="<?php echo $row['image'] ?>">click</a></td>
		<td><?php echo $row['quantity'] ?></td>
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