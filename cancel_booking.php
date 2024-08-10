<?php
session_start();

if (isset($_SESSION['Booking_Data']) && isset($_SESSION['Booking_Data']['Booking_Id'])) 
      {
      include('config.php'); 

      $bookingId = $_SESSION['Booking_Data']['Booking_Id'];

      $sql = "DELETE FROM bookings WHERE Booking_Id = '$bookingId'";

      if ($conn->query($sql) === TRUE) {
            unset($_SESSION['Booking_Data']);
            unset($_SESSION['Total_Price']);
            echo "<script>alert('Booking Cancelled');
            window.location.href='home.php';
            </script>";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      }
?>