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
                                    <a href="dashboard.php" class="nav-link text-white ">
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
                                    <a href="booking.php" class="nav-link text-white active">
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
                              <?php
                              include('config.php');
                              $query = "SELECT * FROM bookings";
                              $result = mysqli_query($conn, $query);
                              $bookingData = array();
                              while ($row = mysqli_fetch_assoc($result)) 
                              {
                                    $bookingData[] = $row;
                              }
                        ?>
                              <h2 class="text-center text-uppercase my-3"><b>bookings</b></h2>
                              <div class="d-flex justify-content-center">
                                    <table class="table table-bordered border-secondary table-responsive">
                                          <thead class="text-center align-middle" style="font-size: 14px;">
                                                <tr>
                                                      <th>Booking ID</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>Phone No</th>
                                                      <th>Package</th>
                                                      <th>Tour Date</th>
                                                      <th>No of People</th%>
                                                      <th>Transport</th>
                                                      <th>Meal</th>
                                                      <th>No of Days</th>
                                                      <th>Amount</th>
                                                </tr>
                                          </thead>
                                          <tbody class="text-center align-middle" style="font-size: 13px;">
                                                <?php foreach ($bookingData as $booking) { ?>
                                                <tr>
                                                      <td><?php echo $booking['Booking_Id']; ?></td>
                                                      <td><?php echo $booking['Name']; ?></td>
                                                      <td><?php echo $booking['Email']; ?></td>
                                                      <td><?php echo $booking['PhoneNo']; ?></td>
                                                      <td><?php echo $booking['Package']; ?></td>
                                                      <td><?php echo $booking['TourDate']; ?></td>
                                                      <td><?php echo $booking['NoOfPeople']; ?></td>
                                                      <td><?php echo $booking['Transport']; ?></td>
                                                      <td><?php echo $booking['Meal']; ?></td>
                                                      <td><?php echo $booking['NoOfDays']; ?></td>
                                                      <td><?php echo $booking['Amount']; ?></td>
                                                </tr>
                                                <?php } ?>
                                          </tbody>
                                    </table>
                              </div>
                        </div>
                  </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>

</html>