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

$data='{
	"records": [';

$query1=mysqli_query($link,"select * from  bloodbankregistration");
while($row=mysqli_fetch_array($query1))
{
    $bbid=$row["bbid"];
    $bloodbankname=$row["bloodbankname"];
    $emailid=$row['emailid'];
    $address=$row['address'];
    $pincode=$row['pincode'];
    $staffcontact=$row['staffcontact'];
    $headcontact=$row['headcontact'];

    $data.= '{"bbid":"'.$bbid.'","bloodbankname":"'.ucwords($bloodbankname).'","emailid":"'.$emailid.'","address":"'.$address.'","pincode":"'.$pincode.'","staffcontact":"'.$staffcontact.'","headcontact":"'.$headcontact.'"},';
}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
