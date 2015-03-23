<?php include 'config.php'; ?>

<!doctype html>
    <html lang="en">
        <head>
            <title>
                Hostel Complaints - JUIT
            </title>
            <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500italic' rel='stylesheet' type='text/css'>
            </head>
            <body>
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
                 <div class="row" style="border-top:20px;"><br><br>
                     <center>
<br><br>
                         <h1 >Select Type Of Complaint</h1>
                         <br>
                     </center>
                 </div>
                 
                 <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                     
 <table class="table table-bordered table-hover">
 <form action="" method="post">
        <tr>
            <th>Maintainance</th>
            <td>
                <div class="col-md-4">
                    <a href="complaint.php" name="update-as-completed" class="btn btn-large btn-success">Log Complaint</a>
                </div>
            </td>
        </tr>
        <tr>
            <th>Disciplinary Complaint</th>
            <td>
                <div class="col-md-4">
                    <a href="warden-complaint.php" name="update-as-subadmin" class="btn btn-large btn-success">Log Complaint</a>
                </div>
            </td>
        </tr>
        <tr>
            <th>Server Room Complaints</th>
            <td>
                <div class="col-md-4">
                    <a href="server-complaint.php" name="update-as-admin" class="btn btn-large btn-success">Log Complaint</a>
                </div>
            </td>
        </tr>
    </form>
</table>
                         
                     </div>
                     <div class="col-md-4"></div>
                     
                     
                </div>
                 
                 
                    
            </div>
            </body>
        </head>
    </html>

    <?php 
    if (isset($_POST['login'])) {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $password = md5($password);

        $select_login = "select * from users where id = '$id' and password = '$password'";
        $result_login = mysql_query($select_login) or die(mysql_error());
        $res_login = mysql_fetch_assoc($result_login);

        if ($res_login) { 
            echo "Login Successful";
            $_SESSION['user-login-id'] = $res_login['id'];
            $_SESSION['user-login-name'] = $res_login['name'];
            header('location:complaint.php');
         }
        else{
            echo "<script>alert('Incorrect email or password');</script>";
        }
    }
 ?>


<?php 
	if (isset($_POST['logout'])) {
		session_unset($_SESSION['user-login-id']);
	 	session_unset($_SESSION['user-login-name']);
	 	header("location:index.php");
	}
 ?>
<footer class="navbar-fixed-bottom" style="background-color: #4B4C4D; margin-top: 10px;color: #b2b2b1; padding-top: 20px; padding-bottom: 20px;">
			<div class = "col-md-12">
				<center>
				Developed by Web Team, JUIT-IEEE SB
				</center>
			</div>
<br>
		</footer>
 <?php 
