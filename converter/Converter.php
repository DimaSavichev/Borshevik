<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Converter</title>
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/converter.css">
</head>
<body>
<p class="mail">НАША ПОЧТА: HELP@BORSCHEVIK.BIZML.RU</p>
<hr>
<section class="main-item">
    <section class="logo">
        <img src="../images/logo.png" alt="Борщевик" class="logo-img">
    </section>
    <h1 class="center">Борщевик</h1>
</section>
<nav>
    <ul>
        <li class="inactive_button center"><a href="../index.html"><section>Главная</section></a></li>
        <li class="inactive_button center"><a href="../playlists.html"><section>Плейлисты</section></a></li>
        <li  class="inactive_button center"><a href="../help.html"><section>Помощь</section></a></li>
    </ul>
</nav>
<section>
    <h1 class="conv-header">Конвертер для дат</h1>
    <section class="convert">
	  <?php
    		echo "
			  <form action ='Converter.php' method='GET'>
			  	<h2>Введите дату:</h2>
        		<input type='text' placeholder='Введите год' name='date'><br><br>
				<input class='button' type='submit' value='Получить слова для даты'><br><br>
				<h2>Возможные зашифровки</h2><br>
      		</form>
    		";
    		if (isset($_GET["date"])){
      		$date = intval($_GET["date"]);
      		if (($date > 0) and ($date<=9992)){
        		$AllDates = "DatesAndWords.txt";
        		$lines = file($AllDates);
        		$result =$lines[$date - 1];
        		$result = str_replace(((string) $date).' ', '', $result);
        		$get = mb_detect_encoding($result, array('utf-8', 'cp1251'));
				$result = iconv($get, 'UTF-8', $result);
				if ($result != ''){
					echo $result;
				}else{
					echo "К сожалению для данной даты мы ничего не смогли подобрать :(";
				}
      		}else{
        		if ($date < 0 ){
          			echo "Ошибка: год может быть только нашей эры :)";
        		}else{
          			echo "Ошибка: такого года не существует. Обратите внимание, что нулевого года не существует, а также только число является годом :)"; 
        		}
      		}
    		}
  	?>
    </section>
</section>
<footer>
    <p>© 2019, Спицын Н., Савичев Д., Феоктистов Д., Бударин П.</p>
</footer>
</body>
</html>

