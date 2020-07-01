<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>swr8bit</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" type="text/javascript"></script>    

</head>
<body>

    <div class="content">
	
        <?php
			include	"header.php";
		?>
	
        <div class="contentWrap">
            <div class="content">
                <div class="center">

                    <h1>Калькулятор суммы вклада</h1>

                    <div class="box">

                        <br>
                        <p id="info"></p>
                        <p id="ask1">Введите сумму вклада в рублях</p>
                        <input type="text" id="rub">

                        <p id="ask2">Укажите проценты годовых</p>
                        <input type="text" id="percent">

                        <p id="ask3">Укажите на сколько лет будет вклад</p>
                        <input type="text" id="maxYears">

                        <br><br>
                        <a href="#" onClick="calculate();" id="button">Посчитать</a>

                        <a href="#" onClick="detail();" style="display:none;" id="detailButton"><b>Подробно<b></a>

                        <a href="#" onClick="retry();" style="display:none;" id="retryButton">Заново</a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="footer">
        &copy; swr8bit <?php echo date("Y");?>
    </div>


</body>
</html>