<?php
include ("request_validation.php");
$server_name="localhost";
$user_name="root";
$pass="";
$dn_name="perdeim_request";
$conn=mysqli_connect($server_name,$user_name,$pass,$dn_name);
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $id=$_POST['id'];
    $date=$_POST['date'];
    $name=$_POST['name'];
    $offices=$_POST['offices'];
    $program=$_POST['program'];
    $salary=$_POST['salary'];
    $rate=$_POST['rate'];
    $purpose=$_POST['purpose'];
    $departure=$_POST['departure'];
    $destination=$_POST['destination'];
    $travel=$_POST['travel'];
    $nodays=$_POST['nodays'];
    $payment=$_POST['payment'];
    $fuel=$_POST['fuel'];
    $incident=$_POST['incident'];
    $totalbirr=$_POST['totalbirr'];

    $sql="INSERT INTO `request_info` (`emp_id`, `date`, `name`, `college/department`, `Project _name`, `salary`, `perdiem_rate`, `purpose`, `departure`, `destination`, `means`, `total_days`, `payment`, `fuel`, `incidental`, `total_birr`,`read_no`)
     VALUES ($id, '$date', '$name', '$offices', '$program', '$salary', '$rate', '$purpose', '$departure', '$destination', '$travel', '$nodays', '$payment', '$fuel', '$incident', '$totalbirr', 1);";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data sent to College successfully!";
    }
    else{
        echo "Sorry, you data is not sent, check and try again!";
    }
}
?>