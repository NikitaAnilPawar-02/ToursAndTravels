<?php
session_start();

if (!isset($_SESSION["AdminLogin"]) || $_SESSION["AdminLogin"] !== true) 
{
      header("location: index.php");
      exit; 
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

            <!-------------Google Fonts--------------->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@800&display=swap" rel="stylesheet">
            <title>Admin Dashboard</title>
      </head>

      <body>
            <div class="d-flex" style="min-height: 100vh">
                  <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px">
                        <a href="dashboard.php"
                              class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                              <img src="Photos/11.png" alt="Logo" class="bi pe-none me-2" width="40" height="32" />
                              <span class="fs-4">Dashboard</span>
                        </a>
                        <hr />
                        <ul class="nav nav-pills flex-column mb-auto">
                              <li class="nav-item">
                                    <a href="dashboard.php" class="nav-link text-white active">
                                          <i class="fa-solid fa-house bipe-none me-2" width="16" height="16"
                                                style="color: white"></i>
                                          Home
                                    </a>
                              </li>
                              <li>
                                    <a href="users.php" class="nav-link text-white">
                                          <i class="fa-solid fa-user bipe-none me-2" width="16" height="16"
                                                style="color: #ffffff;"></i>
                                          Users
                                    </a>
                              </li>
                              <li>
                                    <a href="booking.php" class="nav-link text-white">
                                          <i class="fa-solid fa-suitcase-rolling bipe-none me-2" width="16" height="16"
                                                style="color: #ffffff;"></i>
                                          Booking
                                    </a>
                              </li>
                              <li>
                                    <a href="payments.php" class="nav-link text-white">
                                          <i class="fa-solid fa-wallet bipe-none me-2" width="16" height="16"
                                                style="color: #ffffff;"></i>
                                          Payments
                                    </a>
                              </li>
                              <li>
                                    <a href="contactus.php" class="nav-link text-white">
                                          <i class="fa-solid fa-address-card bipe-none me-2" width="16" height="16"
                                                style="color: #ffffff;"></i>
                                          Contact us
                                    </a>
                              </li>
                        </ul>
                        <hr />
                        <div class="d-flex justify-content-center">
                              <a href="logout.php" class="btn btn-danger">Log out</a>
                        </div>
                  </div>
                  <div class="flex-grow-1">

                        <div class="container">
                              <h1 class="m-0 fw-bold text-center mt-4" style="color:#6A0B33;">
                                    <span class="text-dark">Welcome to Explore</span>Xperts
                              </h1>

                              <div class="row mt-1 text-center">
                                    <div class="col-md-6 p-4">
                                          <a href="users.php" class="text-decoration-none text-dark">
                                                <img src="Photos/users.png" class="rounded-2" alt="users" width="20%">
                                                <h3 class="card-text fw-bold">Users</h3>
                                                <span class="badge bg-primary">New</span>
                                          </a>
                                    </div>
                                    <div class="col-md-6 p-4">
                                          <a href="booking.php" class="text-decoration-none text-dark">
                                                <img src="Photos/booking.png" class="rounded-2" alt="booking"
                                                      width="20%">
                                                <h3 class="card-text fw-bold">Booking</h3>
                                                <span class="badge bg-danger">New</span>
                                          </a>
                                    </div>
                              </div>
                              <div class="row mt-1 text-center">
                                    <div class="col-md-6 p-4">
                                          <a href="payments.php" class="text-decoration-none text-dark">
                                                <img src="Photos/payment.png" class="rounded-2" alt="Payments"
                                                      width="20%">
                                                <h3 class="card-text fw-bold">Payments</h3>
                                                <span class="badge bg-success">New</span>
                                          </a>
                                    </div>
                                    <div class="col-md-6 p-4">
                                          <a href="contactus.php" class="text-decoration-none text-dark">
                                                <img src="Photos/contacts.png" class="rounded-2" alt="Contact Us"
                                                      width="20%">
                                                <h3 class="card-text fw-bold">Contact Us</h3>
                                                <span class="badge bg-warning">New</span>
                                          </a>
                                    </div>
                              </div>

                              <div class="d-flex justify-content-center mt-4">
                                    <a href="home.php" class="btn btn-outline-success">Go to Website</a>
                              </div>
                        </div>
                  </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>

</html>