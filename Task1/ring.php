<!DOCTYPE html>
<html>
<head>
	<title>Кольцо</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="handler.php" onsubmit="return check_input()">
		<div>
			<input type="number" name="ring[external_diameter]" placeholder="Внешний диаметр">
			<input type="number" name="ring[inner_diameter]" placeholder="Внутренний диаметр">
			
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