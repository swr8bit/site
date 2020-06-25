<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>swr8bit</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        var answer = parseInt(Math.random() * 100);
        var tryCount = 0;
        var maxTryCount;
        var user1name;
        var user2name;

        function retry() {
            window.location.reload();
        }

        function readInt(id) {
            return +document.getElementById(id).value;
        }

        function readText(id) {
            return document.getElementById(id).value;
        }

        function write(id, text) {
            document.getElementById(id).innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function tryCountSelect() {
            ///TODO спросить у пользователей имена, слелать для одного, либо вдвоем
            maxTryCount = readInt("maxTryCount");
            document.getElementById("info1").style.display = "block";
            document.getElementById("user1name").style.display = "block";
            document.getElementById("info2").style.display = "block";
            document.getElementById("user2name").style.display = "block";
            document.getElementById("tryCountSelectButton").style.display = "inline-block";
            hide("askTryCounts");
            hide("maxTryCount");
            hide("meetingButton");
            hide("altPlayButton");
        }

        function meeting() {
            user1name = readText("user1name");
            user2name = readText("user2name");
            write("info1", ("Введите число от 1 до 100 в свое поле<br> <br>" + user1name));
            write("info2", user2name);
            document.getElementById("userAnswer1").style.display = "block";
            document.getElementById("userAnswer2").style.display = "block";
            document.getElementById("checkButton").style.display = "inline-block";
            hide("tryCountSelectButton");
            hide("user1name");
            hide("user2name");
        }

        function guess() {
            tryCount++
            var userAnswer1 = readInt("userAnswer1");
            var userAnswer2 = readInt("userAnswer2");
            if (userAnswer1 == answer) {
                write("info1", "<b>Поздравляю, " + user1name + ", вы угадали!<b>");
                hide("checkButton");
                hide("userAnswer1");
                document.getElementById("retryButton").style.display = "inline-block";
            }
            if (userAnswer2 == answer) {
                write("info2", "<b>Поздравляю, " + user2name + ", вы угадали!<b>");
                hide("checkButton");
                hide("userAnswer2");
                document.getElementById("retryButton").style.display = "inline-block";

            }
            if (userAnswer1 > answer) {
                write("info1", (user1name + ", вы ввели слишком большое число."));
            }
            if (userAnswer1 < answer) {
                write("info1", (user1name + ", вы ввели слишком маленькое число."));
            }
            if (userAnswer2 > answer) {
                write("info2", (user2name + ", вы ввели слишком большое число."));
            }
            if (userAnswer2 < answer) {
                write("info2", (user2name + ", вы ввели слишком маленькое число."));
            }
            write("info", "Попробуйте еще раз!<br>Осталось попыток: " + (maxTryCount - tryCount));
            if (tryCount >= maxTryCount || userAnswer1 == answer || userAnswer2 == answer) {
                write("info", "<b>Игра окончена.<br>Если кто не понял, правильный ответ был " + answer);
                hide("checkButton");
                hide("userAnswer1");
                hide("userAnswer2");
                document.getElementById("retryButton").style.display = "inline-block";
            }
            return;

        }

        function guess1() {

            var maxPlayerNum = +prompt("Интерактивная игра \"Отгадай число\"\nВведите число игроков.");
            var playerNum = 1;
            var maxTryCount = +prompt("Введите количество попыток, \"0\" - неограничено.");

            if (maxTryCount == 0) {
                maxTryCount = Infinity;
            }

            var tryCount = 0;

            while (tryCount < maxTryCount) {


                if (playerNum == 1 && tryCount != 0 && maxPlayerNum != 1) {
                    alert("Никто не угадал!\nПереход хода к Игроку " + playerNum);
                }

                if (maxTryCount != Infinity) {
                    var userAnswer = prompt("Игрок " + playerNum + ", отгадайте число от 1 до 100\nУ вас осталось " + (maxTryCount - tryCount) + " попыток.\n\"q\" - прервать игру.");
                } else {
                    userAnswer = prompt("Игрок " + playerNum + ", отгадайте число от 1 до 100\nУ вас неограниченое количество попыток!\n\"q\" - прервать игру.");
                }

                if (userAnswer == "q") {
                    alert("Игрок " + playerNum + " прервал игру.");
                    break;
                }
                userAnswer = parseInt(userAnswer);

                if (userAnswer == answer) {
                    alert("Поздравляем, Игрок " + playerNum + ", вы победили!");
                    break;

                } else if (userAnswer > answer) {
                    alert("Игрок " + playerNum + ", вы ввели слишком большое число");
                } else if (userAnswer < answer) {
                    alert("Игрок " + playerNum + ", вы ввели слишком маленькое число");
                }

                if (playerNum == maxPlayerNum) {
                    tryCount++;
                }
                if (playerNum == maxPlayerNum) {
                    playerNum = 1;
                } else {
                    playerNum++;
                }
            }

            alert("Игра окончена.\nЕсли кто не понял, правильный ответ был " + answer);


        }
    </script>

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