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
									<a href="lk-vol-archive-task.php#pageContentBody" class="tab-links-slider__link selected">Задачи</a>
								</div>
								<div class="swiper-slide">
									<a href="lk-vol-archive-event.php#pageContentBody" class="tab-links-slider__link">Экодела</a>
								</div>
							</div>
						</div>
					</div>

					<div class="page-content__main">
						<div class="card-list card-list-column">
                            <a href="javascript:;" class="card card--pa-default">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-events.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-events.png" class="image" width="260" height="190" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__title-block">
                                        <span class="card__title-block-name">Оказание психологической помощи</span>
                                        <span class="card__title-block-subtitle">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО </span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__contact-btn card__contact-btn--vol">
                                        <button class="btn-reset btn btn--noframe">
                                            <span class="tag tag--mini">
                                                <span class="tag__content-bg" style="
                                                        border-color: var(--warning5-color);
                                                        background-color: var(--warning8-color);"></span>
                                                <span class="tag__content">
                                                    <span class="tag__content-text" style="color: var(--warning3-color);">заявка На рассмотрении</span>
                                                </span>
                                            </span>
                                        </button>
                                        <button class="btn-reset btn btn--noframe btn--tdu-dashed">
                                            <span class="btn__text text5-color">Отменить участие</span>
                                        </button>
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
                                    <span class="card__title-block">
                                        <span class="card__title-block-name">Помощь в медицинских организациях (Для волонтеров с медицинским образованием и студентов-медиков)</span>
                                        <span class="card__title-block-subtitle">XI Международный форум «Арктика: настоящее и будущее»</span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__contact-btn card__contact-btn--vol">
                                        <button class="btn-reset btn btn--noframe">
                                            <span class="tag tag--mini">
                                                <span class="tag__content-bg" style="
                                                        border-color: var(--error4-color);
                                                        background-color: var(--error9-color);"></span>
                                                <span class="tag__content">
                                                    <span class="tag__content-text" style="color: var(--error4-color);">заявка отклонена</span>
                                                </span>
                                            </span>
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