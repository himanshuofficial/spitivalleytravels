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
<link rel="preload" href="images/banner-image.webp" as="image" />
<linK rel="preload" href="images/bg-footer.webp" as="image" />
<!-- <link rel="preload" href="fonts/fontawesome-webfont3e6e3e6e.eot?v=4.7.0" as="font" crossorigin="anonymous" />
<link rel="preload" href="fonts/fontawesome-webfontd41dd41d.eot?#iefix&v=4.7.0" as="font" crossorigin="anonymous" />
<link rel="preload" href="fonts/fontawesome-webfont3e6e3e6e.html?v=4.7.0" as="font" crossorigin="anonymous" />
<link rel="preload" href="fonts/fontawesome-webfont3e6e3e6e.woff?v=4.7.0" as="font" crossorigin="anonymous" />
<link rel="preload" href="fonts/fontawesome-webfont3e6e3e6e.ttf?v=4.7.0" as="font" crossorigin="anonymous" />
<link rel="preload" href="fonts/fontawesome-webfont3e6e3e6e.svg?v=4.7.0#fontawesomeregular" as="font" crossorigin="anonymous" /> -->

<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700');
  @import url('https://fonts.googleapis.com/css?family=Lobster');

  /* MY CSS STARTS HERE*/
  /**************whatap & enquiry start********/
  .section_mobile {
    display: block;
  }

  .inner_mobile {
    width: 100%;
    max-width: 100%;
    bottom: 0;
    background: #fed13c;
    position: fixed;
  }
  .col-md-3.p-0.col-3.col-xs-3 {
    color: #f7f7f7;
    height: 45px;
    justify-content: center;
    background: #243A51;
    cursor: pointer;
  }
  ._btn_bm, ._col_bm, ._col_m {
    text-align: center;
  }
  a[href^="tel:"] {
    color: inherit;
    text-decoration: none;
  }
  ._btn_bm i {
    margin-top: 12px;
  }
  .section_mobile .col-md-9 {
    width: 75%;
  }
  ._btn_bm, ._col_bm, ._col_m {
    text-align: center;
  }
  ._btn_bm, ._col_bm, ._col_m {
    text-align: center;
  }
  .section_mobile .col-md-12 {
    padding: 0;
  }
  ._btn_bm {
    margin: 0;
    /* width: 100%; */
    background: transparent;
    border: none;
    color: #fff;
    padding: 10px 0 10px 0;
  }
  .whtapp-icon {
    position: fixed;
    background: #4ec95c;
    bottom: 12%;
    /* left: 50%; */
    z-index: 99999999999;
    border-radius: 50%;
    height: 50px;
    width: 50px;
  }
  .whtapp-box i {
    /* background: #000; */
    /* z-index: 99999999999; */
    margin-left: 13px;
    font-size: 28px;
    margin-top: 11px;
    color: #fff;
  }
  /**************whatap & enquiry end********/
  .righter i {
    font-size: 19px;
    color: #0478c6;
  }
  .righter1 {
    border-right: 1px solid #d0bfbf;
    padding-right: 14px;
  }

  a:focus, a:hover {

    text-decoration: none !important;
  }
  .departure-cnt {
    color: #ffff;
  }
  .departure-cnt b {
    font-size: 18px;
  }
  .modal-header1 {
    border-bottom: 0px solid #ccc !important;
    margin-bottom: 7px !important;
    padding-bottom: 0 !important;
  }
  .righter {
    float: right;
    margin-right: 14px !important;
    text-align: center;
  }
  .col-sm-12.myclass1 h2 {
    color: #afafaf;
  }

  .modal1 {

    z-index: 99999!important;

  }
  .packselect {
    margin-bottom: 7px;
  }
  .btn-enq1 {
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    color: #333;
    background-color: #e7c61a;
    font-weight: 700 !important;
    margin: 3px 5px;
  }
  .package-content a:hover {
    text-decoration: none;
    color: #f6b74d;
  }
  .package-content a {
    text-decoration: none;
    color: #fff;
    font-size: 16px;
  }

  .myimage img {
    max-width: 100%;
  }
  .img-fluid {
    max-width: 100%;
    height: auto;
  }
  .section-header p {
    text-align: center;
    padding: 0;
    margin: 0;
    font-size: 15px;
    /* font-weight: 500; */
    color: #606060;
  }
  .single-package .package-image span {
    position: absolute;
    z-index: 99999;
    top: 13px;
    display: inline-block;
    background: #7e3c3c;
    padding: 6px 10px;
    font-weight: bold;
    color: #FFF;
    left: 14px;
    border-radius: 0 5px 5px 0px;
  }
  .button-slim {
    font-size: 13px;
    padding: 13px;
  }

  .myclass p {
    text-align: left !important;
    color: #b7b7b7;
    font-weight: normal !important;
  }
  .myclass h2 {
    text-align: left !important;
    color: #afafaf !important;
  }
  .button {
    position: relative;
    display: inline-block;
    vertical-align: middle;
    padding: 18px;
    font-size: 15px;
    line-height: 1.25;
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    color: #cda975;
    background-color: #332512;
    overflow: hidden;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  .colorb {
    color: blue;
    color: #afafaf !important;
    font-weight: bold;
    font-size: 22px;
  }
  .myheading h5 {
    color: #fff;
  }

  .mainheading h1 {
    margin: 18px 0 32px 0 !important;
    color: #eee;
  }

  .section-header {
    font-family: 'Roboto', sans-serif;
    /* background: #f7f7f7; */
    padding: 15px 40px;
    background: url(images/bkgimg.webp);
    background-size: cover;
    background-repeat: no-repeat;
  }


  .mydivccolor.div3 {
    height: 169px;
  }

  .mydivccolor.div5 {
    height: 178px;
  }

  .moredetails {
    margin: 10px 0;
    border-radius: 17px;
    background-color: #07a0c5;
    padding: 8px 16px;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    text-transform: none;
    color: #ffffff;
  }
  .aa {
    border-bottom: 1px solid #ccb8b8;
    padding-bottom: 23px;
    line-height: 28px;
  }
  .p2 span {
    font-size: 13px;
    color: #1a88bb;
  }
  .dept-cnt {
    color: #f00 !important;
    font-size: 15px !important;
  }
  .mypakage h1 {
    font-size: 15px !important;
    color: #dc143cf2 !important;
  }

  .mypakage h2 {
    margin: 15px 0px 7px;
    text-align: left !important;
    font-size: 19px;
  }

  .mypakage p {
    font-family: WorkSans;
  }

  .tag {
    position: absolute;
    background-color: #f34519;
    width: 70px;
    height: 29px;
    text-align: center;
    top: 14px;
    padding-top: 4px;
    color: white;
    border-radius: 0px 10px 10px 0;
    font-weight: bold;
  }

  .myline {
    text-decoration: line-through;
    font-style: italic;
    color: red;
  }
  .mydivccolor {
    /* background-color: #f9f9f9; */
    border-radius: 0;
    padding: 0;
    height: 196px;
  }
  .colorclass {
    color: green;
    font-style: italic;
  }

  .colorr{
    color:red;
    font-weight: bold;
  }

  .myclass p {
    text-align: left !important;;
  }

  .myclass h2 {
    text-align: left !important;
  }

  .myclass h4 {
    margin-top: 23px;
    margin-bottom: 2px;
    color: #ffc591;
  }

  /* MY CSS ENDS HERE*/




  #headtop {
    font-family: 'Roboto', sans-serif;
    background: #fff;
  }
  .leftwrap {
    padding: 1px;
  }
  .rgt {
    z-index: 9;
    width: 80%;
    margin-bottom: 9px;
    margin-top: 3px;
  }
  .rgts {
    margin-top: 40px;
  }
  .icn {
    margin-top: 40px !important;
  }
  .feature{
    position: absolute;
    right: 0;
  }
  .rgt p {
    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 14px;
    color: #545454;
    margin: 0px;
    padding: 20px 0px 0px;
  }

  .rgt p span {
    color: #444442;
    font-size: 12px;
    line-height: 0px;
    text-transform: uppercase;
  }
  .rgt p span i{
    font-size: 18px;
    margin-right: 5px;
  }
  .fa-cog {
    color: #fff;
    font-size: 18px !important;
    margin-top: 5px;
    text-align: center;
    background-color: none
  }
  .fa-bed {
    color: #fff;
    margin-top: 7px;
    text-align: center;
    background-color: none
  }
  .cent {
    text-align: center;
  }


  .p2 {
      font-family: Candara;
      font-size: 14px;
      color: #000000;
      line-height: 18px;}


  .hov-rotate {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
  }
  .hov-rotate:hover, .hov-rotate:focus, .hov-rotate:active {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
  }

  /* Ripple Out Yellow */
  @-webkit-keyframes hvr-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  @keyframes hvr-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  .hvr-ripple-out {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
  }
  .hvr-ripple-out:before {
    content: '';
    position: absolute;
    border: #e7c61a solid 6px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 4px;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
  }
  .hvr-ripple-out:hover:before, .hvr-ripple-out:focus:before, .hvr-ripple-out:active:before {
    -webkit-animation-name: hvr-ripple-out;
    animation-name: hvr-ripple-out;
  }

  /* Ripple Out Blue */
  @-webkit-keyframes hvr-blu-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  @keyframes hvr-blu-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  .hvr-blu-ripple-out {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
  }
  .hvr-blu-ripple-out:before {
    content: '';
    position: absolute;
    border: #23b4f0 solid 6px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 4px;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
  }
  .hvr-blu-ripple-out:hover:before, .hvr-blu-ripple-out:focus:before, .hvr-blu-ripple-out:active:before {
    -webkit-animation-name: hvr-blu-ripple-out;
    animation-name: hvr-blu-ripple-out;
  }

  /* Ripple Out Dark Blue */
  @-webkit-keyframes hvr-dblu-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  @keyframes hvr-dblu-ripple-out {
    100% {
      top: -12px;
      right: -12px;
      bottom: -12px;
      left: -12px;
      opacity: 0;
    }
  }
  .hvr-dblu-ripple-out {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
  }
  .hvr-dblu-ripple-out:before {
    content: '';
    position: absolute;
    border: #045fba solid 6px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 4px;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
  }
  .hvr-dblu-ripple-out:hover:before, .hvr-dblu-ripple-out:focus:before, .hvr-dblu-ripple-out:active:before {
    -webkit-animation-name: hvr-dblu-ripple-out;
    animation-name: hvr-dblu-ripple-out;
  }

  /* Grow */
  .hvr-grow {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: transform;
    transition-property: transform;
  }
  .hvr-grow:hover, .hvr-grow:focus, .hvr-grow:active {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
  }


  /*-- SLIDER --*/
  #slider {
    background: url(images/banner-image.webp) 0% -130px ;
    background-attachment: fixed;
    background-size: cover;
    padding: 20px 0px;
    width: 100%;
    color: #fff;
  }
  .query {
    font-family: 'Roboto', sans-serif;
      padding: 15px 20px;
      background-color: rgba(0, 0, 0, 0.60);
      border-radius: 5px;
      /* border: 1px solid #000; */
  }
  .query h1 {
    font-family: 'Roboto', sans-serif;
    font-size: 25px;
    text-align: center;
    margin:0px 0px 15px;
    padding: 0px; 
    font-weight: 400;
    color: #fff;
    /* text-shadow: 0px 1px 1px #012552; */
  }
  .heading {
    padding: 50px 100px;
  }
  .heading h3{
    font-family: 'Roboto', sans-serif;
    font-size: 40px;
    text-shadow: 0px 2px 2px rgba(1, 37, 82, 0.82);
  }
  .heading h5 {
    font-family: 'Roboto', sans-serif;
    font-size: 25px;
    font-weight: 300;
    text-shadow: 0px 2px 2px rgba(1, 37, 82, 0.82);
    background: #0003;
    padding: 0px 13px;
  }
  .form-group {
      margin-bottom: 8px !important;
  }
  .form-control {
      display: block;
      width: 100%;
      height: 34px;
      padding: 6px 12px;
      font-size: 14px;
      line-height: 1.42857143;
      color: #333 !important;
      background-color: #fff !important;
      background-image: none;
      border: 1px solid #fff !important;
      border-radius: 4px;
    box-shadow:none !important;
      /* -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
      -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
      -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
      transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s */;
  }
  .btn-plan {
      font-family: 'Roboto', sans-serif;
      color: #333;
      background-color: #e7c61a;
      width: 100%;
      font-weight: 700 !important;
      margin-top: 5px;
      text-transform: uppercase;
  }
  .btn-plan:hover , .btn-enq:hover, .btn-det:hover {
    color: #fff !important;
  }
  textarea.form-control {
      height: auto;
      min-height: 65px;
  }

  /*-- EXPERT --*/
  #expert {
    background: #005377;
    padding: 0px 0px;
    border-bottom: 1px solid #dadada;
  }
  #expert h2 {
    font-family: 'Roboto', sans-serif;
    font-weight: 700;
    color: #fff;
    font-size: 20px;
    padding: 0px;
    margin: 0px;
    line-height: 40px;
  }
  .iconset{
    float: left;
    width: 40px;
    height: 40px;
  }
  .iconset img{
    width: 80%
  }
  .icontext {
    float: left;
    font-family: 'Roboto', sans-serif;
    font-size: 13px;
    font-weight: 700;
    color: #fff;
    /* width: 200px; */
  }
  .icontext span {

      font-family: 'Roboto', sans-serif;
      font-size: 12px;
      font-weight: 400;
      color: #fff;

  }
  .bdr {
    border-right: 1px solid #dadada;
  }
  .pad {
    padding: 35px 0px 25px;
  }
  h1.small {
    font-size: 14px !important;
  }
  /*-- PACKAGES --*/
  #packages {
    font-family: 'Roboto', sans-serif;
    background: #f7f7f7;
    padding: 25px 0px;
  }
  .title {
    margin-top: 10px;
  }
  .title h1 {
    font-family: 'Roboto', sans-serif;
    font-size: 30px;
    font-weight: 800;
    color: #333;
    margin:0px;
    padding: 0px; 
    text-align: center;
    margin-bottom: 20px;
    text-transform: uppercase;
  }
  .pack {
    background: #F9F9F9;
    margin-bottom: 10px;
    transition: box-shadow .3s;
    transition: transform .1s;
    border-radius: 0;
    /* border: 1px solid #ccc; */
    background: #fff;

    border-radius: 0px 0px 5px 5px;
  }
  .pack:hover{
    box-shadow: 0 0 11px rgba(33,33,33,.2);
    transform: scale(1.005);
  }
  .gapbt {
    margin-bottom: 20px;
  }
  .packimage, .packimage img {
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .mydivccolor ul {
    margin: 0;
    padding-left: 19px;
  }
  .packdetails {
    border: 1px solid #ccc;
    padding: 20px;
    -webkit-border-bottom-right-radius: 5px;
    -webkit-border-bottom-left-radius: 5px;
    -moz-border-radius-bottomright: 5px;
    -moz-border-radius-bottomleft: 5px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    text-align: center;
    min-height: 478px;
  }
  .packdetails h1 {
    font-family: 'Roboto', sans-serif;
    color: #003071;
    font-size: 18px;
    font-weight: 700;
    text-align: left;
    margin: 0px;
    padding: 3px 0px;
    text-transform: uppercase;
  }
  .packdetails h3 {
    font-family: 'Roboto', sans-serif;
    color: #333;
    font-size:15px;
    font-weight: 400;
    text-align: center;
    padding: 5px 0px;
    margin: 0px 0px 5px;
  }
  .packdetails p {
    font-family: 'Roboto', sans-serif;
    color: #333;
    font-size: 14px;
    font-weight: 400;
    padding: 1px 5px;
    /* display: inline-block; */
    margin: 0px;
  }

  .btn-det {
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      color: #333;
      background-color: #23b4f0;
      font-weight: 700 !important;
      margin: 20px 5px;
  }
  .btn-enq {
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    color: #333;
    background-color: #e7c61a;
    font-weight: 700 !important;
    margin: 20px 5px;
  }
  .btn-view {
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      color: #fff;
      background-color: #045fba;
      font-weight: 700 !important;
      width: 70%;
  }
  .btn-view:hover {
    color: #b1d8ff !important;
  }

  /*-- HOVER EFFECT --*/
  .hovereffect {
  width:100%;
  height:100%;
  /*float:left;*/
  overflow:hidden;
  position:relative;
  text-align:center;
  cursor:default;
  }
  .hovereffect .overlay {
  width:100%;
  height:100%;
  position:absolute;
  overflow:hidden;
  top:0;
  left:0;
  opacity:0;
  background-color:rgba(0,0,0,0.5);
  -webkit-transition:all .4s ease-in-out;
  transition:all .4s ease-in-out
  }
  .hovereffect img {
  display:block;
  position:relative;
  -webkit-transition:all .4s linear;
  transition:all .4s linear;
  }
  .hovereffect h2 {
  text-transform:uppercase;
  color:#fff;
  text-align:center;
  position:relative;
  font-size:17px;
  background:rgba(0,0,0,0.6);
  -webkit-transform:translatey(-100px);
  -ms-transform:translatey(-100px);
  transform:translatey(-100px);
  -webkit-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
  padding:10px;
  }
  .hovereffect a.info {
  text-decoration:none;
  display:inline-block;
  text-transform:uppercase;
  color:#fff;
  border:1px solid #fff;
  background-color:transparent;
  opacity:0;
  filter:alpha(opacity=0);
  -webkit-transition:all .2s ease-in-out;
  transition:all .2s ease-in-out;
  margin:50px 0 0;
  padding:7px 14px;
  }
  .hovereffect a.info:hover {
  box-shadow:0 0 5px #fff;
  }
  .hovereffect:hover img {
  -ms-transform:scale(1.2);
  -webkit-transform:scale(1.2);
  transform:scale(1.2);
  }
  .hovereffect:hover .overlay {
  opacity:1;
  filter:alpha(opacity=100);
  }
  .hovereffect:hover h2,.hovereffect:hover a.info {
  opacity:1;
  filter:alpha(opacity=100);
  -ms-transform:translatey(0);
  -webkit-transform:translatey(0);
  transform:translatey(0);
  }
  .hovereffect:hover a.info {
  -webkit-transition-delay:.2s;
  transition-delay:.2s;
  }

  /*-- MOREINFO CSS --*/
  #moreinfo {
    background:#f2f4f6;
    padding: 10px 0px;
  }
  #moreinfo p{
    color: #535353:;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    line-height: 25px;
    font-weight: 500;
    text-align: center;
  }
  .tittle {
    margin-top: 10px;
  }
  .tittle h1 {
    font-family: 'Roboto', sans-serif;
    font-size: 30px;
    font-weight: 800;
    color: #333;
    margin:0px;
    padding: 0px; 
    text-align: center;
    margin-bottom: 30px;
    text-transform: uppercase;
  }
  .tittle h1::after {
    content: "\f10e";
    font-family: 'FontAwesome';
    margin-left: 10px;
    color: #ffc600;
  }
  .tittle h1::before {
    content: "\f10d";
    font-family: 'FontAwesome';
    margin-right: 10px;
    color: #ffc600;
  }

  /*-- FOTTER --*/
  #footer {
    background:#1c1c1c url(images/bg-footer.webp) 20% 30% no-repeat;
    padding: 30px 0px 20px;
  }
  #footer h4 {
    color: #fff;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
    font-weight: 800;
    border-bottom: 1px solid #5a5a5a;
    padding: 0px 0px 7px;
    margin-bottom: 13px;
  }
  #footer ul {
    padding: 0px 0px 0px 15px;
    color: #cccccc;
  }
  #footer li {
    padding: 0px;
    color: #cccccc;
    line-height:22px;
    padding: 6px 0px;
    list-style: none;
  }
  #footer li a {
    color: #cccccc;
    text-decoration: none;
    font-size: 13px;
  }
  #footer li a:hover {
    color: #ffc600;
  }
  h4.modal-title{
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    text-align: center;
    padding: 0px;
    font-weight: 500;
    color: #fff;
  }
  body{
    background-color: #f7f7f7 !important;
  }
  .modal-body {
      position: relative;
      padding: 20px 30px !important;
  }
  .modal-content {
      background: #fff !important;
      border: 1px solid #fff !important;
  }
  .former {
    border:1px solid #ccc !important;
    border-radius: 4px !important;
  }
  .heding {
      color: #333 !important;
  }
  .modal-header {
    border-bottom: 1px solid #ccc;
  }
  .close {
      float: right;
      color:#9a9999 !important;
      opacity: .3 !important;
  }
  .fixed{
      position: absolute;
      right: 0px;
      bottom: 30%;
      position: fixed;
      z-index: 99;
  }

  /* Icon Buzz Out */
  @-webkit-keyframes hvr-icon-buzz-out {
    10% {
      -webkit-transform: translateX(3px) rotate(2deg);
      transform: translateX(3px) rotate(2deg);
    }
    20% {
      -webkit-transform: translateX(-3px) rotate(-2deg);
      transform: translateX(-3px) rotate(-2deg);
    }
    30% {
      -webkit-transform: translateX(3px) rotate(2deg);
      transform: translateX(3px) rotate(2deg);
    }
    40% {
      -webkit-transform: translateX(-3px) rotate(-2deg);
      transform: translateX(-3px) rotate(-2deg);
    }
    50% {
      -webkit-transform: translateX(2px) rotate(1deg);
      transform: translateX(2px) rotate(1deg);
    }
    60% {
      -webkit-transform: translateX(-2px) rotate(-1deg);
      transform: translateX(-2px) rotate(-1deg);
    }
    70% {
      -webkit-transform: translateX(2px) rotate(1deg);
      transform: translateX(2px) rotate(1deg);
    }
    80% {
      -webkit-transform: translateX(-2px) rotate(-1deg);
      transform: translateX(-2px) rotate(-1deg);
    }
    90% {
      -webkit-transform: translateX(1px) rotate(0);
      transform: translateX(1px) rotate(0);
    }
    100% {
      -webkit-transform: translateX(-1px) rotate(0);
      transform: translateX(-1px) rotate(0);
    }
  }
  @keyframes hvr-icon-buzz-out {
    10% {
      -webkit-transform: translateX(3px) rotate(2deg);
      transform: translateX(3px) rotate(2deg);
    }
    20% {
      -webkit-transform: translateX(-3px) rotate(-2deg);
      transform: translateX(-3px) rotate(-2deg);
    }
    30% {
      -webkit-transform: translateX(3px) rotate(2deg);
      transform: translateX(3px) rotate(2deg);
    }
    40% {
      -webkit-transform: translateX(-3px) rotate(-2deg);
      transform: translateX(-3px) rotate(-2deg);
    }
    50% {
      -webkit-transform: translateX(2px) rotate(1deg);
      transform: translateX(2px) rotate(1deg);
    }
    60% {
      -webkit-transform: translateX(-2px) rotate(-1deg);
      transform: translateX(-2px) rotate(-1deg);
    }
    70% {
      -webkit-transform: translateX(2px) rotate(1deg);
      transform: translateX(2px) rotate(1deg);
    }
    80% {
      -webkit-transform: translateX(-2px) rotate(-1deg);
      transform: translateX(-2px) rotate(-1deg);
    }
    90% {
      -webkit-transform: translateX(1px) rotate(0);
      transform: translateX(1px) rotate(0);
    }
    100% {
      -webkit-transform: translateX(-1px) rotate(0);
      transform: translateX(-1px) rotate(0);
    }
  }
  .hvr-icon-buzz-out {
    /*display: inline-block;*/
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    padding-right: 2.2em;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }
  .hvr-icon-buzz-out:before {
    content: "\f0da";
    position: absolute;
    left: -1em;
    padding: 0 1px;
    color: #ffc600;
    font-family: FontAwesome;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
  }
  .hvr-icon-buzz-out:hover:before, .hvr-icon-buzz-out:focus:before, .hvr-icon-buzz-out:active:before {
    -webkit-animation-name: hvr-icon-buzz-out;
    animation-name: hvr-icon-buzz-out;
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
  }
  /*-- CAPTION --*/
  #caption {
    background: #090909;
    padding: 10px 0px;
  }
  #caption p {
    color: #999999;
    margin: 5px 0px 5px;
    padding: 0px;
  }
  #caption p img {
    margin: 0px 3px;
  }
  #caption i {
    font-size: 26px;
    padding:2px 5px;
  }
  #caption a {
    color: #999999;
  }
  #caption a:hover {
    color: #ffc600;
  }

  /* Sweep To Bottom */
  .hvr-sweep-to-bottom {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: perspective(1px) translateZ(0);
    transform: perspective(1px) translateZ(0);
    box-shadow: 0 0 1px transparent;
    position: relative;
    -webkit-transition-property: color;
    transition-property: color;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
  }

  /*-- Thankyou --*/
  #thnks {
    background: #fff;
    padding: 200px 0px;
  }
  .bg {background: #fff;}
    
  #thnks h1 {
    font-family: 'Roboto', sans-serif;
    font-size: 100px;
    color: #333;
    font-weight: 800;
    text-align: center;
  }
  #thnks h4 {
    color: #0caf0c;
    font-size: 100px;
    border-radius: 150px;
    text-align: center;
  }
  #thnks p {
    font-size: 25px;
    text-align: center;
  }



  /*-- RESPONSIVE CSS --*/
  @media (min-width:360px) and (max-width:640px) {
    .rgts {
    margin-top: 18px;
  }
    .righter{
      text-align: center;
    }


    #caption p {
      color: #999999;
      margin: 5px 0px 11px;
      padding: 0px;
      font-size: 12px;
    }
    #footer {
    background:#1c1c1c url(images/bg-footer.webp) no-repeat !important;
    background-size: cover !important;
    background-attachment: fixed !important;
    }

  }

  /*-- ORIENTATION --*/
  @media (max-device-width:640px) and (orientation:landscape) {

    #caption p {
      float: left;
      width: 50%;
    }
  }

  /*-- WIDTH 768 and WIDTH 900 --*/
  @media (min-width:768px) and (max-width:960px) {
    .btn-view {
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      color: #fff;
      background-color: #045fba;
      font-weight: 700 !important;
      margin: 20px 5px;
      font-size: 10px !important;
      width: 100%;
    }
    .heading, .feature, .fixed {
      display: none;
    }
    #headtop::after {
      position: absolute;
      left: 0px;
      width: 100%;
      height: auto;
      background: #292929;
      content: '';
      top: -1px;
      padding: 100px 0px;
    }
    #slider {
      background: url(images/banner-image.webp) 78% -40px;
      background-attachment: fixed;
      background-size: cover;
      padding: 20px 0px;
      width: 100%;
      color: #fff;
    }
      #footer {
    background:#1c1c1c url(images/bg-footer.webp) no-repeat !important;
    background-size: cover !important;
    background-attachment: fixed !important;
    }
  }

  /*-- ORIENTATION --*/
  @media (max-device-width:1024px) and (orientation:landscape) {
    #slider {
      background: url(images/banner-image.webp) 78% -40px;
      background-attachment: fixed;
      background-size: cover;
      padding: 20px 0px;
      width: 100%;
      color: #fff;
    }
    .feature {
      position: absolute;
      right: 4%;
    }
  .rgt p {
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      font-size: 15px;
      color: #000;
      margin: 0px;
      padding: 9px 0px 0px;
  }
  
    .rgt p span i {
      font-size: 13px;
      margin-right: 5px;
    }
  .footer-left{text-align:center; line-height:24px;}
  }

  @media only screen and (min-width:360px) and (max-width:640px) {
    .footer-left{
      text-align: center;
    }
      .rgt {
    height: 71px !important;
  }
  .pad {
    padding: 30px 22px 22px !important;
  }
  #expert h2 {
    line-height: 0  !important;
  }

  }

  /*-- WIDTH 320 --*/
  @media (max-width:320px) {
    #headtop::after {
      position: absolute;
      left: 0px;
      width: 100%;
      height: auto;
      background: #292929;
      content: '';
      top: -1px;
      padding: 48px 0px;
    }
    .rgt p {
      font-family: 'Roboto', sans-serif;
      font-weight: 300;
      font-size: 14px;
      color: #fff;
      margin: 0px;
      padding: 9px 0px 0px;
      text-align: center;
    }
  }

  /*-- ORIENTATION --*/


  /*-- WIDTH 768 --*/
  @media (max-width:768px) {
    .packdetails {
    height: auto;
  }
  .mydivccolor.div2 {
    height: auto;
  }
  .pack {
      height: auto;
  }
    .btn-view {
      text-transform: uppercase;
      font-family: 'Roboto', sans-serif;
      color: #fff;
      background-color: #045fba;
      font-weight: 700 !important;
      margin: 20px 5px;
      font-size: 12px !important;
      width: 100%;
    }
    .heading, .feature, .fixed {
      display: none;
    }
  }
  @font-face {
    font-family: 'FontAwesome';
    src: url('fonts/fontawesome-webfont3e6e3e6e.eot?v=4.7.0');
    src: url('fonts/fontawesome-webfontd41dd41d.eot?#iefix&v=4.7.0') format('embedded-opentype'), url('fonts/fontawesome-webfont3e6e3e6e.html?v=4.7.0') format('woff2'), url('fonts/fontawesome-webfont3e6e3e6e.woff?v=4.7.0') format('woff'), url('fonts/fontawesome-webfont3e6e3e6e.ttf?v=4.7.0') format('truetype'), url('fonts/fontawesome-webfont3e6e3e6e.svg?v=4.7.0#fontawesomeregular') format('svg');
    font-weight: normal;
    font-style: normal
  }
  .fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale
  }

  .fa-phone:before {
    content: "\f095"
  }

  .fa-envelope:before {
    content: "\f0e0"
  }
  .fa-whatsapp:before {
    content: "\f232"
  }

</style>
<link href="css/jquery-ui.css" rel="stylesheet">
</head>

<body>
  <!-- header starts -->
  <section id="headtop">
    <div class="container">
      <div class="row">
      
      <div class="col-md-3 col-xs-6 yellostrip">
      <div class="leftwrap">
       <a href="index.php"> <img loading="lazy" class="rgt" src="images/logo.webp" alt=" Logo"></a></div>
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



