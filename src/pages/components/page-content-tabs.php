<div class="container page-content-tabs-container">
    <div class="page-content-tabs-wrapper">
        <div class="page-content-tabs swiper js-page-content-tabs">
            <div class="page-content-tabs__nav swiper-wrapper">
                <? $arMenu = array (
                    "test1.php" => "Профиль",
                    "test2.php" => "Заявки",
                    "test3.php" => "Учет времени",
                    "test4.php" => "Экодела",
                    "test5.php" => "Петиции",
                    "test6.php" => "Проекты",
                    "test7.php" => "Избранное",
                    "test8.php" => "Рейтинг и отзывы",
                    "test9.php" => "Права доступа",
                );
                foreach ($arMenu as $arItem => $value) : ?>
                    <div class="swiper-slide page-content-tabs__nav-item notice">
                        <a
                            href="<?= $arItem ?>"
                            class="page-content-tabs__link<? if(strpos($_SERVER["REQUEST_URI"], $arItem)) : ?> selected<? endif; ?>"
                        >
                            <span class="page-content-tabs__link-content"><?= $value ?></span>
                            <span class="page-content-tabs__link-num">18</span>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
        <div class="page-content-tabs-actions-create">
            <button class="btn-reset btn btn--fill btn--mini">
                <svg class="icon btn__icon">
                    <use href="img/sprite.svg#plus"></use>
                </svg>
                <span class="btn__text">Создать</span>
            </button>
        </div>
    </div>
</div>