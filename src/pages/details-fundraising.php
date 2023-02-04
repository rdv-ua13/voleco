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
                                    <use href="img/sprite.svg#arrow-left"></use>
                                </svg>
                                <span class="btn__text">Вернуться</span>
                            </a>
                        </div>
                        <div class="details-top-bar__action">
                            <a href="javascript:;" class="btn-reset btn btn--noframe">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#favorite"></use>
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
                                    <span class="details-progress-data-title">Собрано средств</span>
                                    <span class="details-progress-data-value progress-bar-data__value" data-value="146548">146 548 руб.</span>
                                </span>
                                <span class="details-progress-need">
                                    <span class="details-progress-data-title">Цель проекта</span>
                                    <span class="details-progress-data-value progress-bar-data__max" data-max="200000">200 000 руб.</span>
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
                                                <use href="img/sprite.svg#star"></use>
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
                                                            <use href="img/sprite.svg#email"></use>
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
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>

<?/*<div class="block-mb">
    <div class="container">
        <div class="details-section__fundraising">

            <div class="details-section__header">
                <div class="details-section__arrow">
                    <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 6L2 6M2 6L7.24194 11M2 6L7.24193 1" stroke="#AEAFB0" stroke-width="1.5"
                              stroke-linecap="round"/>
                    </svg>
                    <p>Все экодела</p>

                </div>
                <div class="details-section__btn">
                    <svg width="13" height="17" viewBox="0 0 13 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 3C1 1.89543 1.89543 1 3 1H9.5C10.6046 1 11.5 1.89543 11.5 3V15.5L6.25 11L1 15.5V3Z"
                              stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 5.5H2C1.44772 5.5 1 5.94772 1 6.5V14.5C1 15.0523 1.44772 15.5 2 15.5H12C12.5523 15.5 13 15.0523 13 14.5V6.5C13 5.94772 12.5523 5.5 12 5.5H11M7 10.5V1M7 1L9 3M7 1L5 3"
                              stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 5.7037V8.2963M9 11.4074V11.9259M16.1451 12.5039L9.86824 1.51943C9.48435 0.847611 8.51565 0.84761 8.13176 1.51942L1.85494 12.5039C1.47399 13.1705 1.95536 14 2.72318 14H15.2768C16.0446 14 16.526 13.1705 16.1451 12.5039Z"
                              stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <div class="details-section__header_bottom">
                <div class="content-title">
                       <span class="tag">
                            <span class="tag__content-bg" style="
                                    border-color: var(--warning5-color);
                                    background-color: var(--warning8-color);"></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                    <use href="img/sprite.svg#tag-pets"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                            </span>
                        </span>
                </div>
                <div class="content-text">
                    <h2 class="content-text__h2">Кожуховский муниципальный приют в беде</h2></div>
                <div class="sidebar__help-count--block-active">
                    <div class="sidebar__help-count">
                        <div class="sidebar__help-count-start">
                            <div class="sidebar__help-count-start-title">Собрано средств</div>
                            <div class="sidebar__help-count-start-count">146 548 руб.</div>
                        </div>
                        <div class="sidebar__help-count-finish">
                            <div class="sidebar__help-count-start-title">Цель проекта</div>
                            <div class="sidebar__help-count-start-count">200 000 руб.</div>
                        </div>
                    </div>

                    <div class="sidebar__help-line">
                        <div class="sidebar__help-line-inner" style="width: 73%"></div>
                    </div>

                    <div class="sidebar__btn--fill">

                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Помочь проекту</span>
                        </button>

                    </div>

                </div>
            </div>

            <div class="details-section__discription">
                <div class="details-section__sidebar">
                    <div class="sidebar-header">


                    </div>
                    <div class="sidebar-img">
                        <img src="img/sidebar-img_2.png" alt="image/png">

                    </div>

                </div>


                <div class="details-section__content">
                    <div class="details-section__stat">
                        <div class="sidebar__help-count--block">
                            <div class="sidebar__help-count">
                                <div class="sidebar__help-count-start">
                                    <div class="sidebar__help-count-start-title">Собрано средств</div>
                                    <div class="sidebar__help-count-start-count">146 548 руб.</div>
                                </div>
                                <div class="sidebar__help-count-finish">
                                    <div class="sidebar__help-count-start-title">Цель проекта</div>
                                    <div class="sidebar__help-count-start-count">200 000</div>
                                </div>
                            </div>
                            <div class="sidebar__help-line">
                                <div class="sidebar__help-line-inner" style="width: 73%"></div>
                            </div>

                            <div class="sidebar__btn--fill">

                                <button class="btn-reset btn btn--fill">
                                    <span class="btn__text">Помочь проекту</span>
                                </button>

                            </div>
                        </div>

                        <div class="content-discription">
                            <div class="content-discription__title">Описание</div>
                            <div class="content-discription__text">Мы просим максимальной огласки и помощи СМИ <br><br>
                                В конце 2008 года приют распахнул свои двери для первых узников. С тех пор мы пережили
                                многое: живодерскую УК Гришкова, затем коммерческую УК и
                                корм-убийцу, постоянную нехватку рабочих, за ними пришло ГБУ «Автомобильные дороги ВАО»
                                с
                                чудовищно безграмотным менеджментом, круговой порукой и полной неспособностью решать
                                любые
                                управленческие задачи. Все эти годы одно оставалось неизменным: 3000 собак, 400 кошек и
                                группа отчаянных волонтеров, благодаря которым за это время более 7000❗️собак и 1500❗️
                                кошек
                                нашли дом, сотни животных получили медицинскую помощь в сторонних клиниках, вет блок не
                                оборудован современной техникой. Многие годы мы мирились с полным несоблюдением
                                Регламента
                                на управление приютом: 100% отсутсвие выгула животных со стороны УК, постоянная нехватка
                                рабочих и, как следствие, грязь, отсутсвие воды и корма в вольерах.
                            </div>
                            <div class="content-discription__show"><a href="/" class="content-discription__link">Показать
                                    полностью</a></div>
                            <div class="details-section__top">

                                <div class="content-text__geo">

                                    <div class="contacts__review">
                                        <div class="contacts__review_img">
                                            <div class="contacts__review_img-size">
                                                <img class="review_img"
                                                     src="img/contacts__review_img.png"
                                                     alt="logo/img">
                                            </div>
                                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                                            <div class="contacts__review_score">
                                                <div class="review__score_count">
                                                    <img src="img/review__score_starcolor.png" alt="">
                                                    <span>5</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="content-contacts">
                            <div class="content-discription__title">Контактное лицо</div>
                            <div class="content-contacts__manager">
                                <div class="content-contacts__manager-all">
                                    <div class="manager__info_photo">
                                        <img class="info_photo" src="img/manager__info_photo.png"
                                             alt="photo manager">
                                    </div>


                                    <div class="content-contacts__manager-info">
                                        <div class="manager__number_name">Михайлова Светлана Васильевна</div>
                                        <div class="manager__number-info">
                                            <div class="manager__number_phone">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M14.25 5.27936C16.6812 5.97562 18.5896 7.90944 19.25 10.3556M9.14286 5H6.31818C5.59017 5 5 5.59017 5 6.31818C5 13.5983 10.9017 19.5 18.1818 19.5C18.9098 19.5 19.5 18.9098 19.5 18.1818V15.3571L16.3929 13.2857L14.7817 14.8968C14.5019 15.1767 14.0837 15.2637 13.7321 15.0821C13.1358 14.774 12.1681 14.1952 11.2143 13.2857C10.2377 12.3545 9.66548 11.3511 9.37829 10.744C9.21734 10.4037 9.31052 10.0109 9.57669 9.74474L11.2143 8.10714L9.14286 5Z"
                                                          stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                                <div>+7 (999) 482-87-12</div>
                                            </div>
                                            <div class="manager__number_email">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M7.55556 9.375L10.2945 11.4538C11.2335 12.1666 12.5379 12.1833 13.4955 11.4949L16.4444 9.375M8.44444 19C5.98985 19 4 17.0412 4 14.625V9.375C4 6.95875 5.98985 5 8.44444 5H15.5556C18.0102 5 20 6.95875 20 9.375V14.625C20 17.0412 18.0102 19 15.5556 19H8.44444Z"
                                                          stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                                <div>mih.svetlana@mail.ru</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-reset btn btn--midi">
                                    <span class="btn__text">Написать в чат</span>
                                </button>
                            </div>
                        </div>


                        <div class="content-materials">
                            <div class="content-discription__title">Документы</div>
                            <div class="materials_file">
                                <div class="materials_file-dock">
                                    <div class="materials_file-logo">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.16667 1H3C1.89543 1 1 1.89543 1 3V15C1 16.1046 1.89543 17 3 17H13C14.1046 17 15 16.1046 15 15V6.71429M9.16667 1V5.71428C9.16667 6.26657 9.61438 6.71429 10.1667 6.71429H15M9.16667 1L15 6.71429M4.5 10.1429H6.83333M4.5 13.5714H11.5"
                                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <div class="materials_file-text">
                                        <div class="materials_file-title">Регламент проведения мероприятия 2021 г.</div>
                                        <div class="materials_file-info">PDF, 2.4 МБ</div>
                                    </div>
                                </div>
                                <div class="materials_file-dock">
                                    <div class="materials_file-logo">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.16667 1H3C1.89543 1 1 1.89543 1 3V15C1 16.1046 1.89543 17 3 17H13C14.1046 17 15 16.1046 15 15V6.71429M9.16667 1V5.71428C9.16667 6.26657 9.61438 6.71429 10.1667 6.71429H15M9.16667 1L15 6.71429M4.5 10.1429H6.83333M4.5 13.5714H11.5"
                                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <div class="materials_file-text">
                                        <div class="materials_file-title">Анкета участника 2021 г.</div>
                                        <div class="materials_file-info">DOCX, 13.2 МБ</div>
                                    </div>
                                </div>
                                <div class="materials_file-dock">
                                    <div class="materials_file-logo">
                                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.16667 1H3C1.89543 1 1 1.89543 1 3V15C1 16.1046 1.89543 17 3 17H13C14.1046 17 15 16.1046 15 15V6.71429M9.16667 1V5.71428C9.16667 6.26657 9.61438 6.71429 10.1667 6.71429H15M9.16667 1L15 6.71429M4.5 10.1429H6.83333M4.5 13.5714H11.5"
                                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"/>
                                        </svg>

                                    </div>
                                    <div class="materials_file-text">
                                        <div class="materials_file-title">Печерень участников благотворительного
                                            мероприятия
                                            2021 г.
                                        </div>
                                        <div class="materials_file-info">XLS, 0.4 МБ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="details-section__projects-list">
                <div class="projects-list-change">
                    <h2 class="projects__list-title">Похожие экодела</h2>
                    <div class="projects__list-title-arrow">
                        <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 19.5H27M11 19.5L17 25.5M11 19.5L17 13.5M19 1.5C28.942 1.5 37 9.558 37 19.5C37 29.442 28.942 37.5 19 37.5C9.058 37.5 1 29.442 1 19.5C1 9.558 9.058 1.5 19 1.5Z"
                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <svg width="38" height="39" viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27 19.5H11M27 19.5L21 25.5M27 19.5L21 13.5M19 1.5C9.058 1.5 1 9.558 1 19.5C1 29.442 9.058 37.5 19 37.5C28.942 37.5 37 29.442 37 19.5C37 9.558 28.942 1.5 19 1.5Z"
                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                    </div>
                </div>
                <div class="ecodela__similar">
                    <div class="projects__list-card">
                        <div class="main-section__page-content page-content">
                            <div class="card-list">
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>

                                            <img loading="lazy" src="img/projects__list-card_1.png"
                                                 class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
                            <span class="tag__content-bg" style="
                                    border-color: var(--warning5-color);
                                    background-color: var(--warning8-color);"></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                    <use href="img/sprite.svg#tag-pets"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                            </span>
                        </span>
                                        </span>
                                        <span class="card__title">«Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                  <div class="sidebar__help-line">
                            <div class="sidebar__help-line-inner" style="width: 73%"></div>
                        </div>
                                               <div class="sidebar__help-count">
                            <div class="sidebar__help-count-start">
                                <div class="sidebar__help-count-start-title">Собрано средств</div>
                                <div class="sidebar__help-count-start-count">146 548 руб.</div>
                            </div>
                            <div class="sidebar__help-count-finish">
                                <div class="sidebar__help-count-start-title">Цель проекта</div>
                                <div class="sidebar__help-count-start-count">200 000</div>
                            </div>
                        </div>

                                            </span>
                                            <span class="card__action-btn">
                                                <button class="btn-reset btn btn--fill">
                                                    <span class="btn__text">Помочь</span>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>

                                            <img loading="lazy" src="img/projects__list-card_2.png"
                                                 class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
                            <span class="tag__content-bg" style="
                                    border-color: var(--info5-color);
                                    background-color: var(--info8-color);"></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                    <use href="img/sprite.svg#tag-science"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                            </span>
                        </span>
                                        </span>
                                        <span class="card__title">«Новый год в каждый дом» для пожилых людей</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                 <div class="sidebar__help-line">
                            <div class="sidebar__help-line-inner" style="width: 73%"></div>
                        </div>
                                               <div class="sidebar__help-count">
                            <div class="sidebar__help-count-start">
                                <div class="sidebar__help-count-start-title">Собрано средств</div>
                                <div class="sidebar__help-count-start-count">146 548 руб.</div>
                            </div>
                            <div class="sidebar__help-count-finish">
                                <div class="sidebar__help-count-start-title">Цель проекта</div>
                                <div class="sidebar__help-count-start-count">200 000</div>
                            </div>
                        </div>

                                            </span>
                                            <span class="card__action-btn">
                                                <button class="btn-reset btn btn--fill">
                                                    <span class="btn__text">Помочь</span>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>

                                            <img loading="lazy" src="img/projects__list-card_3.png"
                                                 class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
                            <span class="tag__content-bg" style="
                                    border-color: var(--accent-purple4-color);
                                    background-color: var(--accent-purple8-color);"></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                    <use href="img/sprite.svg#tag-sport"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                            </span>
                        </span>
                                        </span>
                                        <span class="card__title">«Просим принять эффективные и гуманные меры для решения проблемы бездомных животных</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <div class="sidebar__help-line">
                            <div class="sidebar__help-line-inner" style="width: 73%"></div>
                        </div>
                                               <div class="sidebar__help-count">
                            <div class="sidebar__help-count-start">
                                <div class="sidebar__help-count-start-title">Собрано средств</div>
                                <div class="sidebar__help-count-start-count">146 548 руб.</div>
                            </div>
                            <div class="sidebar__help-count-finish">
                                <div class="sidebar__help-count-start-title">Цель проекта</div>
                                <div class="sidebar__help-count-start-count">200 000</div>
                            </div>
                        </div>
                                            </span>
                                            <span class="card__action-btn">
                                                <button class="btn-reset btn btn--fill">
                                                    <span class="btn__text">Помочь</span>
                                                </button>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                                <a href="javascript:;" class="card">
                                    <span class="card__view">
                                        <picture>

                                            <img loading="lazy" src="img/projects__list-card_4.png"
                                                 class="image" width="270" height="180" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__descr">
                                        <span class="card__tag-bar tag-bar">
                                            <span class="tag">
                            <span class="tag__content-bg" style="
                                    border-color: var(--error4-color);
                                    background-color: var(--error9-color);"></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                    <use href="img/sprite.svg#tag-alarm"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                            </span>
                        </span>
                                        </span>
                                        <span class="card__title">«Центр поисковой работы Бессмертного полка</span>
                                        <span class="card__action">
                                            <span class="card__action-data">
                                                <div class="sidebar__help-line">
                            <div class="sidebar__help-line-inner" style="width: 73%"></div>
                        </div>
                                               <div class="sidebar__help-count">
                            <div class="sidebar__help-count-start">
                                <div class="sidebar__help-count-start-title">Собрано средств</div>
                                <div class="sidebar__help-count-start-count">146 548 руб.</div>
                            </div>
                            <div class="sidebar__help-count-finish">
                                <div class="sidebar__help-count-start-title">Цель проекта</div>
                                <div class="sidebar__help-count-start-count">200 000</div>
                            </div>
                        </div>

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>*/?>