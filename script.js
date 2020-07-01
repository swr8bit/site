var answer = parseInt(Math.random() * 100);
var tryCount = 0;
var maxTryCount;
var user1name;
var user2name;
var result = "<b>Изменение cуммы по годам:<b><br><br>";
var pass = "";
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

//guess.php
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
//money.php
function detail() {
    write("info", result);
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
//passgen.php
function passGen() {

    var symbols = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    for (i = 0; i < (parseInt(document.getElementById("number").value)); i++) {
        pass += symbols.charAt(parseInt(Math.random() * (symbols.length - 1)));
    }
    document.getElementById("pass").innerHTML = "Ваш пароль: <b>" + pass + "<b>";
}
//puzzle.php
function checkAnswer(inputId, answers) {
    var userAnswer = document.getElementById(inputId).value;
    userAnswer = userAnswer.toLowerCase();
    if (answers.includes(userAnswer) == true) {
        answerCount++;
    } else {
        noAnswerCount++;
    }
}

function win() {
    write("info", "<b>Вы выиграли. количество отгаданых загадок - " + answerCount + "<b>");
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
    write("info", "<b>Проигрыш. Количество правильных ответов - " + answerCount + "<b>");
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
window.onload = function() {
    if ((document.getElementById("button").innerText) == "Ответить") {
        while (askNum.length < 3) {
            n = parseInt(Math.random() * (askMatrix.length - 1));
            askNum.push(askMatrix[n]);
            askMatrix.splice(n, 1);
        };
        write("ask1", askNum[0][0]);
        write("ask2", askNum[1][0]);
        write("ask3", askNum[2][0]);
    };
};