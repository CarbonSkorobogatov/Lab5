<!DOCTYPE html>
<html>
<head>
	<title>Треугольник</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="handler.php" onsubmit="return check_input()">
		<div>
			<input type="number" name="triangle[first_side]" placeholder="Первая сторона">
			<input type="number" name="triangle[second_side]" placeholder="Вторая сторона">
			<input type="number" name="triangle[third_side]" placeholder="Третья сторона">

			<input type="submit">
		</div>
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
	</script>

</body>
</html>