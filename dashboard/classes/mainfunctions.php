<?php
error_reporting(0);
date_default_timezone_set('Asia/kolkata');
class maindbfunctions
{
            function connect()
            {

                 $link = mysqli_connect('localhost','root','','bloodbank');
                 if (!$link)
                 {
                   $msg="There is some problem with the Connection Please Check.
                   The Error is : ".mysqli_error();
                   mail("officialajinkyal@gmail.com","Blood Bank Connection Error",$msg);
                 }
            }


            function userlogin($user,$pass)
            {
                $link = mysqli_connect('localhost','root','','bloodbank');
                $count=0;
                $query=mysqli_query($link,"select count(*) as cou,name from users where name='$user' and pass='$pass'");
                $row=mysqli_fetch_array($query);
                $count=$row['cou'];
                if($count>0)
                {
                    return $row['name'];
                }
                else
                {
                    return "no";
                }
            }


            function checkrecorsarepresentornot($tablename,$columnname,$value)
            {
                    $link = mysqli_connect('localhost','root','','bloodbank');
                    $count=0;
                    $query=mysqli_query($link,"select count(*) as cou from ".$tablename." where ".$columnname."='".$value."'");
                    $row=mysqli_fetch_array($query);
                    $count=$row['cou'];
                    if($count>0)
                    {
                        return "yes";
                    }
                    else
                    {
                        return "no";
                    }
            }

            function updatepass($tablename,$name,$rnpass,$mob,$anomob,$email,$address,$curdate,$curtime,$ip)
            {
              $link = mysqli_connect('localhost','root','','bloodbank');
              $query=mysqli_query($link,"update ".$tablename." set name='$name',pass='$rnpass',mobileno='$mob',anothermobileno='$anomob',emailid='$email',address='$address',currdatetime='$curdate $curtime',ipaddress='$ip' where uid=1");
                if($query==1)
                {
                    return "yes";
                }
                else
                {
                    return "no";
                }
            }


            // Requests file
            function checkrequestmobpresentornot($tablename,$colmob,$value,$rid)
            {
                $link = mysqli_connect('localhost','root','','bloodbank');
                $count=0;
                $query=mysqli_query($link,"select count(*) as cou from ".$tablename." where ".$colmob."='".$value."' and rid<>'$rid'");
                $row=mysqli_fetch_array($query);
                $count=$row['cou'];
                if($count>0)
                {
                    return "yes";
                }
                else
                {
                    return "no";
                }
            }

            function updaterequestsdata($tablename,$name,$bloodgroup,$contactno,$pincode,$rid)
            {
               $link = mysqli_connect('localhost','root','','bloodbank');
               $query=mysqli_query($link,"update ".$tablename." set name='$name',bloodgroup='$bloodgroup',contact='$contactno',pincode='$pincode' where rid=$rid");
               return $query;
            }

            //bloodbak file

            function updatebloodbankdata($tablename,$bloodbankname,$emailid,$address,$pincode,$staffcontact,$headcontact,$bbid)
            {
              $link = mysqli_connect('localhost','root','','bloodbank');
              $query=mysqli_query($link,"update ".$tablename." set bloodbankname='$bloodbankname',emailid='$emailid',address='$address',pincode='$pincode',staffcontact='$staffcontact',headcontact='$headcontact' where bbid=$bbid");
              return $query;
            }

            //donor file

            function updatedonordata($tablename,$fname,$mname,$lname,$bloodgroup,$gender,$contactno,$pincode,$emailid,$did)
            {
              $link = mysqli_connect('localhost','root','','bloodbank');
              $query=mysqli_query($link,"update ".$tablename." set 	firstname='$fname',middlename='$mname',lastname='$lname',bloodgroup='$bloodgroup',gender='$gender',contactno='$contactno',pincode='$pincode',emailid='$emailid' where did=$did");
              return $query;
            }

            //nav file

            function requestscount()
            {
                $link = mysqli_connect('localhost','root','','bloodbank');
                $query=mysqli_query($link,"select count(*) as cou from requests");
                $row=mysqli_fetch_array($query);
                $reqcount=$row["cou"];
                return $reqcount;
            }

            function bloodbankcount()
            {
                $link = mysqli_connect('localhost','root','','bloodbank');
                $query=mysqli_query($link,"select count(*) as cou from bloodbankregistration");
                $row=mysqli_fetch_array($query);
                $bbcount=$row["cou"];
                return $bbcount;
            }

            function donorcount()
            {
                $link = mysqli_connect('localhost','root','','bloodbank');
                $query=mysqli_query($link,"select count(*) as cou from donorregistration");
                $row=mysqli_fetch_array($query);
                $dcount=$row["cou"];
                return $dcount;
            }

            function ipaddress()
            {

                    if(!empty($_SERVER['HTTP_CLIENT_IP']))
                    {
                      $ip=$_SERVER['HTTP_CLIENT_IP'];
                    }
                    elseif (!empty($_SERVER['HTTP_CLIENT_IP']))
                    {
                          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                    }
                    else
                    {
                          $ip=$_SERVER['REMOTE_ADDR'];

                    }
                    return $ip;
            }

      function insertdb()
      {
          /*
          first argument is table name and then column name , value
          Eg. ...->insertdb('tablename','column_name1','value1','column_name2','value2');
          */
        $link = mysqli_connect('localhost','root','','bloodbank');

        $j = 0;
        $col = '';
        $val = '';
        $info = func_get_args();
        $num = func_num_args();

        $table = "`" . $info[0] . "`";

        for ($j = 1; $j < $num; $j++) {
            if (($j % 2) == 0) {
                $val = $val . "'" . $info[$j] . "',";
            }
            if (($j % 2) == 1) {

                $col = $col . "`" . $info[$j] . "`,";
            }
        }
        $val = rtrim($val, ",");
        $col = rtrim($col, ",");
        //echo "insert into $table($col) values($val)";
        $ans=mysqli_query($link,"insert into $table($col) values($val)");
          if($ans==1)
          {
              return  "yes";
          }
          else
          {
              return "no";
          }
    }
}
?>
