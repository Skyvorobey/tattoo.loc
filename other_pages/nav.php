<header class="header">
        <div class="header__wrapper">
            <div class="header__header">
                <div class="header__column">
                    <div class="header__item header__logo">
                        <a href="/index.php"><img src="/img/body-logo.png" width="150px" height="100px" </img></a>
                    </div>
                </div>
                <div class="header__column header__column--right">
                    <div class="header__item header__phone">
                        <p>8 987 654 32 21</p>
                    </div>
                    <button class="header__item btn-back-call btn-back-call--295">
                        <a href="/index.php">Обратный звонок</a>
                    </button>
                </div>
            </div>

            <nav class="header__nav">


                <?php
                $nav_items = [
                'home' => '<a class="nav__home header__item-nav header__item-nav' . (($main == 'home') ? '--main' : '') . '" href="/index.php" >
                    Главная
                </a>',

                'tattoo' => '<a class="nav__tattoo header__item-nav header__item-nav' . (($main == 'tattoo') ? '--main' : '') . '" href="/other_pages/tattoo.php" >
                    Тату
                </a>',

                'piercing' => '<a class="nav__piercing header__item-nav header__item-nav' . (($main == 'piercing') ? '--main' : '') . '" href="/other_pages/piercing.php" >
                    Пирсинг
                </a>',

                'tattoo-two' => '<a class="nav__tattoo-two header__item-nav header__item-nav' . (($main == 'tattoo-two') ? '--main' : '') . '" href="/other_pages/tattoo-two.php" >
                    Татуаж
                </a>',

                'training' => '<a class="nav__training header__item-nav header__item-nav' . (($main == 'training') ? '--main' : '') . '" href="/other_pages/training.php" >
                    Обучение
                </a>',

                'catalog' => '<a class="nav__catalog header__item-nav header__item-nav' . (($main == 'catalog') ? '--main' : '') . '" href="/other_pages/catalog.php" >
                    Каталог
                </a>',

                'contacts' => '<a class="nav__contacts header__item-nav header__item-nav' . (($main == 'contacts') ? '--main' : '') . '" href="/other_pages/contacts.php" >
                    Контакты
                </a>',

                ];
                foreach ($nav_items as $item) {
                echo $item;
                }
                ?>
            </nav>

        </div>
</header>