<?php
include ('db.php');
// Check connection

if(isset($_POST["sub"])) {
    $image = $_FILES['fileToUpload']['tmp_name'];
    $imgContent = addslashes(file_get_contents($image));

    /*
     * Insert image data into database
     */
    
    // Insert image content into database
    $insert = $conn->query("INSERT into image (photo) VALUES ('$imgContent')");
    if($insert){
        echo "File uploaded successfully.";
    }else{
        echo "File upload failed, please try again.";
    } 
}
$conn->close();
?>