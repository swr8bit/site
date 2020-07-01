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
	
	<div class="contentWrap">
        <div class="content">
            <div class="center">
				<h1>Ссылки и файлы</h1>
		        <div class="box_files">
					<p><b>Интересное:</b>
					<br><br>
					<a href="https://github.com/swr8bit/site" target="_blank">- Репозиторий этого сайта на GitHub</a>
					<br><br>
					<a href="/files/huinya.zip">- Скачать архивчик моих первых учебных заданий по javasctipt</a></p>
					<br><br>
					<p><b>Учебные задания с безплатной части курса Веб-разрабртки <a href="https://praktikum.yandex.ru/web/"><b>Яндекс.Практикума:</a><b></b>
					<br><br>
					<a href="/praktikum/4rules.html">- HTML, CSS - "Четыре правила вёрстки"</a>
					<br><br>
					<a href="/praktikum/procrastination.html">- javasctipt - "Прокрастинация"</a></p>
					<br><br>
					<?php
						include	"mycerts.php";
					?>
                </div>
            </div>
		</div>
    </div>
</div>
<div class="footer">
&copy; swr8bit	<?php echo date("Y");?>
</div>


</body>
</html>