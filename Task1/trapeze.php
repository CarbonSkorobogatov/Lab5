<!DOCTYPE html>
<html>
<head>
	<title>Трапеция</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="handler.php" onsubmit="return check_input()">
		<div>
			<input type="number" name="trapeze[first_base]" placeholder="Первое основание">
			<input type="number" name="trapeze[second_base]" placeholder="Второе основание">
			<input type="number" name="trapeze[height]" placeholder="Третье основание">

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