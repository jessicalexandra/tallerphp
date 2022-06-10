<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto14</title>
    <style>
        .space{
            margin-left: 20px;
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
           $letras = [
               ['g','b','c','d','f'],
               ['g','h','i','j','k'],
               ['l','m','n','o','p'],
               ['q','r','s','t','u']
           ];

           for ($i=0; $i < count($letras); $i++) { 
               for ($j=0; $j < count($letras[$i]); $j++) { 
                    echo "<span class='space'>".$letras[$i][$j]."</span>";
               }

               echo "<p></p>";
                
           }

           
       }
    ?>
       <a href="index.php">index</a>
    
</body>
</html>