<html>
	<head>
	</head>
	<body>
		<?php
		echo "<table border=2>";
		for($x=1;$x<=9;$x++){
			echo "<tr>";
			for($y=1;$y<=9;$y++){
				$table_number=$y*$x;
				echo "<th>$table_number</th>";
			}
			echo "</tr>";
		}
		echo "</table>";
		?>
	</body>
</html>