<?php 
session_start();
$link="localhost";
$pass="";
$username="root";
$db_name="perdeim_request";
$conn=mysqli_connect($link,$username,$pass, $db_name );
if(!$conn){
    echo "connection failed";
}


if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['jobposition'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $username=validate($_POST['username']);
    $password=validate($_POST['password']);
    $jobpositon=validate($_POST['jobposition']);
    if(empty($username)){
        header("Location: Home.php?error=User Name is required");
        exit;
    }
    else if(empty($password)){
        header("Location: Home.php?error=User password is required");
        exit;
        }
    else if(empty($jobpositon)){
        header("Location: Home.php?error=User job position is required");
        exit;

    }
    else{
        $sql="SELECT * FROM users WHERE  password='$password' AND username='$username' AND job_position='$jobpositon' " ;
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)===1){
            $row=mysqli_fetch_assoc($result);
            if($row['username']==$username && $row['password']==$password  && $row['job_position']==$jobpositon ){
                $_SESSION['username']=$row['username'];
                $_SESSION['password']=$row['password'];
                $_SESSION['jobposition']=$row['jobposition'];
                if($row['job_position']=="Employee"){
                    header ("Location: RequestPage.php");
                    exit();
                }
                else if($row['job_position']=="College Dean"){
                header ("Location: college.php");
                exit();
            }
            else if($row['job_position']=="Vice President"){
                header ("Location: vice_president.php");
                exit();
            }
            else if($row['job_position']=="Accountant"){
                header ("Location: finance.php");
                exit();
            }
            }

        }
        else{
            header("Location: Home.php?error=incorrect password or username");
            exit;

        }
    }

}
else{
    header("Location: Home.php");
    
}
?>