<?php
$host="localhost";
$db="ribin";
$username="root";
$password="";
$email=$_POST['email'];
$pass=$_POST['pass'];
$pin=$_POST['pin'];
$connect=mysqli_connect($host,$username,$password,$db);
if(!$connect)
{
    header("Location: signup.html");
    exit();
}
else
{
$q="SELECT * FROM user WHERE email='$email' AND password='$pass' AND pin='$pin'";
$r=mysqli_query($connect,$q);
$d=mysqli_fetch_array($r);
if(!$d)
{
	echo "<h2>Account not found</h2>";
	exit();
}
elseif($d['email']==$email && $d['password']==$pass && $d['pin']==$pin)
{
	echo"<center><h2>Login successfull...</h2>";
}
		echo "Your Email is : ".$d['email'];
    echo"</center>";
				mysqli_close($connect);
}
?>