<?php
session_start();

if (!isset($_SESSION["AdminLogin"]) || $_SESSION["AdminLogin"] !== true) 
{
      header("location: index.php");
      exit; 
}

include('config.php');
if ( isset($_POST["Name"], $_POST["TransactionID"], $_POST["Amount"], $_POST["Email"])) 
{
      $Payment_Id = $_POST["Payment_Id"];
      $updateQuery = "UPDATE payment SET Status = 'Approved' WHERE Payment_Id = $Payment_Id";
      mysqli_query($conn, $updateQuery);

      $Name = $_POST["Name"];
      $TransactionID = $_POST["TransactionID"];
      $Amount = $_POST["Amount"];
      $Email = $_POST["Email"];
      $Subject = "Payment Approval";
      $Body = "Hello $Name,

We are pleased to inform you that your payment for the booking with ExploreXperts has been successfully approved by our admin team.

Payment Details:
      - Transaction ID: $TransactionID
      - Amount: $Amount
      - Payment Approval: Approved

Please keep this email for your records. Your booking is now confirmed.

Thank you for choosing ExploreXperts for your travel needs. We look forward to providing you with an exceptional travel experience.

If you have any questions or concerns, please feel free to contact us at explorexperts@gmail.com / +91 86547 15453 / +91 81204 99140 .

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