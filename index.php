<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>swr8bit</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	
		<?php
			include	"header.php";
		?>
	
	

	<div class="center">
	
		<div class="box_text">
			<h1><i>swr8bit</i>. cайт начинающего программиста</h1>
			<img src="img/photo.png">
			<h3>Приветствую!</h3>
			<p>Меня зовут <i>Иван Руденко</i>. Совсем недавно я решил освоить профессию программиста.</p>

			<p>На этом сайте я буду делиться своими достижениями и собирать <a href="files.php">моё портфолио.</a>.</p>

			<p>Выражаю благодарность <a href="https://stayhome.geekbrains.ru/">бесплатным курсам GeekBrains</a>и  вводному курсу <a href="https://praktikum.yandex.ru/web/">Веб-разрабртки Яндекс.Практикума</a>за помощь в обучении.</p>
			<br><br>
			<h3>Вот немного интересного:</h3>
				<p>
					<?php
						include	"menu.php";
					?>
				</p>
		</div>
	</div>
</div>
<div class="footer">
&copy; swr8bit	<?php echo date("Y");?>
</div>


</body>
</html>