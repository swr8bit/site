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

                    <h1>Игра в загадки</h1>

                    <div class="box">

                        <?php

                            if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

                                $userAnswer=$_GET["userAnswer1"];
                                $score=0;
                                if($userAnswer=="огурец"||$userAnswer=="огурчик"){
                                    $score++;
                                }

                                $userAnswer=$_GET["userAnswer2"];
                                if($userAnswer=="елка"||$userAnswer=="ель"){
                                    $score++;
                                }

                                $userAnswer=$_GET["userAnswer3"];
                                if($userAnswer=="лампочка"||$userAnswer=="лампа"){
                                    $score++;
                                }
                                echo "Вы угадали ". $score. " загадок.";
                            }                        
                        ?>

                        <form method="GET">
                            
                            <p>Без окон без дверей полна горница людей</p>
                            <input type="text" name="userAnswer1">

                            <p>Зимой и летом одним цветом</p>
                            <input type="text" name="userAnswer2">

                            <p>Висит груша - нельзя схавать</p>
                            <input type="text" name="userAnswer3">
                            
                            <br><br><br>

                            <input type="submit" value="Ответить" name="">
                            
                        </form>

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