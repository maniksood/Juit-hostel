<?php include 'config.php'; ?>

 <?php 
 	if (isset($_SESSION['user-login-id']) & isset($_SESSION['user-login-name'])) {
		$id = $_SESSION['user-login-id'];
		$name = $_SESSION['user-login-name'];
	}
	
  ?>


<?php 
	date_default_timezone_set('Asia/Calcutta');
	$date = date("d/m/Y");
 ?>
 <!doctype html>
    <html lang="en">
        <head>
            <title>
                Hostel Complaints - JUIT
            </title>
            <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500italic' rel='stylesheet' type='text/css'>
            </head>
            <body style="background-color:#70B9B0";>
             <div class="container-fluid" >
                 <div class="row">
                 <div class="col-md-12">
                     
                     <div style="background-color:#4F827C;padding:10px 10px 10px 10px;margin-left:-20px;margin-right:-20px;">
                <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b>Jaypee Univerisity Of Information Technology</b><br><b>Complaint Registration Portal</b></h2></center> 

                 

                <div class="row">
                   <div class="col-md-8"></div>
                   <div class="col-md-4">


                 <form action="" method="post">
                 	<button type="submit" class="btn btn-success" name="logout" style="float:right;">Logout</button>
                 </form>
<br>
</div>
</div>
                     
                      
                 </div>
                 </div>
<br><br>

<?php 
	if (isset($_SESSION['user-login-id']) & isset($_SESSION['user-login-name'])) { ?>
		<br><br><div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
<br><br>
	<b>Person Involved  :</b><select name="complaint_to" id="inputComplaint-To" class="form-control" required="required">
 	<option value="Carpenter">Carpenter</option>
 	<option value="Electrician">Electrician</option>
 	<option value="Plumber">Plumber</option>
 	<option value="Painter">Painter</option>
 	<option value="Others">Others</option>
 	</select>
 	<br>
 	<b>Your Complaint :</b><textarea name="complaint" class="form-control" cols="20" rows="10" placeholder="Enter Your Complaint"></textarea><br>
 	<!-- <input type="text" name="complaint" id="inputComplaint" class="form-control" placeholder="Enter Your Complaint" required="required"> -->
 	<br><b>Free Time:</b><input type="text" name="free_time" id="inputFree_time" class="form-control" placeholder="Time You are free at" required="required"><br>
 	<br><b>Phone no (10 digits) :</b><input type="text" name="phone_no" id="inputPhone_no" class="form-control" placeholder="Phone No." required="required"><br>
 	<br><b>Hostel and room no :</b><input type="text" name="room_no" id="inputRoom_no" class="form-control" placeholder="Hostel &amp; Room No." required="required"><br>
 	<br>
	<center><button type="submit" class="btn btn-danger" name="log_complaint">Log Complaint</button></center>
 </form>
 	</div>
 	<div class="col-md-4"></div>
 </div>

 <div class="row">
 	<div class="col-md-2"></div>
 	<div class="col-md-8">
 		<?php  
		 		
				 
		?><br><center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b><u>Complaints History</u></b></h2></center>
<br><br><hr align="center" bgcolor:"white">
		<div class="table-responsive">
			<table class="table table-hover">
				<thead>
					<tr>
						<th><center>Complaint No.</center></th>
						<th><center>Complaint</center></th>
						<th><center>Status</center></th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$select = "select * from complaints where user_id = '$id' order by complaint_id desc";
						$result = mysql_query($select);
						while ($res = mysql_fetch_assoc($result)) { ?>
							<tr>
								<td><center><?php echo $res['complaint_id'] ?></center></td>
								<td><center><?php echo $res['complaint'] ?></center></td>
								<td><center><?php echo $res['status'] ?></center></td>
							</tr>
						<?php  }
					 ?>
				</tbody>
			</table>
		</div>
 	</div>
 	<div class="col-md-2"></div>
 </div>
	<?php }else{ ?>
		<div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<center><h2>Please <a href="index.php">Login</a> to register a complaint.</h2></center>
 	</div>
 	<div class="col-md-4"></div>
 </div>
	<?php }
 ?>
 

<?php 
	

	if (isset($_POST['log_complaint'])) {
		$complaint = $_POST['complaint'];
		$free_time = $_POST['free_time'];
		$phone_no = $_POST['phone_no'];
		$room_no = $_POST['room_no'];
		$complaint_to = $_POST['complaint_to'];
		mysql_query("INSERT INTO `complaints`(`complaint_id`,`date`, `user_id`, `name`, `complaint`, `complaint_to`, `free_time`, `phone_no`, `room_no`, `status`) VALUES ('','$date','$id','$name','$complaint','$complaint_to','$free_time','$phone_no','$room_no','Pending')");
		$select2 = "select * from complaints NATURAL JOIN users where user_id = '$id' order by complaint_id desc";
		$result2 = mysql_query($select2);
		$res2 = mysql_fetch_assoc($result2);
		mail($res2['email'],"Complaint registered successfully","This is a system generated email. Please do not reply.\r\n\n\nThis is to confirm that your complaint has been successfully registered. The details of the same are given below\r\n\nComplaint Number:".$res2['complaint_id']."\r\nComplaint:".$res2['complaint']."\r\nDate:".$res2['date']."\r\n\nThank You"." ".$res2['name']." "."for using this service. You can track this status of your complaint by logging in to the complaint portal" ,"From: noreply@juit.ac.in\n");
		// echo "<script type='text/javascript'>";
		// echo "alert('Complaint Lodged Successfully')";
		// echo "</script>";
		
		header("location:complaint.php");
		echo "Complaint Lodged Successfully";

			}
		// header("location:complaint.php")
 ?>

<?php 
	if (isset($_POST['logout'])) {
		session_unset($_SESSION['user-login-id']);
	 	session_unset($_SESSION['user-login-name']);
	 	header("location:index.php");
	}
 ?>
<footer class="navbar-static-bottom" style="background-color: #4B4C4D; margin-top: 10px;color: #b2b2b1; padding-top: 20px; padding-bottom: 20px;">
			<div class = "col-md-12">
				<center>
				Developed by Web Team, JUIT-IEEE SB
				</center>
			</div>
<br><br>
		</footer>
 <?php 