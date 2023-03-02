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
									<use href="img/sprite.svg#left"></use>
								</svg>
							</button>
						</div>
						<div class="h2">Создать новую петицию</div>
					</div>

					<div class="page-content__main">
						<form class="form form--profile-settings" action="">
							<div class="page-content__section">
								<div class="block-mb-md h4">Основная информация</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Название петиции <span class="required-star">*</span></span>
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id22">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id22">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Название петиции"
                                        >
                                    </div>
								</div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Обложка <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id23">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id23">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <div id="dropfile" class="dropfile">
                                            <label class="dropfile-field">
                                                <input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
                                                <div id="dropfile-area" class="dropfile-area">
                                                    <div class="dropfile-descr">
                                                        <div class="dropfile-descr__view">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#add-image"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="dropfile-descr__text">
                                                            <div class="dropfile-descr__title">
                                                                Нажмите для загрузки
                                                                <span>или перенесите изображение в эту область</span>
                                                            </div>
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 800 × 800px)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="dropfile-gallery"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Описание <span class="required-star">*</span></span>
                                        <span class="tooltip">
										<span class="btn-reset tooltip__btn" aria-describedby="id5">
											<svg class="icon">
												<use href="img/sprite.svg#help"></use>
											</svg>
										</span>
										<span class="tooltip__txt" role="tooltip" id="id5">
											<span class="visually-hidden">Тултип: </span>
											Текст
										</span>
									</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Введите описание"
                                                required
                                        ></textarea>
                                    </div>
                                </div>
							</div>

							<div class="page-content__section">
								<div class="block-mb-md h4">Контактное лицо</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>ФИО контактного лица</span>
									</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Фамилия Имя Отчество"
                                        >
                                    </div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Телефон</span>
									</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="text"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Электронная почта</span>
									</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="email"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
								</div>
							</div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Материалы</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Документы
                                        <span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id6">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id6">
                                                    <span class="visually-hidden">Тултип: </span>
                                                    Текст
                                                </span>
                                            </span>
                                    </div>
                                    <div class="form__field">
                                        <div id="dropfile" class="dropfile">
                                            <label class="dropfile-field">
                                                <input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
                                                <div id="dropfile-area" class="dropfile-area">
                                                    <div class="dropfile-descr">
                                                        <div class="dropfile-descr__view">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#add-image"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="dropfile-descr__text">
                                                            <div class="dropfile-descr__title">
                                                                Нажмите для загрузки
                                                                <span>или перенесите изображение в эту область</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="dropfile-gallery"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Фотографии
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id4">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id4">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <div id="dropfile" class="dropfile">
                                            <label class="dropfile-field">
                                                <input id="dropfile-input" class="visually-hidden dropfile-input" type="file" accept="image/*">
                                                <div id="dropfile-area" class="dropfile-area">
                                                    <div class="dropfile-descr">
                                                        <div class="dropfile-descr__view">
                                                            <svg class="icon">
                                                                <use href="img/sprite.svg#add-image"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="dropfile-descr__text">
                                                            <div class="dropfile-descr__title">
                                                                Нажмите для загрузки
                                                                <span>или перенесите изображение в эту область</span>
                                                            </div>
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (рекомендуемый размер 1330 × 340px)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <div class="dropfile-gallery"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Видео
                                        <span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id5">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id5">
                                                    <span class="visually-hidden">Тултип: </span>
                                                    Текст
                                                </span>
                                            </span>
                                    </div>
                                    <div class="form__field">
                                        <input id=""
                                               class="input-reset form__input"
                                               type="url"
                                               name=""
                                               placeholder="https://youtube.com/"
                                        >
                                        <div class="form__btn">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#media-youtube"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <input id=""
                                               class="input-reset form__input"
                                               type="url"
                                               name=""
                                               placeholder="https://youtube.com/"
                                        >
                                        <div class="form__btn">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#media-youtube"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <button class="btn-reset btn btn--noframe btn--green">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#plus"></use>
                                        </svg>
                                        <span class="btn__text">Добавить ещё видео</span>
                                    </button>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Сбор средств для поддержки проекта</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Необходимая сумма
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder="Укажите необходимую сумму"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="page-content__section-item">
                                    <div class="form__field  form__field-agree">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked="">
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с&nbsp;<a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и&nbsp;принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
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