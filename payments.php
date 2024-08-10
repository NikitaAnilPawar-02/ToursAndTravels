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
                                    <a href="booking.php" class="nav-link text-white ">
                                          <i class="fa-solid fa-suitcase-rolling bipe-none me-2" width="16" height="16"
                                                style="color: #ffffff;"></i>
                                          Booking
                                    </a>
                              </li>
                              <li>
                                    <a href="payments.php" class="nav-link text-white active">
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
                              $query = "SELECT * FROM payment";
                              $result = mysqli_query($conn, $query);
                              $paymentData = array();
                              while ($row = mysqli_fetch_assoc($result)) 
                              {
                                    $paymentData[] = $row;
                              }
                              ?>
                              <h2 class="text-center text-uppercase my-3"><b>Payments</b></h2>
                              <div class="d-flex justify-content-center">
                                    <table class="table table-bordered border-secondary table-responsive">
                                          <thead class="text-center align-middle">
                                                <tr>
                                                      <th>Payment ID</th>
                                                      <th>Name</th>
                                                      <th>Email</th>
                                                      <th>Transaction ID</th>
                                                      <th>Amount</th>
                                                      <th>Proof</th>
                                                      <th>Status</th>
                                                      <th>Actions</th>
                                                </tr>
                                          </thead>
                                          <tbody class="text-center align-middle">
                                                <?php foreach ($paymentData as $payment) { ?>
                                                <tr>
                                                      <td><?php echo $payment['Payment_Id']; ?></td>
                                                      <td><?php echo $payment['Name']; ?></td>
                                                      <td><?php echo $payment['Email']; ?></td>
                                                      <td><?php echo $payment['TransactionID']; ?></td>
                                                      <td><?php echo $payment['Amount']; ?></td>
                                                      <td>
                                                            <a href="#" data-bs-toggle="modal"
                                                                  data-bs-target="#proofModal-<?php echo $payment['Payment_Id']; ?>">
                                                                  <img src="Payments/<?php echo $payment['Proof']; ?>"
                                                                        alt="Payment Proof" width="100">
                                                            </a>
                                                      </td>
                                                      <td><?php echo $payment['Status']; ?></td>
                                                      <td class="text-center">
                                                            <form method="post" action="payment_approval.php"
                                                                  class="d-flex">
                                                                  <input type="hidden" name="Payment_Id"
                                                                        value="<?php echo $payment['Payment_Id']; ?>">
                                                                  <input type="hidden" name="Name"
                                                                        value="<?php echo $payment['Name']; ?>">
                                                                  <input type="hidden" name="TransactionID"
                                                                        value="<?php echo $payment['TransactionID']; ?>">
                                                                  <input type="hidden" name="Amount"
                                                                        value="<?php echo $payment['Amount']; ?>">
                                                                  <input type="hidden" name="Email"
                                                                        value="<?php echo $payment['Email']; ?>">
                                                                  <button type="submit"
                                                                        class="btn btn-success btn-sm flex-grow-1 m-1"
                                                                        name="approve">Approve</button>
                                                            </form>
                                                            <form method="post" action="payment_reject.php"
                                                                  class="d-flex">
                                                                  <input type="hidden" name="Payment_Id"
                                                                        value="<?php echo $payment['Payment_Id']; ?>">
                                                                  <input type="hidden" name="Name"
                                                                        value="<?php echo $payment['Name']; ?>">
                                                                  <input type="hidden" name="TransactionID"
                                                                        value="<?php echo $payment['TransactionID']; ?>">
                                                                  <input type="hidden" name="Amount"
                                                                        value="<?php echo $payment['Amount']; ?>">
                                                                  <input type="hidden" name="Email"
                                                                        value="<?php echo $payment['Email']; ?>">
                                                                  <button type="submit"
                                                                        class="btn btn-danger btn-sm flex-grow-1 m-1"
                                                                        name="reject">Reject</button>
                                                            </form>
                                                      </td>
                                                </tr>
                                                <?php } ?>
                                          </tbody>
                                    </table>
                                    <?php foreach ($paymentData as $payment) { ?>
                                    <div class="modal fade" id="proofModal-<?php echo $payment['Payment_Id']; ?>" tabindex="-1"
                                          aria-labelledby="proofModalLabel-<?php echo $payment['Payment_Id']; ?>"
                                          aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                  id="proofModalLabel-<?php echo $payment['Payment_Id']; ?>">
                                                                  Payment Proof</h5>
                                                            <button type="button" class="btn-close"
                                                                  data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <img src="Payments/<?php echo $payment['Proof']; ?>"
                                                                  alt="Payment Proof" class="img-fluid">
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <?php } ?>
                              </div>
                        </div>
                  </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </body>

</html>