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
					<p>Интересное:</p>
                   	<p><a href="https://github.com/swr8bit/site"><b>Репозиторий этого сайта на GitHub</a></p>
					<p><a href="/files/huinya.zip"><b>Скачать архивчик моих учебных заданий</a></p>
					<br>
					<p>Учебные задания с безплатной части<a href="https://praktikum.yandex.ru/web/">курса Веб-разрабртки</a>Яндекс.Практикума:</p>
                    <p><a href="/praktikum/4rules.html"><b>HTML, css</a><a href="/praktikum/procrastination.html"><b>javasctipt</a></p>
					<br>
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