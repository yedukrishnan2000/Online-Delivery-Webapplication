<?php include 'public_header.php';

if (isset($_POST['register'])) 
{
	extract($_POST);
	if($passs==$pass)
	{
		echo $q="insert into login values(null,'$un','$pass','customer')";
		$id=insert($q);
		echo $q2="INSERT INTO `customer` VALUES(NULL,'$id','$aid','$fn','$ln','$pl','$ph','$em')";
		insert($q2);
		alert("registered successfully.....!");
		return redirect("login.php");
	}else{
		alert("Password and Confirm Password are not same");
	}
}
 ?>

<!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="height: 1000px;">
                <img src="images/regbg2.jpg" alt="" style="height: 1000px;">
                <div class="text-content">
               
                  <center>
<form method="post">
	<h1 style="color: white">Customer Registration</h1>
	<table class="table" style="width: 700px;background-color: rgb(200,100,100,0.5);">
		<tr>
			<th style="color: white">Select Area</th>
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
			<th style="color: white">First Name</th>
			<td><input type="text" name="fn" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Last Name</th>
			<td><input type="text" name="ln" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Place</th>
			<td><input type="text" name="pl" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Phone</th>
			<td><input type="text" name="ph" required="" pattern="[0-9]{10}" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Email</th>
			<td><input type="email" name="em" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">User Name</th>
			<td><input type="text" name="un" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Password</th>
			<td><input type="password" name="pass" required="" class="form-control"></td>
		</tr>
		<tr>
			<th style="color: white">Confirm Password</th>
			<td><input type="password" name="passs" required="" class="form-control"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="register" value="register" class="btn btn-info"></td>
		</tr>
	</table>
</form>
</center>
                 
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
                
             

<?php include 'footer.php' ?>