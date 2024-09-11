<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

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