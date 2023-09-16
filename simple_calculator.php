<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <style>
      <?php include "style.css" ?>
    </style>
    </head>
    <body>
    <div class="container">
        <h1>Basic calculator</h1>
        <form method="post" action="">

          <input type="number" name="num1" placeholder="Enter first number"required><br>
          <input type="number" name="num2" placeholder="Enter second number"required><br>
          <select name="operation">
            <option value="add">Addition</option>
            <option value="subtract">subtaction</option>
            <option value="divide">Division</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
            <option value="binary">Binary</option>
            <option value="octal">Octal Convertion</option>
            <option value="hexadecimal">Hexadecimal Convertion</option>
          </select></br>
          <button type="submit">Calculate</button>
        </form></br>

    <div id="result">

    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $num1=$_POST["num1"];
      $num2=$_POST["num2"];
      $operation=$_POST['operation'];
      switch($operation){
        case "add":
          $result=$num1+$num2;
          echo "Result=$result";
          break;
        case "subtract":
          $result=$num1-$num2;
          echo "Result=$result";
          break;
        case "multiply":
          $result=$num1*$num2;
          echo "Result=$result";
          break;
        case "divide":
          if($num2 !=0){
            $result=$num1/$num2;
            echo "Result=$result";
          }
          else{
            echo "value is not valid";
          }
          break;
        case "binary":
          echo "Binary: ".decbin($num1);
          break;
        case "octal":
          echo "Octal: ".decoct($num1);
          break;
        case "hexadecimal":
          echo "hexadecimal: ".dechex($num1);
      }
    }
    ?>
     </div>

    </div>
    











                  
   
            <!-- echo "hostnhhame"." ".$_SERVER['SERVER_NAME']."</br>";
            echo "IP Addrhhess".$_SERVER['REMOTE_ADDR']."</br>";
            echo "Ajent".$_SERVER['HTTP_USER-AGENT'];
            echo "Ajent".$_SERVER['HTTP_USER-AGENT']; -->

      
</body>
</html>