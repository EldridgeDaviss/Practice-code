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
    
<nav class="navbar navbar-expand-md navbar-dark navbg sticky-top">
    <div class=" justify-content-center">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="store.html">Hogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="store.html">Other Items</a>
        </li>
        <li>
          <img width="50" height="50" src="img/Logo1.png">
        </li>
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="standings.html">Hog Lore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="map.html">Legalities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link txt" aria-current="page" href="rules.html">About us</a>
        </li>
      </ul>
    </div>
  </nav>
  </div>

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
  <a href="signup.php">Signup</a>';
  }

?>

<div>

 
</div>
</nav>
</body>
</html>