<?php
header("Content-type: text/html; charset=utf-8");
require_once 'calc.php';

if(!empty($_POST)){
    calculation();
    header("Location: {$_SERVER['PHP_SELF']}");
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Банк</title>
        <link rel="stylesheet" href="styles.css">

        <script 
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="headerBank" name="headerBank" class="headerBank">
        <img src="defaults/logo.png" width="100" height="100">WORLD BANK Publications
        </div>
    <div class="mainMenu">

        <nav class="main-nav">
  		<ul class="bankMenu">
        <li>
          <a href="#">
            <span class="">Кредитные карты</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="">Вклад</span>
        </li>
         	<li>
             <a href="#">
               <span class="">Дебетовая карта</span>
            </a>
        </li>
        <li>
            <a href="#">
            <span class="">Страхование</span>
            </a>
        </li>
        <li>
            <a href="#">
            <span class="">Друзья</span>
            </a>
        </li>
        <li>
            <a href="#">
            <span class="">Интернет-банк</span>
            </a>
        </li>
        </ul>
        </nav>    
    </div>

        <form action="index.php" method="post">
            <!--<div class="menu">Меню</div>
            <div class="text"></div>-->
            <p>
            <div>
                <label for="dateIn">Дата оформления вклада</label>
                <input type="date" id="dateIn" name="dateIn">
            </div>
            </p>
            
            <p>
            <div>
                <label for="sum">Сумма вклада</label>
                <input type="text" id="sum" name="sum">
            </div>
            </p>

            <p>
            <div>
                <label for="dateLong">Срок вклада</label>
                <select name="dateLong" id="dateLong">
                    <option value="1">1 год</option>
                    <option value="2">2 года</option>
                    <option value="3">3 года</option>
                    <option value="4">4 года</option>
                    <option value="5">5 лет</option>
                </select>
            </div>    
            </p>

            <p>
            <div>
                <label for="adding">Пополнение вклада</label>
                <input type="radio" name="answer" value=1>да
                <input type="radio" name="answer" value=0 checked>нет
            </div>   
            </p>
            
            <p>
            <div>
                <label for="sumAdding">Сумма пополнения вклада </label>
                <input type="text" id="sumAdding" name="sumAdding">
            </div>
            </p>

            <p>
                <button type="submit" id="countButton" name="countButton">Рассчитать</button>
                Результат: <?php calculation();?>
            </p>
        </form>
        <div class="footer"></div>
    </body>
</html>