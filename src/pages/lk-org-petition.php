<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

		<div class="page-content__body">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
			</div>

			<div class="container">
				<div class="page-content__container">
					<div class="page-content__main">
						<div class="card-list card-list-column">
							<a href="javascript:;" class="card card--pa-default">
                                <span class="card__view">
                                    <picture>
                                        <source srcset="img/card-photo-petition.webp" type="image/webp">
                                        <img loading="lazy" src="img/card-photo-petition.png" class="image" width="260" height="190" alt="Фото карточки">
                                    </picture>
                                </span>
								<span class="card__descr">
                                    <span class="card__tag-bar tag-bar">
                                        <span class="tag">
                                            <span class="tag__content-bg" style="
                                                    border-color: var(--warning5-color);
                                                    background-color: var(--warning8-color);"></span>
                                            <span class="tag__content">
                                                <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                                    <use href="img/sprite.svg#tag-pets"></use>
                                                </svg>
                                                <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__title">Кожуховский муниципальный приют в беде</span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="110753">110 753</span>
                                                    </span> из
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="150000">150 000</span>
                                                    </span> подписей
                                                </span>
                                            </span>
                                            <span class="card__action-progress js-progress">
                                                <span class="card__action-progress-bar progress-bar">
                                                    <progress id="" class="visually-hidden progress-bar__indicator" value="" max="100"></progress>
                                                    <span class="progress-bar__bg">
                                                        <span class="progress-bar__line"></span>
                                                    </span>
                                                </span>
                                                <span class="card__action-progress-data progress-bar-data">
                                                    <span class="card__action-progress-current">
                                                        <span class="card__action-progress-data-value progress-bar-data__value" data-value="146548">146 548</span>
                                                    </span> из
                                                    <span class="card__action-progress-need">
                                                        <span class="card__action-progress-data-value progress-bar-data__max" data-max="200000">200 000</span>
                                                    </span> собрано
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__contact-btn">
                                        <button class="btn-reset btn btn--fill btn--mini">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#pencil"></use>
                                            </svg>
                                            <span class="btn__text">Редактировать</span>
                                        </button>
                                        <?/* todo: заглушка, блок доработаю */?>
                                        <span class="card__contact-btn-more card-contact-btn-more">
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray card-contact-btn-more__menu js-card-contact-btn-more-menu">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#menu-more"></use>
                                                </svg>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#download"></use>
                                                </svg>
                                                <span class="btn__text">Статистика</span>
                                            </button>
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#trash"></use>
                                                </svg>
                                                <span class="btn__text">Удалить</span>
                                            </button>
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
