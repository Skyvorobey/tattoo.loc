<?php
$main = 'home';
include __DIR__. '/other_pages/head.php';
include __DIR__. '/other_pages/nav.php';
include __DIR__. '/other_pages/banner.php'?>
<section class="section-about">
    <div class="section-services">
        <div class="section-services__item">
            <div class="section-services__logo section-services__logo--back1"></div>
            <h3 class="section-services__name">Тату</h3>
            <button class="header__item btn-back-call btn-back-call--top65">
                <a href="/index.php">Подробнее</a>
            </button>
        </div>
        <div class="section-services__item">
            <div class="section-services__logo section-services__logo--back2"></div>
            <h3 class="section-services__name">Пирсинг</h3>
            <button class="header__item btn-back-call btn-back-call--top65">
                <a href="/index.php">Подробнее</a>
            </button>
        </div>
        <div class="section-services__item">
            <div class="section-services__logo section-services__logo--back3"></div>
            <h3 class="section-services__name">Татуаж</h3>
            <button class="header__item btn-back-call btn-back-call--top65">
                <a href="/index.php">Подробнее</a>
            </button>
        </div>
        <div class="section-services__item">
            <div class="section-services__logo section-services__logo--back4"></div>
            <h3 class="section-services__name">Обучение</h3>
            <button class="header__item btn-back-call btn-back-call--top65">
                <a href="/index.php">Подробнее</a>
            </button>
        </div>
    </div>

    <div class="section-information">
        <h3 class="section-information__title">Тату-салон Permanent Tatoo <br>
            Нам Доверяет уже более 1000 человек </h3>

        <h4 class="section-information__mini-title">Стерильное помещение</h4>
        <p class="section-information__text">Все процедуры проводим в специально<br>
            отведенном очищенном помещении,чтобы защитить вас от любых<br>
            бактериальных заражении</p>

        <h4 class="section-information__mini-title">Безболезненные процедуры</h4>
        <p class="section-information__text">Для каждого человека все индивидиуально.<br>
            Если у вас высокий болевой порог,то вы практически ни  чего не почувствуете.<br>
            При очень низком болевом пороге,мы предложим вам анестезию,поэтому весь процесс<br>
            пройдет для вас безболезненно. Для каждого человека все индивидиуально.</p>

        <h4 class="section-information__mini-title">Удобное расположение тату-салона</h4>
        <p class="section-information__text">Наша студия находится рядом с тремя станциями метро,<br>
            поэтому вы легко сможете добраться до нас</p>

        <h4 class="section-information__mini-title">Лицензия на проведение услуг.</h4>
        <p class="section-information__text">Наша студия,а также все мастера прошли линцензирование на проводение медицинских действий. Вы можете <br>
            быть уверены в репутации тату-салона,а самое главное в профессианализме мастеров/p>
    </div>

    <div class="section-action">
        <div class="section-action__background">
            <div class="section-action__header section-action__header--right">
                <h1>Акция для</h1>
                <h2>Девушек</h2>
                <p>на любые татуировки</p>
            </div>
            <form method="get" action="section-action__form" class="section-action__form">
                <input maxlength="25"name="name" placeholder="Ваше имя" class="section-action__form-name">
                <input type="submit" value="Заказать обратный звонок" class="section-action__form-btn">
            </form>
        </div>
    </div>

    <div class="section-we-also-do">
        <h1 class="section-we-also-do__header">Мы также делаем</h1>

        <div class="section-we-also-do__items">
            <div class="section-services__item section-we-also-do__item ">
                <div class="section-services__logo section-services__logo--back1"></div>
                <h1 class="section-we-also-do__title">Обновление<br> тату</h1>
                <p class="section-we-also-do__text">Подойдет вам,<br>
                    если вы хотите вернуть вашей<br>
                    татуировке<br>
                    цвета и яркость</p>
            </div>
            <div class="section-services__item section-we-also-do__item">
                <div class="section-services__logo section-services__logo--back2"></div>
                <h1 class="section-we-also-do__title">Реставрация<br> тату</h1>
                <p class="section-we-also-do__text">Подойдет вам,<br>
                    если вы хотите вернуть вашей<br>
                    татуировке былую<br>
                    красоту,восстановить старые<br>
                    участки</p>
            </div>
            <div class="section-services__item section-we-also-do__item">
                <div class="section-services__logo section-services__logo--back3"></div>
                <h1 class="section-we-also-do__title">Перекрытие<br> тату</h1>
                <p class="section-we-also-do__text">Подойдет вам,<br>
                    если вы уже сделали<br>
                    татуировку, но она вам <br>
                    надоела, потеряла <br>
                    актуальность и вы хотите ее<br>
                    видоизменить</p>
            </div>
            <div class="section-services__item section-we-also-do__item">
                <div class="section-services__logo section-services__logo--back4"></div>
                <h1 class="section-we-also-do__title">Удаление<br> тату</h1>
                <p class="section-we-also-do__text">Подойдет вам,<br>
                    если вы решили навсегда<br>
                    избавиться от татуировкиь</p>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__. '/other_pages/footer.php'; ?>