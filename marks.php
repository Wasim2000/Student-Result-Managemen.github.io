<?php

include ('db.php');

// Check if connection is
// Successful or not
$Dno = $_POST['dno'];
$M1 = $_POST['sub1'];
$M2 = $_POST['sub2'];
$M3 = $_POST['sub3'];
$M4 = $_POST['sub4'];
$M5 = $_POST['sub5'];
// database insert SQL code
$sql = "INSERT IGNORE INTO db_marks (id, Dno, M1, M2, M3, M4, M5) VALUES ('0', '$Dno', '$M1', '$M2', '$M3', '$M4', '$M5')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	header('Location: marks.html');
	
}


?>