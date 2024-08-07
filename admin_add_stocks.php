<?php include 'admin_header.php';
extract($_GET);

if (isset($_POST['add'])) 
{
	extract($_POST);
	$s="SELECT *from stock where product_id='$pro_id'";
$res=select($s);
if (sizeof($res)>0)
{
	$u="UPDATE stock set stock=stock+'$st',`date`=curdate() where product_id='$pro_id'";
	update($u);
	alert("updated");
	//return redirect ("adminmanagecategory.php");

}
else
{

echo $q="INSERT into stock values(null,'$pro_id','$st',curdate())";
$r=insert($q);
alert("added successfully");

}
return redirect("admin_add_stocks.php?pro_id=$pro_id");
}
	
 ?>
 
<form method="post">

    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img3.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                	<center>
                	<h1 style="color: white">Add Stock</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,200,100,0.3);">
		<tr>
			<th style="color: white">Quantity</th>
			<td><input type="text" name="st" required="" class="form-control"></td>
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
 <h1>View Stock</h1>
<table class="table" style="width: 500px;">
	<tr>
		<th>Sl.no</th>
		<th>Quantity</th>
		<th>Date</th>
	</tr>
	<?php 
	$q="SELECT * FROM stock where product_id='$pro_id'";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['stock'] ?></td>
		<td><?php echo $row['date'] ?></td>
	</tr>
		<?php
	}
	 ?>
</table> 
</form>
</center>  


<?php include 'footer.php' ?>