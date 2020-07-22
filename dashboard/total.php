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
?>
<!doctype html>
<html lang="en" ng-app="myapp" ng-controller="myctrl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Dashboard</title>

    <link rel="shortcut icon" href="images/headerimg.png">

    <link rel="stylesheet" href="css/index.css" type="text/css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/scrollbar.css">

    <style>
    .demo-card-square.mdl-card {
      width: 200px;
      height: 100px;
    }
    .demo-card-square > .mdl-card__title {
      color: #fff;
      background-color: black;
      /* background: */
        /* url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC; */
    }
    </style>
  </head>

  <body>

      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">

      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                      <div class="mdl-layout__header-row">
                          <span class="mdl-layout-title">Total</span>
                          <div class="mdl-layout-spacer"></div>
                      </div>
      </header>

          <?php include "nav.php"; ?>

      <main class="mdl-layout__content mdl-color--grey-100">


        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="mdl-grid">

            <div class="mdl-cell mdl-cell--2-col"></div>

            <div class="demo-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Update</h2>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--2-col"></div>

            <div class="demo-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Update</h2>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--2-col"></div>

            <div class="demo-card-square mdl-card mdl-shadow--2dp">
              <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">Update</h2>
              </div>
            </div>

      </div>
      </main>

      </div>


    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
<?php }?>
