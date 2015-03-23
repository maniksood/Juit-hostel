<?php include 'config.php'; ?>

<!doctype html>
    <html lang="en">
        <head>
            <title>
               Admin Area / Server Complaints - JUIT
            </title>
            <link type="text/css" href="css/bootstrap.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,500italic' rel='stylesheet' type='text/css'>
            </head>
            <body >
             <div class="container-fluid" >
                 <div class="row">
                 <div class="col-md-12">
                     
                     <div style="background-color:#4F827C;padding:10px 10px 10px 10px;margin-left:-20px;margin-right:-20px;">
                 <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b>Server Complaint Registration Portal</b></h2>
                         <h3 style="font-family: 'Alegreya Sans SC', sans-serif;color:white">Admin Panel</h3>
                         </center> 
                     </div>
                         <br>
                 </div>
                 </div>
                 
                 <?php 
                      if (isset($_SESSION['admin'])) { ?>
                        <center><h3>Search by:</h3></center>
                 
               <div class="container">
            <div class="row"><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                         <form class="form-horizontal" method="post" action="">
                          <div class="form-group">
                            <label  class="col-sm-2 control-label">From Date</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="datefrom" placeholder="Date From">
                            </div>
                          </div>
                             
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">To Hostel</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="dateto" placeholder="Date To">
                            </div>
                          </div>
                          
                         
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                         <center>    <button type="submit" name="search-dateto-datefrom" class="btn btn-default">Show Records</button>  </center> 
                            </div>
                          </div>
                        </form> 
                 </div>
                <div class="col-md-4"></div>
            </div>
        </div>
                 <?php  }
                  ?>
       <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "js/bootstrap.js"></script>
            </body>
        </head>
    </html>
                   


<?php 
    

    if (isset($_POST['search-dateto-datefrom'])) {
      $_SESSION['datefrom'] = $_POST['datefrom'];
      $_SESSION['dateto'] = $_POST['dateto'];
        header("location:search-dateto-datefrom.php");
    }


 ?>