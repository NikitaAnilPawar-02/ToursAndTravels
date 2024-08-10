<?php
session_start();
ob_start();
?>

<!doctype html>
<html lang="en">

      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Recover Password</title>
            <link rel="stylesheet" type="text/css" href="form.css">
            <link rel="icon" href="Photos/11.png" type="image/icon type">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                  crossorigin="anonymous">
      </head>

      <body>
            <form action="" method="Post">
                  <div class="position-absolute top-50 start-50 translate-middle form shadow-lg py-5 px-4">
                        <div class="container">
                              <div class="text-center">
                                    <h3 class="heading text-uppercase"><b>Recover Account</b></h3>
                                    <div class="alert alert-success" role="alert">
                                          <?php
                                                if (isset($_SESSION['passmsg'])) 
                                                {
                                                      echo $_SESSION['passmsg'];
                                                } 
                                                else 
                                                {
                                                      echo $_SESSION['passmsg'] = "";
                                                }
                                          ?>
                                    </div>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"
                                                style="color: #6a0b33;"></i></span>
                                    <input type="password" class="form-control" placeholder="New Password"
                                          name="Newpassword" size="25" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"
                                                style="color: #6a0b33;"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                          name="CPassword" required>
                              </div>
                              <div class="button d-grid gap-2">
                                    <input type="submit" name="Submit" value="Update Password"><br>
                              </div>
                              <div class="text-end">
                                    <small class="heading">Already have an account? <a href="login.php">Login
                                                now</a></small><br>
                              </div>
                        </div>
                  </div>
            </form>
      </body>

</html>

<?php
include('config.php');
if (isset($_POST['Submit'])) {
      if (isset($_GET['Token'])) 
      {
            $Token = $_GET['Token'];

            $Newpassword = mysqli_real_escape_string($conn, $_POST['Newpassword']);
            $CPassword = mysqli_real_escape_string($conn, $_POST['CPassword']);

            $Pass = password_hash($Newpassword, PASSWORD_DEFAULT);
            $CPass = password_hash($CPassword, PASSWORD_DEFAULT);

            if ($Newpassword === $CPassword) 
            {
                  $Updatequery = "UPDATE users SET Password = '$Pass' WHERE Token = '$Token' ";
                  $iquery = mysqli_query($conn, $Updatequery);

                  if ($iquery) 
                  {
                        $_SESSION['msg'] = "Your Password has been Updated...!";
                        header('Location:login.php');
                  } 
                  else 
                  {
                        $_SESSION['passmsg'] = "Your Password is not updated..!";
                        header('Location:recover_pass.php');
                  }
            } 
            else 
            {
                  $_SESSION['passmsg'] = "Password are not matching..!";
            }
      } 
      else 
      {
            echo "<script> alert('No Token Found !'); </script>";
      }
}
?>