<html>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$conn = mysqli_connect("localhost","root","","save");
$us=$_POST["inputEmail3"];
$pw=$_POST["inputPassword3"];
$sql = "select * from login1 where Username='$us' and Rool_No='$pw'";
$result = mysqli_query($conn,$sql,MYSQLI_USE_RESULT);
if(mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$row = mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['us']=$us;
	$_SESSION['pw']=$pw;
	include('profile.php');
}
else
{
	echo "<font face='Times New Roman' size='8' color='blue'>Sorry, you are not registered !!</font>";
	include('login.html');
}
?>

</body>
</html>