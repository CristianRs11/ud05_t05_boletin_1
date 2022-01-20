<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table border=1>
            <tr>
                <th></th>
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miércoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
            </tr>
            <?php
                $horario3= array (
                    "Primeira" => "IAW, SAD, ASX, ASX, IAW",
                    "Segunda" => "IAW, SAD, EIEA, ASX, SRI",
                    "Terceira" => "SRI, SAD, EIEA, EIEA, SRI",
                );
                foreach ($horario3 as $hora => $modulo) {
                    echo "<tr>
                    <td>$modulo</td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </body>
</html>