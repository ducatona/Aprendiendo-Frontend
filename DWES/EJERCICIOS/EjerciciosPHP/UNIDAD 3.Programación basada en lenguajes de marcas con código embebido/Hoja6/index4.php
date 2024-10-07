<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table border="1">

    <tr>

        <th>Nombre de la variable</th>
        <th>Valor</th>

    </tr>

    <?php


    foreach ($_SERVER as $nombre => $valor) {
        echo "<tr>";
        echo  "<td>$nombre</td>";
        echo  "<td>$valor</td>";
        echo "</tr>";
    }


    ?>

    </table>

</body>

</html>