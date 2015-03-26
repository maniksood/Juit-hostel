<?php include 'config.php'; ?>



<?php 
	function count_pages($pdfname) {
	  $pdftext = file_get_contents($pdfname);
	  $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
	  return $num;
	}
 ?>

<!doctype html>
	<html lang="en">
		<html>
			<head>
				<title>
						Print Me | Printing Engine at FPS
				</title>

				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

			</head>

			<body>



			<div class="container">
			<div class="row">
			<center><br><br>
				<img class="img-responsive" src="../img/load.svg">
			</center>
			</div>
			<div class="row">
				<center>
				
				</center>
				<div class="col-md-2"></div>
				<div class="col-md-8">
				
				<center><br><h3>Please wait while we process the document uploaded by you.</h3><br> Do not press Refresh or Back button</center>
<br>
				
			    </div>
			    <div class="col-md-2"></div>
			</div>
			</div>

			</body>
		</html>


<?php header("location:pages.php"); ?>	


