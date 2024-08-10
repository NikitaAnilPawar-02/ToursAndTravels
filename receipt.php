<?php
session_start(); 
if (isset($_SESSION['AdminLogin']) && $_SESSION['AdminLogin'] === true) 
{
      $AdminLogin = true;
      $UserLogin = true; 
      $UserName = "Admin"; 
} 
elseif (isset($_SESSION['UserLogin']) && $_SESSION['UserLogin'] === true) 
{
      $UserLogin = true;
      $UserName = $_SESSION['UserName']; 
} 
else 
{
      header("location: login.php"); 
      exit;
}

      if (isset($_SESSION['Booking_Data'])) 
      {
            $BookingData = $_SESSION['Booking_Data'];
            $Amount = $BookingData['Amount'];
      }
?>

<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="UTF-8" />
            <meta Name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                  crossorigin="anonymous" />
            <link rel="icon" href="Photos/11.png" type="image/icon type">



            <!-------------Google Fonts--------------->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@800&display=swap" rel="stylesheet">
            <title>ExploreXperts</title>
      </head>

      <body>
            <!-------------Navbar-------------->
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
                                    <li class="nav-item">
                                          <a class="nav-link" href="contact.php">Contact</a>
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

            <div class="container mt-3">
                  <div class="row ">
                        <div class="col-sm-8 mt-1">
                              <h2 class="text-center">BOOKING INFORMATION</h2>
                              <div class="row mb-3">
                                    <div class="col-sm-8">
                                          <h6 class="mb-2 mt-2">From:</h6>
                                          <div>
                                                <strong>ExploreXperts</strong>
                                          </div>
                                          <div>+91 81204 99140</div>
                                          <div>+91 86547 15453</div>
                                          <div>explorexperts@gmail.com</div>
                                    </div>
                                    <div class="col-sm-4">
                                          <h6 class="mb-2 mt-2">To:</h6>
                                          <div>
                                                <strong><?php echo $BookingData['Name']; ?></strong>
                                          </div>
                                          <div><?php echo $BookingData['PhoneNo']; ?></div>
                                          <div><?php echo $BookingData['Email']; ?></div>
                                    </div>
                              </div>
                              <div class="table-responsive">
                                    <table class="table border border-2 border-primary mt-3">
                                          <tr>
                                                <th class="col-4">Booking ID</th>
                                                <td class="col-8"><?php echo $BookingData['Booking_Id']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Name</th>
                                                <td><?php echo $BookingData['Name']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Email</th>
                                                <td><?php echo $BookingData['Email']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Phone Number</th>
                                                <td><?php echo $BookingData['PhoneNo']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Package</th>
                                                <td><?php echo $BookingData['Package']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Tour Date</th>
                                                <td><?php echo $BookingData['TourDate']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Number of People</th>
                                                <td><?php echo $BookingData['NoOfPeople']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Mode of Transportation</th>
                                                <td><?php echo $BookingData['Transport']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Meal</th>
                                                <td><?php echo $BookingData['Meal']; ?></td>
                                          </tr>
                                          <tr>
                                                <th>Number of Days</th>
                                                <td><?php echo $BookingData['NoOfDays']; ?></td>
                                          </tr>
                                          <tr class="table-success">
                                                <th>Total Price</th>
                                                <td><?php echo $BookingData['Amount']; ?></td>
                                          </tr>
                                    </table>
                              </div>
                              <div class="d-flex justify-content-center mt-4">
                                    <a href="cancel_booking.php" class="btn btn-danger">Cancel Booking</a>
                              </div>
                        </div>
                        <div class="col-sm-4 mt-1">
                              <h3 class="text-center">PAYMENT INFORMATION</h3>
                              <h3 class="text-center text-success"><?php echo "Total Price: ".$Amount; ?></h3>
                              <div class="container">
                                    <div class="row">
                                          <div class="col-12 d-flex justify-content-center">
                                                <img src="Photos/QRcode.jpg" alt="Your Image" class="img-fluid mt-5">
                                          </div>
                                    </div>
                                    <div class="text-center text-danger mt-4">
                                          * IMPORTANT NOTE : AFTER PAYMENT PLEASE FILL THIS PAYMENT DETAILS FOR BOOKING CONFIRMATION. *
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                          <a href="payment_details.php" class="btn btn-success">Payment Details</a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!----------------footer---------------->
            <?php
                        include ('footer.html');
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                  crossorigin="anonymous"></script>
      </body>

</html>