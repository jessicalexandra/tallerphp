<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto12.php</title>
</head>
<body>
<form method="post">
<label>Digite fruta 1</label> <br>
        <input type="text" name= "fruta1" placeholder="fruta1"> <br>
        <label>Digite fruta 2</label> <br>
        <input type="text" name= "fruta2" placeholder="fruta2"> <br>
        <button type= "submit" >Enviar datos</button>
        </form>
</body>

<?php 
        $frutas = ["fresa", "mora", "cereza"];
        if($_POST && !empty($_POST['fruta1']) && !empty($_POST['fruta2'])) {
           array_push($frutas, $_POST['fruta1']);
           array_push($frutas, $_POST['fruta2']);

           for ($i=0; $i < count($frutas); $i++) { 
               echo "<p>".$frutas[$i]."</p>";
           }
        }
    ?>
    <a href="index.php">index</a>
</html>