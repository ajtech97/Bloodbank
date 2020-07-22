<?php

include("classes/mainfunctions.php");
$obj=new maindbfunctions();

$obj->connect();

$currdate=date('y-m-d');
$currtime=date('H:i:s');
$ipaddress=$obj->ipaddress();

if(isset($_POST['sub']))
{

   $fname=$_POST["fname"];
   $mname=$_POST["mname"];
   $lname=$_POST["lname"];
   $bloodgroup=$_POST["bloodgroup"];
   $gender=$_POST["gender"];
   $date=$_POST["date"];
   $contactno=$_POST["contactno"];
   $pincode=$_POST["pincode"];
   $email=$_POST["email"];


   $ans=$obj->insertdb("donorregistration","did","","firstname",$fname,"middlename",$mname,
                       "lastname",$lname,"bloodgroup",$bloodgroup,"gender",$gender,"dob",$date,
                       "contactno",$contactno,"pincode",$pincode,"emailid",$email,"currdate",$currdate,
                       "currtime",$currtime,"ipaddress",$ipaddress);
  if($ans=="yes")
  {
    echo "<script>alert('Submitted Successfully');</script>";
    echo "<script>window.location='donor.php';</script>";
  }
  else
  {
    echo "<script>alert('Submit Failed');</script>";
    echo "<script>window.location='donor.php';</script>";
  }
}
?>
