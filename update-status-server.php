<?php include 'config.php'; ?>




<?php
	if (isset($_GET['complaint-id'])) 
	{
		$complaint_id = $_GET['complaint-id'];  
	}
?>
<!doctype html>
    <html lang="en">
        <head>
            <title>
               Admin Area / Hostel Complaints - JUIT
            </title>
            <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500italic' rel='stylesheet' type='text/css'>
            </head>
            <body>
             <div class="container-fluid" >
                 <div class="row">
                 <div class="col-md-12">
                     
                     <div style="background-color:#4F827C;padding:10px 10px 10px 10px;margin-left:-20px;margin-right:-20px;">
                 <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><bto-datefrom Complaint Registration Portal</b></h2>
                         <h3 style="font-family: 'Alegreya Sans SC', sans-serif;color:white">Admin Panel</h3>
                         </center> 
                     </div>
                         <br><br> <br><br><br><br>
                 </div>
                 </div>
<div class="container">
<div class="col-md-3"></div>
<div class="col-md-6">
<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Complaint ID</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $complaint_id ?></td>
			<td>
				<!-- <select name="usertype" id="inputUsertype" class="form-control" required="required">
					<option value="user">user</option>
					<option value="admin">admin</option>
				</select> -->
				<form action="" method="post">
					<div class="col-md-12">
						<input type="text" name="update-as-completed" placeholder="Enter Status" class="form-control">
						<br>
						<button type="submit" name="update" class="btn btn-primary">Submit</button>
					</div>
					
				</form>

			</td>
		</tr>
	</tbody>
</table>
</div>
<div class="col-md-3"></div>
</div>


<?php 
	if (isset($_POST['update'])) 
	{
		
		$status = $_POST['update-as-completed'];
		$update = "UPDATE `server-complaints` SET `status` = '$status' where `complaint_id` = '$complaint_id'";
		mysql_query($update);
		header('location:search-dateto-datefrom.php');
	}

	if (isset($_POST['update-as-admin'])) 
	{
		
		$status = "Unavailable";
		$update = "UPDATE `server-complaints` SET `status` = '$status' where `complaint_id` = '$complaint_id'";
		mysql_query($update);
		header('location:search-dateto-datefrom.php');
	}
	if (isset($_POST['update-as-subadmin'])) 
	{
		
		$status = "Invalid Info";
		$update = "UPDATE `server-complaints` SET `status` = '$status' where `complaint_id` = '$complaint_id'";
		mysql_query($update);
		header('location:search-dateto-datefrom.php');
	}
 ?>
 