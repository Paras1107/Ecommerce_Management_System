<?php
$host="localhost";
$username="root";
$password="";
$dbname="upkar";
$mysqli=new mysqli(hostname:$host,
username:$username,
password:$password,
database:$dbname);

if ($mysqli->connect_errno){
die("connection_error:".$mysqli->connect_error);
}
return $mysqli;
?>