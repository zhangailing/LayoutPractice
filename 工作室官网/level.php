<?php
$id=$_GET['id'];
$con = mysql_connect('localhost','root','1234');

mysql_select_db("guanwang",$con);
$sql = "SELECT * FROM user WHERE contact_id = '".$id."'";

$result = mysql_query($sql);
mysql_close($con);
$re = array(
'yimian':$result['yimian'];
'ermian':$result['ermian'];
'sanmian':$result['sanmian'];
)
return $re;
?>
