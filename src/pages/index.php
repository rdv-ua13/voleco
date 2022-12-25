<?php include($_SERVER["DOCUMENT_ROOT"] . '/markup/' . 'components/header.php'); ?>

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
        <div class="basic-slider-wrapper">
            <div class="slider" style="display: none;">
                <div class="card">
                    <div class="card__view">
                        <picture>
                            <source srcset="img/card-photo.webp" type="image/webp">
                            <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                        </picture>
                    </div>
                    <div class="card__descr">
                        <div class="card__tag-bar tag-bar">
                            <div
                                    class="tag"
                                    style="
                                    border-color: var(--success6-color);
                                    background-color: var(--success8-color);"
                            >
                                <!-- todo: change style "stroke/fill" after fixes icon set by designer -->
                                <svg class="icon" style="fill: var(--success4-color);">
                                    <use href="img/sprite.svg#tag-nature"></use>
                                </svg>
                                <span class="tag__text" style="color: var(--success4-color);">Природа</span>
                            </div>
                        </div>
                        <div class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</div>
                        <div class="card__action">
                            <div class="card__action-data">
                                <div class="card__action-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#map-pin"></use>
                                    </svg>
                                    <span class="card__action-item-text">г. Москва</span>
                                </div>
                                <div class="card__action-item">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#calendar"></use>
                                    </svg>
                                    <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                </div>
                            </div>
                            <div class="card__action-btn">
                                <button class="btn-reset btn btn--fill">
                                    <span class="btn__text">Помочь</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/markup/' . 'components/footer.php'); ?>