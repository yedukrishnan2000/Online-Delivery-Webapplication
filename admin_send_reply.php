<?php include 'admin_header.php';

if (isset($_POST['send'])) 
{
	extract($_POST);
	$q1="UPDATE complaint SET `reply`='$reply' WHERE complaint_id='$cmpid'";
	update($q1);
	alert("update successfully");
	return redirect("admin_view_complaints.php");
}


 ?>
<div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill" style="min-height: 500px;max-height: 500px;">
                <img src="images/img1.jpg" alt="" style="min-height: 500px;max-height: 500px;">
                <div class="text-content">
                	    <center>
<form method="post">
<h1 style="color: white">Send Reply</h1>
<table class="table" style="width: 600px;background-color: rgb(200,100,100,0.7);">
	<tr>
		<th>Reply</th>
		<td><input type="text" required="" name="reply" class="form-control"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" class="btn btn-success" name="send" value="SEND"></td>
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