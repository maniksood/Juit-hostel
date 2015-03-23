<?php include 'config.php'; ?>

<?php 
	 
	function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
	}

	$select = "select * from users";
	$result = mysql_query($select);

	while ($res = mysql_fetch_assoc($result)) {
		$pass = generateRandomString();
		$password = md5($pass);
		$user = $res['user_id'];

		mysql_query("UPDATE `users` SET `password`= '$password' WHERE user_id = '$user'");
		mail($res['email'],"Automated Password Generation","This is a system generated email. Please do not reply.\r\n\n\nHi\r\nWe are glad to inform you that a new service for lodging in complaints of \r\nHostel Related Issues,\r\nWarden Complaints\r\nand Server Room Related Complaints has been set up.\r\nYour passowrd for the same is \r\npassword: ".$pass ,"From: noreply@juit.ac.in\n");

	}
 ?>