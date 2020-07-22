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

$query1=mysqli_query($link,"select * from  donorregistration");
while($row=mysqli_fetch_array($query1))
{
    $did=$row["did"];
    $firstname=$row["firstname"];
    $middlename=$row['middlename'];
    $lastname=$row['lastname'];
    $bloodgroup=$row['bloodgroup'];
    $gender=$row['gender'];
    $contactno=$row['contactno'];
    $pincode=$row['pincode'];
    $emailid=$row['emailid'];

    $data.= '{"did":"'.$did.'","firstname":"'.ucwords($firstname).'","middlename":"'.ucwords($middlename).'","lastname":"'.ucwords($lastname).'","bloodgroup":"'.$bloodgroup.'","gender":"'.$gender.'","contactno":"'.$contactno.'","pincode":"'.$pincode.'","emailid":"'.$emailid.'"},';
}


$data.=']}';
$data=str_replace( '},]}', '}]}',$data);
echo $data;
}
?>
