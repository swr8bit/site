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

                    <h1>Угадай число</h1>

                    <div class="box">

                        <br>
                        <p id="askTryCounts">Укажите количество попыток</p>
                        <br>
                        <input type="text" id="maxTryCount">
                        <br>


                        <p id="info1" style="display:none;">Представьтесь.<br> <br>Игрок 1:</p>
                        <input type="text" style="display:none;" id="userAnswer1">
                        <input type="text" style="display:none;" id="user1name">

                        <p id="info2" style="display:none;">Игрок 2:</p>
                        <input type="text" style="display:none;" id="userAnswer2">
                        <input type="text" style="display:none;" id="user2name">

                        <p id="info"></p>
                        <a href="#" onClick="tryCountSelect();" id="meetingButton">Далее</a>
                        <a href="#" onClick="meeting();" style="display:none;" id="tryCountSelectButton">Начать</a>
                        <a href="#" onClick="guess();" style="display:none;" id="checkButton">Проверить</a>
                        <a href="#" onClick="retry();" style="display:none;" id="retryButton">Заново</a>
                        <a href="#" onClick="guess1();" id="altPlayButton">Играть с друзьями</a>
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