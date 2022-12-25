<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<div id="pageContentBody" class="page-content__body">
			<div class="container">
				<div class="page-content__container page-content__container--settings">
					<div class="page-content__heading">
						<div class="page-content__heading-back">
							<button class="btn-reset btn btn--noframe">
								<svg class="icon btn__icon">
									<use href="img/sprite.svg#standart-arrow-left"></use>
								</svg>
							</button>
						</div>
						<div class="h2">Создать новое экодело</div>
					</div>

					<div class="page-content__content-type">
						<div class="page-content-tabs-wrapper">
							<div class="page-content-tabs swiper js-page-content-tabs">
								<div class="page-content-tabs__nav swiper-wrapper">
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-org-create-ecodelo-settings.php#pageContentBody" class="page-content-tabs__link">
											<span class="page-content-tabs__link-content">Информация об экоделе</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-org-create-ecodelo-task-settings.php#pageContentBody" class="page-content-tabs__link selected">
											<span class="page-content-tabs__link-content">Задачи</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="page-content__main">
						<form class="form form--profile-settings" action="">
							<div class="page-content__section">
								<div class="block-mb-md h4">Основная информация</div>

                                <div class="page-content__section-item">
                                    <div class="form__field">
                                        <div class="add-list add-list--task js-add-list">
                                            <div class="add-list__item">
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Помощь в медицинских организациях</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--fill btn--mini">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#edit"></use>
                                                        </svg>
                                                        <span class="btn__text">Редактировать</span>
                                                    </button>
                                                    <button class="btn-reset btn btn--fill btn--mini btn--gray add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                        <span class="btn__text">Удалить</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Автоволонтерство</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--fill btn--mini">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#edit"></use>
                                                        </svg>
                                                        <span class="btn__text">Редактировать</span>
                                                    </button>
                                                    <button class="btn-reset btn btn--fill btn--mini btn--gray add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                        <span class="btn__text">Удалить</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Помощь в колл-центрах</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--fill btn--mini">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#edit"></use>
                                                        </svg>
                                                        <span class="btn__text">Редактировать</span>
                                                    </button>
                                                    <button class="btn-reset btn btn--fill btn--mini btn--gray add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                        <span class="btn__text">Удалить</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="add-list__item">
                                                <div class="add-list__descr">
                                                    <div class="add-list__descr-title">Помощь в доставке продуктов и лекарств</div>
                                                </div>
                                                <div class="add-list__btn">
                                                    <button class="btn-reset btn btn--fill btn--mini">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#edit"></use>
                                                        </svg>
                                                        <span class="btn__text">Редактировать</span>
                                                    </button>
                                                    <button class="btn-reset btn btn--fill btn--mini btn--gray add-list__delete">
                                                        <svg class="icon btn__icon">
                                                            <use href="img/sprite.svg#trash"></use>
                                                        </svg>
                                                        <span class="btn__text">Удалить</span>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="add-list__add">
                                                <button class="btn-reset btn btn--noframe btn--green">
                                                    <svg class="icon btn__icon">
                                                        <use href="img/sprite.svg#plus"></use>
                                                    </svg>
                                                    <span class="btn__text">Добавить задачу</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
