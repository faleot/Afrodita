<?php
require  'sql.php';

$but_chenge = '<a href="#" class="chenged__but">Изменить</a>';
$but_save = '<a href="#" class="chenged__save">Сохранить</a>';

if (isset($but_save)) {
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin-css/admin.css">
    <link rel="stylesheet" href="admin-css/admin-panel.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
    <title>Спортивный клуб Афродита</title>
</head>
<body>
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
    <!--Header close-->

    <!--Content-->
    <section class="section">
        <div class="container clearfix">
            <aside class="sidebar">
                <nav class="navigation">
                    <ul class="navigation__list">
                        <li class="navigation__list-item"><a href="afrodita.html" class="navigation__list-link navigation__list-home navigation__list-home_active">ГЛАВНАЯ</a></li>
                        <li class="navigation__list-item"><a href="services.html" class="navigation__list-link navigation__list-services">УСЛУГИ</a></li>
                        <li class="navigation__list-item"><a href="feed.html" class="navigation__list-link navigation__list-feed">ОТЗЫВЫ</a></li>
                    </ul>
                </nav>
                <?echo $but_chenge;?>
                <?echo '<br />';?>
                <?echo $but_save;?>
            </aside>

            <main class="main">
                <div class="main-header">
                    <h1 class="main-header__caption">О КОМПАНИИ</h1>
                </div>
                <div class="main-content">
                    <p class="main-content__text">
                        <strong class="main-content__text main-content__text_bold">Фитнес-центр «Афродита»</strong> приглашает вас оздоровиться и провести приятно время с друзьями или знакомыми, занимаясь вместе спортом. Квалифицированные тренеры найдут индивидуальный подход к каждому, помогут достигнуть поставленных целей и определят оптимальную нагрузку.
                    </p>
                    <p class="main-content__text" id="p1">
                        Нашим главным отличием мы считаем огромный <strong class="main-content__text main-content__text_bold">50 метровый бассейн</strong>, состоящий из 6 дорожек. Помимо бассейна в зоне отдыха установлены финские сауны и турецкий хамам. Это прекрасный вариант для восстановления после тяжелой тренировки.
                    </p>
                    <p class="main-content__text">
                        На первом этаже в фитобаре вы сможете заказать травяные чаи, белковые коктейли, минеральную воду и протеиновые батончики. Также здесь есть детская комната с воспитателями и нянями, которые присмотрят за вашими детьми в течение тренировки.
                    </p>
                    <p class="main-content__text">
                        Наши цены на 100% оправданы высоким качеством сервиса. Если вы хотите выгодно приобрести абонемент, обращайтесь к администраторам, которые подскажут оптимальные программы конкретно под ваши потребности. <strong class="main-content__text main-content__text_bold">Нашими ключевыми направлениями остаются:</strong>
                    </p>
                    <ul class="main-content__list">
                        <li class="main-content__list-item">йога;</li>
                        <li class="main-content__list-item">фитнес;</li>
                        <li class="main-content__list-item">занятия в бассейне;</li>
                        <li class="main-content__list-item">кроссфит;</li>
                        <li class="main-content__list-item">TPX-петли;</li>
                    </ul>
                </div>
                <div class="main-addittional">
                    <p class="main-addittional__text">
                        Помимо перечисленных услуг, мы предоставляем консультации профессиональных диетологов, тренеров, психологов. Также есть кабинет массажа, зал спа рядом с бассейном и возможность арендовать центр для проведения массовых мероприятий. <strong class="main-addittional__text_bold">Ждем ваших заявок!</strong>
                    </p>
                </div>
                <div class="main-partners">
                    <h1 class="main-partners__caption">ПАРТНЕРЫ</h1>
                    <ul class="main-partners__list">
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-1.png" alt="" class="main-partners__list-img"></a></li>
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-2.png" alt="" class="main-partners__list-img"></a></li>
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-3.png" alt="" class="main-partners__list-img"></a></li>
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-4.png" alt="" class="main-partners__list-img"></a></li>
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-5.png" alt="" class="main-partners__list-img"></a></li>
                        <li class="main-partners__list-item"><a href="#" class="main-partners__list-link"><img src="img/icons/logo-6.png" alt="" class="main-partners__list-img"></a></li>
                    </ul>
                </div>
            </main>
        </div>
    </section>
    <!--Content close-->

    <!--Footer-->
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