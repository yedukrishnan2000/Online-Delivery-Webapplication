<?php include 'distributor_header.php';
extract($_GET);
$q2="SELECT * from order_master where customer_id='$sub_id'";
$r2=select($q2);
foreach($r2 as $row)
{
$om=$row['omaster_id'];
}
if(isset($_POST['comp']))
{
  $q1="UPDATE order_master SET status='delivered' where customer_id='$sub_id'";
  update($q1);
  //$q3="DELETE from order_detail where omaster_id='$om'";
  //delete($q3);
  return redirect('distributor_view_customers_details.php');
}
 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/odtmaroon.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: Black">View Customer Details</h1>
 <table class="table" style="width: 700px"><tr>
    
    <th>Customer</th>
    <th>Area</th>
    <th>Place</th>
    <th>Phone</th>
    <th>Email</th>
  </tr>
  <?php 
  $q="SELECT * FROM `customer` INNER JOIN `area` USING(`area_id`) where customer_id='$sub_id'";
  $r=select($q);
  
  foreach ($r as $row) 
  {
    ?>
  <tr>
    
    <td><?php echo $row['fname']; ?>&nbsp;<?php echo $row['lname']; ?></td>
    <td><?php echo $row['area']; ?></td>
    <td><?php echo $row['place']; ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['email'] ?></td>
  </tr>
    <?php
  }
   ?>
   <tr><td><input type="submit" name="comp" value="Complete Order" class="btn btn-success"></td></tr>
</table>  
</form>
</center>

<?php include 'footer.php' ?>