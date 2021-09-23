<?php
$dbhandle = mysql_connect("localhost","root","") 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
//select a database to work with
$selected = mysql_select_db("mhsst",$dbhandle) 
  or die("Could not select mhss");
  $test=mysql_query("Select * from contact");
  ?>
  <table border="1">
  <tr>
 <th>Name</th><th>Subject</th><th>email</th><th>Phone No</th><th>Message</th>
 </tr>
  <?php
while($records=mysql_fetch_array($test))
{
?>
 <tr>
 <td><?php echo $records['Name'];?>
 <td><?php echo $records['Subject'];?>
 <td><?php echo $records['E-mail'];?>
 <td><?php echo $records['Phone'];?>
 <td><?php echo $records['Message'];?>
 </tr>
 <?php } ?></table>
 <?php
mysql_close($dbhandle);
?>