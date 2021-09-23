<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();

$to = "pramod.jha@mhsstrust.org";
$subject = $_GET["subject"];
$message = "From: " . $_GET['email'] . " \nMobile Number: " . $_GET["mno"] . "\nMessage: " . $_GET['message'];
$header = "From:".$_GET['email'];

//place connection code

$dbhandle = mysqli_connect('localhost','root','','mhsst') 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
$name=$_GET['name'];
$subject=$_GET['subject'];
$email=$_GET['email'];
$phone=$_GET['mno'];
$msg=$_GET['message'];
//select a database to work with
//$selected = mysqli_select_db('mhsst','$dbhandle')
  //or die("Could not select mhss");
echo "Test";
mysqli_query("insert into contact values('".$name."','".$subject."','".$email."',".$phone.",'".$msg."')");
echo "record added";
mysqli_close($dbhandle);
if(mail($to,$subject,$message,$header))
{
	//$_SESSION['CONTACT_STAT']=1;
	//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=contact.html">';
	echo "Thank you for your interest.  We will contact you soon.";
}
else
{
	//$_SESSION['CONTACT_STAT']=2;
	//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=contact.html">';
	echo "Seems some mail server issue. We regret for the inconvenience. Please contact us again after some time.";
}
$rto=$_GET['email'];
$subject="Reply from MHSSTrust";
$message="Dear ".$_GET['name'].",<br/> Thanks for your response.We are pleased to inform you that we are serving the poor and tribal students <br/> for education and health. We will soon send you all the details of trust to you.<br/><p></p><p></p>Thanking You!<br/>Pramod Kumar Jha<br/>Chairman<br/>(MHSSTrust,Dhanbad)";
$header="From:".$to;
mail($rto,$subject,$message,$header);
?>

</body>
</html>
