<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="page-content">
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

        <div id="pageContentBody" class="page-content__body">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
            </div>

            <div class="container">
                <div class="page-content__container">
                    <div class="page-content__content-type">
                        <div class="tab-links-slider swiper js-main-section-tabs">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="lk-org-reviews.php#pageContentBody" class="tab-links-slider__link selected">Мои отзывы</a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="lk-org-reviews-vol.php#pageContentBody" class="tab-links-slider__link">Отзывы волонтеров</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="page-content__main">
                        <div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--pa-reviews-org">
                                <span class="card__item card__header">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__heading">
                                        <span class="card__title">Третьяков Авраам Романович</span>
                                        <span class="card__subtitle">Голосование за благоустройство общественных пространств</span>
                                    </span>
                                </span>

                                <span class="card__item card__descr">
                                    <span class="card__rate-wrapper">
                                        <span class="card__rate-title">Оценка:</span>
                                        <span class="card__rate card__rate--noframe">
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
                                                <use href="img/sprite.svg#star-gray"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="page-content__descr-content">
                                        <span class="page-content__spoiler js-spoiler-mobile-only" data-collapsed-height="22">
                                            <span class="page-content__spoiler-text">Региональный центр развития добровольчества "БлагоДарю" выражает огромную благодарность за отличную командную работы на обучающем проекте "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых встреч!</span>
                                        </span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">16:44, 12 декабря 2021</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="card card--pa-reviews-org">
                                <span class="card__item card__header">
                                    <span class="card__view">
                                        <picture>
                                            <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="42" height="42" alt="Фото карточки">
                                        </picture>
                                    </span>
                                    <span class="card__heading">
                                        <span class="card__title">Некрасов Лев Филатович</span>
                                        <span class="card__subtitle">XI Международный форум «Арктика: настоящее и будущее»</span>
                                    </span>
                                </span>

                                <span class="card__item card__descr">
                                    <span class="card__rate-wrapper">
                                        <span class="card__rate-title">Оценка:</span>
                                        <span class="card__rate card__rate--noframe">
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
                                                <use href="img/sprite.svg#star-gray"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">16:44, 12 декабря 2021</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>
                            </a>

                        </div>
                    </div>
                    <div class="page-content__sidebar">sidebar</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>