<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../js/modificar_generar.js"></script>
    <link rel="stylesheet" href="../css/modificar_generar.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
<form action="generarpdo.php" method="post" class="caja" onsubmit="return validar()">
        <h2>Generar</h2>
        <div class=alert id='mensaje'></div>
        <p>Numero de personas en la reserva</p>
        <input type="number" name="num_personas_reserva" id='num_personas_reserva' min="1" max="<?php echo $_GET['nsillas']?>">
        <br>
        <p>Introduce el nombre del titular de la reserva</p>
        <input type="text" name="nombre_cliente" id='nombre_cliente'>
        <br>
        <input type="hidden" name="id_mesa" value="<?php echo $_GET['id'] ?>">
        <br>
        <input type="submit" value="Generar reserva" class="btn btn-dark">
</form>
</body>
</html>