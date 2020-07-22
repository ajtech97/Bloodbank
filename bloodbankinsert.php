<?php

include("classes/mainfunctions.php");
$obj=new maindbfunctions();

$aa=$obj->connect();

$currdate=date('y-m-d');
$currtime=date('H:i:s');
$ipaddress=$obj->ipaddress();

if(isset($_POST['sub']))
{
   $bbname=$_POST["bbname"];
   $username=$_POST["username"];
   $email=$_POST["email"];
   $address=$_POST["address"];
   $pincode=$_POST["pincode"];
   $staffcontact=$_POST["staffcontact"];
   $headcontact=$_POST["headcontact"];
   $password=$_POST["password"];


   $ans=$obj->insertdb("bloodbankregistration","bbid","","bloodbankname",$bbname,"username",$username,
                       "emailid",$email,"address",$address,"pincode",$pincode,"staffcontact",$staffcontact,
                       "headcontact",$headcontact,"password",$password,"currdate",$currdate,"currtime",$currtime,
                       "ipaddress",$ipaddress);
  if($ans=="yes")
  {
    echo "<script>alert('Submitted Successfully');</script>";
    echo "<script>window.location='bloodbank.php';</script>";
  }
  else
  {
    echo "<script>alert('Submit Failed');</script>";
    echo "<script>window.location='bloodbank.php';</script>";
  }
}
?>
