
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <script src="login.js"></script>
  <link rel="stylesheet" href="home1.css">
  <script src="home.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
  <!--Header part of the home page-->
  <div class="container-fluid bgdiv2 div1">
    <div>
      <ul class="nav nav-pills">
     <li class="nav-item "> <a class="navbar-brand" href="#">
        <img src="huLogo.png" alt="HU Logo" style="width:90px;" class="rounded-pill"> 
      </a>
     </li>
     <li>
     </li>
    <li class="nav-item ">
    <h3>Haramaya University Perdiam Request Management Website</h3>
</li>
  </ul>
 </div>

   
<!--Navigation part of home page-->

<div class="container-fluid header2" >
  <nav class="navbar navbar-expand-sm  bg nav-tabs ">
          <ul class="nav nav-pills">
            
            <li class="nav-item tablink">
              <a class="nav-link text-white size  "  href="#"><span class="fa fa-fw fa-home text-warning"></span> HOME</a>
            </li>
            <li class="nav-item tablink">
              <a class="nav-link text-white size " href="about.html"><span class="fa fa-user-circle text-warning"></span> ABOUT</a>
            </li>
            <li class="nav-item tablink">
              <a class="nav-link text-white size"  href="#"><span class="fa fa-drivers-license text-warning"></span> SERVICE</a>
            </li>
            <li class="nav-item tablink">
              <a class="nav-link text-white size"  href="#"><span class="fab fa-facebook-messenger text-warning"></span> CONTACT</a>
            </li>
            <li class="nav-item tablink">
              <a class="nav-link text-white size"  href="#" ><span class="	fab fa-google-plus-g text-warning"></span> HELP</a></li>
          </ul>
          
          <i class="material-icons text-warning" >&#xe7fd;</i>
          <button class="btn btn-white text-white" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
          <a class="nav-link text-white size  " href="Home.php">Logout</a>
          <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-warning" type="button">Search</button>
          </form>
      </div>  
  </nav>
</div>
</div>
<!--body-->
<div class="row1">
  <div class="column">
    <div class="card">
      <img src="hugate.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Haramya University</h2>
        <p class="title">One the Top University in Ethiopia </p>
        <p>Haramaya University is a public research university in Haramaya, Oromia, Ethiopia. It is approximately 510 kilometres east of Addis Ababa, Ethiopia. The Ministry of Science and Higher Education admits qualified students to Haramaya University based on their score on the Ethiopian Higher Education Entrance Examination.</p>
        <p><a class="button" href="https://www.haramaya.edu.et/">Go to Official website</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="euro-1353420_1920.jpg" alt="Perdiem" style="width: 97%">
      <div class="container">
        <h2> Perdiem</h2>
        <p class="title">What is Perdiem?</p>
        <p>Per diem generally refers to an amount of money an employer provides for a traveling employee to cover their costs on a business trip.
           Usually, per diem is associated with lodging and meals and incidental expenses (M&IE). Companies are not required to provide per diem for their employees, however it allows the company to write off the business travel as an expense when done within government guidelines.
        <p><a class="button">See more</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="calculator-385506_1920.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>Calculating</h2>
        <p class="title">How to calculate the perdiem in Hamaraya University</p>
        <p>A company typically offers per diem to its employees so that it can write off the expense on their taxes following the governmental guidelines.
          Since most companies follow these guidelines, you can refer to them to get an idea of what per diem is available to you in those different locations or situations.</p>
        <p><a class="button">See More</a></p>
      </div>
    </div>
  </div>
</div>

<!--Login page-->

<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     <h3>Login Here</h3>
     <?php  if (isset($_GET['error'])) { ?>
      <p class="error"> <?php echo $_GET['error'];?></p>                                                                                                                        
    <?php } ?>
    </div>
    
    <div class="container">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" >
      <label for="text">Job position</label>
      <input type="text" name="jobposition" placeholder="Employee" list="job" id="jobpositon">
      <datalist id="job">
        <option value="Employee">
        <option value="Department Head">
        <option value="College Dean">
        <option value="Vice President">
        <option value="Accountant">
      </datalist>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" >
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!--Footer part of the home page-->
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