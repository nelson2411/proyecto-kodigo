<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Monedas</title>
    <link rel="stylesheet" href="./CSS/style.css" type="text/css">
</head>

<body>
    <div class="header">
    <h1>Bienvenido al Conversor Universal</h1>
    <p>Selecciona el conversor que quieres utilizar:</p>
    </div>
    <form action="" method="GET" class="header__form">
    <input class="btn" type="submit" value="Conversor de Moneda" name="moneda">
    <input class="btn" type="submit" value="Conversor de Longitud" name="longitud">
    <input class="btn" type="submit" value="Conversor de Masa" name="masa">
    <input class="btn" type="submit" value="Conversor de Volumen" name="volumen">
    <input class="btn" type="submit" value="Conversor de Datos" name="datos">
    <input class="btn" type="submit" value="Conversor de Tiempo" name="tiempo">
    </form>

    <?php 
    if (isset($_GET['moneda'])){
        require 'Controlador/logica-moneda.php';
        require 'Secciones/seccion-moneda.php';
    } elseif(isset($_GET['longitud'])){
        require 'Controlador/logica-longitud.php';
        require 'Secciones/seccion-longitud.php';
    }  elseif(isset($_GET['masa'])){
        require 'Controlador/logica-masa.php';
        require 'Secciones/seccion-masa.php';
    }  elseif(isset($_GET['volumen'])){
        require 'Secciones/seccion-volumen.php';
    }  elseif(isset($_GET['datos'])){
        require 'Controlador/logica-datos.php';
        require 'Secciones/seccion-datos.php';
    }  elseif(isset($_GET['tiempo'])){
        require 'Controlador/logica-tiempo.php';
        require 'Secciones/seccion-tiempo.php';
    }
    ?>
<footer>
    <p>&copy; 2020 - <?php echo date('Y'); ?> </p>
    <h3>Integrantes: </h3>
    <ul>
    <a href="https://github.com/jocgus7">Jose Guzman</a>
    <a href="https://github.com/EEMartir" >Erick Martir</a>
    <a href="https://github.com/DiegouB096">Diego Barrientos</a>    
    <a href="https://github.com/nelson2411">Nelson Rosales</a>
    </ul>
</footer>
</body>
</html>