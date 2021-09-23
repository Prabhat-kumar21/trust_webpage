
<?php
$dbhandle = mysql_connect("localhost","root","") 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['message'];
//select a database to work with
$selected = mysql_select_db("paintkarwalo",$dbhandle) 
  or die("Could not select paintkarwalo");
echo "Test";
mysql_query("insert into contact values('".$name."','".$email."',".$phone.",'".$message."')");
echo "record added";
mysql_close($dbhandle);

?>
