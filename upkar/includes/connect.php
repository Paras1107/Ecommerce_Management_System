<?php
$conn = mysqli_connect('localhost','root','','upkar');
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
// else{    echo 'connected';}

?>