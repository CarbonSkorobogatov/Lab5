<!DOCTYPE html>
<html>
<head>
	<title>Пятая лабораторная</title>
	<meta charset="utf-8">	
</head>
<body>
	<form action="handler.php" method="post" onsubmit="return check_input()">
		<p>
			<input type="number" name="distance[V]" placeholder="Начальная скорость">
			<input type="number" name="distance[a]" placeholder="Ускорение">
		</p>
		<br>

		<input type="submit">
	</form>

	<script type="text/javascript">
		function check_input() {
			var textbox = document.querySelectorAll("input[type='number']");			
			var valid_textbox = true;
			
			for (var i = 0; i < textbox.length; i++) {
				if (textbox[i].value == "" || textbox[i].value == "0") {
					valid_textbox = false;
					alert("Введите корректные данные")
					break;
				}
			}

			return valid_textbox;
		}

		function remember_input() {
			var prh = document.getElementsByClassName("remember_input");
			for (var i = 0; i < prh.length; i++)
				prh[i].setAttribute("value", prh[i].value);
		}	
	</script>

	<?php 
		if (isset($_POST['nickname'])) {	
			
			$V = $_POST['V'];
			$a = $_POST['a'];
			$nickname = $_POST['nickname'];


			$link = mysqli_connect('localhost', 'root','','battle');
			// if (!$link) {

				$result = mysqli_query($link, "INSERT INTO win VALUES('$nickname', $V, $a);");
				print_r($result);

			// }
				echo $nickname;
				echo $link->error;
		}
	 ?>
</body>
</html>