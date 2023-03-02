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
					<div class="page-content__main">
						<div class="card-list">
							<a href="javascript:;" class="card card--pa-project">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-projects.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-projects.png" class="image" width="260" height="190" alt="Фото карточки">
                                    </picture>
                                </span>
								<span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
                                        <span class="tag tag--mini">
                                            <span class="tag__content-bg" style="
                                                    border-color: var(--success6-color);
                                                    background-color: var(--success8-color);"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text" style="color: var(--success4-color);">одобрен</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__title">Общественное движение «Волонтеры экологи»</span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--mini">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#pencil"></use>
                                            </svg>-->
                                            <span class="btn__text">Редактировать</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>-->
                                            <span class="btn__text">Удалить</span>
                                        </button>
                                    </span>
                                </span>
							</a>
                            <a href="javascript:;" class="card card--pa-project">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-projects.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-projects.png" class="image" width="260" height="190" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
                                        <span class="tag tag--mini">
                                            <span class="tag__content-bg" style="
                                                    border-color: var(--error4-color);
                                                    background-color: var(--error9-color);"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text" style="color: var(--error4-color);">отклонен</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__title">«Новый год в каждый дом» для пожилых людей</span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--mini">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#pencil"></use>
                                            </svg>-->
                                            <span class="btn__text">Редактировать</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>-->
                                            <span class="btn__text">Удалить</span>
                                        </button>
                                    </span>
                                </span>
                            </a>
                            <a href="javascript:;" class="card card--pa-project">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-projects.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-projects.png" class="image" width="260" height="190" alt="Фото карточки">
                                    </picture>
                                </span>
                                <span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
                                        <span class="tag tag--mini">
                                            <span class="tag__content-bg" style="
                                                    border-color: var(--success6-color);
                                                    background-color: var(--success8-color);"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text" style="color: var(--success4-color);">одобрен</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__title">Общественное движение «Волонтеры экологи»</span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--mini">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#pencil"></use>
                                            </svg>-->
                                            <span class="btn__text">Редактировать</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                            <!--<svg class="icon btn__icon">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>-->
                                            <span class="btn__text">Удалить</span>
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
