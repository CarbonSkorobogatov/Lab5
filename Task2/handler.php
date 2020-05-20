<!DOCTYPE html>
<html>
<head>
	<title>Пятая лаба</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$g = 9.8;		
		if (isset($_POST['distance'])) {
			$p = $_POST['distance']['p'];
			$r = $_POST['distance']['r'];
			$h = $_POST['distance']['h'];
			$t = $_POST['distance']['t'];
			$V = $_POST['distance']['V'];
			$a = $_POST['distance']['a'];

			for ($i=0; $i <= $t; $i += 0.01) { 
				$X = $V*cos($a)*$i;				
				$Y = $V*sin($a)*$i - $g*pow($i,2)/2;											

				if ($X >= $r && $Y >= $h && $Y <= ($p + $h)) {
					echo "<h1>Попал!</h1>";
					echo "<form action='index.php' method='post' onsubmit='return check_input()'>
							<input type='text' name='nickname' placeholder='Никнейм'><input type='submit'><br>
							<input type='text' name='p' value='{$p}' readonly>
							<input type='text' name='r' value='{$r}' readonly>
							<input type='text' name='h' value='{$h}' readonly>
							<input type='text' name='t' value='{$t}' readonly>
							<input type='text' name='V' value='{$V}' readonly>
							<input type='text' name='a' value='{$a}' readonly>								
						 </form>

						 <script type='text/javascript'>						 							 	
							function check_input() {
								var textbox = document.querySelectorAll(`input[type='text']`);		
								var valid_textbox = true;								
								for (var i = 0; i < textbox.length; i++) {
									if (textbox[i].value == '') {
										valid_textbox = false;
										alert('Введите корректные данные')
										break;
									}
								}

								return valid_textbox;
							}
						</script>";
					break;
				} elseif ($i == $t || $Y < 0) {
					echo "<h1>Не попал!</h1>";
					break;
				} 
			}
			
		}
	 ?>
</body>
</html>
