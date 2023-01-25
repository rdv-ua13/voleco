<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <? /* todo: временная заглушка. Блок будет дорабатываться
        h1 */ ?>
        <picture style="width: 100%; height: calc(100vw * 0.4375);">
            <source srcset="img/1stscreen.webp" type="image/webp">
            <img
                loading="lazy"
                src="img/1stscreen.png"
                class="image"
                width=""
                height=""
                alt=""
            >
        </picture>
    </div>
</div>

<div class="block-mb">
    <div class="container">
        <div class="block-mb">
            <div class="basic-slider-ecodelo">
                <div class="block-mb-lg">
                    <div class="block-header">
                        <div class="block-header__title block-header-control">
                            <div class="block-header__title-text h2">Экодела рядом с вами</div>
                            <div class="block-header__title-loc">
                                <a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#location"></use>
                                    </svg>
                                    <span class="btn__text">Санкт-Петербург</span>
                                </a>
                            </div>
                            <div class="block-header-control__action">
                                <div class="swiper-navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon rotate-180">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block-header-control__tag-bar">
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
                    </div>
                </div>

                <div class="slider basic-slider js-basic-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card card--more">
                                <span class="card__descr">
                                    <span class="card__header h2">2839+</span>
                                    <span class="card__title">мероприятий доступно на платформе</span>
                                </span>
                                <span class="card__link-pointer">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-mb">
            <div class="basic-slider-petition">
                <div class="block-mb-lg">
                    <div class="block-header">
                        <div class="block-header__title block-header-control">
                            <div class="block-header__title-text h2">Петиции</div>
                            <div class="block-header-control__action">
                                <div class="swiper-navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon rotate-180">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block-header-control__tag-bar">
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
                    </div>
                </div>

                <div class="slider basic-slider js-basic-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Подписали</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Нужно подписей</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Подписать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card card--more">
                                <span class="card__descr">
                                    <span class="card__header h2">2839+</span>
                                    <span class="card__title">мероприятий доступно на платформе</span>
                                </span>
                                <span class="card__link-pointer">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-mb">
            <div class="basic-slider-fundraising">
                <div class="block-mb-lg">
                    <div class="block-header">
                        <div class="block-header__title block-header-control">
                            <div class="block-header__title-text h2">Сбор средств</div>
                            <div class="block-header-control__action">
                                <div class="swiper-navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon rotate-180">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block-header-control__tag-bar">
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
                    </div>
                </div>

                <div class="slider basic-slider js-basic-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-title">Собрано средств</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                                    </span>
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-title">Цель проекта</span>
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Поддержать</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card card--more">
                                <span class="card__descr">
                                    <span class="card__header h2">2839+</span>
                                    <span class="card__title">мероприятий доступно на платформе</span>
                                </span>
                                <span class="card__link-pointer">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-mb">
            <div class="our-edge">
                <div class="our-edge__item">
                    <div class="our-edge__preview">
                        <div class="our-edge__view">
                            <picture>
                                <source srcset="img/edge-vol.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/edge-vol.svg"
                                    class="image"
                                    width="340"
                                    height="340"
                                    alt="Фото блока"
                                >
                            </picture>
                        </div>
                        <div class="our-edge__descr">
                            <div class="our-edge__title h2">Для эковолонтеров</div>
                            <div class="our-edge__subtitle">Единая цифровая экосистема</div>
                            <div class="our-edge__descr-text">Станьте волонтером, чтобы помогать другим и получать уникальный опыт</div>
                            <ul class="list-reset our-edge__list">
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-search-check"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Выбор экологических активностей по всей стране с удобным поиском мероприятий</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-learning"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Обучение, стажировки, актуальные вакансии, конкурсы и грантовые проекты</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-team"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Команда единомышленников</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-rewards"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Получение отзывов и рост рейтинга</div>
                                </li>
                            </ul>
                            <div class="our-edge__btn">
                                <button class="btn-reset btn">
                                    <span class="btn__text">Стать эковолонтером</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="list-reset our-edge__list">
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-search-check"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Выбор экологических активностей по всей стране с удобным поиском мероприятий</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-learning"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Обучение, стажировки, актуальные вакансии, конкурсы и грантовые проекты</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-team"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Команда единомышленников</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-rewards"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Получение отзывов и рост рейтинга</div>
                        </li>
                    </ul>
                </div>
                <div class="our-edge__item">
                    <div class="our-edge__preview">
                        <div class="our-edge__view">
                            <picture>
                                <source srcset="img/edge-org.webp" type="image/webp">
                                <img
                                        loading="lazy"
                                        src="img/edge-org.svg"
                                        class="image"
                                        width="350"
                                        height="370"
                                        alt="Фото блока"
                                >
                            </picture>
                        </div>
                        <div class="our-edge__descr">
                            <div class="our-edge__title h2">Для организаторов</div>
                            <div class="our-edge__subtitle">Удобная платформа для волонтерских организаций</div>
                            <div class="our-edge__descr-text">Зарегистрируйтесь, как организатор, чтобы получать поддержку на развитие инициатив</div>
                            <ul class="list-reset our-edge__list">
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-content-new"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Создание мероприятий, петиций и проектов для сбора средств</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-communication"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Подбор и общение с волонтёрами</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-business"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">Аналитика и ведение учёта в личном кабинете</div>
                                </li>
                                <li class="our-edge__list-item">
                                    <div class="our-edge__list-view">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#edge-medias-likes"></use>
                                        </svg>
                                    </div>
                                    <div class="our-edge__list-descr">События и проекты освещаются в новостях и медиа</div>
                                </li>
                            </ul>
                            <div class="our-edge__btn">
                                <button class="btn-reset btn">
                                    <span class="btn__text">Стать организатором</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="list-reset our-edge__list">
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-content-new"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Создание мероприятий, петиций и проектов для сбора средств</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-communication"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Подбор и общение с волонтёрами</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-business"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">Аналитика и ведение учёта в личном кабинете</div>
                        </li>
                        <li class="our-edge__list-item">
                            <div class="our-edge__list-view">
                                <svg class="icon">
                                    <use href="img/sprite.svg#edge-medias-likes"></use>
                                </svg>
                            </div>
                            <div class="our-edge__list-descr">События и проекты освещаются в новостях и медиа</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="block-mb">
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

        <div class="block-mb">
            <div class="block-mb-lg">
                <div class="media basic-slider-media">
                    <div class="block-mb-lg">
                        <div class="block-header">
                            <div class="block-header__title block-header-control">
                                <div class="block-header__title-text h2">Новости и медиа</div>
                                <div class="block-header__link-bar">
                                    <a href="javascript:;" class="btn-reset btn btn--noframe">
                                        <span class="btn__text">все новости </span>
                                        <svg class="icon btn__icon rotate-180">
                                            <use href="img/sprite.svg#arrow-left"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider basic-slider js-basic-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                    <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#eye-on"></use>
                                                </svg>
                                                <span class="card__action-item-text">1 890</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">19 марта 2022</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:;" class="card card--more">
                                <span class="card__descr">
                                    <span class="card__header h2">2839+</span>
                                    <span class="card__title">мероприятий доступно на платформе</span>
                                </span>
                                    <span class="card__link-pointer">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                    </svg>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-subs">
                <div class="event-subs__title h2">Узнавайте новости первым</div>
                <form id="" class="form form-event-subs" method="" action="javascript:;">
                    <div class="form__field">
                        <input class="input-reset form__input" type="text" name="Подписаться" placeholder="Введите электронную почту...">
                    </div>
                    <div class="form__field">
                        <select
                                id=""
                                name=""
                                class="input-reset form__input form__input--select2 js-select2"
                        >
                            <option value="0">Все направления</option>
                            <option value="1">Все направления 2</option>
                            <option value="2">Все направления 3</option>
                        </select>
                    </div>
                    <div class="form__field">
                        <div class="custom-checkbox">
                            <input class="custom-checkbox__input" type="checkbox" checked="">
                            <div class="custom-checkbox__agree">
                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с&nbsp;<a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и&nbsp;принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="form__field form__field-btn--fullwidth">
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Подписаться</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="block-mb">
            <div class="voleco-id">
                <div class="voleco-id__descr">
                    <div class="voleco-id__descr-title h2">Что такое VOLECO ID?</div>
                    <div class="voleco-id__descr-text">Наш сайт — платформа, которая работает по принципу краудфандинга. Здесь мы вместе собираем средства, чтобы помогать бездомным животным. Сейчас у нас есть 3 благотворительные программы, которые вы можете поддержать. На нашей платформе любой человек сможет сделать пожертвование в один клик.</div>
                    <div class="voleco-id__descr-btn">
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Зарегистрироваться</span>
                        </button>
                    </div>
                </div>
                <div class="voleco-id__preview">
                    <picture class="voleco-id__preview-view">
                        <source srcset="img/voleco-id-img.webp" type="image/webp">
                        <img
                                loading="lazy"
                                src="img/voleco-id-img.svg"
                                class="image"
                                width=""
                                height=""
                                alt="Изображение блока"
                        >
                    </picture>
                    <div class="voleco-id__preview-decor">
                        <div class="voleco-id__preview-decor-item">
                            <div class="voleco-id__preview-decor-view">
                                <picture>
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/card-photo-volunteer.png"
                                        class="image"
                                        width="42"
                                        height="42"
                                        alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="voleco-id__preview-decor-descr">
                                <div class="voleco-id__preview-decor-title">Геннадий Глухов</div>
                                <div class="voleco-id__preview-decor-subtitle">
                                    <span>Стал</span>
                                    <span>волонтером</span>
                                </div>
                            </div>
                        </div>
                        <div class="voleco-id__preview-decor-item">
                            <div class="voleco-id__preview-decor-view">
                                <picture>
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/card-photo-volunteer.png"
                                        class="image"
                                        width="42"
                                        height="42"
                                        alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="voleco-id__preview-decor-descr">
                                <div class="voleco-id__preview-decor-title">Агнесса Виноградова</div>
                                <div class="voleco-id__preview-decor-subtitle">
                                    <span>Пожертвовала</span>
                                    <span>2000 рублей</span>
                                </div>
                            </div>
                        </div>
                        <div class="voleco-id__preview-decor-item">
                            <div class="voleco-id__preview-decor-view">
                                <picture>
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/card-photo-volunteer.png"
                                        class="image"
                                        width="42"
                                        height="42"
                                        alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="voleco-id__preview-decor-descr">
                                <div class="voleco-id__preview-decor-title">Вероника Смирнова</div>
                                <div class="voleco-id__preview-decor-subtitle">
                                    <span>Подписала</span>
                                    <span>петицию</span>
                                </div>
                            </div>
                        </div>
                        <div class="voleco-id__preview-decor-item">
                            <div class="voleco-id__preview-decor-view">
                                <picture>
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/card-photo-volunteer.png"
                                        class="image"
                                        width="42"
                                        height="42"
                                        alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="voleco-id__preview-decor-descr">
                                <div class="voleco-id__preview-decor-title">Сергей Синицын</div>
                                <div class="voleco-id__preview-decor-subtitle">
                                    <span>Пожертвовал</span>
                                    <span>500 рублей</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="block-mb">
            <div class="block-mb-lg">
                <div class="stats-main">
                    <div class="block-mb-lg">
                        <div class="block-header">
                            <div class="block-header__title block-header-control">
                                <div class="block-header__title-text h2">Помощь в цифрах</div>
                                <div class="block-header__link-bar">
                                    <a href="javascript:;" class="btn-reset btn btn--noframe">
                                        <span class="btn__text">вся статистика</span>
                                        <svg class="icon btn__icon rotate-180">
                                            <use href="img/sprite.svg#arrow-left"></use>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="stats-main__grid">
                        <div class="stats-main__item stats-main__item-type1">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img1.webp" type="image/webp">
                                    <img
                                        loading="lazy"
                                        src="img/stats-main-img1.svg"
                                        class="image"
                                        width="290"
                                        height="390"
                                        alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">890</div>
                            <div class="stats-main__subtitle">экодел на платформе</div>
                        </div>
                        <div class="stats-main__item stats-main__item-type2">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img2.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/stats-main-img2.svg"
                                            class="image"
                                            width="215"
                                            height="155"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">114 820</div>
                            <div class="stats-main__subtitle">эковолонтеров на платформе</div>
                        </div>
                        <div class="stats-main__item stats-main__item-type3">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img3.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/stats-main-img3.svg"
                                            class="image"
                                            width="220"
                                            height="225"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">19 870 м3</div>
                            <div class="stats-main__subtitle">леса очищено</div>
                        </div>
                        <div class="stats-main__item stats-main__item-type1">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img4-1.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/stats-main-img4-1.svg"
                                            class="image"
                                            width="165"
                                            height="120"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">9 827 128 руб.</div>
                            <div class="stats-main__subtitle">собрано средств</div>
                        </div>
                        <div class="stats-main__item stats-main__item-type3">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img5.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/stats-main-img5.svg"
                                            class="image"
                                            width="220"
                                            height="140"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">19 870 га</div>
                            <div class="stats-main__subtitle">земли спасено</div>
                        </div>
                        <div class="stats-main__item stats-main__item-type2">
                            <div class="stats-main__view">
                                <picture>
                                    <source srcset="img/stats-main-img6.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/stats-main-img6.svg"
                                            class="image"
                                            width="185"
                                            height="225"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="stats-main__title">64</div>
                            <div class="stats-main__subtitle">организатора</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="block-mb">
            <div class="basic-slider-interests">
                <div class="block-mb-lg">
                    <div class="block-header">
                        <div class="block-header__title block-header-control">
                            <div class="block-header__title-text h2">Выберите ваши интересы</div>
                            <div class="block-header-control__action">
                                <div class="swiper-navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon rotate-180">
                                            <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block-header-control__tag-bar">
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
                    </div>
                </div>

                <div class="slider basic-slider js-basic-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
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
                                    </span>
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#map-pin"></use>
                                                </svg>
                                                <span class="card__action-item-text">г. Москва</span>
                                            </span>
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                        <span class="card__action-btn">
                                            <button class="btn-reset btn btn--fill">
                                                <span class="btn__text">Помочь</span>
                                            </button>
                                        </span>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:;" class="card card--more">
                                <span class="card__descr">
                                    <span class="card__header h2">2839+</span>
                                    <span class="card__title">мероприятий доступно на платформе</span>
                                </span>
                                <span class="card__link-pointer">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>