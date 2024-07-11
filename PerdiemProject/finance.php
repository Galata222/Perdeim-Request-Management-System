<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Administration Approval</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="finance.css">
   
   <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-white">


<?php
  $conn=new mysqli('localhost', "root",'','perdeim_request');
  $data=$conn->query("select * from vice_president");
  $data1=$conn->query("select * from vice_president");
  $id=$name=$date=$offices=$program=$salary=$rate=$purpose=$departure=$destination=$means=$totaldays=$birr=$fuel=$incidental=$total=$head_name=$dept_id=$approved_birr=$president_name=$vice_id="";
  $sql3="SELECT * FROM vice_president where vp_notif=1";
$result3=$conn->query($sql3);

if($result3->num_rows>0){
  while($row=$result3->fetch_assoc()){
    $vice_id=$row['vice_id'];
    $president_name=$row['president_name'];
  }
}
  $new_data=$conn->query("select * from vice_president where vp_notif=1");
  $count=mysqli_num_rows($new_data);
$sql="SELECT * FROM request_info where vice_id='$vice_id'";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $emp_id=$row['emp_id'];
    $name=$row['name'];
    $offices=$row['college/department'];
    $date=$row['date'];
    $salary=$row['salary'];
    $purpose=$row['purpose'];
    $rate=$row['perdiem_rate'];
    $departure=$row['departure'];
    $destination=$row['destination'];
    $means=$row['means'];
    $total=$row['total_days'];
    $birr=$row['payment'];
    $fuel=$row['fuel'];
    $incidental=$row['incidental'];
  }
}
$sql1="SELECT * FROM department";
$result1=$conn->query($sql1);

if($result1->num_rows>0){ 
  while($row=$result1->fetch_assoc()){
    $dept_id=$row['dept_id'];
    $head_name=$row['dept_head'];
    $approved_birr=$row['approved_birr'];
  }
}
$sql2="SELECT * FROM college";
$result2=$conn->query($sql2);

if($result2->num_rows>0){
  while($row=$result2->fetch_assoc()){
    $college_id=$row['college_id'];
    $dean_name=$row['dean_name'];
  }
}


    if(isset($_GET['notf'])){
    $n_id=$_GET['notf'];
    $conn->query("update vice_president set vp_notif='0' where president_name='$n_id'");
  
  header("Location:finance.php?notification= Employee id is: $emp_id <br> The name of employee: $name <br> submitted date: $date <br>  College/School/Department/Offices: $offices <br> Salary $salary <br> Perdiem rate per day birr: $rate <br>  Purpose of the trip: $purpose <br> Departure: $departure <br> Destination $destination <br> Means of travel: $means<br> Total no. of days: $total<br> Advance payment <br>perdiemm payment birr: $birr <br>Fuel: $fuel<br>Incidental: $incidental<br>Total pay birr: $total<br> Deparment Id: $dept_id<br> Approved by Dept head: $head_name <br> Total Approved birr:$approved_birr <br> Vice President ID: $vice_id <br> President Name: $president_name");
  
}
  ?>

    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg header fixed-top nav-tabs">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
              <img src="huLogo.png" alt="HU Logo" style="width:90px;" class="rounded-pill"> 
            </a>
          </div>
        <div class="container style">
            <ul class="nav nav-pills">
              <li class="nav-item tablink">
                <a class="nav-link text-white size  "  href="#"><span class="fa fa-fw fa-home text-warning"></span> HOME</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size " href="http://localhost:3000/about.html"><span class="fa fa-user-circle text-warning"></span> ABOUT</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size"  href="#"><span class="fa fa-drivers-license text-warning"></span> SERVICE</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size"  href="#"><span class="fab fa-facebook-messenger text-warning"></span> CONTACT</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size"  href="#" ><span class="	fab fa-google-plus-g text-warning"></span> HELP</a>
              </li>
              <li  class="nav-item dropdown tablink"> <a class="nav-link text-white size  " href="Home.php">Logout</a></li>
              <li class="nav-item dropdown tablink">
          <a class="nav-link text-white size" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notification<span class="badge bg-danger"><?php echo $count;?></span>
          </a>
          <ul class="dropdown-menu">
            <?php 
                 foreach ($data as $value) {
                   
            ?>

            <?php 
            if($value['vp_notif']=='1'){
              $id=$value['president_name'];
            ?>
            <li style="width: 200px" class="alert-danger"><a href="?notf=<?php echo $value['president_name'];?>"><?php echo "NEW Request the from" .$value['president_name']; ?></a></li>
          
          <?php 
            } else{
            ?>
            <li style="width: 200px"><?php echo "NEW Request from" .$value['president_name']; ?></li>
          <?php
        }}
          ?>
            </ul>
        </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-warning" type="button">Search</button>
            </form>
         
        </div>  
    </nav>
</div>
</div>
<div class="container">
  <form class="form"  action="finance_db.php" method="POST">

<p class="form-label">
      Enter the employee ID <input type="number" name="id" class="form-control">
    </p>
    <p class="form-label">
      Enter the Financial Administration ID <input type="number" name="finance_id" class="form-control">
    </p>
<p class="form-label">Budget Clearance (code)
      <input type="text" name="code"><br>
      Authorized by <br>
      Name <input type="text" name="author_name" class="form-control">
    </p>
    <p class="form-label">
      Advance/Receivable Clearance (checked by Receivable Management Case Team)<br>
      Name<input type="text" name="name" class="form-control">
    </p>
    
    <p class="form-label"><input type="submit" name="submit" value="Approve" class=" btn btn-outline-success btn-lg rounded-pill approve"></p>
  </form>
  <div class="container notif">
<?php 

if(isset($_GET['notification'])){?>

<p class="notification"><?php echo $_GET['notification'];?></p>
<?php } ?>


</div>
</div>
<navbar class="navbar navbar-expand-sm bg  fixed-bottom">
  <div class="container-fluid">
    <ul class=" navbar-nav">
      <li class="nav-item tablink">
        <a class="nav-link text-white" href="https://www.facebook.com/HRMUNIV/"><span class="fab fa-facebook text-primary"></span> Follow us On Facebook</a>
      </li>
     <li class="nav-item tablink">
        <a class="nav-link text-white" href="https://twitter.com/haramayauniver4"><span class="fab fa-twitter text-info"></span> Follow us On Twitter</a>
      </li>
      <li class="nav-item tablink">
        <a class="nav-link text-white" href="https://www.linkedin.com/company/haramaya-university/?originalSubdomain=et"><span class="fab fa-linkedin text-primary"></span> Follow us On Linked in</a>
      </li>
      <li class="nav-item tablink">
        <a class="nav-link text-white" href="https://www.youtube.com/channel/UCd6Bb1Xc6FyycH0_DFmkxNQ"><span class="	fab fa-youtube text-danger"></span> Watch us On Youtube</a>
      </li>
      <li class="nav-item tablink">
        <a class="nav-link text-white" href="https://www.instagram.com/explore/locations/418031851693715/haramaya-university-model-school?hl=en"><span class="fab fa-instagram text-warning"></span> Follow us On Instagram</a>
      </li>
    </ul>
  </div>
</navbar>

  <div class="div2 bgdiv2">
    <div class="text-white text-start h4">Haramaya University Copyright &copy; 2022 All rights reserved.</div>
    <p class="text-white p">
    ADDRESS<br>
    Haramaya University,<br>
    <span class="		fa fa-envelope text-white"></span> P.O. Box 138,<br>
    Dire Dawa,<br>
    Ethiopia<br>
    <span class="fa fa-globe text-white"></span> haramaya@haramaya.edu.et
  </p>

</body>
</html>