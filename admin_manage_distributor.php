<?php include 'admin_header.php';

if (isset($_POST['manage'])) 
{
	extract($_POST);
	$q1="insert into login values(null,'$un','$pass','distributor')";
	$id=insert($q1);
	echo $q2="INSERT INTO `distributor` VALUES(NULL,'$id','$aid','$nm','$ph','$em')";
	insert($q2);
	alert("add successfully.....!");
	return redirect("admin_manage_distributor.php");
}

if(isset($_POST['update']))
{
	extract($_POST);
	echo $qr1="update distributor set name='$nm',phone='$ph',email='$em' where distributor_id='$upid'";
	update($qr1);
	alert("Updated Successfull");
	return redirect("admin_manage_distributor.php");
}

if(isset($_GET['deid']))
{
	$qq="delete from distributor where login_id='$deid'";
	delete($qq);
	$q1="delete from login where login_id='$deid'";
	delete($q1);
	alert("Deleted.....!");
	return redirect("admin_manage_distributor.php");
}

 ?>
 <center>
<form method="post">
 
 <?php
if(isset($_GET['upid']))
{
	$q="select * from distributor where distributor_id='$upid' ";
	$res1=select($q);
?>   
       
       <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
          <div class="img-fill" style="min-height: 600px;max-height: 600px;">
                <img src="images/odtlemon.png" alt="" style="min-height: 600px;max-height: 800px;">
                <div class="text-content">
               
                  <center>    
                <h1 style="color: white">Update Distributor</h1>
<table class="table" style="width: 500px;background-color: rgb(200,150,100,0.4);">

	<tr>
		<th>Name</th>
		<td><input type="text" value="<?php echo $res1[0]['name'] ?>" required="" name="nm" class="form-control"></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td><input type="text" value="<?php echo $res1[0]['phone'] ?>" required="" name="ph" class="form-control"></td>
	</tr>
	<tr>
		<th>Email</th>
		<td><input type="text" value="<?php echo $res1[0]['email'] ?>"  required="" name="em" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" class="btn btn-info" name="update" value="Update"></td>
	</tr>
</table> 
                 
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
                
               
               


 <?php
}
else
{
?>  

 <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
           <div class="img-fill" style="min-height: 600px;max-height: 600px;">
                <img src="images/img3.jpg" alt="" style="min-height: 600px;max-height: 600px;">
                <div class="text-content">
                <center>
                <h1 style="color: white">Manage Distributor</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,150,100,0.4);">
	<tr>
			<th>Select Area</th>
			<td>
				<select name="aid" class="form-control">
					<option>select area</option>
					<?php 
					$q="select * from area";
					$res=select($q);
					foreach ($res as $row) 
					{
						?>
					<option value="<?php echo $row['area_id'] ?>"><?php echo $row['area'] ?></option>
						<?php
					}
					 ?>
				</select>
			</td>
		</tr>
	<tr>
		<th>Name</th>
		<td><input type="text" required="" name="nm" class="form-control"></td>
	</tr>
	<tr>
		<th>Phone</th>
		<td><input type="text" required="" name="ph" class="form-control"></td>
	</tr>
	<tr>
		<th>Email</th>
		<td><input type="text" name="em" required class="form-control"></td>
	</tr>
	<tr>
		<th>User Name</th>
		<td><input type="text" required="" name="un" class="form-control"></td>
	</tr>
	<tr>
		<th>Password</th>
		<td><input type="text" required="" name="pass" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="manage" class="btn btn-info" value="Manage"></td>
	</tr>
	</table>
</center>
                 
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
                
               
               
  <?php }
?> 
	 <h1>View Distributor</h1>
<table class="table" style="width: 600px;">
	<tr>
		<th>Sl.no</th>
		<th>Area</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>
	<?php 
	$q="SELECT * FROM distributor INNER JOIN `area` USING(area_id)";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['area'] ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><a class="btn btn-info" href="?upid=<?php echo $row['distributor_id']; ?>">Update</td>
 		<td><a class="btn btn-info" href="?deid=<?php echo $row['login_id']; ?>">Delete</td> 

	</tr>
		<?php
	}
	 ?>
</table>   
</form>
</center> 


<?php include 'footer.php' ?>