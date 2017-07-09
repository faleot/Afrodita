<?
require "sql.php";
$date = $_POST;

if (isset($date['sub'])) {
            if ($sql_date['login'] == $date['login'] && $sql_date['pass'] == $date['password']) {
                header('Location: admin.php');
            } else {
                echo "";
            }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Спортивный клуб Афродита</title>
</head>
<body>
<!--[if lt IE 10]>
<p class="chromeframe">Похоже, что ты используешьустаревший браузер, друг. Пожалуйста, <a href="http://
browsehappy.com/">скачай новый браузер абсолютнобесплатно</a> или <a href="http://www.google.com/
chromeframe/?redirect=true">активируй Google Chrome Frame</a></p>
<![endif]-->
<!--Wrapper-->
<div class="wrapper clearfix">
    <!--Header-->
    <header class="header">
        <div class="container clearfix">
            <div class="header-left">
                <a href="index.html" class="logo">афродита</a>
            </div>
            <div class="header-right">
                <div class="contacts">
                    <a href="tel:+38800039210" class="contacts__phone">8 (800) 00-392-10</a>
                    <div class="contacts__popup">
                        <a href="#" class="contacts__popup-link contacts__popup-link_hover">График работы</a>
                        <div class="contacts__popup-block">
                            <p class="contacts__popup-chedule">пн-вс: 09:00-20:00</p>
                            <p class="contacts__popup-eat">обед: 14:00-14:30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<section class="section">
    <div class="container clearfix">
        <div class="authorization">
            <span class="autorization__caption">панель администратора</span>
            <form action="index.php" method="post" class="autorization__form">
                <div class="autorization__row">
                <label for="login" class="autorization__label">Имя пользователя</label>
                <input type="text" name="login" class="autorization__input-login" id="login-in" style="border: 2px solid transparent;">
                </div>
                <div class="autorization__row">
                <label for="pass" class="autorization__label">Пароль</label>
                <input type="password" name="pass" class="autorization__input-password" id="pass">
                </div>
                    <input type="submit" class="autorization__submit" value="войти" name="sub">
            </form>
        </div>
    </div>
</section>


    <footer class="footer">
        <div class="container clearfix">
            <div class="footer-left">
                Сделано с любовью и старанием <br>
                на курсе «HTML + CSS» в <a href="http://loftschool.ru" class="footer-left__link info__link_bold">LoftSchool.</a>
                Автор работы: <strong class="footer-left__name info__name_bold">Швырялкин Илья</strong>
            </div>
            <div class="footer-logo">
                <a href="index.html" class="logo">АФРОДИТА</a>
            </div>
            <div class="footer-right">
                <span class="footer-right__caption">Наши социальные сети</span>
                <ul class="socials">
                    <li class="socials__item"><a href="#" class="socials__link socials__link_vk"></a></li>
                    <li class="socials__item"><a href="#" class="socials__link socials__link_facebook"></a></li>
                    <li class="socials__item"><a href="#" class="socials__link socials__link_google"></a></li>
                    <li class="socials__item"><a href="#" class="socials__link socials__link_twitter"></a></li>
                    <li class="socials__item"><a href="#" class="socials__link socials__link_mail"></a></li>
                </ul>
            </div>
            </ziv>
    </footer>
    <!--Footer close-->
</div>
<!--Wrapper close-->
</body>
</html>