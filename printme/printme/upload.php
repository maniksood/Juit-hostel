<?php include 'config.php'; ?>

<?php $id = $_SESSION['id']; ?>
<!doctype html>
	<html lang="en">
		<html>
			<head>
				<title>
						Print Me | Upload the Document
				</title>

				<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
				<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

			</head>

			<body>



			<div class="container-fluid" style="background-color:#468499">
			<div class="row">
			<center>
			<h3 style="padding-top:20px;padding-bottom:20px;font-family: 'Droid Sans', sans-serif;size:2em;color:white">Upload the Document</h3>
			</center>
			</div>
			</div>
			<div class="container">
			<div class="row">
				<center>
				<br>
				<h5>Caution : It's advisable to read the <a href="">instructions</a> before proceeding further.<h5><br>
				</center>
				<div class="col-md-2"></div>
				<div class="col-md-8">
<form action="" method="post"  enctype="multipart/form-data">
  <div class="form-group">
   <input type="file" name="upload" id="upload" required>
  </div>


  <div class="form-group">
  <label for="sel1">No. Of Copies</label>
  <select class="form-control" id="sel1" name="copies">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select>
</div>


 <div class="radio">  <lable for="papertype"><b>Paper Type</b></lable><br>
<label><input type="radio" name="optradio" checked="checked" value="A4 - Normal 75 GSM">A4 - Normal 75 GSM</label>
</div> <div class="radio">   <label><input type="radio" name="optradio" value="A4 - Bond
Paper">A4 - Bond Paper</label> </div> <div class="radio disabled">   <label><input type="radio"
name="optradio" value="A3" disabled>A3 (Will be available soon)</label> </div> <br>



<div class="form-group">
  <label for="sel1">Take Away Location</label>
  <select class="form-control" id="sel1" name="take_away">
    <option checked="checked">Open cafe 08:15 am</option>
    <option>Dhyan Kaksh 0730 am</option>
  
  </select>
</div>

 <div class="form-group">
  <label for="comment">Instructions</label>
  <textarea class="form-control" rows="5" name="instructions" id="comment" placeholder="Any additional information you want to give..."></textarea>
</div>




<center><button type="submit" class="btn btn-primary" name="order"> Order the Print
</button><br></center> 
</form>
<br>
				</div>                 
			<div class="col-md-2"></div>
		</div>
		</div>
	</body>
</html>

<?php 
	if (isset($_POST['order'])) {
		$copies = $_POST['copies'];
		$paper = $_POST['optradio'];
		$take_away = $_POST['take_away'];
		$instructions = $_POST['instructions'];

		$select = "SELECT * FROM `users` WHERE id = '$id'";
		$result = mysql_query($select);
		$res = mysql_fetch_assoc($result);

		$name = $res['name'];
		$email = $res['email'];
		$wallet = $res['wallet'];

		$_SESSION['wallet'] = $wallet;

		#####################################################################

		$target_dir = "../print_uploads/";
		$target_file = $target_dir . basename($_FILES["upload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		
		// Check if file already exists
		
		// Check file size
		if ($_FILES["upload"]["size"] > 25000000) {
		    echo "Sorry, your file is too large.(size should be less than 25 MB)";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf"
		&& $imageFileType != "ppt" && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		    echo "Sorry, only DOC, DOCX, PDF, PPT, JPG, PNG & JPEG files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded. Please try again.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}

		$file_name = basename( $_FILES["upload"]["name"]);
		
		$_SESSION['file_name'] = $file_name;
		#####################################################################



		$insert = "INSERT INTO `print_orders`(`id`, `name`, `email`, `copies`, `paper`, `take_away`, `instructions`, `file_name`) VALUES ('','$name','$email','$copies','$paper','$take_away','$instructions','$file_name')";
		mysql_query($insert);

		header('location:load.php');
	}
 ?>


 <?php 

// function count_pages($pdfname) {
//   $pdftext = file_get_contents($pdfname);
//   $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
//   return $num;
// }







  ?>






