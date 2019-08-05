<?php 
session_start();
include_once 'dbh.inc.php';

$id=$_REQUEST['q'];
$sql="select * from raspunsuri where id=$id";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
	$corect=$row['corect'];
}

echo $corect;

?>