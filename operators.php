<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

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