<?php
session_start();
?>

<!doctype html>
<html lang="en">

      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>SignUp</title>
            <link rel="stylesheet" type="text/css" href="form.css">
            <link rel="icon" href="Photos/11.png" type="image/icon type">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                  crossorigin="anonymous">
      </head>

      <body>
            <form action="signup.php" method="Post">
                  <div class="position-absolute top-50 start-50 translate-middle form shadow-lg py-4 px-4">
                        <div class="container">
                              <div class="text-center pb-3">
                                    <h3 class="heading text-uppercase"><b>Sign Up</b></h3>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"
                                                style="color:#6A0B33;"></i></span>
                                    <input type="text" class="form-control" placeholder="Name" name="Name" size="25"
                                          required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-envelope"
                                                style="color: #6A0B33;"></i></span>
                                    <input type="email" class="form-control" placeholder="Email" name="Email" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-phone"
                                                style="color: #6A0B33;"></i></span>
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="Phoneno"
                                          pattern="[0-9]{10}" required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"
                                                style="color: #6A0B33;"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" name="Password"
                                          required>
                              </div>
                              <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-key"
                                                style="color: #6A0B33;"></i></span>
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                          name="CPassword" required>
                              </div>
                              <div class="button d-grid gap-2">
                                    <input type="submit" name="Submit" value="Sign Up"><br>
                              </div>
                              <div class="text-end">
                                    <small class="heading">Already have an account? <a href="login.php">Login
                                                now</a></small>
                              </div>
                        </div>
                  </div>
            </form>

      </body>

</html>

<?php
      include('config.php');
      if (isset($_POST['Submit'])) 
      {
            $Name = mysqli_real_escape_string($conn, $_POST['Name']);
            $Email = mysqli_real_escape_string($conn, $_POST['Email']);
            $Phoneno = mysqli_real_escape_string($conn, $_POST['Phoneno']);
            $Password = mysqli_real_escape_string($conn, $_POST['Password']);
            $CPassword = mysqli_real_escape_string($conn, $_POST['CPassword']);

            $Pass = password_hash($Password, PASSWORD_DEFAULT);
            $CPass = password_hash($CPassword, PASSWORD_DEFAULT);

            $Token = bin2hex(random_bytes(5));

            $emailquery = "SELECT * FROM users WHERE Email = '$Email' ";
            $query = mysqli_query($conn, $emailquery);
            $emailcount = mysqli_num_rows($query);

            if ($emailcount > 0) 
            {
                  echo "<script> alert('Email Already Exists !'); </script>";
            } 
            else
            {
                  if ($Password === $CPassword) 
                  {
                        $insertquery = "INSERT INTO users(`User_ID`, `Name`, `Email`, `Phoneno`, `Password`, `ConfirmPassword`, `Token`, `Status`) 
                                          VALUES ('', '$Name','$Email', '$Phoneno', '$Pass', '$CPass', '$Token', 'Inactive')";
                        $iquery = mysqli_query($conn, $insertquery);

                        if ($iquery) 
                        {
                              $Subject = "Email Activation";
                              $Body = "Hi, $Name. Click here to Activate your Account 
                                    http://localhost/Project2/Tours&Travels/activate.php?Token=$Token ";
                              $Sender = "From: explorexperts@gmail.com";
                              if (mail($Email, $Subject, $Body, $Sender)) 
                              {
                                    $_SESSION['UserLogin'] = true; 
                                    $_SESSION['UserName'] = $Name; 

                                    $_SESSION['msg'] = "Check your mail to Activate your account !!";
                                    header('Location:login.php');
                              } 
                              else 
                              {
                                    echo "<script> alert('Email sending Failed...!'); </script>";
                              }
                        } 
                        else
                        {
                              echo "<script> alert('Failed...!'); </script>";
                        }
                  } 
                  else 
                  {
                        echo "<script> alert('Passwords are not matching !'); </script>";
                  }
            }
      }
?>