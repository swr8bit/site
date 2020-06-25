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

                    <h1>Генератор пароля</h1>

                    <div class="box">


                    <form method="post">
                        <p>Введите длину пароля</p>
                        <input type="text" name="number" id="number" value="">
                        <p>Сгенерировать пароль средствами PHP</p> 
                        <input class="button" type="submit" value="Генерировать">
                    <form>
                         
                    <p>Ваш пароль: <b><?php
                    echo passGen(intval($_POST['number']));

                    function passGen($number)
                    {
                        $arr = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','R','S','T','U','V','X','Y','Z','1','2','3','4','5','6','7','8','9','0');
                        // Генерируем пароль
                        $pass = "";
                        for($i = 0; $i < $number; $i++)
                        {
                        // Вычисляем случайный индекс массива
                        $index = rand(0, count($arr) - 1);
                        $pass .= $arr[$index];
                        }
                        return $pass;
                    }
                    ?><b></p>
                    
                     <br>
                        <p id="info"></p>
                        <p>Сгенерировать пароль средствами javascript</p>
                        <a href="#" onClick="passGen();" id="button">Генерировать</a>
                      
                      <script type="text/javascript">
                        
                        var pass=""
                        function passGen(){
                            
                            var symbols="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
                            for(i=0;i<(parseInt(document.getElementById("number").value));i++){
                                pass+=symbols.charAt(parseInt(Math.random() * (symbols.length - 1)));
                            }
                            document.getElementById("pass").innerHTML = "Ваш пароль: <b>"+pass+"<b>";
                        }
                      
                      </script>
                      
                        <p id="pass">Ваш пароль: </p>
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