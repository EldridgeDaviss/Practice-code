<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

   
    <title>Loops</title>
</head>
<body>
    <?php 


include 'includes/header.php';

    //Loop

    //While loop 17
    $x = 1;
    while ($x <= 5) {
        echo "hi there<br>";
        $x++;
    }

    //Do while loop 18
    $z = 1; 
    do {
        echo "bye there<br>";
        $z++;
    }
        while($z <= 5);

    //For loop 19
    for ($y = 0; $y <= 10; $y++) {
        echo "hi<br>";
    };

    //Foreach loop 20
  $array = array("Daniel","Jane","Jacob", "John", "Mariane");

  foreach ($array as $loopdata) {
      echo "My name is ".$loopdata. "<br>";
  }
    ?>


</body>
</html>