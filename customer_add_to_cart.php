<?php include 'customer_header.php';


if (isset($_POST['add'])) 
{
	extract($_POST);
	
	 $q1="SELECT * FROM `order_master` WHERE `customer_id`='$cus_id' AND `status`='pending'";
		$res1=select($q1);
		if(sizeof($res1)==0)
		{
	
	 $query="INSERT INTO `order_master` VALUES(NULL,'$cus_id','$total',CURDATE(),'pending')";
			$id=insert($query);
			// echo $id;
		}

		else{
			$id=$res1[0]['omaster_id'];
			$tamt=$res1[0]['total'];
		}
		echo $id;
			$q2="SELECT * FROM `order_detail` WHERE `omaster_id`='$id' AND `product_id`='$proid'";
			$res2=select($q2);
			if(sizeof($res2)>0)
			{
				$quantity=$qua+$res2[0]['quantity'];
				echo $quantity;
				$amount=$res2[0]['amount'];
				$q="update order_master set total='$total' where omaster_id='$id'";
				$iid=update($q);
				$q1="update order_detail set amount=$amount+'$total',quantity='$quantity' where product_id='$proid'";
				update($q1);
				
			}
			else
			{


			$query="INSERT INTO `order_detail` VALUES(NULL,'$id','$proid','$total','$qua')";
				$ids=insert($query);
				$ids;
				alert("Added Successfull");


			}
		 $q3="UPDATE `order_master` SET total=(select sum(amount) from order_detail where omaster_id='$id') WHERE `omaster_id`='$id'";
		update($q3);
		return redirect("customer_view_products_category.php");
		
}
		

 ?>
<script type="text/javascript">
 	function TestOnTextChange()
 	{

 		var a= document.getElementById("amt").value;
 		var b= document.getElementById("qua").value;
 		var c=document.getElementById("quantity").value;
 		if (parseInt(c)>=parseInt(b)){
 			var s=parseInt(a)*parseInt(b)
 		}else{
 			alert("please select less quantity ");
 		}

 		document.getElementById("total").value=s;
 	
 		
 	}
 </script>
 <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img3.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">

                	<center>
                	<form method="post">
 
    <h1 style="color: white">Add to Cart</h1>
	<table class="table" style="width: 600px;background-color: rgb(200,150,100,0.4);">
		<tr>
		<th style="color: white">Amount</th>
		<td><input type="text" name="amt" id="amt" value="<?php echo $amt ?>" class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">Available Quantity</th>
		<td><input type="text" name="quan" class="form-control" value="<?php echo $quan ?>" id="quantity"></td>
	</tr>
	<tr>
		<th style="color: white">Quantity</th>

		<td><input type="text" name="qua" onchange="TestOnTextChange()" id=qua class="form-control"></td>
	</tr>
	<tr>
		<th style="color: white">Total</th>
		<td><input type="number" min=0 name="total" id=total class="form-control"></td>
	</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="add" value="ADD" class="btn btn-info"></td>
		</tr>
	</table>
</center>
                </div>
            </div>
        </div>
    </div>
</div>



               



<?php include 'footer.php' ?>