<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/modificar_generar.css">
        <script type="text/javascript" src="../js/filtro.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
</head>
<body>
   <form action="filtropdo.php" class="caja" method="post"  onsubmit="return validar()">
        <h2>Filtros</h2><br>
        <div class=alert id='mensaje'></div>
        <p>Filtrar por:</p>
        <p>Terraza <input type="radio" id='terraza' name="id_ubi" value="terraza"></p>
        <p>Comedor <input type="radio" id='comedor' name="id_ubi" value="Comedor"></p>
        <input type="submit" id='filtrar_ubi' value="Filtrar Ubicacion" name="enviar" class="btn btn-dark"><br><br><br>
        <!-- Establecemos el maximo de aforo en la reserva mediante el numero de sillas de la mesa -->
        <p>Filtrar el historial de la mesa:</p>
        <input type="number" name="id_mesa" id='id_mesa' min="1" max="10">
        <br><br>
        <input type="submit" id='filtrar_mesa' value="Filtrar Mesa" name="enviar" class="btn btn-dark">
</form>     
</body>
</html>
