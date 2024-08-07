<?php include 'public_header.php' ;


if(isset($_POST['login']))
{
	extract($_POST);
	$q="select * from login where username='$un' and password='$pass'";
	$res=select($q);
	if (sizeof($res)>0) 
	{
		$_SESSION['logid']=$res[0]['login_id'];
		$logid=$_SESSION['logid'];
		echo $logid;
		if($res[0]['usertype']=="admin")
		{
			//alert("login successfully");
			return redirect("adminhome.php");
		}
		else if($res[0]['usertype']=="distributor")
		{
			$q="select * from distributor where login_id='$logid'";
			$r=select($q);
			if (sizeof($r)>0) 
			{
				$_SESSION['desid']=$r[0]['distributor_id'];
				$des_id=$_SESSION['desid'];
			}
			//alert("login successfully");
			return redirect("distributor_home.php");
		}
		else if($res[0]['usertype']=="customer")
		{
			echo $q="select * from customer where login_id='$logid'";
			$r=select($q);
			if (sizeof($r)>0) 
			{
				$_SESSION['cus_id']=$r[0]['customer_id'];
				$cus_id=$_SESSION['cus_id'];
				echo $cus_id;
			}
			//alert("login successfully");
			return redirect("customer_home.php");
		}
	 }
	 else
	 {
	 	alert("invalid username or password");
	 }
}
?>

<!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="images/odtskyblue.png" alt="" style="min-height: 500px;max-height: 800px;">
                <div class="text-content">
               
                 <center>
<form method="post">
	<h1 style="color: white">Login Form</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,100,100,0.2);">
		<tr>
			<th style="color: white">User Name</th>
			<td><input type="text" name="un" class="form-control" required="" style="width: 400px"></td>
		</tr>
		<tr>
			<th style="color: white">Password</th>
			<td><input type="password" name="pass" class="form-control" required="" style="width: 400px"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="login" value="login" class="btn btn-success"></td>
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