<?php
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$pin=$_POST['pin'];
$host="localhost";
$db="ribin";
$username="root";
$password="";
$connect=mysqli_connect($host,$username,$password,$db);
if(!$connect)
{
    header("Location: signup.html");
    exit();
}
else
{
    $sql="INSERT INTO user (`username`, `email`, `pin`, `password`) VALUES('$uname','$email','$pin','$pass')";
    if($connect->query($sql)===TRUE)
    {
	   echo"<h1>Welcome</h1>";
    }
    else
    {
	    header("Location: signup.html");
        exit();
    }
}
?>