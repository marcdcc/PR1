<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/vista.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php
include '../services/ver.php';

echo "<a href='../process/logout.php' class='logout'>Logout</a>";
echo "<h1>Reservas del restaurante</h1>";
echo "<a type='button' class='btn btn-dark btn_filtro' href='../process/filtro.php' class='filtro'>Filtro</a>";
echo "<form action='vista.php' method='post'>;
        <input type='submit' name='filtre' class = 'btn btn-dark btn_filtre' value='Todo'>
        <input type='submit' name='filtre' class = 'btn btn-dark btn_filtre' value='Terraza'>
        <input type='submit' name='filtre' class = 'btn btn-dark btn_filtre' value='Comedor'>
    </form>";
echo "<div></div>";

foreach ($listaMesas as $mesa) {
    if ($mesa['reservada']==0) {
        
        include 'vistacomun.php';

        echo "<tr>";
        echo "<td><a type='button' class='btn btn-dark' href='../process/generarform.php?id={$mesa['id_mesa']}&nsillas={$mesa['num_silla_dispo']}'>Generar reserva</a></td>";
        echo "</tr>";
        echo "</table>";
    }
}
foreach ($listaMesas as $mesa) {
    if ($mesa['reservada']==1) {
    
        include 'vistacomun.php';

        echo "<tr>";
        echo "<td><p>INICIO RESERVA -> {$mesa['fecha_inicio']}</p></td>";
        echo "</tr>";

        echo "<td><a type='button' class='btn btn-dark'  href='../process/modificarform.php?id={$mesa['id_reserva']}&npersonas={$mesa['num_personas']}&nombrecli={$mesa['nombre_cliente']}&nsillas={$mesa['num_silla_dispo']}'>Modificar reserva</a></td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><a type='button' class='btn btn-dark'  href='../process/liberar.php?id={$mesa['id_reserva']}'  onclick=\"return confirm('¿Estás seguro de liberar la mesa?')\">Liberar reserva</a></td>";
        echo "</tr>";
        echo "</table>";
    }
}

?>

</body>
</html>