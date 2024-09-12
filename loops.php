<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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