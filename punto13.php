<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 13</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="env" />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
       if($_POST) {
           $productos = [
               "arroz" => "roa",
               "aceite" => "premier",
               "arepa" => "tela",
               "azucar" => "morena"
           ];

           foreach ($productos as $key => $value) {
               echo "<p>producto: $key - tipo: $value</p>";
           }
       }
    ?>
     <a href="index.php">index</a>
</body>
</html>