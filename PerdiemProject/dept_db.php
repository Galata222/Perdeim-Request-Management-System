<?php
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $dept_id=$_POST['dept_id'];
    $head_name=$_POST['name'];
    $id=$_POST['id'];
    $birr=$_POST['birr'];
    $sql="INSERT INTO DEPARTMENT(dept_id, dept_head,approved_birr,dept_notif) VALUES ($dept_id,'$head_name','$birr',1)";
$result=mysqli_query($conn,$sql);
$sql1="UPDATE request_info SET dept_id='$dept_id' where emp_id='$id'";
mysqli_query($conn,$sql1);
}
if($result){
    echo "Data sent to Vice president successfully!";
}
else{
    echo "Sorry, you data is not sent, check and try again!";
}
?>