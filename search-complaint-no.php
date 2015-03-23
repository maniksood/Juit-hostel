<?php include 'config.php'; ?>

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
                 <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b>Hostel Complaint Registration Portal</b></h2>
                         <h3 style="font-family: 'Alegreya Sans SC', sans-serif;color:white">Admin Panel</h3>
                         </center> 
                     </div>
                         <br><br> <br><br><br><br>
                 </div>
                 </div>
                 
                 
                 <div class="row">
                     <div class="container">
                         <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><center>Complaint ID</center></th>
                        <th><center>Date</center></th>
                        <th><center>User Id</center></th>
                        <th><center>Name</center></th>
                        <th><center>Complaint</center></th>
                        <th><center>Complaint To</center></th>
                        <th><center>Free Time</center></th>
                        <th><center>Phone No.</center></th>
                        <th><center>Hostel</center></th>
                        <th><center>Status</center></th>
                        <th><center>Change Status</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $complaint_no = $_SESSION['complaint_no'];
                        $select = "select * from complaints where complaint_id = '$complaint_no'";
                        $result = mysql_query($select);
                        while ($res = mysql_fetch_assoc($result)) { ?>
                            <tr>
                                <td><center><?php echo $res['complaint_id'] ?></center></td>
                                <td><center><?php echo $res['date'] ?></center></td>
                                <td><center><?php echo $res['user_id'] ?></center></td>
                                <td><center><?php echo $res['name'] ?></center></td>
                                <td><center><?php echo $res['complaint'] ?></center></td>
                                <td><center><?php echo $res['complaint_to'] ?></center></td>
                                <td><center><?php echo $res['free_time'] ?></center></td>
                                <td><center><?php echo $res['phone_no'] ?></center></td>
                                <td><center><?php echo $res['room_no'] ?></center></td>
                                <td><center><?php echo $res['status'] ?></center></td>
                                <td><center><a href="update-status-complaint-no.php?complaint-id=<?php echo $res['complaint_id'] ?>"><button type="button" class="btn btn-success">Update-Status</button></a></center></td>
                            </tr>
                        <?php  }
                     ?>
                </tbody>
            </table>
        </div>
                     </div>
                     
                     
                </div>
                 
                 
                    
            </div>
            </body>
        </head>
    </html>


