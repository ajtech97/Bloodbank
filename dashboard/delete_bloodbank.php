<?php
session_start();
error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");
}
else{
  include("classes/mainfunctions.php");
  $obj=new maindbfunctions();
  $obj->connect();

  $link = mysqli_connect('localhost','root','','bloodbank');

  $bbid=$_REQUEST['val'];
  $query="DELETE FROM `bloodbankregistration` WHERE bbid=$bbid";
  $ans=mysqli_query($link,$query);
  echo $ans;
}
?>
