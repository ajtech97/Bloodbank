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

  $did=$_REQUEST["did"];

if(isset($_REQUEST["updatedata"]))
{
        $fname=addslashes($_REQUEST["fname"]);
        $mname=addslashes($_REQUEST["mname"]);
        $lname=addslashes($_REQUEST["lname"]);
        $bloodgroup=addslashes($_REQUEST["bloodgroup"]);
        $gender=addslashes($_REQUEST["gender"]);
        $contactno=addslashes($_REQUEST["contactno"]);
        $pincode=addslashes($_REQUEST["pincode"]);
        $emailid=addslashes($_REQUEST["emailid"]);

        $tablename="donorregistration";

        $ans=$obj->updatedonordata($tablename,$fname,$mname,$lname,$bloodgroup,$gender,$contactno,$pincode,$emailid,$did);

    if($ans==1)
    {
        echo "<script>alert('Donor Updated Successfully');</script>";
        echo "<script>window.location='donor.php';</script>";
    }
    else
    {
        echo "<script>alert('Donor Update Failed');</script>";
        echo "<script>window.location='donor.php';</script>";
    }
}
}
    ?>
