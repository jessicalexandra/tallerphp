<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto 6</title>
</head>
<body>
<H1>PUNTO 6</H1>
    <form method="get">
        <label>Digite un numero del 1 al 7 para indicar dia de la semana</label> <br>
        <input type="number" name= "dia" placeholder="dia"> <br>
        <button type= "submit" >Enviar datos</button>
    </form>
    <?php
    if(isset($_GET["dia"])){
        $dia=$_GET["dia"]; 
        
        switch ($dia) {
            case 1:
            echo "lunes";
            break;
            case 2:
            echo "martes";
            break;
            case 3:
            echo "miercoles";
             break;
            case 4:
            echo "jueves";
            break;
            case 5:
            echo "viernes";
             break;
             case 6:
             echo "sabado";
            break;
            case 7:
            echo "domingo";
            break;
            
            default:
            echo "numero incorrecto";
                break;
        }
      
    }
  


?>
 <a href="index.php">index</a>

</body>
</html>