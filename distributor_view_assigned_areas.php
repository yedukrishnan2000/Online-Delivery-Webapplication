<?php include 'distributor_header.php';
 ?>
  <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img style="width: 1685px; height:681px;" src="images/odt3.png" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                </div>
            </div>
        </div>
    </div>
</div>
 <center>
<form method="post">
 <h1 style="color: Black">View Profile</h1>
<table class="table" style="width: 800px">
	<tr>
		<th>Sl.no</th>
		<th>Distributor Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Assigned Area</th>
	</tr>
	<?php 
	$q="SELECT * FROM `distributor` INNER JOIN `area` USING(`area_id`) where distributor_id=$des_id";
	$r=select($q);
	$i=1;
	foreach ($r as $row) 
	{
		?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['phone']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['area']; ?></td>
	</tr>
		<?php
	}
	 ?>
</table>  
</form>
</center>

<?php include 'footer.php' ?>