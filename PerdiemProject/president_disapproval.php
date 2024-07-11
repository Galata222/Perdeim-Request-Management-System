<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['disapprove'])){
    $comment=$_POST['comment'];
    $vp_id=$_POST['vp_id'];
    $president_name=$_POST['vp_name'];
    $sql="INSERT INTO vice_president(president_name,comment,vice_id, vp_notif) VALUES ('$president_name','$comment','$vp_id',1)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "inserted";
}
else{
    echo "unsuccessful";
}
}
?>