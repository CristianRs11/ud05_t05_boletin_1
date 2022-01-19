<html>
	<body>
		<table border=1>
				<tr>
					<th>Inglés</th>
					<th>Castellano</th>
				</tr>
		<?php
            $palabras = array(
                "Actually" => "Realmente",
				"Library" => "Biblioteca",
				"Carpet" => "Alfombra",
				"Eventually" => "A largo plazo",
				"Facilities" => "Instalaciones",
				"Influenza" => "Gripe",
				"Lecture" => "Conferencia",
				"Misery" => "Tristeza",
				"Molest" => "Agredir",
				"Notice" => "Anuncio"
			);
			foreach ($palabras as $ing => $esp) {
				echo "<tr>
				<td>$ing</td>
				<td>$esp</td>
				</tr>";
			}
		?>
		</table>
	</body>
</html>