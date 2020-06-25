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
	
	<h1><i>swr8bit</i>. cайт начинающего программиста</h1>

	<div class="center">
	<img src="img/photo.png">
		<div class="box_text">

			<p><b>Приветствую!</b><br><br> Меня зовут <i>Иван Руденко</i>. Совсем недавно я решил освоить профессию программиста.</p>

			<p>На этом сайте я буду делиться своими достижениями и собирать <a href="#">моё портфолио</a>.</p>

			<p>Выражаю благодарность <a href="https://stayhome.geekbrains.ru/">бесплатным курсам GeekBrains</a>за помощь в обучении.</p>
			<p>Вот немного интересного:<br>    
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