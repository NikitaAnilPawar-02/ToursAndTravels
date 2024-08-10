<?php
session_start(); 

if (isset($_SESSION['UserLogin']) && $_SESSION['UserLogin'] === true) 
{
      $UserLogin = true; 
      $UserName = $_SESSION['UserName']; 
} 
else 
{
      $UserLogin = false; 
      $UserName = ""; 
}

if (isset($_SESSION['AdminLogin']) && $_SESSION['AdminLogin'] === true) 
{
      $AdminLogin = true; 
} 
else 
{
      $AdminLogin = false;
}
?>
<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                  crossorigin="anonymous" />
            <link rel="stylesheet" href="style.css" />
            <link rel="icon" href="Photos/11.png" type="image/icon type">


            <title>ExploreXperts - Contact</title>
      </head>

      <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <div class="container-fluid fw-bold">
                        <a href="" class="navbar-brand">
                              <h1 class="m-0 fw-bold" style="color:#6A0B33;">
                                    <span class="text-dark">Explore</span>Xperts
                              </h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                              data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                              aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                              <ul class="navbar-nav">
                                    <li class="nav-item">
                                          <a class="nav-link" href="home.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                          <a class="nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Tour packages
                                          </a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="chardham.php">Chardham</a></li>
                                                <li><a class="dropdown-item" href="darjeeling.php">Darjeeling</a></li>
                                                <li><a class="dropdown-item" href="himachal.php">Himachal</a></li>
                                                <li><a class="dropdown-item" href="kerala.php">Kerala</a></li>
                                                <li><a class="dropdown-item" href="ladakh.php">Ladakh</a></li>
                                                <li><a class="dropdown-item" href="kashmir.php">Kashmir</a></li>
                                                <li><a class="dropdown-item" href="rajasthan.php">Rajasthan</a></li>
                                                <li><a class="dropdown-item" href="andaman.php">Andaman</a></li>
                                          </ul>
                                    </li>
                                    <?php if (!$UserLogin && !$AdminLogin) { ?>
                                    <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Login
                                          </a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="login.php">User Login</a></li>
                                                <li><a class="dropdown-item" href="index.php">Admin Login</a></li>
                                          </ul>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                          <a class="nav-link active" href="contact.php">Contact</a>
                                    </li>
                              </ul>
                              <div class="d-flex align-items-center ms-auto">
                                    <?php if ($UserLogin) { ?>
                                    <div class="nav-item">Logged in as: <span
                                                class="fw-bold"><?php echo $UserName; ?></span></div>
                                    <a href="logout.php" class="btn btn-outline-danger ms-3">Logout</a>
                                    <?php } elseif ($AdminLogin) { ?>
                                    <div class="nav-item">Logged in as Admin</div>
                                    <a href="logout.php" class="btn btn-outline-danger ms-3">Logout</a>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </nav>

            <div class="container text-center">
                  <div class="row">
                        <div class="col-sm-7 mt-4 shadow rounded-3 p-4">
                              <form method="post" action="contact.php" class="px-5">
                                    <h2 class="mb-3">HAVE A QUESTION?</h2>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-user"
                                                      style="color:#6a0b33;"></i></span>
                                          <input type="text" class="form-control" placeholder="Your Name" name="Name"
                                                required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-envelope"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="email" class="form-control" placeholder="Email" name="Email"
                                                required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-phone"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="tel" class="form-control" placeholder="Phone Number"
                                                name="Phoneno" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-message"
                                                      style="color: #6a0b33;"></i></span>
                                          <textarea name="Message" class="form-control" placeholder="Message"
                                                required></textarea>
                                    </div>
                                    <input type="submit" value="Submit" name="submit" class="btn"
                                          style="background-color:#6A0B33; color:white;">
                              </form>
                        </div>

                        <?php

                              if (isset($_POST['submit'])) 
                              {
                                    $Name = $_POST['Name'];
                                    $Email = $_POST['Email'];
                                    $PhoneNo = $_POST['Phoneno'];
                                    $Message = $_POST['Message'];

                                    include('config.php');

                                    $sql = "INSERT INTO contacts (`name`, `email`, `phone`, `message`) 
                                    VALUES ('$Name', '$Email', '$PhoneNo', '$Message')";
                                    $iquery = mysqli_query($conn, $sql);
                                    if ($iquery) 
                                    {
                                          $Subject = "Contact Confirmation";
                                          $Body = "Hello! $Name Thank you...! For Contacting Us. We Will contact You as soon as possible.";
                                          $Sender = "From: explorexperts@gmail.com";
                                          if (mail($Email, $Subject, $Body, $Sender)) 
                                          {
                                                echo "<script> alert('Message send Successfully...!'); </script>";
                                          } 
                                          else 
                                          {
                                                echo "<script> alert('Message not Send...!'); </script>";
                                          }
                                    }
                                    else 
                                    {
                                          echo "<script> alert('Failed...!'); </script>";
                                    }
                              }
                        ?>

                        <div class="col-sm-5 mt-5 text-start ps-5">
                              <h3>CONTACT INFORMATION</h3>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-location-dot" style="color: #6a0b33;"></i>
                                    36, Vanrai Colony, Dhankawadi, Pune-411 043, Maharashtra, India.
                              </li>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-phone" style="color: #6a0b33;"></i>
                                    +91 81204 99140<br>
                                    <i class="fa-solid fa-phone" style="color: #6a0b33;"></i>
                                    +91 86547 15453
                              </li>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-envelope" style="color: #6a0b33;"></i>
                                    explorexperts@gmail.com
                              </li>
                        </div>
                  </div>
                  <div class="d-flex justify-content-center mt-5">
                        <img src="Photos/13.png" alt="contact" class="img-fluid">
                  </div>

            </div>


            <?php
                  include ('footer.html');
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                  crossorigin="anonymous"></script>

      </body>

</html>