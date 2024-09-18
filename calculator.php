
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

    
    <title>Calculator</title>
</head>
<body>
<?php     
include 'includes/header.php';
?>
<br>
<form action="">
    <input type="text" name="num1" placeholder= "num1 "id="">
    <input type="text" name="num2" placeholder= "num2 "id="">
    <select name="operator" id="">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
   
    <br>
    <button type="Submit" name="submit" value="submit">Calculate</button>
    </form>
</form>
<p>The answer is:</p>
  <?php
    

  if (isset($_GET['submit'])) {
      $result1 = $_GET['num1'];
      $result2 = $_GET['num2'];
      $operator = $_GET['operator'];
      switch ($operator) { 
            case "None":
                echo "YOU MUST SELECT A METHOD";
                break;
            case "Add":
                echo $result1 + $result2;
                break;
            case "Subtract":
                echo $result1 - $result2;
                break;
            case "Multiply":
                 echo $result1 * $result2;
                 break;
            case "Divide":
                  echo $result1 % $result2;
                            
      }
  }
  ?>  
</body>
</html>