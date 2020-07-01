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

                    <h1>Игра в загадки</h1>

                    <div class="box">


                        <p id="info"></p>

                        <p id="ask1"></p>
                        <input type="text" id="userAnswer1">

                        <p id="ask2"></p>
                        <input type="text" id="userAnswer2">

                        <p id="ask3"></p>
                        <input type="text" id="userAnswer3">

                        <br><br><br>
                        <a href="#" onClick="checkAnswers();" id="button" >Ответить</a>

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