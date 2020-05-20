<!DOCTYPE html>
<html>
<head>
	<title>Пятая лабораторная</title>
	<meta charset="utf-8">	
</head>
<body>
	<p>Выберите фигуру:</p>

	<form id="form" method="post" onsubmit="return set_action()">
	    <input type="radio" id="triangle" name="figure" value="triangle">
	    <label for="triangle">Треугольник</label><br>

	    <input type="radio" id="trapeze" name="figure" value="trapeze">
	    <label for="trapeze">Трапеция</label><br>

	    <input type="radio" id="ring" name="figure" value="ring">
	    <label for="ring">Кольцо</label><br>

		<input type="submit">					
	</form>

	<script type="text/javascript">
		function set_action() {
			var radios = document.getElementsByName("figure");

			for(var i = 0; i < radios.length; i++) {
				if(radios[i].checked) {
					document.getElementById('form').setAttribute('action', radios[i].value + '.php');
					break;
				}
			}
		}
	</script>
</body>
</html>