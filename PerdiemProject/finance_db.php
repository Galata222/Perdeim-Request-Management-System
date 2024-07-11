<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $auther_name=$_POST['author_name'];
    $finance_id=$_POST['finance_id'];
    $code=$_POST['code'];
    $id=$_POST['id'];
    $sql="INSERT INTO finance(finance_id, auther_name,code, fin_notif) VALUES ($finance_id,'$auther_name',$code, 1)";
    $result=mysqli_query($conn,$sql);
    $sql1="UPDATE request_info SET finance_id='$finance_id' where emp_id='$id'";
    mysqli_query($conn,$sql1);
    if($result){
        echo "Notification sent to employer successfully!";
    }
    else{
        echo "Sorry, you data is not sent, check and try again!";
    }
}
?>