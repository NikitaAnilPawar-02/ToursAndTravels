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
            <title>ExploreXperts - Tours & Travel</title>
      </head>

      <body>
            <!-------------Navbar-------------->
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
                                          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
                                    <?php if (!$UserLogin && !$AdminLogin) { ?>
                                    <li class="nav-item dropdown">
                                          <a class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Login
                                          </a>
                                          <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="login.php">User Login</a></li>
                                                <li><a class="dropdown-item" href="index.php">Admin Login</a></li>
                                          </ul>
                                    </li>
                                    <?php } ?>
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

            <!-----------Carousel-------------->
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                        <div class="carousel-item active">
                              <img src="Photos/c-6.jpg" class="d-block w-100" alt="..." />
                              <div
                                    class="carousel-caption custom-caption d-flex flex-column align-items-center align-self-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px">
                                          <h1 class="text-white mb-md-3">ExploreXperts</h1>
                                          <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                          <h1 class="display-3 text-white mb-md-4">
                                                <b>Your Journey, Our Passion</b>
                                          </h1>
                                          <a href="contact.php" class="btn mt-2 py-md-2 px-md-3 "
                                                style="background-color:#6A0B33; color:white;">CONTACT NOW</a>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel-item">
                              <img src="Photos/c-2.jpg" class="d-block w-100" alt="..." />
                              <div
                                    class="carousel-caption custom-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px">
                                          <h1 class="text-white mb-md-3">ExploreXperts</h1>
                                          <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                          <h1 class="display-3 text-white mb-md-4">
                                                <b>Travel Smart. Travel With Us</b>
                                          </h1>
                                          <a href="contact.php" class="btn mt-2 py-md-2 px-md-3 "
                                                style="background-color:#6A0B33; color:white;">CONTACT NOW</a>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel-item">
                              <img src="Photos/c-3.jpg" class="d-block w-100" alt="..." />
                              <div
                                    class="carousel-caption custom-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px">
                                          <h1 class="text-white mb-md-3">ExploreXperts</h1>
                                          <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                          <h1 class="display-3 text-white mb-md-4">
                                                <b>Hidden Gems Await: Discover The Extraordinary.</b>
                                          </h1>
                                          <a href="contact.php" class="btn mt-2 py-md-2 px-md-3 "
                                                style="background-color:#6A0B33; color:white;">CONTACT NOW</a>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel-item">
                              <img src="Photos/c-4.jpg" class="d-block w-100" alt="..." />
                              <div
                                    class="carousel-caption custom-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px">
                                          <h1 class="text-white mb-md-3">ExploreXperts</h1>
                                          <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                                          <h1 class="display-3 text-white mb-md-4">
                                                <b>Your Passport To Happiness: Start The Adventure Now!</b>
                                          </h1>
                                          <a href="contact.php" class="btn mt-2 py-md-2 px-md-3 "
                                                style="background-color:#6A0B33; color:white;">CONTACT NOW</a>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                  </button>
            </div>

            <!-----------About----------------->
            <div class="container">
                  <h1 class="text-center mt-5" style="font-family: 'Tourney', cursive;">ABOUT US</h1>
                  <div class="row">
                        <div class="col-sm-8 mt-4">
                              <p style="text-align:justify; text-indent:50px;">At ExploreXperts, we are more than just a
                                    travel company.
                                    We are your partners
                                    in creating unforgettable journeys and crafting memories that last a lifetime.

                                    Our story began with a shared passion for exploration and a deep appreciation for
                                    the beauty and diversity
                                    that our world has to offer. We believe that travel is not just about visiting new
                                    places; it's about
                                    experiencing new cultures, connecting with locals, and discovering hidden gems that
                                    leave a lasting impact.

                              <p style="text-align:justify; text-indent:50px;">Our dedicated team of travel enthusiasts
                                    is committed to curating exceptional
                                    experiences that cater to
                                    every type of traveler. Whether you're an adventure seeker, a culture enthusiast, or
                                    simply looking to
                                    unwind in a picturesque setting, we have the perfect itinerary for you.

                                    What truly sets us apart is our unwavering focus on personalized service. We
                                    understand that each journey
                                    is unique, and that's why we take the time to understand your preferences and tailor
                                    every aspect of your
                                    trip accordingly. From meticulously planned itineraries to handpicked accommodations
                                    and transportation
                                    options, we ensure that every detail is taken care of so you can relax and fully
                                    immerse yourself in the
                                    experience.

                              <p style="text-align:justify; text-indent:50px;">But our commitment doesn't stop there. We
                                    are also dedicated to responsible travel,
                                    striving to make a
                                    positive impact on the destinations we visit and the communities we interact with.
                                    By promoting
                                    sustainability and supporting local initiatives, we aim to leave behind a legacy of
                                    positive change.

                                    So whether you're embarking on your first solo adventure, planning a family getaway,
                                    or seeking a romantic
                                    escape, let us be your travel companions. Join us as we explore the world, one
                                    remarkable journey at a
                                    time.
                        </div>
                        <div class="col-sm-4 d-flex align-items-center">
                              <img src="Photos/7.png" class="img-fluid" alt="...">
                        </div>
                  </div>
            </div>

            <!-----------Card----------------->
            <div class="container">
                  <h1 class="text-center mt-5" style="font-family: 'Tourney', cursive;">POPULAR DESTINATIONS</h1>
                  <div class="container mt-4">
                        <div class="row mt-4">
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="chardham.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Chardham.jpg" class="card-img-top" alt="Image 1" />
                                                <h5 class="card-title text-center my-2">Chardham</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="darjeeling.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Darjeeling.jpg" class="card-img-top" alt="Image 2" />
                                                <h5 class="card-title text-center my-2">Darjeeling</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="Himachal.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Himachal.jpg" class="card-img-top" alt="Image 3" />
                                                <h5 class="card-title text-center my-2">Himachal</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="Kerala.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Kerala.jpg" class="card-img-top" alt="Image 4" />
                                                <h5 class="card-title text-center my-2">Kerala</h5>
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <div class="row mt-4">
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="ladakh.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Ladakh.jpg" class="card-img-top" alt="Image 5" />
                                                <h5 class="card-title text-center my-2">Ladakh</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="Kashmir.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Kashmir.jpg" class="card-img-top" alt="Image 6" />
                                                <h5 class="card-title text-center my-2">Kashmir</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="rajasthan.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Rajasthan.jpg" class="card-img-top" alt="Image 7" />
                                                <h5 class="card-title text-center my-2">Rajasthan</h5>
                                          </a>
                                    </div>
                              </div>
                              <div class="col-md-3">
                                    <div class="card">
                                          <a href="andaman.php" class="text-decoration-none text-dark">
                                                <img src="Photos/Andaman.jpg" class="card-img-top" alt="Image 8" />
                                                <h5 class="card-title text-center my-2">Andaman</h5>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!---------Why choose us----------->
            <div class="container text-center">
                  <h1 class="text-center mt-5 mb-5" style="font-family: 'Tourney', cursive;">WHY CHOOSE US?</h1>
                  <div class="row">
                        <div class="col-sm shadow m-2">
                              <img src="Photos/1.png" alt="image" class="img-fluid">
                              <p><b>Best Prices: </b><br>We offer competitive and affordable prices that fit your
                                    budget.</p>
                        </div>
                        <div class="col-sm shadow m-2">
                              <img src="Photos/2.png" alt="image" class="img-fluid">
                              <p><b>Beautiful Places: </b><br>Explore stunning destinations and experience the beauty of
                                    the India.
                              </p>
                        </div>
                        <div class="col-sm shadow m-2">
                              <img src="Photos/3.png" alt="image" class="img-fluid">
                              <p><b>Budget-Friendly Transportation: </b><br>Experience convenient and cost-effective
                                    transportation options.</p>
                        </div>
                        <div class="col-sm shadow m-2">
                              <img src="Photos/4.png" alt="image" class="img-fluid">
                              <p><b>Travel Experts: </b><br>Our experienced team of travel experts to guide you.</p>
                        </div>
                        <div class="col-sm shadow m-2">
                              <img src="Photos/5.png" alt="image" class="img-fluid">
                              <p><b>24/7 Services: </b><br>We're here for you around the clock, providing 24/7
                                    assistance and support.</p>
                        </div>
                  </div>
            </div>

            <!------------------Reviews-------------->
            <div class="container text-center">
                  <h1 class="text-center mt-5" style="font-family: 'Tourney', cursive;">CUSTOMER REVIEWS</h1>
                  <div class="row">
                        <div class="col-md-4">
                              <div class="card shadow mt-4">
                                    <div class="card-body">
                                          <img src="Photos/person1.jpg"
                                                class="card-img-top rounded-circle mx-auto d-block"
                                                style="width: 100px; height: 100px;" alt="person1">
                                          <div class="mt-3">
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                          </div>
                                          <h5 class="card-title mt-3">Amit Sharma</h5>
                                          <p class="card-text">"Amazing experience! The ExploreXperts team made sure
                                                every detail was
                                                taken care of. "</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                              <div class="card shadow mt-4">
                                    <div class="card-body">
                                          <img src="Photos/person2.jpg"
                                                class="card-img-top rounded-circle mx-auto d-block"
                                                style="width: 100px; height: 100px;" alt="person2">
                                          <div class="mt-3">
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color:grey;"></i></span>
                                          </div>
                                          <h5 class="card-title mt-3">Jay Dubey</h5>
                                          <p class="card-text">"Incredible journey with ExploreXperts! Their attention
                                                to detail and
                                                personalized service made all the difference."</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-md-4">
                              <div class="card shadow mt-4">
                                    <div class="card-body">
                                          <img src="Photos/person3.jpg"
                                                class="card-img-top rounded-circle mx-auto d-block"
                                                style="width: 100px; height: 100px;" alt="person3">
                                          <div class="mt-3">
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                                <span><i class="fa-solid fa-star" style="color: #f4d11f;"></i></span>
                                          </div>
                                          <h5 class="card-title mt-3">Anushka Singh</h5>
                                          <p class="card-text">"Highly recommend ExploreXperts! Their expertise and
                                                passion for travel
                                                shine through in every aspect of the trip."</p>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!------------Contact Information------------>
            <div class="container text-center">
                  <h1 class="text-center mt-5" style="font-family: 'Tourney', cursive;">CONTACT US</h1>
                  <div class="row">
                        <div class="col-sm-7 mt-4 p-4 shadow rounded-3">
                              <form method="post" action="contact.php">
                                    <h2 class="mt-4">HAVE A QUESTION?</h2><br>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-user"
                                                      style="color:#6a0b33;"></i></span>
                                          <input type="text" class="form-control" placeholder="Your Name" name="Name"
                                                required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-envelope"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="email" class="form-control" placeholder="Email" name="Email"
                                                required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-phone"
                                                      style="color: #6a0b33;"></i></span>
                                          <input type="tel" class="form-control" placeholder="Phone Number"
                                                name="Phoneno" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="input-group mb-3">
                                          <span class="input-group-text"><i class="fa-solid fa-message"
                                                      style="color: #6a0b33;"></i></span>
                                          <textarea name="Message" class="form-control" placeholder="Message"
                                                required></textarea>
                                    </div>
                                    <input type="submit" value="Submit" name="submit" class="btn mb-4"
                                          style="background-color:#6A0B33; color:white;">
                              </form>
                        </div>

                        <?php

                              if (isset($_POST['submit'])) 
                              {
                                    $Name = $_POST['Name'];
                                    $Email = $_POST['Email'];
                                    $PhoneNo = $_POST['Phoneno'];
                                    $Message = $_POST['Message'];

                                    include('config.php');

                                    $sql = "INSERT INTO contacts (`name`, `email`, `phone`, `message`) 
                                    VALUES ('$Name', '$Email', '$PhoneNo', '$Message')";
                                    $iquery = mysqli_query($conn, $sql);
                                    if ($iquery) 
                                    {
                                          $Subject = "Contact Confirmation";
                                          $Body = "Hello! $Name Thank you...! For Contacting Us. We Will contact You as soon as possible.";
                                          $Sender = "From: explorexperts@gmail.com";
                                          if (mail($Email, $Subject, $Body, $Sender)) 
                                          {
                                                echo "<script> alert('Message send Successfully...!'); </script>";
                                          } 
                                          else 
                                          {
                                                echo "<script> alert('Message not Send...!'); </script>";
                                          }
                                    }
                                    else 
                                    {
                                          echo "<script> alert('Failed...!'); </script>";
                                    }
                              }
                        ?>

                        <div class="col-sm-5 mt-5 text-center">
                              <h3 class="mt-4">CONTACT INFORMATION</h3>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-location-dot" style="color: #6a0b33;"></i>
                                    36, Vanrai Colony, Dhankawadi, <br>Pune-411 043, Maharashtra, India.
                              </li>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-phone" style="color: #6a0b33;"></i>
                                    +91 81204 99140<br>
                                    <i class="fa-solid fa-phone" style="color: #6a0b33;"></i>
                                    +91 86547 15453
                              </li>
                              <li class="list-unstyled nav-item mb-2">
                                    <i class="fa-solid fa-envelope" style="color: #6a0b33;"></i>
                                    explorexperts@gmail.com
                              </li>
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