<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/Hog photos/hogfavicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="althome.css">


    <?php
    include 'includes/header.php';
    ?>
   <br>
    <title>Home</title>
    
    <style>
        body {
            cursor: url('images/custom-cursor.png'), auto;
        }
    </style>
</head>
<body>

 <!--Loader-->
  
  
 <div class="loader-wrapper">
      <!--Animation-->
        <div class="loader ">
	
        
    </div>
  </div>
       <div  class="backload"></div>
 <div class=cursor>


 
<!--Form for variable-->

<main>
<?php 
 if (isset($_SESSION['userId'])) {
echo'<p class="login-status">You Are Hogged in!</p>';
 }
else {
    echo'<p class="login-status">You Are Hogged out!</p>';
}
?>















 <section data-description="bold/cursive">
	<div class="wrapper">
	 <h1 class="beta uppercase montserrat regular line-after-heading">
		This shouldn't be so difficult 
		</h1>
		<p class="delta cardo regular italic">
		Wow, what a fine cofee flavor
		</p>
	 </div>
 </section>















<?php
include 'includes/footer.php'


?>
 </div>
 <script src="script.js"></script>
</body>
</html>