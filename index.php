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
            <body style="background-color:#70B9B0";>
             <div class="container-fluid" >
                 <div class="row">
                 <div class="col-md-12">
                     
                     <div style="background-color:#4F827C;padding:10px 10px 10px 10px;margin-left:-20px;margin-right:-20px;">
                 <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b>Jaypee Univerisity Of Information Technology</b><br><b>Complaint Registration Portal</b></h2></center> 

                     </div>
                         <br><br> <br><br><br><br>
                 </div>
                 </div>
                 
                 
                 <div class="row">
                     <div class="col-md-4"></div>
                     <div class="col-md-4">
                     
                         <form class="form-horizontal" method="post">
                          <div class="form-group">
                            <label  class="col-sm-3 control-label">Enrollment</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id" placeholder="Enrollment no">
                            </div>
                          </div>
                          <div class="form-group">
                            <label  class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                         <center>    <button type="submit" name="login" class="btn btn-default">Sign in</button>  </center> 
                            </div>
                          </div>
                        </form>
                         
                     </div>
                     <div class="col-md-4"></div>
                     
                     
                </div>
                 
                 
                    
            </div>

<footer class="navbar-fixed-bottom" style="background-color: #4B4C4D; margin-top: 10px;color: #b2b2b1; padding-top: 20px; padding-bottom: 20px;">
			<div class = "col-md-12">
				<center>
				Developed by Web Team, JUIT-IEEE SB
				</center>
			</div>
<br>
<br>
		</footer>
            </body>
        </head>
    </html>

    <?php 
    if (isset($_POST['login'])) {
        $id = $_POST['id'];
        $password = $_POST['password'];
        $password = md5($password);

        $select_login = "select * from users where user_id = '$id' and password = '$password'";
        $result_login = mysql_query($select_login) or die(mysql_error());
        $res_login = mysql_fetch_assoc($result_login);

        if ($res_login) { 
            echo "Login Successful";
            $_SESSION['user-login-id'] = $res_login['user_id'];
            $_SESSION['user-login-name'] = $res_login['name'];
            header('location:complaint-type.php');
         }
        else{
            echo "<script>alert('Incorrect email or password');</script>";
        }
    }
 ?>