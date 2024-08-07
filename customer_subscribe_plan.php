<?php include 'customer_header.php' ;
if (isset($_POST['pay'])) 
{
	extract($_POST);
	$q1="insert into subscribed values(null,'$sub_id','$cus_id',curdate())";
	$id=insert($q1);
	echo $q="INSERT INTO `payment` VALUES(NULL,'$id','subscribe','$amt',NOW())";
	insert($q);
	alert("Payment success");
	return redirect("customer_view_subscription_plan.php");
}
?>

<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 700px;max-height: 700px;">
                <img src="images/img3.jpg" alt="" style="min-height: 700px;max-height: 700px;">
                <div class="text-content">
                	<center>
<form method="post">
<h1 style="color: white">Make Payments</h1>
<table class="table" style="width: 600px;background-color: rgb(200,100,150,0.4);">
	<tr>
		<th style="color: white">Cardholder Name</th>
		<td><input type="text" required="" name="cn" class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">cvv</th>
		<td><input type="number" required="" min=0 name="cvv" class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">Expiry Date</th>
		<td><input type="date" required="" name="edate" class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">card Number</th>
		<td><input type="number" required="" min=0 name="qua" class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">Amount</th>
		<td><input type="text" name="amt" required="" value="<?php echo $amt ?>" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" class="btn btn-info" name="pay" value="Pay"></td>
	</tr>
</table>	
</form>
</center>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>