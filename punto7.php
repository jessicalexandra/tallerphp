<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 7</title>
</head>
<body>
<H1>PUNTO 7</H1>
    <form method="get">
        <label>Digite la edad</label> <br>
        <input type="number" name= "edad" placeholder="edad"> <br>
      <button type= "submit" >Enviar datos</button>
    </form>
    <?php
   if (isset($_GET["edad"])) {
       $edad=$_GET["edad"];

       if ($edad<=18) {
        echo "<p> La persona es adolecente </p>";  
       }
       else if ($edad >18 && $edad<=28 ){
        echo "<p> La persona es adulto adolecente </p>";  
       }
       else if ($edad >=29 && $edad<=49){
        echo "<p> La persona es adulto </p>";  
       }
       else if($edad>=50){
        echo "<p> La persona es adulto mayor </p>";  
       }

   }

    ?>

<a href="index.php">index</a>
</body>
</html>