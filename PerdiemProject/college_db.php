<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $college_dean=$_POST['name'];
    $college_id=$_POST['college_id'];
    $id=$_POST['id'];
    $sql="INSERT INTO College(college_id, dean_name, col_notif) VALUES ($college_id,'$college_dean',1)";
    $result=mysqli_query($conn,$sql);
    $sql1="UPDATE request_info SET college_id='$college_id' where emp_id='$id'";
    mysqli_query($conn,$sql1);
    if($result){
        echo "Data sent to Vice president successfully!";
    }
    else{
        echo "Sorry, you data is not sent, check and try again!";
    }
}
?>