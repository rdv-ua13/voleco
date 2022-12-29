<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

        <div class="page-content__body">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
            </div>

            <div class="container">
                <div class="block-mb-md">
                    <div class="banner banner--dark-bg" style="background-color: var(--accent-ceruleanblue1-color);">
                        <div class="banner__decor">
                            <picture class="banner__decor-img-main" style="top: 10px; right: 75px; bottom: 0;">
                                <source srcset="img/banner-decor1.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/banner-decor1.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt=""
                                >
                            </picture>
                            <picture style="right: 450px; bottom: 0;">
                                <source srcset="img/banner-decor2.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/banner-decor2.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt=""
                                >
                            </picture>
                            <picture style="top: 0; bottom: 0; left: 0;">
                                <source srcset="img/banner-decor3.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/banner-decor3.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt=""
                                >
                            </picture>
                            <picture style="top: 0; right: 0; bottom: 0;">
                                <source srcset="img/banner-decor4.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/banner-decor4.png"
                                    class="image"
                                    width=""
                                    height=""
                                    alt=""
                                >
                            </picture>
                        </div>
                        <div class="banner__content">
                            <div class="banner__title">XI Международный форум «Арктика: настоящее и будущее»</div>
                            <button class="btn-reset btn btn--white">
                                <span class="btn__text">Присоединиться к проекту</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="page-content__container page-content__container--profile">
                    <div class="page-content__preview">
                        <div class="page-content__video">
                            <?/*picture - загулшка под видео
                            <video src=""></video>*/?>
                            <picture>
                                <source srcset="img/profile-video.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/profile-video.png"
                                    class="image"
                                    width="810"
                                    height="455"
                                    alt="profile-video"
                                >
                            </picture>
                        </div>
                    </div>
                    <div class="page-content__main page-content__main--profile">
                        <div class="page-content__main-descr">
                            <div class="page-content__main-descr-item">
                                <div class="page-content__main-descr-heading">
                                    <div class="h4">Описание</div>
                                    <button class="btn-reset btn btn--noframe">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#edit2"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="page-content__main-descr-content">
                                    <div class="page-content__spoiler js-spoiler" data-collapsed-height="70">
                                        <div class="page-content__spoiler-text">Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране.</div>
                                        <!--<button class="btn-reset btn btn--noframe btn--green">
											<span class="btn__text"></span>
										</button>-->
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__main-descr-item">
                                <div class="page-content__main-descr-heading">
                                    <div class="h4">Направления деятельности</div>
                                    <button class="btn-reset btn btn--noframe">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#edit2"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="page-content__main-descr-content">
                                    <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--text6-color);
                                                            background-color: var(--text8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                                            <use href="img/sprite.svg#tag-all"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--success6-color);
                                                            background-color: var(--success8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--success4-color);">
                                                            <use href="img/sprite.svg#tag-nature"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--success4-color);">Природа</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--accent-purple4-color);
                                                            background-color: var(--accent-purple8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                                            <use href="img/sprite.svg#tag-sport"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--accent-ceruleanblue1-color);
                                                            background-color: var(--accent-ceruleanblue8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                                            <use href="img/sprite.svg#tag-building"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--error4-color);
                                                            background-color: var(--error9-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                                            <use href="img/sprite.svg#tag-alarm"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--warning5-color);
                                                            background-color: var(--warning8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                                            <use href="img/sprite.svg#tag-pets"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="swiper-slide">
                                                <span class="tag">
                                                    <span
                                                            class="tag__content-bg"
                                                            style="
                                                            border-color: var(--info5-color);
                                                            background-color: var(--info8-color);"
                                                    ></span>
                                                    <span class="tag__content">
                                                        <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                                            <use href="img/sprite.svg#tag-science"></use>
                                                        </svg>
                                                        <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__main-descr-item">
                                <div class="page-content__main-descr-heading">
                                    <div class="h4">Результаты</div>
                                    <button class="btn-reset btn btn--noframe">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#edit2"></use>
                                        </svg>
                                    </button>
                                </div>
                                <div class="page-content__main-descr-content">
                                    <div class="page-content__spoiler js-spoiler" data-collapsed-height="70">
                                        <div class="page-content__spoiler-text">Ассоциация стала российским think tank в области волонтерства. Эксперты АВЦ участвуют в разработке федерального законодательства о волонтерстве, формировании и реализации ключевых государственных программ, национальных проектов. В 2016 году по инициативе Ассоциации был создан Федеральный экспертный совет по развитию добровольчества, позже преобразованный в Координационный совет при Общественной палате РФ.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="page-content__sidebar">sidebar</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
