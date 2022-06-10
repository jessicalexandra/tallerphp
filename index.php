<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER 1</title>
</head>
<body>
    <H1>PUNTO 1</H1>
    <form method="get">
        <label>Digite su salario</label> <br>
        <input type="number" name= "salario" placeholder="No ponga puntos de separacion"> <br>
        <button type= "submit" >Enviar salario</button>
    </form>

    <?php
    if (isset($get["salario"])) {
        $salario=$_GET["salario"];
        $salud=$salario*0.08;
        $pension =$salario*0.08;
        $neto= $salario-($salud+$pension);
        echo "<p> Descuento salud es : " .$salud . "</p>";
        echo "<p> Descuento pension es : " .$pension . "</p>";
        echo "<p> Su salario es : " .$salario . "</p>";
        echo "<p> su salario menos descuento es : " .$neto . "</p>";

        echo$salario;
      
    }

     ?>
     <ul>
         <li><a href="punto2.php">Punto 2</a></li>
         <li><a href="punto3.php">Punto 3</a></li>
         <li><a href="punto4.php">Punto 4</a></li>
         <li><a href="punto5.php">Punto 5</a></li>
         <li><a href="punto6.php">Punto 6</a></li>
         <li><a href="punto7.php">Punto 7</a></li>
         <li><a href="punto8.php">Punto 8</a></li>
         <li><a href="punto9.php">Punto 9</a></li>
         <li><a href="punto10.php">Punto 10</a></li>
         <li><a href="punto11.php">Punto 11</a></li>
         <li><a href="punto11.php">Punto 18</a></li>
         <li><a href="punto12.php">Punto 12</a></li>
         <li><a href="punto13.php">Punto 13</a></li>
         <li><a href="punto14.php">Punto 14</a></li>
         <li><a href="punto15.php">Punto 15</a></li>
         <li><a href="punto16.php">Punto 16</a></li>
     </ul>
</body>
</html>