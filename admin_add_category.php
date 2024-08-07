<?php include 'admin_header.php';

if (isset($_POST['add'])) 
{
	extract($_POST);
		$q2="INSERT INTO `category` VALUES(NULL,'$cat')";
		insert($q2);
		alert("add successfully.....!");
		return redirect("admin_add_category.php");
}
 ?>
 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img2.jpeg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                	<center>
<form method="post">

                   
	<h1 style="color: white">Add Category</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,100,100,0.3);">
		<tr>
			<th style="color: white">Category</th>
			<td><input type="text" name="cat" required="" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="add" value="ADD" class="btn btn-info"></td>
		</tr>
	</table>
           
  <center>
                </div>
            </div>
        </div>
    </div>
</div>
<center>
 <h1>Add Category</h1>
<table class="table" style="width: 600px;">
	<tr>
		<th>Sl.no</th>
		<th>Category</th>
	</tr>
	<?php 
	$q="SELECT * FROM category";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['category'] ?></td>
		<td><a class="btn btn-success" href="admin_add_products.php?cat_id=<?php echo $row['category_id'] ?>">Add Product</a></td>
	</tr>
		<?php
	}
	 ?>
</table> 
</form>
</center>  


<?php include 'footer.php' ?>