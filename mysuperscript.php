<?php 
session_start();


$username = $_GET['usernamesignup'];
$email = $_GET["emailsignup"];
$mobile = $_GET["mobile"];
$password = $_GET["passwordsignup"];
$confirmpassword = $_GET["passwordsignup_confirm"];

$con = mysql_connect('localhost','root','');

	if(! $con)
	{
		$_SESSION['MESSAGE']='<center>Error:Could not connect to database. Please try again later.</center>';
		//echo '<meta HTTP-EQUIV="Refresh" content="0; URL=message.php">';
			echo "Internal Server Error: Please try after some time.";
			exit;
		}
		mysql_select_db('mhsst');
	$sql="insert into sign_up(username,email,mobile,password)
	
	
	values('$username','$email','$mobile','$password')";
		$result=mysql_query($sql,$con);
		if(!$result)
			{
				echo "Database Error. Please try again some time.";
			}
		else
			{
			echo "SIGNUP  has been saved successfully.";
			}
	?>