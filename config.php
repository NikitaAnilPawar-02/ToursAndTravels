<?php
//mysqli_connect(host, username, password, dbname, port, socket)
$conn = mysqli_connect("localhost" , "root" , "" , "ToursTravels");

// check connection
if(!$conn)
{
      die('ERROR: Connection Failed!'.mysqli_connect_error());
}
// else
// {
//       echo("Database Connected Successfully!");
// }

?>
