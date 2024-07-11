<?php

// define variables and set to empty values
//$name = $email = $gender = $comment = $website=$dep = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date=test_input($_POST['date']);
    $name=test_input($_POST['name']);
    $offices=test_input($_POST['offices']);
    $salary=test_input($_POST['salary']);
    $rate=test_input($_POST['rate']);
    $purpose=test_input($_POST['purpose']);
    $departure=test_input($_POST['departure']);
    $destination=test_input($_POST['destination']);
    $travel=test_input($_POST['travel']);
    $nodays=test_input($_POST['nodays']);
    $payment=test_input($_POST['payment']);
    $fuel=test_input($_POST['fuel']);
    $incident=test_input($_POST['incident']);
    $totalbirr=test_input($_POST['totalbirr']);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$dateErr = $nameErr = $officesErr = $wsalaryErr = $rateErr="";
$name = $email = $gender = $comment = $website =$dep= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["date"])) {
    $dateErr = "Date is required";

  } else {
    $name = test_input($_POST["date"]);
  }
  if (empty($_POST["name"])) {
    $dateErr = "Name is required";

  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      
    }
  }


  if (empty($_POST["offices"])) {
    $officesErr = "school is required";
  } else {
    $offices = test_input($_POST["offices"]);
    
  }

  if (empty($_POST["programName"])) {
    $progErr = "project name is required";
  } else {
    $programName = test_input($_POST["programName"]);
    
  }

  if (empty($_POST["salary"])) {
    $salaryErr = "salary is required";
  } else {
    $salary = test_input($_POST["salary"]);
  }
  if (empty($_POST["rate"])) {
    $rateErr = "rate is required";
  } else {
    $rate= test_input($_POST["rate"]);
  }
  if (empty($_POST["purpose"])) {
    $rateErr = "purpose is required";
  } else {
    $purpose= test_input($_POST["purpose"]);
  }
  if (empty($_POST["departure"])) {
    $purposeErr = "purpose is required";
  } else {
    $purpose= test_input($_POST["departure"]);
  }
  if (empty($_POST["destination"])) {
    $destinationErr = "destination is required";
  } else {
    $destination= test_input($_POST["destination"]);
  }
  if (empty($_POST["travel"])) {
    $travelErr = "travel is required";
  } else {
    $travel= test_input($_POST["travel"]);
  }
  if (empty($_POST["nodays"])) {
    $nodaysErr = "nodays is required";
  } else {
    $nodays= test_input($_POST["nodays"]);
  }
  if (empty($_POST["payment"])) {
    $paymentErr = "payment is required";
  } else {
    $payment= test_input($_POST["payment"]);
  }
  if (empty($_POST["fuel"])) {
    $fuelErr = "fuel is required";
  } else {
    $dfuel= test_input($_POST["fuel"]);
  }
  if (empty($_POST["incident"])) {
    $incidentErr = "incident is required";
  } else {
    $incident= test_input($_POST["incident"]);
  }
  if (empty($_POST["totlbirr"])) {
    $totalbirrErr = "totalbirr is required";
  } else {
    $totalbirr= test_input($_POST["totalbirr"]);
  }




  
  
}
?>