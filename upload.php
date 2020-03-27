<?php
include("../php/check.php");
$db = mysqli_connect("localhost","root","","apj");
$user=$_SESSION['username'];
$sql = "SELECT * FROM student WHERE username = '$user'";
$sth = $db->query($sql);
$r=mysqli_fetch_array($sth);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
        $user=$r['sid'];
        $filename=$_FILES["fileToUpload"]["tmp_name"];
        $extension = explode("/", $_FILES["fileToUpload"]["type"]);
        move_uploaded_file($filename, "uploads/" . $user.".".$extension[1]);
        $name=$user.".".$extension[1];
        header("Location: stuset.php");
        exit();
    }
?>
