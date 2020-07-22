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

  $rid=$_REQUEST["rid"];

if(isset($_REQUEST["updatedata"]))
{
        $name=addslashes($_REQUEST["name"]);
        $bloodgroup=addslashes($_REQUEST["bloodgroup"]);
        $contactno=addslashes($_REQUEST["contactno"]);
        $pincode=addslashes($_REQUEST["pincode"]);

$tablename="requests";
$colmob="contact";


$mobnoc=$obj->checkrequestmobpresentornot($tablename,$colmob,$contactno,$rid);

if($mobnoc=="no")
{
    $ans=$obj->updaterequestsdata($tablename,$name,$bloodgroup,$contactno,$pincode,$rid);
}
else
{
     echo "<script>alert('Mobile No Already Exist');</script>";
}
    if($ans==1)
    {
        echo "<script>alert('Requests Updated Successfully');</script>";
        echo "<script>window.location='index.php';</script>";
    }
    else
    {
        echo "<script>alert('Requests Update Failed');</script>";
        echo "<script>window.location='index.php';</script>";
    }
}
}
    ?>
