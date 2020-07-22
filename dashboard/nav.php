<?php
session_start();
error_reporting(0);
if($_SESSION['username']=="")
{
    header("location:login.php");
}
else{

    $requestscount=$obj->requestscount();
    $bloodbankcount=$obj->bloodbankcount();
    $donorcount=$obj->donorcount();

?>
<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/login.png" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>
            <?php
                            date_default_timezone_get('Asia/kolkata');
                             $time = date("H");
                            if ($time>"4" && $time < "12") {
                                echo "Good Morning, Ajinkya";
                            }
                            else if ($time >= "12" && $time < "17") {
                                echo "Good Afternoon, Ajinkya";
                            }
                            else if ($time >= "17" && $time <= "21") {
                                echo "Good Evening, Ajinkya";
                            }
                            else if ($time >= "21" || $time>=0) {
                                echo "Good Night, Ajinkya";
                            }
            ?>

            </span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <a class="mdl-navigation__link" href="accountsetting.php"><li class="mdl-menu__item"> Account Settings</li></a>
                <a class="mdl-navigation__link" href="logout.php"><li class="mdl-menu__item"> Logout</li></a>
            </ul>
          </div>
        </header>

        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">

                <a class="mdl-navigation__link menu1" href="index.php">
                <i class="mdl-color-text--blue-grey-400 material-icons">redo</i>
                <b class="fortxtchange menuname1">Requests <?php echo "<sup style='font-size:14px;'>(".$requestscount.")</sup>";?></b>
                </a>

                <a class="mdl-navigation__link menu1" href="bloodbank.php">
                <i class="mdl-color-text--blue-grey-400 material-icons">account_balance</i>
                <b class="fortxtchange menuname1">Blood Banks <?php echo "<sup style='font-size:14px;'>(".$bloodbankcount.")</sup>";?></b>
                </a>

                <a class="mdl-navigation__link menu9" href="donor.php">
                <i class="mdl-color-text--blue-grey-400 material-icons">how_to_reg</i>
                <b class="fortxtchange menuname9">Donors <?php echo "<sup style='font-size:14px;'>(".$donorcount.")</sup>";?></b>
                </a>

                </a>

        </nav>
      </div>
<?php }?>
