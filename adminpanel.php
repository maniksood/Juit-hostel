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
            <body >
             <div class="container-fluid" >
                 <div class="row">
                 <div class="col-md-12">
                     
                     <div style="background-color:#4F827C;padding:10px 10px 10px 10px;margin-left:-20px;margin-right:-20px;">
                 <center><h2 style="font-family: 'Alegreya Sans SC', sans-serif;color:white"><b>Hostel Complaint Registration Portal</b></h2>
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
                 <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" style="color:grey;" aria-controls="home" role="tab" data-toggle="tab">Date</a></li>
    <li role="presentation"><a href="#profile" style="color:grey;" aria-controls="profile" role="tab" data-toggle="tab">Date and Hostel</a></li>
    <li role="presentation"><a href="#messages" style="color:grey;" aria-controls="messages" role="tab" data-toggle="tab">Complaint no</a></li>
    
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">  
        
        <div class="container">
            <div class="row"><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                         <form class="form-horizontal" method="post" action="">
                          <div class="form-group">
                            <label  class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="date" placeholder="Date">
                            </div>
                          </div>
                          
                         
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                         <center>    <button type="submit" name="search-date" class="btn btn-default">Show Records</button>  </center> 
                            </div>
                          </div>
                        </form> 
                 </div>
                <div class="col-md-4"></div>
            </div>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      
       <div class="container">
            <div class="row"><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                         <form class="form-horizontal" method="post" action="">
                          <div class="form-group">
                            <label  class="col-sm-2 control-label">Date</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="date" placeholder="Date">
                            </div>
                          </div>
                             
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Hostel</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="hostel" placeholder="Hostel">
                            </div>
                          </div>
                          
                         
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                         <center>    <button type="submit" name="search-date_hostel" class="btn btn-default">Show Records</button>  </center> 
                            </div>
                          </div>
                        </form> 
                 </div>
                <div class="col-md-4"></div>
            </div>
        </div>
      
      </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        
          <div class="container">
            <div class="row"><br><br>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                         <form class="form-horizontal" method="post" action="">
                            
                          <div class="form-group">
                           <label  >Complaint number</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="complaint_no" placeholder="Complaint No.">
                            </div>
                          </div>
                             
                      
                          
                         
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                         <center>    <button type="submit" name="search-complaint_no" class="btn btn-default">Show Records</button>  </center> 
                            </div>
                          </div>
                              
                        </form> 
                 </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        
        </div>
    
  </div>

</div>
                    
            </div>
                
                
       <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src = "js/bootstrap.js"></script>
            </body>
        </head>
    </html>
                    <?php  }
                  ?>


<?php 
    if (isset($_POST['search-date'])) {
      $_SESSION['date'] = $_POST['date'];
        header("location:search-date.php");
    }

    if (isset($_POST['search-date_hostel'])) {
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['hostel'] = $_POST['hostel'];
        header("location:search-date-hostel.php");
    }

    if (isset($_POST['search-complaint_no'])) {
      $_SESSION['complaint_no'] = $_POST['complaint_no'];
        header("location:search-complaint-no.php");
    }
 ?>