<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Admin Login</title>
            <link rel="stylesheet" type="text/css" href="form.css">
            <link rel="icon" href="Photos/11.png" type="image/icon type">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
                  crossorigin="anonymous">
      </head>

      <body>
            <div class="container">
                  <form action="index.php" method="Post">
                        <div class="position-absolute top-50 start-50 translate-middle form py-5 px-4 shadow-lg">
                              <div class="container">
                                    <div class="text-center mb-5">
                                          <h3 class="heading text-uppercase"><b>Admin Login</b></h3>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-user"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="text" class="form-control" placeholder="Admin Username"
                                                name="AdminUsername" size="10" autocomplete="off" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-key"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="password" class="form-control" placeholder="Admin Password"
                                                name="AdminPassword" autocomplete="off" required>
                                    </div>
                                    <div class="button d-grid gap-2">
                                          <input type="submit" name="submit" value="Login"><br>
                                    </div>
                              </div>
                        </div>
                  </form>
            </div>
      </body>

</html>

<?php
session_start();

if (isset($_POST['submit'])) 
{
      $adminUsername = $_POST['AdminUsername'];
      $adminPassword = $_POST['AdminPassword'];

      $Username = "admin"; 
      $Password = "123";

      if ($adminUsername === $Username && $adminPassword === $Password) 
      {
            $_SESSION["AdminLogin"] = true;
            echo "Admin Login Successful...!";
            header("location: dashboard.php");
      } 
      else 
      {
            echo "<script> alert('Incorrect Admin Credentials...!'); </script>";
      }
}
?>