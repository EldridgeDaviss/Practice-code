<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle.css">

   
    <title>Operators</title>
</head>
<body>

    <?php
    include 'includes/header.php';


//Arithmetic Operators

echo 2**5;

//Assignment Operators
$x = 10;
$x += 20;
echo $x;

//Comparison Operators
$x = 10;
$y = "10";

if ($x === $y) {
    echo "True!";
}
else{
    echo "False.";
}

// Increment/Decrement
$z = 10;
echo $z--;
echo $z;

//Logical Operators
$E = 10;
$T = 20;

if ($E == $T or 1 == 1) {
    echo " True";
}

    ?>
</body>
</html>