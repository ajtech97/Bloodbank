<html>
    <head>
        <title>Bloodbank.in</title>
        <link rel="icon"  type="image/png" href="images/headerimg.png">
        <link rel="stylesheet" href="css/donor.css" type="text/css">
        <script>
//            function teamval()
//            {
//                var na = document.company.name.value;
//                var em = document.company.lname.value;
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
                    <form id="bloodbankform" method="post" onsubmit="return teamval()" action="donorinsert.php">
                        <div id="inone">
                            <div id="intxtone">
                                <p id="fnametxt">First Name</p>
                                <p id="mnametxt">Middle Name</p>
                                <p id="lnametxt">Last Name</p>
                            </div>
                            <input type="text" name="fname" id="fname" required>
                            <input type="text" name="mname" id="mname" required>
                            <input type="text" name="lname" id="lname" required>
                        </div>
                        <div id="intwo">
                            <div id="intxttwo">
                                <p id="bgrouptxt">Blood Group</p>
                                <p id="gendertxt">Gender</p>
                                <p id="dobtxt">Date of Birth</p>
                            </div>
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
                            <div id="genderback">
                            <p id="maletxt">Male</p><input type="radio" name="gender" id="male" value="Male">
                            <p id="femaletxt">Female</p><input type="radio" name="gender" id="female" value="Female">
                            </div>
                            <input type="date" name="date" id="date">
                        </div>
                        <div id="inthree">
                            <div id="intxtthree">
                                <p id="contxt">Contact No</p>
                                <p id="pintxt">Pincode</p>
                                <p id="emailtxt">Email Id</p>
                            </div>
                            <input type="text" name="contactno" id="contactno">
                            <input type="text" name="pincode" id="pincode" required>
                            <input type="text" name="email" id="email" required>
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
