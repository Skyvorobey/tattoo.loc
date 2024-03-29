<?php
$main = 'home';
include __DIR__. '/other_pages/head.php';
include __DIR__. '/other_pages/nav.php';
include __DIR__. '/other_pages/banner.php'?>
<section class="section-main">
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
        <h3 class="section-information__title">Тату-салон Permanent Tattoo <br>
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

    <div class="section-our-last-works">
        <h1 class="section-our-last-works__title">Наши последнии работы</h1>
        <div class="section-our-last-works__img"></div>
    </div>

    <div class="section-us-masters">
        <h1 class="section-us-masters__header">Наши мастера</h1>

        <div class="section-us-masters__items">
            <div class="section-us-masters__item">
                <div class="section-us-masters__img section-us-masters__img--master-1"></div>
                <h1 class="section-us-masters__title">Елизавета Петровна</h1>
                <p class="section-us-masters__text">Лучший мастер<br>
                    по пирсингу<br>
                    во всей Москве</p>
            </div>
            <div class="section-us-masters__item">
                <div class="section-us-masters__img section-us-masters__img--master-2"></div>
                <h1 class="section-us-masters__title">Александра Федоровна</h1>
                <p class="section-us-masters__text">Обоятельный и <br>
                    очаровательный<br>
                    мастер по татуажу<br>
                    во всем нашем<br>
                    коллективе</p>
            </div>
            <div class="section-us-masters__item">
                <div class="section-us-masters__img section-us-masters__img--master-3"></div>
                <h1 class="section-us-masters__title">Елена Павловна</h1>
                <p class="section-us-masters__text">Матерый мастер<br>
                    по татуажу<br>
                    с опытом - 20 лет</p>
            </div>
            <div class="section-us-masters__item">
                <div class="section-us-masters__img section-us-masters__img--master-4"></div>
                <h1 class="section-us-masters__title">Мария Николаевна</h1>
                <p class="section-us-masters__text">Художник и мастер<br>
                    фантастических эскизов<br>
                    для татуажа</p>
            </div>
        </div>
    </div>

    <div class="section-us-reviews">
        <h1 class="section-us-reviews__header">Наши отзывы</h1>

        <div class="section-us-reviews__items">
            <div class="section-us-reviews__item">
                <div class="section-us-reviews__img section-us-reviews__img--face1"></div>
                <div class="section-us-reviews__name">Екатерина Самокрутова</div>
                <div class="section-us-reviews__age">27 лет</div>
                <p class="section-us-reviews__text">Татуировки - просто огонь! Мастер<br>
                    постарался на славу. Как только<br>
                    показал татухи друзьям, то все сразу же <br>
                    обзавидовались и стали спрашивать,<br>
                    где и у кого сделал. Скоро у салона<br>
                    «Permanent Tattooing» появятся<br>
                    новые клиенты. Спасибо вам, ребята! ))</p>
            </div>
            <div class="section-us-reviews__item">
                <div class="section-us-reviews__img section-us-reviews__img--face2"></div>
                <div class="section-us-reviews__name">Мария Литун</div>
                <div class="section-us-reviews__age">35 лет</div>
                <p class="section-us-reviews__text">Результат превзошёл ожидания!<br>
                    Стоимость услуги не более обговоренной<br>
                    ранее. Мастер проявил максимум внимания<br>
                    и создал все условия,чтоб процедура<br>
                    принесла положительные эмоции.<br>
                    Рекомендую всем, приятный и<br>
                    адекватный в общении человек,<br>
                    настоящий профессионал<br>
                    в своей области деятельности.</p>
            </div>
        </div>
    </div>

    <div class="section-us-certificates">
        <h1 class="section-us-certificates--title">Наши сертификаты</h1>
            <div class="section-us-certificates--items">
                <div class="section-us-certificates--item" >
                    <img src="img/body-logo.png" style="width: 180px; height: 100px">
                </div>
                <div class="section-us-certificates--item">
                    <img src="img/body-logo.png" style="width: 180px; height: 100px">
                </div>
            </div
    </div>
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

    <div class="section-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.617030487301!2d37.61502481040166!3d55.75277265062644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a50b315e573%3A0xa886bf5a3d9b2e68!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0JrRgNC10LzQu9GM!5e0!3m2!1sru!2sru!4v1602946773156!5m2!1sru!2sru" width="500" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="section-map__item"></iframe>
    </div>

</section>

<?php include __DIR__. '/other_pages/footer.php'; ?>