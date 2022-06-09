<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 11</title>
</head>
<body>
<H1>PUNTO 11</H1>
    <form method="post">
        <label>Digite un numero</label> <br>
        <input type="number" name= "num" placeholder="num"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>

    <?php
  if ($_POST && $_POST["num"]) {
    $num=$_POST["num"];
    $cont=$num;

    for ($i=$num; $i > 0; $i--) { 
    
     if ($cont >0) {
        echo "<p>" .$cont. "</p>"; 
     
     }
     $cont=$cont-3;
    }
   

   }
   ?>
<a href="index.php">index</a>
</body>
</html>