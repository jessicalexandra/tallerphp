<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>PUNTO 2</H1>
    <form method="get">
        <label>Digite los datos del triangulo</label> <br>
        <input type="number" name= "base" placeholder="base"> <br>
        <input type="number" name= "altura" placeholder="altura"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
        if (isset($_GET["base"])) {
            $base=$_GET["base"];
            $altura=$_GET["altura"];
            $area=($base *$altura)/2;

            echo "<p> la base del triangulo es : $base</p>";
            echo "<p> la base del triangulo es : $altura</p>";
            echo "<p> la base del triangulo es : $area</p>";
        }

    ?>
        <a href="index.php">index</a>

</body>
</html>