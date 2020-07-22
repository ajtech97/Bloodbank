<?php
error_reporting(0);
include("dashboard/classes/mainfunctions.php");
$obj=new maindbfunctions();
$obj->connect();

$requestscount=$obj->requestscount();
$bloodbankcount=$obj->bloodbankcount();
$donorcount=$obj->donorcount();
?>
<html>
    <head>
        <title>Bloodbank.in</title>
        <link rel="icon"  type="image/png" href="images/headerimg.png">
        <link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
    <body>
        <div id="main">
            <?php include "header.php";?>
            <div id="slider">
                <div id="txtone">
                    <p id="txt1">Save a Life.<br>Donate Blood.</p>
                    <p id="txt11">One pint of blood can save the life.</p>
                </div>

                <img src="images/slide1.jpg" id="donorslide1">
                <div id="searchbox">
                    <form name="searchform" id="searchform" action="requestsinsert.php" method="post">
                        <select name="bloodgroup" id="bloodgroup">
                            <option value="">Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <input type="text" name="name" id="name" placeholder="Name">
                        <input type="text" name="contactno" id="contactno" placeholder="Contact No">
                        <input type="text" name="pincode" id="pincode" placeholder="Pin Code">
                        <input type="submit" name="broadcastsms" id="broadcastsms" value="Send Request">
                    </form>
                </div>
            </div>
            <div id="outerdiv1">
                <img src="images/bloodline.png" id="bloodline">
                <div id="subdiv1">
                    <div id="box1">
                        <img src="images/bloodbottle.png" id="bloodbottle">
                        <p id="bloodtxt1">Who Can Give Blood?</p>
                    </div>
                    <div id="box2">
                        <img src="images/bloodwhy.png" id="bloodwhy">
                        <p id="bloodtxt2">Why To Donate Blood?</p>
                    </div>
                    <div id="box3">
                        <img src="images/bloodtips.png" id="bloodtips">
                        <p id="bloodtxt3">Tips On Blood Donation</p>
                    </div>
                </div>
            </div>
            <div id="outerdiv2">
                <div id="subdiv2">
                    <div id="boximg1">
                        <img src="images/bbottle.png">
                        <p id="bbottletxt">
                            &nbsp;<b><?php echo $donorcount;?></b><br>blood<br>doners
                        </p>
                    </div>
                    <div id="boximg2">
                        <img src="images/bhand.png">
                        <p id="bhandtxt">
                            &nbsp;&nbsp;&nbsp;<b><?php echo $requestscount;?></b><br>blood<br>requests
                        </p>
                    </div>
                    <div id="boximg3">
                        <img src="images/bdrop.png">
                        <p id="bdroptxt">
                            &nbsp;&nbsp;<b><?php echo $bloodbankcount;?></b><br>blood bank<br>&nbsp;&nbsp;&nbsp;&nbsp;count
                        </p>
                    </div>
                </div>
            </div>
            <footer>
                  <?php include "footer.php";?>
            </footer>
        </div>
    </body>
</html>
