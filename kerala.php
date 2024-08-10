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
            <title>ExploreXperts - Kerala</title>
      </head>

      <body>
            <!-------------Navbar--------------->
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

            <!----------information------------->
            <img src="Photos/Kerala2.jpg" class="img-fluid text" alt="Kerala">
            <div class="text-center mt-3">
                  <h1 class="title text-uppercase">Kerala</h1>
            </div>
            <div class="container">
                  <h4 class="mt-4 text-primary">8 Days 7 Hotel Nights</h4>
                  <p><b>Kerala: Munnar 2N, Periyar 1N, Kumarakom 2N, Jatayu Nature Park, Trivendrum 2N.</b></p>
                  <hr>
                  <div class="table-responsive">
                        <h5 class="mt-3 text-danger">*Hotels available or Similar</h5>
                        <table class="table table-bordered">
                              <thead>
                                    <tr>
                                          <th style="background-color:#dcb0c2;">Place</th>
                                          <th style="background-color:#dcb0c2;">Hotel</th>
                                          <th style="background-color:#dcb0c2;">Nights</th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <td>MUNNAR</td>
                                          <td>WOLKENBURG RESORT & SPA</td>
                                          <td>2</td>
                                    </tr>
                              </tbody>
                              <tbody>
                                    <tr>
                                          <td>THEKKADY</td>
                                          <td>THE ELEPHANT COURT</td>
                                          <td>1</td>
                                    </tr>
                              </tbody>
                              <tbody>
                                    <tr>
                                          <td>KUMARAKOM</td>
                                          <td>LAKESONG</td>
                                          <td>2</td>
                                    </tr>
                              </tbody>
                              <tbody>
                                    <tr>
                                          <td>TRIVENDRUM</td>
                                          <td>HYCINTH BY SPARSA</td>
                                          <td>2</td>
                                    </tr>
                              </tbody>
                        </table>
                        <p class="text-danger">Note : Under unavoidable circumtances Hotels are subject to change,
                              in such condition substitute hotel of similar category is provided.</p>
                  </div>
                  <hr>
            </div>

            <!-----------form----------------->
            <div class="container mt-5 text-center">
                  <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10 border shadow rounded-4 p-5">
                              <h1 class="mb-4 text-center text-light rounded-3 fw-bold"
                                    style="background-color:#6A0B33;">BOOK THE
                                    TOUR</h1>
                              <form action="calculate_price_kerala.php" method="post" class="p-2">
                                    <div class="input-group mb-3">
                                          <span class="input-group-text border border-secondary"><i
                                                      class="fa-solid fa-user" style="color: #6a0b33;"></i></span>
                                          <input type="text" class="form-control border border-secondary" name="Name"
                                                placeholder="Full Name" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text border border-secondary"><i
                                                      class="fa-solid fa-envelope" style="color: #6a0b33;"></i></span>
                                          <input type="email" class="form-control border border-secondary" name="Email"
                                                placeholder="Email" required>
                                    </div>
                                    <div class="row">
                                          <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                      <span class="input-group-text border border-secondary"><i
                                                                  class="fa-solid fa-phone"
                                                                  style="color: #6a0b33;"></i></span>
                                                      <input type="tel" class="form-control border border-secondary"
                                                            placeholder="Phone Number" name="PhoneNo"
                                                            pattern="[0-9]{10}" required>
                                                </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                      <span class="input-group-text border border-secondary"><i
                                                                  class="fa-solid fa-calendar-days"
                                                                  style="color: #6a0b33;"></i></span>
                                                      <input type="text" class="form-control border border-secondary"
                                                            name="NoOfDays" value="8 Days" readonly>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                      <span class="input-group-text border border-secondary"><i
                                                                  class="fa-solid fa-calendar-day"
                                                                  style="color: #6a0b33;"></i></span>
                                                      <input type="date" class="form-control border border-secondary"
                                                            placeholder="Tour Date" name="TourDate" required>
                                                </div>
                                          </div>
                                          <div class="col-md-6 mb-3">
                                                <div class="input-group">
                                                      <span class="input-group-text border border-secondary"><i
                                                                  class="fa-solid fa-users"
                                                                  style="color: #6a0b33;"></i></span>
                                                      <input type="number" class="form-control border border-secondary"
                                                            name="NoOfPeople" placeholder="No of People" required>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text border border-secondary"><i
                                                      class="fa-solid fa-bus" style="color: #6a0b33;"></i></span>
                                          <select name="Transport" class="form-select border border-secondary" required>
                                                <option value="" disabled selected>Select</option>
                                                <option value="Car(3 PASSENGER)">Car(3 PASSENGER) ₹5500
                                                      per day</option>
                                                <option value="Small Coach(4-8 PASSENGER)">Small Coach(4-8
                                                      PASSENGER) ₹6500 per day</option>
                                                <option value="Coach(8-15 PASSENGER)">Coach(8-15
                                                      PASSENGER) ₹10000 per day</option>
                                                <option value="Large Coach(15-25 PASSENGER)">Large
                                                      Coach(15-25 PASSENGER) ₹12000 per day</option>
                                          </select>
                                          <img src="Photos/Transport.jpg" alt="Vehicles" class="img-fluid mt-3 mb-2">
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text border border-secondary"><i
                                                      class="fa-solid fa-utensils" style="color: #6a0b33;"></i></span>
                                          <select name="Meal" class="form-select border border-secondary" required>
                                                <option value="" disabled selected>Select</option>
                                                <option value="Full Board (Breakfast, Lunch, Dinner)">Full
                                                      Board
                                                      (Breakfast, Lunch, Dinner)</option>
                                                <option value="Half Board (Breakfast and One Meal)">Half
                                                      Board
                                                      (Breakfast and One Meal)</option>
                                                <option value="All-Inclusive (All Meals and Snacks)">
                                                      All-Inclusive
                                                      (All Meals and Snacks)</option>
                                          </select>
                                    </div>
                                    <input type="hidden" name="Package" value="Kerala">
                                    <input type="submit" name="Submit" value="BOOK NOW" class="btn mt-2"
                                          style="background-color:#6A0B33; color:white;">
                              </form>
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