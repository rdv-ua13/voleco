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
                                <span class="btn__text">Все проекты</span>
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
                    </div>
                </div>
            </div>
            <div class="page-content__body">
                <div class="block-mb-lg">
                    <div class="page-content__container page-content__container--details">
                        <div class="page-content__content-header">
                            <div class="details-top-bar__header">
                                <div class="details-top-bar__tag-bar">
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
                                <h1 class="h3">Голосование за благоустройство общественных пространств</h1>
                            </div>
                            <div class="page-content__content-header-bottom">
                                <div class="details-contact">
                                    <span class="card__user-descr">
                                        <span class="card__user-descr-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#globe"></use>
                                            </svg>
                                            <span class="card__action-item-text">География проекта: Московская область</span>
                                        </span>
                                    </span>
                                </div>
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
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Цели проекта</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__spoiler">
                                            <div class="page-content__spoiler-text">Повышение уровня мотивации и развитие компетенций граждан, участвующих в добровольческой деятельности, имеющих высокие достижения, путем предоставления возможности участия в обучающих стажировках, а также в крупнейших федеральных и международных событиях в качестве волонтеров</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Результаты проекта</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="page-content__spoiler">
                                            <div class="page-content__spoiler-text">
                                                <p>Результаты Программы мобильности волонтеров за 2019 - 2020 года:</p>
                                                <ul>
                                                    <li>открыты и функционируют 8 окружных Центров мобильности волонтеров</li>
                                                    <li>участниками стали 5131 человек</li>
                                                    <li>организовано 25 образовательных стажировок</li>
                                                    <li>волонтеры приняли участие в 31 событии</li>
                                                </ul>
                                                <p>Подписывайся на обновления проекта и узнавай о новых событиях первым!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Организатор</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="card-list details-contact">
                                            <div class="card card--pa-reviews-org">
                                                <span class="card__item card__header">
                                                    <span class="card__organizer">
                                                        <span class="card__organizer-logo">
                                                            <picture>
                                                                <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
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
                                                            <span class="page-content__intro-bottom">
                                                                <span class="page-content__intro-rate">
                                                                    <span class="page-content__intro-rate-value">4.8</span>
                                                                    <span class="page-content__intro-rate-stars">
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#star"></use>
                                                                        </svg>
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#star"></use>
                                                                        </svg>
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#star"></use>
                                                                        </svg>
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#star"></use>
                                                                        </svg>
                                                                        <svg class="icon">
                                                                            <use href="img/sprite.svg#star"></use>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="page-content__intro-reviews">
                                                                    <a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed">
                                                                        <span class="btn__text">193 отзыва</span>
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="card__item card__descr">
                                                    <span class="page-content__descr-content">
                                                        <div class="page-content__descr-title desktop-only">Руководитель</div>
                                                        <div class="page-content__descr-content">
                                                            <div class="page-content__descr-position">
                                                                <div class="page-content__descr-position-view">
                                                                    <picture>
                                                                        <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                                        <img
                                                                                loading="lazy"
                                                                                src="img/card-photo-volunteer.png"
                                                                                class="image"
                                                                                width="32"
                                                                                height="32"
                                                                                alt="Photo"
                                                                        >
                                                                    </picture>
                                                                </div>
                                                                <div class="page-content__descr-position-name-wrapper">
                                                                    <div class="page-content__descr-title mobile-only">Руководитель</div>
                                                                    <div class="page-content__descr-position-name">Михайлова Светлана Васильевна</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <span class="card__action">
                                                        <span class="page-content__sidebar-soc  card__action-soc">
                                                            <a href="javascript:;" class="page-content__sidebar-soc-item card__action-soc-item">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#media-vk"></use>
                                                                </svg>
                                                            </a>
                                                            <a href="javascript:;" class="page-content__sidebar-soc-item card__action-soc-item">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#media-insta"></use>
                                                                </svg>
                                                            </a>
                                                            <a href="javascript:;" class="page-content__sidebar-soc-item card__action-soc-item">
                                                                <svg class="icon">
                                                                    <use href="img/sprite.svg#media-telegram"></use>
                                                                </svg>
                                                            </a>
                                                        </span>

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
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Материалы</div>
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
                                <div class="page-content__descr-item">
                                    <div class="page-content-descr-heading">
                                        <div class="h4">Партнеры</div>
                                    </div>
                                    <div class="page-content__descr-content">
                                        <div class="block-mb-sm">
                                            <div class="responsive-slider-partners">
                                                <div class="slider partners-slider partners-slider-desktop-grid basic-slider mobile-only-slider js-basic-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/card-projects-org.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/card-projects-org.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="partners-slider__view">
                                                                <picture>
                                                                    <source srcset="img/partners-img.webp" type="image/webp">
                                                                    <img
                                                                            loading="lazy"
                                                                            src="img/partners-img.png"
                                                                            class="image"
                                                                            width="100"
                                                                            height="100"
                                                                            alt="Изображение блока"
                                                                    >
                                                                </picture>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn-reset btn btn--midi">
                                            <span class="btn__text">Стать партнером</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content__sidebar page-content__sidebar--details">
                            <div class="page-content__sidebar-item page-content__sidebar-view">
                                <picture>
                                    <source srcset="img/card-photo-projects.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-photo-projects.png"
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
                        <div class="block-mb-md">
                            <div class="block-header block-header-has-filter">
                                <div class="block-header__title">
                                    <div class="block-header__title-text h2">Экодела проекта</div>
                                    <div class="block-header__title-num h2">18</div>
                                </div>
                                <div class="block-header__filter">
                                    <span class="mobile-only">
                                        <span class="block-header__filter-view">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#filter"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="desktop-only">filter in process</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-list-responsive card-list-responsive--desktop-only">
                            <div class="slider basic-slider js-basic-slider">
                                <div class="swiper-wrapper card-list">
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
                                                <span class="card__header h3">Смотреть<br> все экодела</span>
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