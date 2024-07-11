<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $president_name=$_POST['name'];
    $vice_id=$_POST['vice_id'];
    $id=$_POST['id'];
    $sql="INSERT INTO vice_president(vice_id, president_name, vp_notif) VALUES ($vice_id,'$president_name',1)";
    $result=mysqli_query($conn,$sql);
    $sql1="UPDATE request_info SET vice_id='$vice_id' where emp_id='$id'";
    mysqli_query($conn,$sql1);
    
}
?>