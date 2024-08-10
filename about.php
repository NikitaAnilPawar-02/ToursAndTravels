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
            <title>ExploreXperts - About</title>
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
                                          <a class="nav-link active" href="about.php">About</a>
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
            <div class="container">
                  <div class="text-center">
                        <img src="Photos/8.png" alt="about" class="img-fluid">
                        <h1>Welcome to ExploreXperts!</h1>
                        <p class="lead">At ExploreXperts, we believe that travel is not just about visiting new places;
                              it's about creating unforgettable experiences and cherished memories. We are passionate
                              about curating unique and immersive travel journeys that allow you to explore the world's
                              hidden gems and experience the beauty of diverse cultures.</p>
                  </div>
                  <hr>

                  <h2 class="mt-5 text-success"><b>Our Vision</b></h2>
                  <p>Our vision is to become the leading provider of extraordinary travel experiences, offering
                        our
                        customers unparalleled adventures and exceptional service. We strive to create tailor-made
                        itineraries that cater to your preferences, ensuring every aspect of your journey is
                        carefully
                        crafted to exceed your expectations.</p>
                  <hr>

                  <h2 class="mt-5 text-warning"><b>Who We Are</b></h2>
                  <p>ExploreXperts is a team of seasoned travel enthusiasts, industry experts, and local guides
                        who
                        share a common passion for exploration. Our diverse backgrounds and extensive travel
                        experiences
                        enable us to understand the needs of modern travelers, and we take pride in transforming
                        your
                        dreams into reality.</p>
                  <hr>

                  <h2 class="mt-5 text-primary"><b>What Sets Us Apart</b></h2>
                  <ol>
                        <li><strong>Personalized Service:</strong> We believe that no two travelers are alike, and
                              that's why we take the time to understand your interests, preferences, and travel
                              aspirations. Our dedicated travel specialists work closely with you to create
                              personalized
                              itineraries that align perfectly with your desires.</li>
                        <li><strong>Local Expertise:</strong> Our team includes passionate local guides who
                              possess an
                              in-depth knowledge of the destinations we operate in. Their insights and expertise
                              ensure
                              that you get an authentic and immersive experience, discovering the hidden gems that
                              only
                              locals know.</li>
                        <li><strong>Unforgettable Experiences:</strong> We go beyond conventional travel
                              experiences to
                              offer you unique and off-the-beaten-path adventures. Whether it's exploring remote
                              landscapes, indulging in authentic culinary delights, or engaging in cultural
                              interactions, we design journeys that leave a lasting impression.</li>
                        <li><strong>Responsible Travel:</strong> At ExploreXperts, we are committed to promoting
                              responsible and sustainable tourism. We strive to minimize our environmental impact
                              and
                              support local communities, preserving the natural and cultural heritage for future
                              generations.</li>
                  </ol>
                  <hr>

                  <h2 class="mt-5 text-danger"><b>Our Services</b></h2>
                  <ul>
                        <li><strong>Tailor-Made Itineraries:</strong> Our team specializes in creating
                              custom-tailored
                              itineraries that match your interests, travel style, and budget.</li>
                        <li><strong>Group Tours:</strong> Join like-minded travelers on our carefully curated
                              group
                              tours, led by experienced guides.</li>
                        <li><strong>Destination Management:</strong> For corporate clients and travel agencies, we
                              offer
                              comprehensive destination management services, ensuring seamless travel experiences.
                        </li>
                        <li><strong>Travel Consultation:</strong> If you need expert advice or assistance with
                              your
                              travel plans, our travel consultants are here to help.</li>
                  </ul>
                  <hr>

                  <h2 class="mt-5 text-info"><b>Contact Us</b></h2>
                  <p>Ready to embark on your next adventure? Get in touch with our friendly team to start planning
                        your
                        dream journey. Feel free to reach out to us via email, phone, or visit our office.</p>
                  <p>Thank you for choosing ExploreXperts. We look forward to being a part of your extraordinary
                        travel
                        experiences!</p>
                  <div class="text-end">
                        <img src="Photos/9.png" alt="about" class="img-fluid">
                  </div>

            </div>

            <?php
                        include ('footer.html');
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                  integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                  crossorigin="anonymous"></script>

      </body>

</html>