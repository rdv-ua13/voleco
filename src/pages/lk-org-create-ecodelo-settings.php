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
                        <div class="h2">Создать новое экодело</div>
                    </div>

                    <div class="page-content__content-type">
                        <div class="page-content-tabs-wrapper">
                            <div class="page-content-tabs swiper js-page-content-tabs">
                                <div class="page-content-tabs__nav swiper-wrapper">
                                    <div class="swiper-slide page-content-tabs__nav-item notice">
                                        <a href="lk-org-create-ecodelo-settings.php#pageContentBody" class="page-content-tabs__link selected">
                                            <span class="page-content-tabs__link-content">Информация об экоделе</span>
                                            <span class="page-content-tabs__link-num"></span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide page-content-tabs__nav-item notice">
                                        <a href="lk-org-create-ecodelo-task-settings.php#pageContentBody" class="page-content-tabs__link">
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
									<div class="page-content__section-item-title">
										<span>Направления <span class="required-star">*</span></span>
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
									<div class="form__field">
                                        <span class="tag-bar">
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][all]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-all"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">все</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][all]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-building"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Урбанизация</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][sport]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--accent-purple4-color);
                                                        background-color: var(--accent-purple8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--accent-purple2-color);">
                                                        <use href="img/sprite.svg#tag-sport"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--accent-purple2-color);">спорт</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][alarm]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-alarm"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">ЧС</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][animal]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-pets"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Животные</span>
                                                </span>
                                            </label>
                                            <label class="tag" style="cursor: not-allowed;">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][science]"
													value="0"
												>
                                                <span
													class="tag__content-bg"
													style="
                                                        border-color: var(--text8-color);
                                                        background-color: var(--text8-color);"
												></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                                        <use href="img/sprite.svg#tag-science"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text5-color);">Наука</span>
                                                </span>
                                            </label>
                                            <label class="tag">
                                                <input
													class="visually-hidden"
													type="checkbox"
													name="PROP[TAGS][nature]"
													value="0"
												>
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
                                            </label>
                                        </span>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Название экодела <span class="required-star">*</span></span>
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
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
											placeholder="Название экодела"
											required
										>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Экодело в рамках проекта <span class="required-star">*</span></span>
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
									<div class="form__field">
										<select
											id=""
											name=""
											class="input-reset form__input form__input--select2 js-select2"
											required
										>
											<option value="0">Выберите проект</option>
											<option value="1">Выберите проект 2</option>
											<option value="2">Выберите проект 3</option>
										</select>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Обложка <span class="required-star">*</span></span>
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
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
										<span>Описание экодела <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
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
										></textarea>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
                                        Соцсети
										<span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
									<div class="form__field-wrapper form__field-wrapper--columns">
										<div class="form__field">
											<input id=""
												   class="input-reset form__input"
												   type="url"
												   name=""
												   placeholder="https://vk.com/username"
											>
											<div class="form__btn">
												<svg class="icon">
													<use href="img/sprite.svg#media-vk"></use>
												</svg>
											</div>
										</div>
										<div class="form__field">
											<input id=""
												   class="input-reset form__input"
												   type="url"
												   name=""
												   placeholder="https://fb.com/username"
											>
											<div class="form__btn">
												<svg class="icon">
													<use href="img/sprite.svg#media-facebook"></use>
												</svg>
											</div>
										</div>
										<div class="form__field">
											<input id=""
												   class="input-reset form__input"
												   type="url"
												   name=""
												   placeholder="https://ok.ru/username"
											>
											<div class="form__btn">
												<svg class="icon">
													<use href="img/sprite.svg#media-ok"></use>
												</svg>
											</div>
										</div>
										<div class="form__field">
											<input id=""
												   class="input-reset form__input"
												   type="url"
												   name=""
												   placeholder="https://instagram.com/username"
											>
											<div class="form__btn">
												<svg class="icon">
													<use href="img/sprite.svg#media-insta"></use>
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
										<div class="form__field">
											<input id=""
												   class="input-reset form__input"
												   type="url"
												   name=""
												   placeholder="https://tiktok.com/@username"
											>
											<div class="form__btn">
												<svg class="icon">
													<use href="img/sprite.svg#media-tiktok"></use>
												</svg>
											</div>
										</div>
									</div>
								</div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Документы
                                        <span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id1">
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
							</div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Контактное лицо</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">ФИО контактного лица</div>
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
                                    <div class="page-content__section-item-title">Должность</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Телефон</div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="tel"
                                                name=""
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">Электронная почта</div>
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
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Контакты
                                    </div>
                                    <div class="form__field-wrapper form__field-wrapper--columns form__field-wrapper--columns-3">
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-vk"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-wa"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <input id=""
                                                   class="input-reset form__input"
                                                   type="url"
                                                   name=""
                                                   placeholder=""
                                            >
                                            <div class="form__btn">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#media-skype"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__section">
                                <div class="block-mb-md h4">Место и время проведения</div>

                                <div class="page-content__section-item">
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-1" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-1" class="custom-checkbox__label-for">Онлайн</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Место проведения <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field-wrapper form__field-wrapper--map-pointer">
                                        <div class="form__field">
                                            <input
                                                    id=""
                                                    class="input-reset form__input"
                                                    type="search"
                                                    name=""
                                                    placeholder="Укажите место проведения"
                                            >
                                        </div>
                                        <button class="btn-reset btn btn--fill btn--gray">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#pin"></use>
                                            </svg>
                                            <span class="btn__text">Указать на карте</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Как добраться до места проведения <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
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
                                                placeholder="Укажите место проведения"
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--average">
                                        <div class="page-content__section-item-title">
                                            <span>Даты проведения <span class="required-star">*</span></span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="date"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem page-content__section-subitem--small">
                                        <div class="page-content__section-item-title">
                                            <span>Время начала <span class="required-star">*</span></span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="time"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem page-content__section-subitem--small">
                                        <div class="page-content__section-item-title">
                                            <span>Время окончания</span>
                                            <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="time"
                                                        name=""
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem-option flex-h-end">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-2" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-2" class="custom-checkbox__label-for">Указать время отдельно для каждого дня</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            Указать период отбора
                                        </span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="date"
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
                                        Фотографии
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id1">
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
                                                            <div class="dropfile-descr__accept">SVG, PNG, JPG (не более 10 МБ)</div>
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
                                                <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id1">
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
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        Документы
                                        <span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#help"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id1">
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
