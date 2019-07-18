<?php
function OpenCon()
{
$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "Welcome@2016";
$db = "HevoTest";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

return $conn;
}

$sql=inse

function CloseCon($conn)
{
$conn -> close();
}
  
?>