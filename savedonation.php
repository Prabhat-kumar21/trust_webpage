<?php
session_start();
$dname = $_GET["dname"];
$demail = $_GET["demail"];
$dmno = $_GET["dmno"];
$dmessage = $_GET["dmessage"];
$damount = $_GET["damount"];

$con = mysqli_connect('localhost','root','','mhsst');
 
 if(! $con)
		{
			$_SESSION['MESSAGE']='<center>Error:Could not connect to database. Please try again later.</center>';
			//echo '<meta HTTP-EQUIV="Refresh" content="0; URL=message.php">';
			echo "Internal Server Error: Please try after some time.";
			exit;
		}
		//mysqli_select_db('mhsst',$con);
	$sql="insert into donation_information (dname,demail,dmno,damount,dmessage) values('$dname','$demail','$dmno',$damount,'$dmessage')";
	$result=mysqli_query($con,$sql);
	if(!$result)
		{
			echo "Database Error. Please try after some time.";
		}
	else
		{
			echo "Your information has been saved successfully. Thank you for your contribution.";
		}
	mysqli_close($con);
	
?>
