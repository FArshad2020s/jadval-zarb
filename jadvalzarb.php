<html>
	<head>
	</head>
	<body>
		<?php
		for($x=1;$x<=9;$x++){
			$row=[];
			for($y=1;$y<=9;$y++){
				$row[]=$x*$y;
			}
			$rows[]=$row;
		}
		echo "<table border=2>";
		foreach($rows as $row){
			echo "<tr>";
			foreach($row as $agor){
				echo "<th>$agor</th>";

			}
			echo "</tr>";
		}
		echo "</table>";
		?>
	</body>
</html>