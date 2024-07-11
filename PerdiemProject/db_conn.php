<?php 
$link="localhost";
$pass="";
$username="root";
$db_name="perdeim_request";
$conn=mysqli_connect($link,$username,$pass, $db_name );
if(!$conn){
    echo "connection failed";
}



?>