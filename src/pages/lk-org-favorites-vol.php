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
									<a href="lk-org-favorites-vol.php#pageContentBody" class="tab-links-slider__link selected">Волонтеры</a>
								</div>
								<div class="swiper-slide">
									<a href="lk-org-favorites-org.php#pageContentBody" class="tab-links-slider__link">Организаторы</a>
								</div>
							</div>
						</div>
					</div>

					<div class="page-content__main">
						<div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--volunteer">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__title">Третьяков Авраам Романович</span>
                                    <span class="card__icon-tags">
                                        <span class="card__icon-tag">
                                            <span class="success-check">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="card__icon-tag">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#coins"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__favorite">
                                        <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#bookmark"></use>
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="card__user-descr">
                                        <span class="card__user-descr-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#pin"></use>
                                            </svg>
                                            <span class="card__action-item-text">г. Москва</span>
                                        </span>
                                    </span>
                                    <span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#favorite"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
                                    <span class="card__reviews">
                                        <span class="card__reviews-value">Был волонтером 251 раз</span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--midi btn--gray">
                                            <span class="btn__text">Написать</span>
                                        </button>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="card card--volunteer">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__title">Третьяков Авраам Романович</span>
                                    <span class="card__icon-tags">
                                        <span class="card__icon-tag">
                                            <span class="success-check">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                        <span class="card__icon-tag">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#coins"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__favorite">
                                        <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#bookmark"></use>
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="card__user-descr">
                                        <span class="card__user-descr-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#pin"></use>
                                            </svg>
                                            <span class="card__action-item-text">г. Москва</span>
                                        </span>
                                    </span>
                                    <span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#favorite"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
                                    <span class="card__reviews">
                                        <span class="card__reviews-value">Был волонтером 251 раз</span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--midi btn--gray">
                                            <span class="btn__text">Написать</span>
                                        </button>
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
