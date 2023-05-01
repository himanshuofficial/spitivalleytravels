<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$duration = $_POST['duration'];
$date = $_POST['date'];
$adult = $_POST['adult'];
$message = $_POST['message'];

$formcontent="From: ".$name ."\n Email: ".$email ."\n Mobile: ". $contact ." \n Duration: ". $duration." \n Date: ". $date." \n No. of Adults :- ".$adult."\n Your Message :- ".$message." "; 
 
$recipient = "spitivalleytravels@gmail.com,himalayanfootslog@gmail.com";
//$recipient = "33infotech@gmail.com";
$subject = "Contact Form spitivalleytravels.com";
$mailheader = "From:". $email." \r\n";
if(mail($recipient, $subject, $formcontent, $mailheader)){
	//$msg = "Your Request successfully Submitted.";
	echo "<script> location.href = 'thankyou.php';</script>";
}
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Spiti Valley Tour Packages</title> 
<meta name="description" content="Leh Ladakh Tour Packages - Find the Leh Ladakh Tour Packages at discounted price. best price on Leh Ladakh Tour Packages."/>
<meta name="keywords" content="Leh Ladakh Tour Packages, Tours to Leh Ladakh, Tour Package to Leh Ladakh, Leh Ladakh Tourism, Packages to Leh Ladakh, Leh Ladakh Tour Package, Leh Ladakh Packages, Holidays in Leh Ladakh, Leh Ladakh Holiday Packages, Leh Ladakh Tours, Package Tour to Leh Ladakh, Trip to Leh Ladakh" />
<link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="css/font-awesome.min.css">
<link href="css/jquery-ui.css" rel="stylesheet">
</head>

<body>
  <!-- header starts -->
  <section id="headtop">
    <div class="container">
      <div class="row">
      
      <div class="col-md-3 col-xs-6 yellostrip">
      <div class="leftwrap">
       <a href="index.php"> <img class="rgt" src="images/logo.png" alt=" Logo"></a></div>
      </div>
	
	 <div class="col-md-1"></div>
        
      <div class="col-md-8 col-xs-6">
      <div class=" rgts">
          <div class="row">

            <div class="col-sm-12">
            <p class="righter "><span><i class="fa fa-envelope" aria-hidden="true"></i></span><br>
             spitivalleytravels@gmail.com</p>
			<p class="righter righter1 hidden-xs"><span><i class="fa fa-phone" aria-hidden="true"></i> </span><br>
            +91-8353040008 </p>
            </div>
        </div>
      </div>
      </div>

      </div>
    </div>
  </section>
  <!-- header ends -->



