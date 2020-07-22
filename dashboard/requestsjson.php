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
$query=mysqli_query($link,"select * from requests order by (currdate)");
while($row=mysqli_fetch_array($query))
{
    $rid=$row['rid'];
    $bloodgroup=$row['bloodgroup'];
    $name= $row['name'];
    $contact= $row['contact'];
    $pincode= $row["pincode"];

    $currdate=date("d-m-Y h:i:s A",strtotime($row['currdate']));

    $data.= '{"rid":"'.$rid.'","bloodgroup":"'.$bloodgroup.'","name":"'.ucwords($name).'","contact":"'.$contact.'","pincode":"'.$pincode.'"},';
}
$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
