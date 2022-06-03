<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 9</title>
</head>
<body>
<H1>PUNTO 9</H1>
    <form method="get">
        <label>Digite un numero</label> <br>
        <input type="number" name= "num" placeholder="num"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
   if (isset($_GET["num"])) {
       $num=$_GET["num"];

       for ($i=12; $i >= 1; $i--) { 
        echo "<p> $num * ".$i. " = ".($num*$i)." </p>";  

       }



   }
   ?>
<a href="index.php">index</a>

    
</body>
</html>