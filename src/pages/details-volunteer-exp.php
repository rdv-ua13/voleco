<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <div class="page-content">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-details-vol.php"); ?>
            </div>

            <div class="page-content__body">
                <div class="block-mb-md">
                    <div class="page-content-tabs-container">
                        <div class="page-content-tabs-wrapper">
                            <div class="page-content-tabs swiper js-page-content-tabs">
                                <div class="page-content-tabs__nav swiper-wrapper">
									<? $arMenu = array (
										"details-volunteer.php" => "О волонтере",
										"details-volunteer-exp.php" => "Опыт волонтерства",
										"details-volunteer-feedback.php" => "Отзывы",
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
                        </div>
                    </div>
                </div>

                <div class="page-content__container">
                    <div class="page-content__main page-content__main--full">
                        <div class="block-mb-lg">
                            <div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--pa-default">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-events.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-events.png" class="image" width="260" height="190" alt="Фото карточки">
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
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#pin"></use>
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
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="card card--pa-default">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-events.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-events.png" class="image" width="260" height="190" alt="Фото карточки">
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
                                    <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#pin"></use>
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
                                    </span>
                                    <span class="card__contact-btn card__contact-btn--vol">
                                        <button class="btn-reset btn btn--fill btn--midi btn--gray">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#chat"></use>
                                            </svg>
                                            <span class="btn__text">Посмотреть отзыв</span>
                                        </button>
                                    </span>
                                </span>
                            </a>
                        </div>
                        </div>

						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>