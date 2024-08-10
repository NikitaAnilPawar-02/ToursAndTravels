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
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
                  integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
                  crossorigin="anonymous" />
            <link rel="stylesheet" href="style.css" />
            <link rel="icon" href="Photos/11.png" type="image/icon type">


            <title>ExploreXperts - Payment Details</title>
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

            <div class="container text-center">
                  <div class="row">
                        <div class="col-sm-7 mt-4 p-4 shadow rounded-3">
                              <form method="post" action="payment_details.php" class="px-5"
                                    enctype="multipart/form-data">
                                    <h2>CONFIRMATION</h2>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-user"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="text" class="form-control" placeholder="Your Name" name="Name"
                                                required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-envelope"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="email" class="form-control"
                                                value="<?php echo $BookingData['Email']; ?>" name="Email">
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-hashtag"
                                                      style="color:#6a0b33;"></i></span>
                                          <input type="text" class="form-control" placeholder="Transaction ID"
                                                name="TransactionID" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-money-bill"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="text" class="form-control" value="<?php echo $Amount; ?>"
                                                name="Amount">
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-upload"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="file" class="form-control" id="proof" name="Proof"
                                                accept="image/*" required>
                                    </div>
                                    <input type="submit" value="Submit" name="submit" class="btn"
                                          style="background-color:#6A0B33; color:white;">
                              </form>
                        </div>
                        <div class="col-md-4">
                              <div class="d-flex align-items-center justify-content-center h-100">
                                    <img src="Photos/15.png" alt="Image" class="img-fluid">
                              </div>
                        </div>
                  </div>
            </div>

            <?php

if (isset($_POST['submit'])) 
{
      $Name = $_POST['Name'];
      $Email = $_POST['Email'];
      $TransactionID = $_POST['TransactionID'];
      $Amount = $_POST['Amount'];
      $Proof = $_FILES['Proof']['name'];

      $ProofType = $_FILES['Proof']['type'];
      $ProofTmpName = $_FILES['Proof']['tmp_name'];
      $ProofError = $_FILES['Proof']['error'];
      $ProofSize = $_FILES['Proof']['size'];
      
      $uploadDirectory = 'Payments';
      $destinationPath = $uploadDirectory . '/' . basename($Proof);
      
      if ($ProofError === 0) 
      {
            if (!is_dir($uploadDirectory)) 
            {
                  mkdir($uploadDirectory, 0777, true); 
            }
            
            if (move_uploaded_file($ProofTmpName, $destinationPath)) 
            {
                  echo "File uploaded successfully!";
            } 
            else 
            {
                  echo "Error moving the uploaded file.";
            }
            
      } 
      else 
      {
            echo "Error uploading the file. Error code: $ProofError";
      }


      include('config.php');
      $sql = "INSERT INTO payment (`Name`, `Email`, `TransactionID`, `Amount`, `Proof`, `Status`) 
      VALUES ('$Name', '$Email', '$TransactionID', '$Amount', '$Proof', 'Pending')";
      $iquery = mysqli_query($conn, $sql);
      if ($iquery) 
      {
            $Subject = "Payment Confirmation and Pending Approval";
            $Body = "Hello $Name,
                  
            We are writing to confirm that we have received your payment for the booking with ExploreXperts. 
                  
            Your payment details are as follows:
            Payment Details:
            - Transaction ID: $TransactionID
            - Amount: $Amount
            - Payment Approval: Pending
                  
            Your payment is currently being reviewed and approved by our team. This process usually takes 2 to 3 Days to complete. During this time, please be patient, and we will notify you as soon as your payment is approved.
                  
            Please keep this email for your records.
                  
            Thank you for choosing ExploreXperts for your travel needs.If you have any questions or concerns,please feel free to contact us at explorexperts@gmail.com / +91 86547 15453 / +91 81204 99140 .
                  
            Best regards,
            The ExploreXperts Team";
                  
            $Sender = "From: explorexperts@gmail.com";
            if (mail($Email, $Subject, $Body, $Sender)) 
            {
                  echo "<script> alert('Submitted Successfully...! Please Check Your Email.'); 
                  window.location.href='home.php';
                  </script>";
            } 
            else 
            {
                  echo "<script> alert('Failed to Submit...!'); </script>";
            }
      }
      else 
      {
            echo "<script> alert('Failed...!'); </script>";
      }
}

?>


            <?php
                  include ('footer.html');
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                  crossorigin="anonymous"></script>

      </body>

</html>