<?php
      session_start();

      include('config.php');
      if(isset($_GET['Token']))
      {
            $Token = $_GET['Token'];
            // $Status  = "Active";
            $Updatequery = "UPDATE users SET Status = 'Active' WHERE Token = '$Token' ";

            $Query = mysqli_query($conn,$Updatequery) or die(mysqli_error($conn));
            if(mysqli_affected_rows($conn)==1)
            {
                  if(isset($_SESSION['msg']))
                  {
                        $_SESSION['msg'] = "Account Updated Successfully";
                        header('Location:login.php');
                  }
                  else
                  {
                        $_SESSION['msg'] = "You are Logged Out";
                        header('Location:login.php');
                  }
            }
            else
            {
                  $_SESSION['msg'] = "Account not updated";
                  header('Location:signup.php');
            }
      }

?>