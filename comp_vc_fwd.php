<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hostel";

date_default_timezone_set('Asia/Calcutta');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$date = date("Y-m-j");;
$newdate = strtotime ( '-15 day' , strtotime ( $date ) ) ;
$newdate = date ( 'd/m/Y' , $newdate );
 

$sql = "SELECT complaint_id, date, user_id, complaint FROM complaints WHERE status = 'Pending'";
$result = $conn->query($sql);
// print_r() $result;
// echo "ma";
if ($result->num_rows > 0) {
                                $a = array('0' =>"Complaints");
								while($row = $result->fetch_assoc()) 

								{
										$complaint_no = $row["complaint_id"];
									
										array_push($a,$complaint_no);			
                                }
                                $report = implode(',', $a);
                               



                               

										 mail("satyamb2003@gmail.com","Hostel Complaints Escalation","This is an auto generated email providing you the details of the complaints which are pending for more than 15 days
													".$report,"From: me@gmail.com\n");
      
      

                                             

								
								
}
							
?>