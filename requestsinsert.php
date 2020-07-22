<?php

include("classes/mainfunctions.php");
$obj=new maindbfunctions();

$obj->connect();

$currdate=date('y-m-d');
$currtime=date('H:i:s');
$ipaddress=$obj->ipaddress();

if(isset($_POST['broadcastsms']))
{

   $bloodgroup=$_POST["bloodgroup"];
   $name=$_POST["name"];
   $contactno=$_POST["contactno"];
   $pincode=$_POST["pincode"];

   $ans=$obj->insertdb("requests","rid","","bloodgroup",$bloodgroup,"name",$name,
                       "contact",$contactno,"pincode",$pincode,"currdate",$currdate,
                       "currtime",$currtime,"ipaddress",$ipaddress);
  if($ans=="yes")
  {
    echo "<script>alert('Requested Successfully');</script>";
    echo "<script>window.location='index.php';</script>";
  }
  else
  {
    echo "<script>alert('Request Failed');</script>";
    echo "<script>window.location='index.php';</script>";
  }
}
?>
