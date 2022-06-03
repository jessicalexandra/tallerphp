<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto  3</title>
</head>
<body>
<H1>PUNTO 2</H1>
    <form method="get">
        <label>Digite 2 numeros</label> <br>
        <input type="number" name= "num1" placeholder="num1"> <br>
        <input type="number" name= "num2" placeholder="num2"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
      if (isset($_GET["num1"]) && isset($_GET["num2"])) {
          $num1=$_GET["num1"];
          $num2=$_GET["num2"];
        $suma= $num1+$num2;
        $resta= $num1-$num2;
        $division= $num1/$num2;
        $multiplicacion= $num1*$num2;
        $modulo= $num1%$num2;
        
            echo "<p> la suma de los 2 numeros es  : $suma</p>";
            echo "<p> la resta de los 2 numeros es : $resta</p>";
            echo "<p> la division de los 2 numeros es : $division</p>";
            echo "<p> la multiplicacion de los 2 numeros es : $multiplicacion</p>";
            echo "<p> el modulo de los 2 numeros es : $modulo</p>";

      }

    ?>
    <a href="index.php">index</a>

</body>
</html>