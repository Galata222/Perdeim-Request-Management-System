<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['disapprove'])){
    $comment=$_POST['comment'];
    $dept_id=$_POST['dept_id'];
    $dept_head=$_POST['dept_head'];
    $sql="INSERT INTO department(dept_head,comment,dept_id, dept_notif) VALUES ('$dept_head','$comment','$dept_id',1)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Request is sent";
}
else{
    echo "Sorry check your form and try again";
}
}
?>