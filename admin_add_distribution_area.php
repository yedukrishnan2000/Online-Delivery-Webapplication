<?php include 'admin_header.php';

if (isset($_POST['add'])) 
{
	extract($_POST);
		$q2="INSERT INTO `area` VALUES(NULL,'$area')";
		insert($q2);
		alert("add successfully.....!");
		return redirect("admin_add_distribution_area.php");
}
 ?>

  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odtskyblue.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">

                	<center>
<form method="post">

                   
	<!--<h1 style="color: white">Add Distribution Area</h1> -->
	<table class="table" style="width: 500px;background-color: rgb(200,100,100,0.8);">
		<tr>
			<th>Area</th>
			<td><input type="text" name="area" required="" class="form-control"></td>
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
 <h1>Add Area</h1>
<table class="table" style="width: 400px">
	<tr>
		<th>Sl.no</th>
		<th>Area</th>
	</tr>
	<?php 
	$q="SELECT * FROM area";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['area'] ?></td>
	</tr>
		<?php
	}
	 ?>
</table> 
</form>
</center>  


<?php include 'footer.php' ?>