<?php
// Ensure session_start() is called first, no output before this point
session_start();

// Check if the popup has been shown before
$popupShown = isset($_SESSION['popupShown']) ? $_SESSION['popupShown'] : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>10 Feral Hogs</title>

    <style>
        /* Add hover effect for navbar links */
        .navbar-nav .nav-link {
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* Darken the background and change the text color on hover */
        .navbar-nav .nav-link:hover {
            background-color: #5a3d15; /* Darken the background color */
            color: #fff;  /* Make the text white on hover */
        }

        /* Popup styling */
        #exitPopup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 9999;
        }
        #exitPopup .popup-content {
            position: relative;
            margin: 10% auto;
            width: 80%;
            max-width: 400px;
            background: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
        }
        #exitPopup h2 {
            color: #382102;
        }
        #exitPopup button {
            background-color: #382102;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #exitPopup button:hover {
            background-color: #5a3d15;
        }

        /* Notification styling */
        .notification {
            position: fixed;
            top: -100px;  /* Initially hidden above the screen */
            right: 10px;
            background-color: #28a745;  /* Green background for success */
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            z-index: 1000;
            opacity: 0;  /* Initially hidden */
            transition: top 0.5s ease, opacity 0.5s ease;  /* Animation for sliding and fading */
        }

        .show-notification {
            top: 10px;  /* Position the notification 10px from the top */
            opacity: 1;  /* Fade in */
        }
    </style>

     <!-- Custom Loading Screen CSS -->
     <style>
        /* Full-screen overlay for the loading screen */
        #loadingScreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8); /* Solid background to block the page */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it's above all content */
            visibility: visible; /* Initially visible */
        }

        /* Create a spinning loader */
        .spinner {
            border: 10px solid #f3f3f3;
            border-top: 10px solid #f6b93b; /* Yellow spinner */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 2s linear infinite;
        }

        /* Keyframes for spinning animation */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Add some text under the spinner */
        #loadingText {
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        /* Hide page content until it's fully loaded */
        .content {
            display: none;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f9fa;">

<!-- Loading Screen -->
<div id="loadingScreen">
    <div>
        <div class="spinner"></div>
        <div id="loadingText">Loading...</div>
    </div>
</div>

<!-- Main Content (Initially hidden until page is loaded) -->
<div class="content">
    
</div>

<script>
    // Wait until the page content is fully loaded
    window.onload = function() {
        // Hide the loading screen when the page is fully loaded
        document.getElementById("loadingScreen").style.display = "none";

        // Show the content after the loading is complete
        document.querySelector(".content").style.display = "block";
    };
</script>




<nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #382102;">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="img/Logo1.jpg" alt="Logo" width="40" height="40" class="d-inline-block align-top me-2">
      <span class="fw-bold">10 Feral Hogs</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="hogs.php">Hogs</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="checkout.php">Checkout</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="Hoglore.php">Hog Lore</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="legalities.php">Legalities</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="aboutus.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact</a></li>
      </ul>
      <div class="d-flex align-items-center">
        <?php
          if (isset($_SESSION['userId'])) {
            // Display the logged-in user's username or email
            $usernameOrEmail = isset($_SESSION['userUid']) ? $_SESSION['userUid'] : (isset($_SESSION['userEmail']) ? $_SESSION['userEmail'] : 'User');
            echo '<span class="text-light me-3">Welcome, ' . htmlspecialchars($usernameOrEmail) . '!</span>';
            echo '<form action="includes/logout.inc.php" method="post" class="d-inline">
                    <button class="btn btn-outline-light btn-sm" type="submit" name="logout-submit">Logout</button>
                  </form>';
          } else {
            echo '<button class="btn btn-outline-light btn-sm me-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                  <a href="signup.php" class="btn btn-light btn-sm">Signup</a>';
          }
        ?>
      </div>
    </div>
  </div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="includes/login.inc.php" method="post">
          <div class="mb-3">
            <label for="mailuid" class="form-label">Username/E-mail</label>
            <input type="text" class="form-control" id="mailuid" name="mailuid" placeholder="Enter your username or email">
          </div>
          <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password">
          </div>
          <button type="submit" name="login-submit" class="btn btn-primary w-100">Login</button>
        </form>
      </div>
    </div>
  </div>
</div>

</body>
</html>
