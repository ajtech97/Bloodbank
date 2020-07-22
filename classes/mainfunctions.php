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
