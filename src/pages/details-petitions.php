<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <div class="page-content">
            <div class="page-content__header">
                <div class="block-mb-md">
                    <div class="details-top-bar">
                        <div class="details-top-bar__back-to">
                            <a href="javascript:;" class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#left"></use>
                                </svg>
                                <span class="btn__text">Все петиции</span>
                            </a>
                        </div>
                        <div class="details-top-bar__action">
                            <a href="javascript:;" class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#bookmark"></use>
                                </svg>
                            </a>
                            <a href="javascript:;" class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#share2"></use>
                                </svg>
                            </a>
                            <a href="javascript:;" class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#alert"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="details-top-bar__header">
                            <div class="details-top-bar__tag-bar">
                                <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                                            <span class="tag tag--mini">
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
                            <h1 class="h2">Кожуховский муниципальный приют в беде</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-content__body">
                <div class="block-mb-lg">
                    <div class="page-content__container page-content__container--details">
                        <div class="page-content__content-header">
                            <span class="details-progress js-progress">
                                <span class="details-progress-data progress-bar-data">
                                    <span class="details-progress-current">
                                        <span class="details-progress-data-title">Подписали</span>
                                        <span class="details-progress-data-value progress-bar-data__value" data-value="110753">110 753 чел.</span>
                                    </span>
                                    <span class="details-progress-need">
                                        <span class="details-progress-data-title">Нужно подписей</span>
                                        <span class="details-progress-data-value progress-bar-data__max" data-max="150000">150 000</span>
                                    </span>
                                </span>
                                <span class="details-progress-bar progress-bar">
                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                    <span class="progress-bar__bg">
                                        <span class="progress-bar__line"></span>
                                    </span>
                                </span>
                            </span>
                            <div class="page-content__content-header-bottom">
                                <button class="btn-reset btn btn--fill">
                                    <span class="btn__text">Подписать петицию</span>
                                </button>
                            </div>
                        </div>
                        <div class="page-content__main">
                            <div class="page-content__descr">
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Описание</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__spoiler js-spoiler" data-collapsed-height="88">
                                            <div class="page-content__spoiler-text">
                                                <p>Мы просим максимальной огласки и помощи СМИ</p>
                                                <p>В конце 2008 года приют распахнул свои двери для первых узников. С тех пор мы пережили многое: живодерскую УК Гришкова, затем коммерческую УК и корм-убийцу, постоянную нехватку рабочих, за ними пришло ГБУ «Автомобильные дороги ВАО» с чудовищно безграмотным менеджментом, круговой порукой и полной неспособностью решать любые управленческие задачи. Все эти годы одно оставалось неизменным: 3000 собак, 400 кошек и группа отчаянных волонтеров, благодаря которым за это время более 7000❗ собак и 1500❗ кошек нашли дом, сотни животных получили медицинскую помощь в сторонних клиниках, вет блок не оборудован современной техникой. Многие годы мы мирились с полным несоблюдением Регламента на управление приютом: 100% отсутсвие выгула животных со стороны УК, постоянная нехватка рабочих и, как следствие, грязь, отсутсвие воды и корма в вольерах.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__descr-item">
                                    <span class="card__organizer details-rate">
                                        <span class="card__organizer-logo">
                                            <picture>
                                                <source srcset="img/card-projects-org.webp" type="image/webp">
                                                <img loading="lazy" src="img/card-projects-org.png" class="image" width="36" height="36" alt="Логотип организатора">
                                            </picture>
                                            <span class="card__organizer-logo-check">
                                                <span class="success-check success-check--mini">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#success-check"></use>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <span class="card__organizer-descr">
                                            <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                        </span>
                                        <span class="card__rate">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#favorite"></use>
                                            </svg>
                                            <span class="card__rate-value">4.8</span>
                                        </span>
                                    </span>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Контактное лицо</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="card-list details-contact">
                                            <div class="card card--volunteer">
                                                <span class="card__view">
                                                    <picture>
                                                        <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                        <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="60" height="60" alt="Фото карточки">
                                                    </picture>
                                                </span>
                                                <span class="card__descr">
                                                    <span class="card__title">Михайлова Светлана Васильевна</span>
                                                    <span class="card__user-descr">
                                                        <span class="card__user-descr-item">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#phone"></use>
                                                            </svg>
                                                            <span class="card__action-item-text">+7 (999) 482-87-12</span>
                                                        </span>
                                                        <span class="card__user-descr-item">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#mail"></use>
                                                            </svg>
                                                            <span class="card__action-item-text">mih.svetlana@mail.ru</span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="card__contact-btn">
                                                    <button class="btn-reset btn">
                                                        <span class="btn__text">Написать в чат</span>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Документы</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="docs">
                                            <a href="javascript:;" class="docs-card">
                                                <span class="docs-card__title">План мероприятий 2021-2022</span>
                                                <span class="docs-card__format">XLS, 22.4 МБ</span>
                                            </a>
                                            <a href="javascript:;" class="docs-card">
                                                <span class="docs-card__title">Устав</span>
                                                <span class="docs-card__format">PDF, 13.2 МБ</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__sidebar page-content__sidebar--details">
                            <div class="page-content__sidebar-item page-content__sidebar-view">
                                <picture>
                                    <source srcset="img/card-photo-petition.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-photo-petition.png"
                                            class="image"
                                            width="410"
                                            height="275"
                                            alt="Изображение блока"
                                    >
                                </picture>
                            </div>
                            <div class="page-content__sidebar-item">
                                <div class="page-content-descr-heading page-content-descr-heading--vertical">
                                    <div class="h4">Поддержать проект</div>
                                    <div class="page-content-descr-heading-subtitle">Спасибо, что помогаете в реализации благотворительного проекта!</div>
                                </div>
                                <span class="details-progress js-progress">
                                    <span class="details-progress-bar progress-bar">
                                        <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                        <span class="progress-bar__bg">
                                            <span class="progress-bar__line"></span>
                                        </span>
                                    </span>
                                    <span class="details-progress-data progress-bar-data">
                                        <span class="details-progress-current">
                                            <span class="details-progress-data-title">Собрано средств</span>
                                            <span class="details-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                        </span>
                                        <span class="details-progress-need">
                                            <span class="details-progress-data-title">Цель проекта</span>
                                            <span class="details-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
                                        </span>
                                    </span>
                                </span>
                                <div class="page-content__sidebar-btn-block">
                                    <button class="btn-reset btn btn--fill">
                                        <span class="btn__text">Помочь проекту</span>
                                    </button>
                                    <a href="javascript:;" class="btn-reset btn btn--fill btn--gray" target="_blank">
                                        <span class="btn__text">Проект на Boosty</span>
                                    </a>
                                    <a href="javascript:;" class="btn-reset btn btn--fill btn--gray" target="_blank">
                                        <span class="btn__text">Проект на Patreon</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content__main-bottom">
                    <div class="">
                        <div class="basic-slider-petition">
                            <div class="block-mb-lg">
                                <div class="block-header">
                                    <div class="block-header__title block-header-control">
                                        <div class="block-header__title-text h2">Похожие петиции</div>
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
                                        <a href="javascript:;" class="card card--more">
                                            <span class="card__descr">
                                                <span class="card__header h2">2839+</span>
                                                <span class="card__title">мероприятий доступно на платформе</span>
                                            </span>
                                            <span class="card__link-pointer">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#right"></use>
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
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>