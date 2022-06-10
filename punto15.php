<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 15</title>
    <style>
        .gener{
            margin-right:20px ;
        }
    </style>
</head>
<body>
<form method="post">
        <input type="hidden" name="enviar" />
        <input type="submit" value="enviar">
    </form>

    <?php 
       if($_POST) {
         $peliculas=[
                "accion" => [ "Duro de matar", "Rapido y furiosos", "Iron man", " Matrix"],
                "terror"=>[ " La monja", "La llorona", "El aro"],
                "Aventura" =>[ " Animales fantasticos ","Morbius"],
                "comedia"=> ["senior year", "sonic "]
         ];

         foreach ($peliculas as $genero => $pelicula) {
           
            echo "<span class='gener'> genero [$genero]  </span>";
          
            foreach ($pelicula as $nombres) {
                echo "<span> nombre ( $nombres )</span>";
            }

            echo "<p> </p>";
         }
           
       }
    ?>
       <a href="index.php">index</a>
    
</body>
</html>