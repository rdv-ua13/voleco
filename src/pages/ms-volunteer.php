<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="container">
		<div class="main-section">
			<div class="block-mb-lg">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/main-section-tabs.php"); ?>
			</div>
			<div class="main-section__content">
				<div class="main-section__header">
					<h1 class="h2">Эковолонтеры</h1>
				</div>
				<div class="main-section__sidebar">
					<div class="sidebar">sidebar</div>
				</div>
				<div class="main-section__page-content page-content">
					<div class="card-list">
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

						<a href="javascript:;" class="card card--projects">
							<span class="card__view">
								<picture>
									<source srcset="img/card-photo-projects.webp" type="image/webp">
									<img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
							<span class="card__descr">
								<span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
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
                                        <span class="card__organizer-activity">12 мероприятий</span>
                                    </span>
									<span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
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
								<span class="card__title-block">
                                    <span class="card__title">Третьяков Авраам Романович</span>
                                    <span class="card__title-check">
                                        <span class="success-check">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#success-check"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__favorite js-card-favorite">
                                        <button class="btn-reset btn--noframe" type="button">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#favorite"></use>
                                            </svg>
                                        </button>
                                    </span>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#map-pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                </span>
                                <span class="card__user-footer">
                                    <span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
                                    <span class="card__reviews">
                                        <span class="card__reviews-value">Был волонтером 251 раз</span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                            <span class="btn__text">Написать</span>
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

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>