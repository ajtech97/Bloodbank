<html>
    <head>
        <title>Bloodbank.in</title>
        <link rel="icon"  type="image/png" href="images/headerimg.png">
        <link rel="stylesheet" href="css/bloodbank.css" type="text/css">
        <script>
//            function teamval()
//            {
//                var na = document.company.name.value;
//                var em = document.company.email.value;
//                var nu = document.company.con.value;
//                var co = document.company.com.value;
//                var se = document.company.services.value;
//                var me = document.company.message.value;
//
//                 if (na == "" || em == "" ||  nu == "" || co == "" || se == "" || me == "")
//                {
//                    alert("Enter All Reuired Fields");
//                    return false;
//                }
//                if (nu.length != 10)
//                {
//                    alert("Enter 10 Digit Mobile Number");
//                    return false;
//                }
//                if(na!= "" || em!= "" ||   nu!= "" || co!= "" || se!= "" || me!= "")
//                {
//                    alert("Submitted Successfully");
//                }
//            }

      </script>
    </head>
    <body>
        <div id="main">
            <?php include "header.php";?>
            <div id="backdiv1">
            <div id="form">
            <!-- <div id="blueheadd"></div> -->
            <!-- <div id="blueheadtextt">Get In Touch</div> -->
                    <form id="bloodbankform" method="post" onsubmit="return teamval()" action="bloodbankinsert.php">
                        <div id="inone">
                            <div id="intxtone">
                                <p id="bbnametxt">Blood Bank Name</p>
                                <p id="usernametxt">Username</p>
                                <p id="emailtxt">Email Id</p>
                            </div>
                            <input type="text" name="bbname" id="bbname" required>
                            <input type="text" name="username" id="username" required>
                            <input type="text" name="email" id="email" required>
                        </div>
                        <div id="intwo">
                            <div id="intxttwo">
                                <p id="addresstxt">Address</p>
                                <p id="pincodetxt">Pincode</p>
                                <p id="stafftxt">Staff Contact</p>
                            </div>
                            <input type="text" name="address" id="address" required>
                            <input type="text" name="pincode" id="pincode" required>
                            <input type="text" name="staffcontact" id="staffcontact" required>
                        </div>
                        <div id="inthree">
                            <div id="intxtthree">
                                <p id="headtxt">Head Contact</p>
                                <p id="passtxt">Password</p>
                                <p id="repasstxt">Re-enter Password</p>
                            </div>
                            <input type="text" name="headcontact" id="headcontact">
                            <input type="password" name="password" id="password" required>
                            <input type="password" name="repassword" id="repassword" required>
                        </div>
                        <div id="infour">
                            <input type="submit" name="sub" id="sub" value="Submit">
                        </div>
                    </form>
            </div>
            <img src="images/bloodlinebig.png" id="bloodline">
            </div>
            <footer>
                  <?php include "footer.php";?>
            </footer>
        </div>

    </body>
</html>
