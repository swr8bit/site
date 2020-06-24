<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>swr8bit</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function checkAnswer(inputId, answers) {
            var userAnswer = document.getElementById(inputId).value;
            userAnswer = userAnswer.toLowerCase();
            if (answers.includes(userAnswer) == true) {
                answerCount++;
            } else {
                noAnswerCount++;
            }
        }

        function write(id, text) {
            document.getElementById(id).innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function retry() {
            window.location.reload();
        }

        function win() {
            write("info", "Вы выиграли. количество отгаданых загадок - " + answerCount);
            hide("userAnswer1");
            hide("userAnswer2");
            hide("userAnswer3");
            hide("ask1");
            hide("ask2");
            hide("ask3");
            hide("button");

            document.getElementById("retryButton").style.display = "inline-block";
        }

        function loss() {
            write("info", "Проигрыш. Количество правильных ответов - " + answerCount);
            hide("userAnswer1");
            hide("userAnswer2");
            hide("userAnswer3");
            hide("ask1");
            hide("ask2");
            hide("ask3");
            hide("button");

            document.getElementById("retryButton").style.display = "inline-block";
        }

        function checkAnswers() {
            checkAnswer("userAnswer1", askNum[0]);
            checkAnswer("userAnswer2", askNum[1]);
            checkAnswer("userAnswer3", askNum[2]);
            if (answerCount > noAnswerCount) {
                win();
            } else {
                loss();
            }

        }

        var askMatrix = [
            ["Висит груша - нельзя схавать", "лампа", "лампочка"],
            ["Зимой и летом одним цветом", "ель", "елка", "ёлка", "саша белый"],
            ["Без окон без дверей полна горница людей", "огурец", "огурчик"],
            ["Туда сюда обратно - тебе и мне приятно", "качели", "качеля"],
            ["Не лает, не кусает, а в дом не пускает", "замок"]
        ];

        var answerCount = 0;
        var noAnswerCount = 0;
        var askNum = [];
        var n;

        while (askNum.length < 3) {
            n = parseInt(Math.random() * (askMatrix.length - 1));
            askNum.push(askMatrix[n]);
            askMatrix.splice(n, 1);
        }
    </script>

</head>

<body>

    <div class="content">

	<div class="header">       
		<?php
			include	"menu.php";
		?>
	</div>
	
        <div class="contentWrap">
            <div class="content">
                <div class="center">

                    <h1>Игра в загадки</h1>

                    <div class="box">


                        <p id="info"></p>

                        <p id="ask1">
                            <script>
                                document.write(askNum[0][0]);
                            </script>
                        </p>
                        <input type="text" id="userAnswer1">

                        <p id="ask2">
                            <script>
                                document.write(askNum[1][0]);
                            </script>
                        </p>
                        <input type="text" id="userAnswer2">

                        <p id="ask3">
                            <script>
                                document.write(askNum[2][0]);
                            </script>
                        </p>
                        <input type="text" id="userAnswer3">

                        <br>
                        <a href="#" onClick="checkAnswers();" id="button">Ответить</a>

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