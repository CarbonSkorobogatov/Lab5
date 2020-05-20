<?php 
	$link = mysqli_connect("localhost", "root", "", "math");
	global $square;

	if (isset($_POST['triangle'])) {
		$a = $_POST['triangle']['first_side'];
		$b = $_POST['triangle']['second_side'];
		$c = $_POST['triangle']['third_side'];

		$p = ($a + $b + $c)/2;

		$square = sqrt($p*($p-$a)*($p-$b)*($p-$c));		

	} elseif (isset($_POST['trapeze'])) {
		$a = $_POST['trapeze']['first_base'];
		$b = $_POST['trapeze']['second_base'];
		$h = $_POST['trapeze']['height'];

		$square = $h*($a+$b)/2;

	} elseif (isset($_POST['ring'])) {
		$external_radius = $_POST['ring']['external_diameter']/2;
		$inner_radius = $_POST['ring']['inner_diameter']/2;

		$square = pi*(pow($external_radius, 2) - pow($inner_radius, 2));

	}

	echo "<p>Площадь = {$square}</p>";
	database_output($link,$square);

	function database_output ($link, $square) {		
		$result = mysqli_query($link, "SELECT * FROM figure WHERE square <= {$square}");
		while ($row = mysqli_fetch_assoc($result)) {
			$id = $row['id_figure'];
			$figure = $row['figure'];
			$square = $row['square'];

			echo "<p>{$id} - {$figure} - {$square}</p>";
		}
				
	}
 ?>