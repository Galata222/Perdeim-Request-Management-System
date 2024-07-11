<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employe Request</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="finance.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-white">
<!-- For notification -->

<?php
  $conn=new mysqli('localhost', "root",'','perdeim_request');
  $data=$conn->query("select * from finance ");
  $notification="";
  //notification from finance
  $new_data=$conn->query("select * from finance where fin_notif=1");
  $count=mysqli_num_rows($new_data);
  if(isset($_GET['notf'])){
    $n_id=$_GET['notf'];
    $conn->query("update finance set fin_notif='0' where auther_name='$n_id'");
  header("Location:RequestPage.php?notification=Your request is successful, from finance");
  }
//feedback from department
$comment="SELECT * from department where comment !='' AND dept_notif=1";
$result1=$conn->query($comment);
$countd=mysqli_num_rows($result1);
if($result1->num_rows>0){
  while($row=$result1->fetch_assoc()){
    $notification=$row['comment'];
  }
}
if(isset($_GET['notd'])){
  $n_id=$_GET['notd'];
  $conn->query("update department set dept_notif='0' where dept_head='$n_id'");
  header("Location:RequestPage.php?feedback=Your request is not successful, from department");
}

// feedback from college
$comment1="SELECT * from college where comment !='' AND col_notif=1";
$result2=$conn->query($comment1);
$countc=mysqli_num_rows($result2);
if($result2->num_rows>0){
  while($row=$result2->fetch_assoc()){
    $notificationc=$row['comment'];
  }
}
if(isset($_GET['notc'])){
  $n_id=$_GET['notc'];
  $conn->query("update college set col_notif='0' where dean_name='$n_id'");
  header("Location:RequestPage.php?feedbackcol=Your request is not successful, from College");
}

$sql="SELECT emp_id FROM request_info";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_assoc()){
    $id=$row['emp_id'];
  }
}
//feedback from Vice president
$comment2="SELECT * from vice_president where comment !='' AND vp_notif=1";
$result3=$conn->query($comment2);
$countv=mysqli_num_rows($result3);
if($result3->num_rows>0){
  while($row=$result3->fetch_assoc()){
    $notificationv=$row['comment'];
  }
}
if(isset($_GET['notv'])){
  $n_id=$_GET['notv'];
  $conn->query("update vice_president set vp_notif='0' where president_name='$n_id'");
  header("Location:RequestPage.php?feedbackvp=Your request is not successful from Vice president");
}
 
  ?>

  
  <!-- ################ -->


    <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg header fixed-top nav-tabs">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="huLogo.png" alt="HU Logo" style="width:65px;" class="rounded-pill"> 
              </a>
          </div>
        <div class="container style">
            <ul class="nav nav-pills">
              <li class="nav-item tablink">
                <a class="nav-link text-white size " href="#"><span class="fa fa-fw fa-home text-warning"></span> HOME</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size " href="http://localhost:3000/about.html"><span class="fa fa-user-circle text-warning"></span> ABOUT</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size" href="#"><span class="fa fa-drivers-license text-warning"></span> SERVICE</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size"  href="#"><span class="fab fa-facebook-messenger text-warning"></span> CONTACT</a>
              </li>
              <li class="nav-item tablink">
                <a class="nav-link text-white size"  href="#" ><span class="	fab fa-google-plus-g text-warning"></span> HELP</a>
              </li>
              <li  class="nav-item dropdown tablink"> <a class="nav-link text-white size  " href="Home.php">Logout</a></li>
              <li class="nav-item dropdown">
          <a class="nav-link text-white size" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notification<span class="badge bg-danger"><?php echo $count;?></span>
          </a>
          <ul class="dropdown-menu">
            <?php 
                 foreach ($data as $value) {   
            ?>
            <?php 
            if($value['fin_notif']=='1'){
              $id=$value['auther_name'];
            ?>
            <li style="width: 800px" class="alert-danger"><a href="?notf=<?php echo $value['auther_name']?>"><?php echo "Your Request is successfully approved by financial office from" .$value['auther_name']; ?></a></li>
          
          <?php 
            } else{
            ?>
            <li style="width: 200px"><?php echo "Your Request is successfully approved by financial office from " .$value['auther_name']; ?></li>
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

<div class="container-fluid">
          
  <form class="form"  action="db_connection.php" method="POST">
	
  <div class="form-group">
    <h4 class="background">Fill The Necessery Information In The Form</h4>
	    <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
		    
        </div>
        <div class="form-group">
       <label for="name"> Employee ID:</label>
           <input type="number" class="form-control" id="id" placeholder="Enter id" name="id">
		       
        </div>
        <div class="form-group">
       <label for="name">1. Name:</label>
           <input type="text" class="form-control" id="name" placeholder="Enter  name" name="name">
		       
        </div>
        <div class="form-group">
        <label for="offices">2. College/School/Department/Offices:</label>
            <input type="text" class="form-control" id="offices" placeholder="Enter offices" name="offices">
		        
        </div>
        <div class="form-group">
	    <label for="program">3. Program/Project Name:</label>
            <input type="text" class="form-control" id="program" placeholder=" project name" name="program">(Applicable for Project)
		        
        </div>
        <div class="form-group">
        <label for="name">4. Salary:</label>
            <input type="number" class="form-control" id="salary" placeholder="Enter  salary" name="salary">
        </div>
        <div class="form-group">
        <label for="rate">5. Per-diem rate per day birr (When applicable):</label>
            <input type="text" class="form-control" id="rate" placeholder="Enter payment rate" name="rate">
		        
        </div>
        <div class="form-group">
        <label for="purpose">6. Purpose of the trip:</label>
        <textarea type="text"class="form-control" id="purpose"placeholder="Enter your trip of purpose" name="purpose">
</textarea>
    
        </div>
        <div class="form-group">
        <label for="rate">7.Departure:</label>
            <input type="text" class="form-control" id="departure" name="departure"> 
            Destination<input type="text"name="destination"class="form-control">
		        
        </div>
        <div class="form-group">
        <label for="rate">8. Means of Travel:</label>
           <p> <input type="radio"name="travel" value="air">Air</p>
           <p> <input type="radio"name="travel" value="vehicle">HU Vehicle</p>
           <p> <input type="radio"name="travel" value="bus">Bus</p>
	
        </div>
        <div class="form-group">
        <label for="name">9. Total no. of days (see the travel plan):</label>
            <input type="number" class="form-control" id="nodays"  name="nodays">
        </div>
        <div class="form-group">10. Advance payment (see the details on the attached travel plan) <br><br>
        10.1 Per-diem payment birr:</label>
            <input type="number" class="form-control" id="payment" 
            placeholder="payment" name="payment">
        </div>
        <div class="form-group">
        <label for="name">10.2 Fuel:</label>
            <input type="number" class="form-control" id="fuel" 
            placeholder="Enter your salary" name="fuel">
        </div>
        <div class="form-group">
        <label for="name">  10.3 Incidental:</label>
            <input type="text" class="form-control" id="incident" 
            placeholder="incident" name="incident">
        </div>
        <div class="form-group">
        <label for="name">  10.4 Total pay birr:</label>
            <input type="number" class="form-control" id="totalbirr" 
            placeholder="total birr" name="totalbirr">
        </div>
    
        <p class="form-label"><input type="submit" name="submit" value="Submit" class=" btn btn-outline-success btn-lg rounded-pill approve"></p>
</div>


</div>
</div>
    <!-- <p class="form-label"><input type="submit" name="submit" value="Approve" class=" btn btn-outline-success btn-lg rounded-pill approve"></p>
    <p class="form-label"><input type="button" name="disapprove" value="Disapprove" class=" btn btn-outline-danger btn-lg rounded-pill disapprove"></p> -->
  </form>
  <!-- Feedback from department -->
  <div class="notif">
  <ul>
    <li class="nav-item dropdown">

      <a class="nav-link text-white size" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Feedback From Department <span class="badge bg-danger"><?php echo $countd;?></span>
        </a>
       
        <ul class="dropdown-menu">
          <?php 
               foreach ($result1 as $value) {
                 
               
          ?>

          <?php 
          if($value['dept_notif']=='1'){
            $id=$value['dept_head'];
          ?>
          <li style="width: 800px" class="alert-danger"><a href="?notd=<?php echo $value['dept_head']?>"><?php echo $notification ."from" .$value['dept_head']; ?></a></li>
        
        <?php 
          } else{
          ?>
          <li style="width: 200px"><?php echo " ".$value['dept_head']; ?></li>
        <?php
      }}
        ?>
          </ul>
      </li>
      <li class="nav-item dropdown">

      <a class="nav-link text-white size" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Feedback From College <span class="badge bg-danger"><?php echo $countc;?></span>
        </a>
       
        <ul class="dropdown-menu">
          <?php 
               foreach ($result2 as $value) {
                 
               
          ?>

          <?php 
          if($value['col_notif']=='1'){
            $id=$value['dean_name'];
          ?>
          <li style="width: 800px" class="alert-danger"><a href="?notc=<?php echo $value['dean_name']?>"><?php echo $notificationc ."from" .$value['dean_name']; ?></a></li>
        
        <?php 
          } else{
          ?>
          <li style="width: 200px"><?php echo " ".$value['dean_name']; ?></li>
        <?php
      }}
        ?>
          </ul>
      </li>
      <ul class="dropdown-menu">
          <?php 
               foreach ($result3 as $value) {
                 
               
          ?>

          <?php 
          if($value['dept_notif']=='1'){
            $id=$value['dept_head'];
          ?>
          <li style="width: 800px" class="alert-danger"><a href="?notd=<?php echo $value['dept_head']?>"><?php echo $notification ."from" .$value['dept_head']; ?></a></li>
        
        <?php 
          } else{
          ?>
          <li style="width: 200px"><?php echo " ".$value['dept_head']; ?></li>
        <?php
      }}
        ?>
          </ul>
      </li>
      <li class="nav-item dropdown">

      <a class="nav-link text-white size" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Feedback From Vice president <span class="badge bg-danger"><?php echo $countv;?></span>
        </a>
       
        <ul class="dropdown-menu">
          <?php 
               foreach ($result3 as $value) {
                 
               
          ?>

          <?php 
          if($value['vp_notif']=='1'){
            $id=$value['president_name'];
          ?>
          <li style="width: 800px" class="alert-danger"><a href="?notv=<?php echo $value['president_name']?>"><?php echo $notificationv."from" .$value['president_name']; ?></a></li>
        
        <?php 
          } else{
          ?>
          <li style="width: 200px"><?php echo " ".$value['president_name']; ?></li>
        <?php
      }}
        ?>
          </ul>
      </li>
  </ul>
  <div>
  <?php 

if(isset($_GET['notification'])){?>

<p class="notification"><?php echo $_GET['notification'];?></p>
<?php } ?>
<?php 

if(isset($_GET['feedback'])){?>

<p class="feedback"><?php echo $_GET['feedback'];?></p>
<?php } ?>

<?php 

if(isset($_GET['feedbackcol'])){?>

<p class="feedbackcol"><?php echo $_GET['feedbackcol'];?></p>
<?php } ?>
<?php 

if(isset($_GET['feedbackvp'])){?>

<p class="feedbackvp"><?php echo $_GET['feedbackvp'];?></p>
<?php } ?>
</div>
</div>
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
    <span class="fa fa-envelope text-white"></span> P.O. Box 138,<br>
    Dire Dawa,<br>
    Ethiopia<br>
    <span class="fa fa-globe text-white"></span> haramaya@haramaya.edu.et
  </p>
</div>
</body>
</html>