<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>swr8bit</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        var result = "<b>Изменение cуммы по годам:<b><br><br>";

        function readInt(id) {
            return +document.getElementById(id).value;
        }

        function write(id, text) {
            document.getElementById(id).innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function detail() {
            write("info", result);
        }

        function retry() {
            window.location.reload();
        }

        function calculate() {
            var sum = readInt("rub");
            for (years = 1; years <= readInt("maxYears"); years++) {
                sum = sum + (sum * readInt("percent") / 100);
                result += "<b>" + years + "-й год: " + sum.toFixed(2) + " рублей<b><br>";
            }
            hide("rub");
            hide("percent");
            hide("maxYears");
            hide("ask1");
            hide("ask2");
            hide("ask3");
            hide("button");
            write("info", "<b>Через <b>" + readInt("maxYears") + " лет сумма вклада составит<br>" + sum.toFixed(2) + " рублей.<b>");
            write("button", "Пересчитать")
            document.getElementById("detailButton").style.display = "inline-block";
            document.getElementById("retryButton").style.display = "inline-block";
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

                    <h1>Калькулятор суммы вклада</h1>

                    <div class="box">

                        <br>
                        <p id="info"></p>
                        <p id="ask1">Введите желаемую сумму вклада в рублях</p>
                        <input type="text" id="rub">

                        <p id="ask2">Укажите проценты годовых</p>
                        <input type="text" id="percent">

                        <p id="ask3">Укажите на сколько лет будет вклад</p>
                        <input type="text" id="maxYears">

                        <br>
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