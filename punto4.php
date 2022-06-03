<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 4</title>
</head>
<body>
<H1>PUNTO 4</H1>
    <form method="get">
        <label>Ingrese un numero</label> <br>
        <input type="number" name= "numero" placeholder="numero"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
    if (isset($_GET["numero"])) {
        $numero=$_GET["numero"];
        if ($numero %2 ==0 ) {
            echo "<p> numero es par</p>";  

        }
        else{
            echo "<p> numero es impar</p>";  
        }
        if ($numero>0) {
            echo "<p> numero es positivo</p>";  
        }else if ($numero <0){
            echo "<p> numero es negativo</p>";
        }
    }
    ?>

    <a href="index.php">index</a>
</body>
</html>