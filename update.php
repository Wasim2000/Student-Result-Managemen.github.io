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

$sql =  "UPDATE db_marks SET M1='$M1',M2='$M2',M3='$M3',M4='$M4',M5='$M5' WHERE Dno='$Dno'";
$result = mysqli_query($conn,$sql);

if($result){
    echo "<script>
    alert('Updated Sucessfully');
    window.location.href='marks.html';
    </script>";
}

else{
    echo "<script>
    alert('Update failed');
    window.location.href='marks.html';
    </script>";
}

?>