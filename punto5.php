<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 5</title>
</head>
<body>
<H1>PUNTO 5</H1>
    <form method="get">
        <label>Digite 2 numeros positivos</label> <br>
        <input type="number" name= "num1" placeholder="num1"> <br>
        <input type="number" name= "num2" placeholder="num2"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
      if (isset($_GET["num1"]) && isset($_GET["num2"])) {
          $num1=$_GET["num1"];
          $num2=$_GET["num2"];
        if ($num1>$num2) {
            echo "<p> el numero mayor es : .$num1 </p>";  
        }else{

            echo "<p> el numero mayor es : .$num2 </p>";  
        }


        }
    ?>
     <a href="index.php">index</a>
</body>
</html>