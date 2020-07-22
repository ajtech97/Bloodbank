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

    @keyframes popup_fadein {
        from {
            transform: scale(.5, .5);
        }
        to {
            transform: scale(1, 1);
        }
    }
    @keyframes popup_fadeout {
        from {
            transform: scale(1, 1);
        }
        to {
            transform: scale(.5, .5);
        }
    }

    table{
         width: 100%;
        table-layout: fixed;
    }

    .tbl-content{
  height:auto;
  width: 100%;
  max-height:343px;
  overflow-x:auto;
  margin-top: 0px;
  background-color: #64B5F6;
  }
    </style>
    <script>

    function deletebloodbank(val)
    {
      if(confirm("If you want to delete then press 'Ok'..!"))
      {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function()
      {
        if (this.readyState == 4 && this.status == 200)
        {
          if(this.responseText)
          {
            alert("Deleted successfully");
            window.location='bloodbank.php';
          }
          else
          {
            alert("Try again...");
            window.location='bloodbank.php';
          }
        }
      };
      xmlhttp.open("GET", "delete_bloodbank.php?val="+val, true);
      xmlhttp.send();
    }
  }

    </script>
  </head>
  <body>

      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                      <div class="mdl-layout__header-row">
                          <span class="mdl-layout-title">Blood Banks</span>
                          <div class="mdl-layout-spacer"></div>
                      </div>
      </header>

          <?php include "nav.php"; ?>

      <main class="mdl-layout__content mdl-color--grey-100">

      <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--5-col"></div>

      <div class="mdl-cell mdl-cell--6-col">

          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

              <input class="mdl-textfield__input" type="text" id="searchbox" ng-model="search">
              <label class="mdl-textfield__label" for="searchbox">Search</label>

          </div>

      </div>
      </div>

                           <center>
                              <h4 class="requestsnotfound">Oops... No Blood Banks Found</h4>
                           </center>
      <br>
      <br>
      <br>

       <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="bloodbanktable">

           <thead>

               <tr>
                                          <th class="mdl-data-table__cell--non-numeric">Sr No</th>
                                          <th class="mdl-data-table__cell--non-numeric">Blood Bank Name</th>
                                          <th class="mdl-data-table__cell--non-numeric">Email Id</th>
                                          <th class="mdl-data-table__cell--non-numeric">Address</th>
                                          <th class="mdl-data-table__cell--non-numeric">Pincode</th>
                                          <th class="mdl-data-table__cell--non-numeric">Staff Contact</th>
                                          <th class="mdl-data-table__cell--non-numeric">Head Contact</th>
                                          <th class="mdl-data-table__cell--non-numeric">Edit/View</th>
                                          <th class="mdl-data-table__cell--non-numeric">Delete</th>

              </tr>

          </thead>

      </table>

      <div class="tbl-content">

      <table  class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" style="width:100%;" id="bloodbanktable">

      <tbody>

                      <tr ng-repeat="x in con  | filter:search "  class="ng-scope" ng-model="search">

                          <input type="hidden" id="tblbbid{{x.bbid}}" value="{{x.bbid}}">
                          <input type="hidden" id="tblbloodbankname{{x.bbid}}" value="{{x.bloodbankname}}">
                          <input type="hidden" id="tblemailid{{x.bbid}}" value="{{x.emailid}}">
                          <input type="hidden" id="tbladdress{{x.bbid}}" value="{{x.address}}">
                          <input type="hidden" id="tblpincode{{x.bbid}}" value="{{x.pincode}}">
                          <input type="hidden" id="tblstaffcontact{{x.bbid}}" value="{{x.staffcontact}}">
                          <input type="hidden" id="tblheadcontact{{x.bbid}}" value="{{x.headcontact}}">


                                  <td data-label="Blood Bank Id" class="mdl-data-table__cell--non-numeric ng-binding">{{$index + 1}}</td>
                                  <td data-label="Blood Bank Name" class="mdl-data-table__cell--non-numeric ng-binding">{{x.bloodbankname}}</td>
                                  <td data-label="Email Id" class="mdl-data-table__cell--non-numeric ng-binding">{{x.emailid}}</td>
                                  <td data-label="Address" class="mdl-data-table__cell--non-numeric ng-binding">{{x.address}}</td>
                                  <td data-label="Pincode" class="mdl-data-table__cell--non-numeric ng-binding">{{x.pincode}}</td>
                                  <td data-label="Staff Contact" class="mdl-data-table__cell--non-numeric ng-binding">{{x.staffcontact}}</td>
                                  <td data-label="Head Contact" class="mdl-data-table__cell--non-numeric ng-binding">{{x.headcontact}}</td>

                                          <td data-label="Edit/View" class="mdl-data-table__cell--non-numeric ng-binding">
                                             <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Edit/View Bloodbank" onclick='editdata(this.id,"update")' id="{{x.bbid}}" for="kkk">
                                                 <div class="mdl-tooltip mdl-tooltip--large" for="kkk">Edit/View Requests</div>
                                                 <i class="material-icons" id="kkk" style="outline:none">edit</i>
                                              </button>
                                          </td>

                                           <td data-label="Delete" class="mdl-data-table__cell--non-numeric ng-binding">
                                             <button class="mdl-button mdl-js-button mdl-button--fab  mdl-button--colored asssignbtn" title="Delete Bloodbank" onclick='deletebloodbank(this.id)' id="{{x.bbid}}" for="deletecust">
                                                 <div class="mdl-tooltip mdl-tooltip--large" for="deletecust">Delete Requests</div>
                                                 <i class="material-icons" id="deletecust" style="outline:none;">delete</i>
                                              </button>
                                          </td>
                      </tr>

      </tbody>
      </table>
      </div>

      <dialog class="mdl-dialog">
          <form method="post" action="bloodbankinsertupdate.php" onsubmit="return valid();" enctype="multipart/form-data">

              <h4 id="custregname">Update Blood Bank</h4>
              <hr>
               <input type="hidden" name="bbid" id="bbid">

              <div class="mdl-grid">

                  <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <input class="mdl-textfield__input" type="text" name="bloodbankname" id="bloodbankname" placeholder="" required>
                          <label class="mdl-textfield__label" for="bloodbankname">Blood Bank Name*</label>

                      </div>
                  </div>

                  <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <input class="mdl-textfield__input" type="email" name="emailid" id="emailid" placeholder="" required>
                          <label class="mdl-textfield__label" for="emailid">Email Id*</label>

                      </div>
                  </div>

                   <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <textarea class="mdl-textfield__input"  name="address" id="address" placeholder="" required></textarea>
                          <label class="mdl-textfield__label" for="address">Address*</label>

                      </div>
                  </div>


              </div>

              <div class="mdl-grid">


                  <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <input class="mdl-textfield__input" type="text" name="pincode" id="pincode" placeholder="" required>
                          <label class="mdl-textfield__label" for="pincode">Pincode*</label>

                      </div>
                  </div>

                  <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <input class="mdl-textfield__input" type="text" name="staffcontact" id="staffcontact" placeholder="" required>
                          <label class="mdl-textfield__label" for="staffcontact">Staff Contact*</label>

                      </div>
                  </div>

                  <div class="mdl-cell mdl-cell--4-col">
                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                          <input class="mdl-textfield__input" type="text" name="headcontact" id="headcontact" placeholder="" required>
                          <label class="mdl-textfield__label" for="headcontact">Head Contact*</label>

                      </div>
                  </div>

              </div>


              <div class="mdl-grid">




              </div>


              <hr>

              <div class="mdl-dialog__actions" id="btnaction">

                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" onclick="colsepup()" type="button" id="closepopup">
                      <i class="material-icons forwhitecolor">close</i> Close
                  </button>

                  <button  class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored forwhitecolor" type="submit" value="update" id="updatedata" name="updatedata">
                      <i class="material-icons forwhitecolor">send</i>Update
                  </button>

              </div>

          </form>
      </dialog>

      </main>

      </div>

      <script>

      var dialog = document.querySelector('dialog');
                                 var showDialogButton = document.querySelector('#show-dialog');
                                 if (!dialog.showModal) {
                                     dialogPolyfill.registerDialog(dialog);
                                 }
                                 showDialogButton.addEventListener('click', function() {
                                     dialog.showModal();
                                 });
                                 dialog.querySelector('.close').addEventListener('click', function() {
                                     dialog.close();
                                 });


      function colsepup()
      {
         dialog.close();
         document.getElementById("bbid").value = "";
         document.getElementById("bloodbankname").value = "";
         document.getElementById("emailid").value = "";
         document.getElementById("address").value ="";
         document.getElementById("pincode").value = "";
         document.getElementById("staffcontact").value =  "";
         document.getElementById("headcontact").value =  "";

      }


      function editdata(val,val1) {
        if(val1=="update")
        {

            dialog.showModal();
            fillvalues(val);

        }
      }

        function fillvalues(val)
        {
            id = val;
            document.getElementById("bbid").value = document.getElementById("tblbbid" + id).value;
            document.getElementById("bloodbankname").value = document.getElementById("tblbloodbankname" + id).value;
            document.getElementById("emailid").value = document.getElementById("tblemailid" + id).value;
            document.getElementById("address").value = document.getElementById("tbladdress" + id).value;
            document.getElementById("pincode").value = document.getElementById("tblpincode" + id).value;
            document.getElementById("staffcontact").value = document.getElementById("tblstaffcontact" + id).value;
            document.getElementById("headcontact").value = document.getElementById("tblheadcontact" + id).value;

        }

</script>
<script>

                var cont = 0;

                var x = angular.module("myapp", []);
                x.controller("myctrl", function($scope, $http, $interval) {
                    $scope.getData = function() {
                        $http.get('bloodbankjson.php').success(function(data) {

                            $scope.con = data.records;


                            if (data.records == "") {
                                $("#bloodbanktable").fadeOut();
                                $(".requestsnotfound").fadeIn();


                            } else {
                                $("#bloodbanktable").fadeIn();
                                $(".requestsnotfound").fadeOut();
                            }
                            console.log(data.records);
                        });
                    };


                   $scope.intervalFunction = function() {
                       $interval(function() {
                           $scope.getData();
                       }, 3000)
                   };

                    $scope.getData();
                   $scope.intervalFunction();

                });
    </script>

    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </body>
</html>
<?php }?>
