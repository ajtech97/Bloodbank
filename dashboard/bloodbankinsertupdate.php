<?php session_start();?>
    <?php error_reporting(0);

if($_SESSION['username']=="")
{
    header("location:login.php");
}
else{
  include("classes/mainfunctions.php");
  $obj=new maindbfunctions();
  $obj->connect();

  $link = mysqli_connect('localhost','root','','bloodbank');

  $ip=$obj->ipaddress();

  date_default_timezone_set('Asia/kolkata');
  $curdate=date('Y-m-d');
  $curtime=date('H:i:s');

  $bbid=$_REQUEST["bbid"];

if(isset($_REQUEST["updatedata"]))
{
        $bloodbankname=addslashes($_REQUEST["bloodbankname"]);
        $emailid=addslashes($_REQUEST["emailid"]);
        $address=addslashes($_REQUEST["address"]);
        $pincode=addslashes($_REQUEST["pincode"]);
        $staffcontact=addslashes($_REQUEST["staffcontact"]);
        $headcontact=addslashes($_REQUEST["headcontact"]);

        $tablename="bloodbankregistration";
        
        $ans=$obj->updatebloodbankdata($tablename,$bloodbankname,$emailid,$address,$pincode,$staffcontact,$headcontact,$bbid);

    if($ans==1)
    {
        echo "<script>alert('Blood Bank Updated Successfully');</script>";
        echo "<script>window.location='bloodbank.php';</script>";
    }
    else
    {
        echo "<script>alert('Blood Bank Update Failed');</script>";
        echo "<script>window.location='bloodbank.php';</script>";
    }
}
}
    ?>
