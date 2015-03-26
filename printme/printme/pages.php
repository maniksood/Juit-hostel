<?php sleep(3); ?>	
<?php include 'config.php'; ?>

<?php $file_name = $_SESSION['file_name']; ?>

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
	<div class="jumbotron">
		<center>
			<p><?php echo "Number of pages = ".count_pages('../print_uploads/'.$file_name); ?></p>
		</center>
	</div>
</div>

		

			</body>
		</html>














