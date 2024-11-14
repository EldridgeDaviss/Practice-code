<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hogs.css">

    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
</head>
<body>



<p class="sellerp">Summer Hog Collection</p>

<div class="c-heroImageGrid">
  <div class="container">
    <div class="column"></div> <!-- Column 1, empty but will hold a background image -->
    
    <div class="column"> <!-- Column 2 -->
      <div class="row">
        <div class="text">
          <h6>Find A Hog.<br>Save The Environment</h6>
          <p>We sell a variety of hogs, look through them all and find a companion for life.</p>
        </div>
      </div>
      
      <div class="row">
        <div class="image">
          <!-- Image will go here -->
        </div>
      </div>
      
      <div class="row">
        <div class="image">
          <!-- Another image goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
/* ===== Global Styles ===== */
*,
::before,
::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  height: 100vh;
  width: 100vw;
  background-color: #f2f5ff;
  font-family: "Montserrat", sans-serif;
}

button {
  font-family: "Montserrat", sans-serif;
  display: inline-block;
  border: none;
  outline: none;
  border-radius: 0.2rem;
  color: var(--text);
  cursor: pointer;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: 100%;
  user-select: none;
}

/* ===== Hero Section ===== */
.sellerp {
  position: absolute;
  font-size: 5vh;
  top: 110%; /* Adjust this to better place the text */
  left: 36%; /* Adjust this if needed for centering */
  z-index: 10;
  color: #000;
}

/* ===== Hero Image Grid ===== */
.c-heroImageGrid {
  position: relative;
  overflow: hidden;
  height: 50vw;
  background: #fff;
  margin-bottom: 60px;
}

.c-heroImageGrid .container {
  display: flex;
  align-items: flex-end;
  position: absolute;
  top: -20vw;
  left: -8vw;
  transform: rotateZ(45deg);
  height: 100vw;
  width: 107vw;
}

.c-heroImageGrid .container .column {
  overflow: hidden;
  position: relative;
}

.c-heroImageGrid .container .column:nth-of-type(1) {
  width: 28%; /* Adjust column width */
  height: 66vw; /* Adjust height as needed */
  background-image: url(https://images.unsplash.com/photo-1614670313144-492ef1eb4663?q=80&w=1474&auto=format&fit=crop);
  background-size: cover;
  background-position: center;
  transition: opacity 0.3s ease;
}

.c-heroImageGrid .container .column:nth-of-type(1):hover {
  opacity: 0.75;
  cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) {
  display: flex;
  flex-direction: column-reverse;
  width: 72%;
  height: 105vw; /* Adjust height for alignment */
}

.c-heroImageGrid .container .column:nth-of-type(2) .row {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1) {
  position: relative;
  overflow: hidden;
  height: 50vw;
  width: 100%;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1):hover {
  opacity: 0.75;
  cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(1):before {
  position: absolute;
  top: -10.1vw;
  left: -14.3vw;
  background-repeat: no-repeat;
  background-size: cover;
  transform: rotateZ(-45deg);
  content: "";
  width: 65vw;
  height: 39vw;
  background-image: url(https://images.unsplash.com/photo-1511497584788-876760111969?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) {
  display: flex;
  height: 40.5vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) {
  width: 30%;
  background-color: #8b8b8a;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text {
  width: 100%;
  height: 100%;
  overflow: visible;
  transform: rotateZ(0deg); /* Fixed rotation */
  position: relative;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text h6 {
  position: absolute;
  color: #633a13;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 1.5vw;
  width: 20vw;
  top: 16vw;
  left: 7vw;
  line-height: 1.55vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(1) .text p {
  position: absolute;
  color: #fff;
  font-size: 1vw;
  width: 18vw;
  top: 23.5vw;
  left: -3.5vw;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2) {
  position: relative;
  width: 70%;
  border-left: 8px solid white;
  overflow: hidden;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):hover {
  opacity: 0.75;
  cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(2) div:nth-of-type(2):before {
  position: absolute;
  top: 0;
  left: -40vw;
  width: 110.1vw;
  height: 110vw;
  background-repeat: no-repeat;
  background-size: cover;
  transform: rotateZ(-45deg);
  content: "";
  background-image: url(https://images.unsplash.com/photo-1596559613200-78626d995b8c?q=80&w=1450&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3) {
  position: relative;
  height: 18.6vw;
  overflow: hidden;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3):hover {
  opacity: 0.75;
  cursor: pointer;
}

.c-heroImageGrid .container .column:nth-of-type(2) .row:nth-of-type(3):before {
  position: absolute;
  top: 7.5vw;
  left: 25vw;
  width: 33vw;
  height: 27vw;
  background-repeat: no-repeat;
  background-size: cover;
  transform: rotateZ(-45deg);
  content: "";
  background-image: url(https://images.unsplash.com/photo-1440581572325-0bea30075d9d?q=80&w=1548&auto=format&fit=crop&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
}
<br>
<?php
include 'includes/footer.php'

?>
</body>
</html>