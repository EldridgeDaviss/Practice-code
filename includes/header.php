<?php  
  session_start();
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
</head>



<body style="font-family: Arial, sans-serif; background-color: #f8f9fa;">

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
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="hogs.php">Hogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="checkout.php">Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Hoglore.php">Hog Lore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="legalities.php">Legalities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="d-flex">
        <?php
          if (isset($_SESSION['userId'])) {
            echo '<form action="includes/logout.inc.php" method="post" class="d-flex align-items-center">
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
