<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="container">
		<div class="main-section">
			<div class="block-mb-lg">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/main-section-tabs.php"); ?>
			</div>
			<div class="main-section__content">
				<div class="main-section__header">
					<h1 class="h2">Организаторы</h1>
				</div>
				<div class="main-section__sidebar">
					<div class="sidebar">sidebar</div>
				</div>
				<div class="main-section__page-content">
					<div class="card-list">
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
                                            <use href="img/sprite.svg#bookmark"></use>
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
                                    <button class="btn-reset btn btn--fill btn--mini">
                                        <span class="btn__text">Готов помогать</span>
                                    </button>
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
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
                                            <use href="img/sprite.svg#bookmark"></use>
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
                                    <button class="btn-reset btn btn--fill btn--mini">
                                        <span class="btn__text">Готов помогать</span>
                                    </button>
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                        <span class="btn__text">Написать</span>
                                    </button>
                                </span>
							</span>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>