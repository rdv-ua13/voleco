<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-vol.php"); ?>

		<div id="pageContentBody" class="page-content__body">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs-vol.php"); ?>
			</div>

			<div class="container">
				<div class="page-content__container page-content__container--profile-vol">
					<div class="page-content__content-type">
						<div class="tab-links-slider swiper js-main-section-tabs">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<a href="lk-vol-favorites-org.php#pageContentBody" class="tab-links-slider__link selected">Организаторы</a>
								</div>
								<div class="swiper-slide">
									<a href="lk-vol-favorites-event.php#pageContentBody" class="tab-links-slider__link">Экодела</a>
								</div>
								<div class="swiper-slide">
									<a href="lk-vol-favorites-project.php#pageContentBody" class="tab-links-slider__link">Проекты</a>
								</div>
								<div class="swiper-slide">
									<a href="lk-vol-favorites-vol.php#pageContentBody" class="tab-links-slider__link">Волонтеры</a>
								</div>
							</div>
						</div>
					</div>

					<div class="page-content__main">
						<div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--organizer">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-projects-org.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-projects-org.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__title">Ассоциация волонтерских центров</span>
                                    <span class="card__icon-tags">
                                        <span class="card__icon-tag">
                                            <span class="success-check">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__favorite">
                                        <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#favorite"></use>
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="card__user-descr">
                                        <span class="card__user-descr-item">
                                            <span class="card__action-item-text">12 экодел</span>
                                        </span>
                                    </span>
                                    <span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
                                    <span class="card__reviews">
                                        <span class="card__reviews-value">193 отзыва</span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--midi">
                                            <span class="btn__text desktop-only">Готов помогать</span>
                                            <span class="btn__text mobile-only">Помогать</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--midi btn--gray">
                                            <span class="btn__text">Написать</span>
                                        </button>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="card card--organizer">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-projects-org.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-projects-org.png" class="image" width="270" height="180" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__title">Ассоциация волонтерских центров</span>
                                    <span class="card__icon-tags">
                                        <span class="card__icon-tag">
                                            <span class="success-check">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__favorite">
                                        <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#favorite"></use>
                                            </svg>
                                        </button>
                                    </span>
                                    <span class="card__user-descr">
                                        <span class="card__user-descr-item">
                                            <span class="card__action-item-text">12 экодел</span>
                                        </span>
                                    </span>
                                    <span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
                                    <span class="card__reviews">
                                        <span class="card__reviews-value">193 отзыва</span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--midi">
                                            <span class="btn__text desktop-only">Готов помогать</span>
                                            <span class="btn__text mobile-only">Помогать</span>
                                        </button>
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