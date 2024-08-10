<?php
session_start();

if (!isset($_SESSION["AdminLogin"]) || $_SESSION["AdminLogin"] !== true) 
{
      header("location: index.php");
      exit; 
}

include('config.php');
if (isset($_POST["Name"], $_POST["TransactionID"], $_POST["Amount"], $_POST["Email"])) 
{
      $Payment_Id = $_POST["Payment_Id"];
      $updateQuery = "UPDATE payment SET Status = 'Rejected' WHERE Payment_Id = $Payment_Id";
      mysqli_query($conn, $updateQuery);
      $Name = $_POST["Name"];
      $TransactionID = $_POST["TransactionID"];
      $Amount = $_POST["Amount"];
      $Email = $_POST["Email"];
      $Subject = "Payment Rejection";
      $Body = "Hello $Name,

We regret to inform you that your payment for the booking with ExploreXperts has been rejected by our admin team.

      Payment Details:
      - Transaction ID: $TransactionID
      - Amount: $Amount
      - Payment Approval: Rejected

We apologize for any inconvenience this may have caused. If you have any questions or concerns, please feel free to contact us at explorexperts@gmail.com / +91 86547 15453 / +91 81204 99140 .

Best regards,
The ExploreXperts Team";

      $Sender = "From: explorexperts@gmail.com";
      if (mail($Email, $Subject, $Body, $Sender)) 
      {
            echo "<script> alert('Successful...!');
            window.location.href='payments.php';
            </script>";
            
      } 
      else 
      {
            echo "<script> alert('Failed...!'); 
            window.location.href='payments.php';
            </script>";
      }
}
?>