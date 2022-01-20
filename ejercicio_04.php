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
                $horario= array (
                    "8:50-9:40" => array ("IAW", "SAD", "ASX", "ASX", "IAW"),
                    "9:40-10:30" => array ("IAW", "SAD", "EIEA", "ASX", "SRI"),
                    "10:30-11:20" => array ("SRI", "SAD", "EIEA", "EIEA", "SRI"),
                    "11:20-12:00" => array ("Recreo"),
                    "12:00-12:50" => array ("SRI", "ASO", "ASO", "IAW", "SAD"),
                    "12:50-13:40" => array ("ASO", "ASO", "IAW", "IAW", "SAD"),
                    "13:40-14:30" => array ("ASX", "ASO", "IAW", "SRI", "SAD"),
                    "14:30-16:00" => array ("Mediodía"),
                    "16:00-16:50" => array (" ", "SRI", " ", "ASO", " "),
                    "16:50-17:40" => array (" ", "SRI", " ", "ASO", " "),
                    "17:40-18:30" => array (" ", "SRI", " ", "ASO", " ")
                );
                foreach ($horario as $hora => $modulo) {
                    if (count ($modulo) >1) {
                    echo "<tr>
                    <td>$hora</td>
                    <td>$modulo[0]</td>
                    <td>$modulo[1]</td>
                    <td>$modulo[2]</td>
                    <td>$modulo[3]</td>
                    <td>$modulo[4]</td>
                    </tr>";
                    }
                    else {
                        echo "<tr>
                        <td>$hora</td>
                        <td colspan = 5 style='text-align:center'>$modulo[0]</td>
                        ";
                    }
                };
            ?>
        </table>
    </body>
</html>