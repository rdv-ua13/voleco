<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="page-content page-analytics">
		<div class="page-content__body">
            <div class="container">
                <div class="block-mb-lg">
                    <div class="block-header">
                        <div class="block-header__title block-header-control">
                            <div class="block-header__title-text h2">Аналитика эковолонтерства России</div>
                            <div class="block-header-control__action">
                                <button class="btn-reset btn btn--fill btn--midi btn--gray">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#download"></use>
                                    </svg>
                                    <span class="btn__text">Скачать аналитику</span>
                                </button>
                            </div>
                            <div class="block-header__title-descr">Открытые данные по развитию волонтерского движения в стране. Используйте фильтры по региону, населенному пункту и году. После выбора любого фильтра все данные раздела обновятся.</div>
                        </div>
                    </div>
                </div>

                <div class="page-content__container">
                    <div class="block-mb-lg">
                        <div class="main-section__content">
                            <div class="main-section__sidebar">
                                <div class="sidebar">sidebar</div>
                            </div>
                            <div class="main-section__page-content">
                                <div class="page-analytics-map">

                                    <div class="inner-page-tabs-wrapper">
                                        <div class="inner-page-tabs swiper" data-tab="tab-932">
                                            <div class="inner-page-tabs__nav swiper-wrapper">
                                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                                    <a
                                                            href="javascript:;"
                                                            class="btn-reset inner-page-tabs__link selected"
                                                            type="button"
                                                            data-target="0"
                                                    >
                                                        <span class="inner-page-tabs__link-content">Организаторы</span>
                                                    </a>
                                                </div>
                                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                                    <a
                                                            href="javascript:;"
                                                            class="btn-reset inner-page-tabs__link"
                                                            type="button"
                                                            data-target="1"
                                                    >
                                                        <span class="inner-page-tabs__link-content">Волонтёры</span>
                                                    </a>
                                                </div>
                                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                                    <a
                                                            href="javascript:;"
                                                            class="btn-reset inner-page-tabs__link"
                                                            type="button"
                                                            data-target="2"
                                                    >
                                                        <span class="inner-page-tabs__link-content">Экодела</span>
                                                    </a>
                                                </div>
                                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                                    <a
                                                            href="javascript:;"
                                                            class="btn-reset inner-page-tabs__link"
                                                            type="button"
                                                            data-target="3"
                                                    >
                                                        <span class="inner-page-tabs__link-content">Задачи</span>
                                                    </a>
                                                </div>
                                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                                    <a
                                                            href="javascript:;"
                                                            class="btn-reset inner-page-tabs__link"
                                                            type="button"
                                                            data-target="4"
                                                    >
                                                        <span class="inner-page-tabs__link-content">Проекты</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-page-tabs-content" data-tab-content="tab-932">
                                        <div class="inner-page-tabs-content__panel active" data-id="0">
                                            <div class="page-analytics-map__view">
                                                <?/* заглушка для ymap */?>
                                                <picture style="border-radius: 0 0 16px 16px">
                                                    <source srcset="img/analytics-map-img.webp" type="image/webp">
                                                    <img
                                                            loading="lazy"
                                                            src="img/analytics-map-img.png"
                                                            class="image"
                                                            width="955"
                                                            height="500"
                                                            alt="Изображение блока"
                                                    >
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="inner-page-tabs-content__panel" data-id="1">
                                            Tabs 2 content
                                        </div>
                                        <div class="inner-page-tabs-content__panel" data-id="2">
                                            Tabs 3 content
                                        </div>
                                        <div class="inner-page-tabs-content__panel" data-id="3">
                                            Tabs 4 content
                                        </div>
                                        <div class="inner-page-tabs-content__panel" data-id="4">
                                            Tabs 5 content
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content__main page-content__main--full">
                        <div class="block-mb-sm">
                            <div class="block-header">
                                <div class="block-header__title">
                                    <div class="block-header__title-text h3">Аналитика по направлениям</div>
                                </div>
                            </div>
                        </div>

                        <div class="inner-page-tabs-wrapper">
                            <div class="inner-page-tabs swiper" data-tab="tab-1093">
                                <div class="inner-page-tabs__nav swiper-wrapper">
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link selected"
                                                type="button"
                                                data-target="0"
                                        >
                                            <span class="inner-page-tabs__link-content">Организаторы</span>
                                        </a>
                                    </div>
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link"
                                                type="button"
                                                data-target="1"
                                        >
                                            <span class="inner-page-tabs__link-content">Волонтёры</span>
                                        </a>
                                    </div>
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link"
                                                type="button"
                                                data-target="2"
                                        >
                                            <span class="inner-page-tabs__link-content">Экодела</span>
                                        </a>
                                    </div>
                                    <div class="inner-page-tabs__nav-item swiper-slide notice">
                                        <a
                                                href="javascript:;"
                                                class="btn-reset inner-page-tabs__link"
                                                type="button"
                                                data-target="3"
                                        >
                                            <span class="inner-page-tabs__link-content">Проекты</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="inner-page-tabs-content" data-tab-content="tab-1093">
                            <div class="inner-page-tabs-content__panel active" data-id="0">
                                Tabs 1 content
                            </div>
                            <div class="inner-page-tabs-content__panel" data-id="1">
                                Tabs 2 content
                            </div>
                            <div class="inner-page-tabs-content__panel" data-id="2">
                                Tabs 3 content
                            </div>
                            <div class="inner-page-tabs-content__panel" data-id="3">
                                Tabs 4 content
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
