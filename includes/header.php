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
    
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="operators.php">Operators</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loops.php">Loops</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="function.php">Function</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="datatypes.php">Datatypes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conditionals.php">Conditionals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calendar.php">Calendar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculator.php">Calculator</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="arrays.php">Arrays</a>
      </li>
    </ul>


    <?php 
    
    $_SESSION['username'] = " User: JosephPowers96";
    echo $_SESSION['username'];

    if (!isset($_SESSION['username'])) {
      echo "You are not logged in!";
    } else {
      echo " You are logged in!";
    }

    ?>
  </div>
</nav>
</body>
</html>