<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    

    function fanumTax($a) {
        $taxedvalue = $a - 0.50;
        echo "Here is what you wrote taxed by .50 cents: $".$taxedvalue;
    }

    $a = 100;
    fanumTax($a);
    ?>
</body>
</html>