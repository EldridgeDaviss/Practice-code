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
    <title>Document</title>
</head>
<body>
      

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="img/Logo1.jpg" alt="Bootstrap" width="30" height="24">
    </a>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:#382102;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hogs.php" style="color: white;">Hogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php" style="color: white;">Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Hoglore.php" style="color: white;">Hog Lore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="legalities.php" style="color: white;">Legalities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php" style="color: white;">About us</a>
        </li>
      </ul>
      <?php

 if (isset($_SESSION['userId'])) {
  echo' <form action="includes/logout.inc.php" method="post">
    <button type="submit" name="logout-submit">Logout</button>
  </form>';
   }
  else {
      echo'  <form action="includes/login.inc.php" method="post">
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit">Login</button>
  </form>
  &nbsp;&nbsp;
  <a href="signup.php">Signup</a>';
  }

?>
    </div>
  </div>
</nav>
  



<div>

 
</div>

</body>
</html>