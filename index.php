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




</main>

   
<?php
include 'includes/footer.php'

?>

</body>
</html>