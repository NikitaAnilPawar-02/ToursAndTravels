<?php
session_start();

$hotelCost = 20000;

$transportationCosts = [
    'Car(3 PASSENGER)' => 6500,
    'Small Coach(4-8 PASSENGER)' => 7500,
    'Coach(8-15 PASSENGER)' => 11000,
    'Large Coach(15-25 PASSENGER)' => 13000,
];

$mealCosts = [
    'Full Board (Breakfast, Lunch, Dinner)' => 1100,
    'Half Board (Breakfast and One Meal)' => 600,
    'All-Inclusive (All Meals and Snacks)' => 1600,
];



if (isset($_POST['Submit'])) 
{
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $PhoneNo = $_POST['PhoneNo'];
    $Package = $_POST['Package'];  
    $TourDate = $_POST['TourDate'];
    $NoOfPeople = $_POST['NoOfPeople'];
    $NoOfDays = $_POST['NoOfDays'];
    $Transport = $_POST['Transport'];
    $Meal = $_POST['Meal'];


    $totalHotelCost = $hotelCost * $NoOfPeople;
    $totalTransportationCost = $transportationCosts[$Transport] * 7; 
    $totalMealCost = $mealCosts[$Meal] * $NoOfPeople * 7; 
    
    $Amount = $totalHotelCost + $totalTransportationCost + $totalMealCost;
    
    $_SESSION['Booking_Data'] = array(
    'Name' => $Name,
    'Email' => $Email,
    'PhoneNo' => $PhoneNo,
    'TourDate' => $TourDate,
    'Package' => $Package,
    'NoOfPeople' => $NoOfPeople,
    'NoOfDays' => $NoOfDays,
    'Transport' => $Transport,
    'Meal' => $Meal,
    'Amount' => $Amount,
    );

    include('config.php');

    $sql = "INSERT INTO Bookings (`Name`, `Email`, `PhoneNo`, `Package`,`TourDate`, `NoOfPeople`, `Transport`, `Meal`, `NoOfDays`,
    `Amount`)
    VALUES ('$Name', '$Email', '$PhoneNo', '$Package' , '$TourDate', '$NoOfPeople', '$Transport', '$Meal', '$NoOfDays', '$Amount')";

    if ($conn->query($sql) === TRUE)
    {
        $insertedId = $conn->insert_id;
        $_SESSION['Booking_Data']['Booking_Id'] = $insertedId;
        echo "Booking data stored successfully!";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: receipt.php');
    exit();
}
?>