<?php

include ('db.php');
// Check if connection is
// Successful or not
$FName = $_POST['FName'];
$LName = $_POST['LName'];
$Gender = $_POST['Gender'];
$phn = $_POST['phn'];
$dno = $_POST['dno'];
$dat = $_POST['dat'];
$Age = $_POST['Age'];
$mail = $_POST['mail'];
$add = $_POST['add'];

// database insert SQL code
$sql = "INSERT IGNORE INTO stu_details (id, f_name, l_name, gender, m_no, d_no, dob, age, email, address) VALUES ('0', '$FName', '$LName', '$Gender', '$phn', '$dno', '$dat', '$Age', '$mail', '$add')";

// insert in database 
$rs = mysqli_query($conn, $sql);
if($rs)
{
	header('Location: register.html');
	
}
else{
	echo "File upload failed, please try again.";
} 



?>