<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['disapprove'])){
    $comment=$_POST['comment'];
    $college_id=$_POST['college_id'];
    $dean_name=$_POST['dean_name'];
    $sql="INSERT INTO college(dean_name,comment,college_id, col_notif) VALUES ('$dean_name','$comment',$college_id,1)";
$result=mysqli_query($conn,$sql);
if($result){
    echo "Data sent to Vice president successfully!";
}
else{
    echo "Sorry, you data is not sent, check and try again!";
}
}
?>