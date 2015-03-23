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


      <div class="container">
      	<!-- Nav tabs -->
<br><br>
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" style="color:grey;" aria-controls="home" role="tab" data-toggle="tab">Cyberoam Password Reset</a></li>
    <li role="presentation"><a href="#profile" style="color:grey;" aria-controls="profile" role="tab" data-toggle="tab">Lan Port Complaints</a></li>    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">  
        
               <div class="container">
            <div class="row"><br><br>
                <?php 
	if (isset($_SESSION['user-login-id']) & isset($_SESSION['user-login-name'])) { ?>
		<div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
 	<!-- <textarea name="complaint" class="form-control" cols="20" rows="10" placeholder="Enter Your Complaint"></textarea><br> -->
 	<!-- <input type="text" name="complaint" id="inputComplaint" class="form-control" placeholder="Enter Your Complaint" required="required"> -->
 	<!-- <input type="text" name="free_time" id="inputFree_time" class="form-control" placeholder="Time You are free at" required="required"><br> -->
 	<!-- <input type="text" name="phone_no" id="inputPhone_no" class="form-control" placeholder="Phone No." required="required"><br> -->
 	<!-- <input type="text" name="room_no" id="inputRoom_no" class="form-control" placeholder="Hostel &amp; Room No." required="required"><br> -->
 	<p><center>Log Complaint for : <b><?php echo $id ?></b></center></p>
 	<br>
	<center><button type="submit" class="btn btn-danger" name="log_complaint_cyberoam">Log Complaint</button></center>
	<br><br><hr align="center" bgcolor:"white">

 </form>
 	</div>
 	<div class="col-md-4"></div>
 </div>

 <div class="row">
 	<div class="col-md-2"></div>
 	<div class="col-md-8">
<center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b><u>Complaints History</u></b></h2></center>
 		<?php  
		 		
				 
		?>
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
						$select = "SELECT * FROM `server-complaints` WHERE user_id = '$id' order by complaint_id desc";
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
	

	if (isset($_POST['log_complaint_cyberoam'])) {
		$complaint = $_POST['complaint'];
		$free_time = $_POST['free_time'];
		$phone_no = $_POST['phone_no'];
		$room_no = $_POST['room_no'];
		mysql_query("INSERT INTO `server-complaints`(`complaint_id`,`date`, `user_id`, `name`, `complaint`, `free_time`, `phone_no`, `room_no`, `status`) VALUES ('','$date','$id','$name','Password Reset','','','','Pending')");
		$select2 = "select * from `server-complaints` NATURAL JOIN `users` where `user_id` = '$id' order by `complaint_id` desc";
		$result2 = mysql_query($select2);
		$res2 = mysql_fetch_assoc($result2);
		mail($res2['email'],"Complaint registered successfully","This is a system generated email. Please do not reply.\r\n\n\nThis is to confirm that your complaint has been successfully registered. The details of the same are given below\r\n\nComplaint Number:".$res2['complaint_id']."\r\nComplaint:".$res2['complaint']."\r\nDate:".$res2['date']."\r\n\nThank You"." ".$res2['name']." "."for using this service. You can track this status of your complaint by logging in to the complaint portal" ,"From: noreply@juit.ac.in\n");
		header("location:server-complaint.php");
			}
		// header("location:complaint.php")
 ?>
            </div>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      
       <div class="container">
            <div class="row"><br><br>
                <?php 
	if (isset($_SESSION['user-login-id']) & isset($_SESSION['user-login-name'])) { ?>
		<div class="row">
 	<div class="col-md-4"></div>
 	<div class="col-md-4">
 		<form action="" method="post">
 	<textarea name="complaint" class="form-control" cols="20" rows="10" placeholder="Enter Your Complaint"></textarea><br>
 	<!-- <input type="text" name="complaint" id="inputComplaint" class="form-control" placeholder="Enter Your Complaint" required="required"> -->
 	<input type="text" name="free_time" id="inputFree_time" class="form-control" placeholder="Time You are free at" required="required"><br>
 	<input type="text" name="phone_no" id="inputPhone_no" class="form-control" placeholder="Phone No." required="required"><br>
 	<input type="text" name="room_no" id="inputRoom_no" class="form-control" placeholder="Hostel &amp; Room No." required="required"><br>
 	<br>
	<button type="submit" class="btn btn-primary" name="log_complaint_lan">Log Complaint</button><br><br><br><br>
 </form>
 	</div>
 	<div class="col-md-4"></div>
 </div>

 <div class="row">
 	<div class="col-md-2"></div>
 	<div class="col-md-8">
 		<?php  
		 		
				 
		?>
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
						$select = "SELECT * FROM `server-complaints` WHERE user_id = '$id' order by complaint_id desc";
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
	

	if (isset($_POST['log_complaint_lan'])) {
		$complaint = $_POST['complaint'];
		$free_time = $_POST['free_time'];
		$phone_no = $_POST['phone_no'];
		$room_no = $_POST['room_no'];
		mysql_query("INSERT INTO `server-complaints`(`complaint_id`,`date`, `user_id`, `name`, `complaint`, `free_time`, `phone_no`, `room_no`, `status`) VALUES ('','$date','$id','$name','$complaint','$free_time','$phone_no','$room_no','Pending')");
		$select2 = "select * from `server-complaints` NATURAL JOIN `users` where `user_id` = '$id' order by `complaint_id` desc";
		$result2 = mysql_query($select2);
		$res2 = mysql_fetch_assoc($result2);
		mail($res2['email'],"Complaint registered successfully","This is a system generated email. Please do not reply.\r\n\n\nThis is to confirm that your complaint has been successfully registered. The details of the same are given below\r\n\nComplaint Number:".$res2['complaint_id']."\r\nComplaint:".$res2['complaint']."\r\nDate:".$res2['date']."\r\n\nThank You"." ".$res2['name']." "."for using this service. You can track this status of your complaint by logging in to the complaint portal" ,"From: noreply@juit.ac.in\n");
		header("location:server-complaint.php");
			}
		// header("location:complaint.php")
 ?>
            </div>
        </div>
      
      </div>
      </div>
</div>
<footer class="navbar-static-bottom" style="background-color: #4B4C4D; margin-top: 10px;color: #b2b2b1; padding-top: 20px; padding-bottom: 20px;">
			<div class = "col-md-12">
				<center>
				Developed by Web Team, JUIT-IEEE SB
				</center>
			</div>
<br>
		</footer>
 <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "js/bootstrap.js"></script>
<?php 
	if (isset($_POST['logout'])) {
		session_unset($_SESSION['user-login-id']);
	 	session_unset($_SESSION['user-login-name']);
	 	header("location:index.php");
	}
 ?>







