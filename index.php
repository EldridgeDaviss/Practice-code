<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
</head>
<body>
<!--Form for variable-->

<main>
<?php 
 if (isset($_SESSION['userId'])) {
echo'<p class="login-status">You Are logged in!</p>';
 }
else {
    echo'<p class="login-status">You Are logged out!</p>';
}
?>
<div class="container-fluid">
  <div class="row"><div id="carouselExampleAutoplaying" class="col-md-2 carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Hog photos/OIP (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Hog photos/OIP (2).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Hog photos/OIP.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="col-md-8 justify-content-center card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>

<div id="carouselExampleAutoplaying  hooray" class="justify-content-end col-md-2 carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Hog photos/OIP (1).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Hog photos/OIP (2).png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/Hog photos/OIP.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div></div>

</div>

</main>

   
<?php
include 'includes/footer.php'

?>

</body>
</html>