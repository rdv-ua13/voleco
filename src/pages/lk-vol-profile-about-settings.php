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
						<div class="h2">Настройки профиля эковолонтера</div>
					</div>

					<div class="page-content__content-type">
						<div class="page-content-tabs-wrapper">
							<div class="page-content-tabs swiper js-page-content-tabs">
								<div class="page-content-tabs__nav swiper-wrapper">
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-vol-profile-settings.php#pageContentBody" class="page-content-tabs__link">
											<span class="page-content-tabs__link-content">Основное</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-vol-profile-contact-settings.php#pageContentBody" class="page-content-tabs__link">
											<span class="page-content-tabs__link-content">Контакты</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-vol-profile-about-settings.php#pageContentBody" class="page-content-tabs__link selected">
											<span class="page-content-tabs__link-content">Образование и место работы</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-vol-profile-additional-settings.php#pageContentBody" class="page-content-tabs__link">
											<span class="page-content-tabs__link-content">Дополнительная информация</span>
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
								<div class="block-mb-md h4">Образование</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Уровень образования</span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                                required
                                        >
                                            <option value="0">Высшее</option>
                                            <option value="1">Высшее 2</option>
                                            <option value="2">Высшее 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Образовательное учреждение</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="РГУП"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Специальность</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="Юрист"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--average">
                                        <div class="page-content__section-item-title">
                                            <span>Год начала обучения</span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <select
                                                        id=""
                                                        name=""
                                                        class="input-reset form__input form__input--select2 js-select2"
                                                        required
                                                >
                                                    <option value="0">2011</option>
                                                    <option value="1">2012</option>
                                                    <option value="2">2013</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem page-content__section-subitem--average">
                                        <div class="page-content__section-item-title">
                                            <span>Год окончания обучения</span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <select
                                                        id=""
                                                        name=""
                                                        class="input-reset form__input form__input--select2 js-select2"
                                                        required
                                                >
                                                    <option value="0">2015</option>
                                                    <option value="1">2016</option>
                                                    <option value="2">2017</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Образовательное учреждение</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="РГУП"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Специальность</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="Налоговый юрист"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--average">
                                        <div class="page-content__section-item-title">
                                            <span>Год начала обучения</span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <select
                                                        id=""
                                                        name=""
                                                        class="input-reset form__input form__input--select2 js-select2"
                                                        required
                                                >
                                                    <option value="0">2011</option>
                                                    <option value="1">2012</option>
                                                    <option value="2">2013</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem page-content__section-subitem--average">
                                        <div class="page-content__section-item-title">
                                            <span>Год окончания обучения</span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <select
                                                        id=""
                                                        name=""
                                                        class="input-reset form__input form__input--select2 js-select2"
                                                        required
                                                >
                                                    <option value="0">2015</option>
                                                    <option value="1">2016</option>
                                                    <option value="2">2017</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn-reset btn btn--noframe btn--green">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#plus"></use>
                                        </svg>
                                        <span class="btn__text">Добавить образование</span>
                                    </button>
                                </div>
							</div>

							<div class="page-content__section">
								<div class="block-mb-md h4">Место работы</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Тип занятости</span>
                                    </div>
                                    <div class="form__field">
                                        <select
                                                id=""
                                                name=""
                                                class="input-reset form__input form__input--select2 js-select2"
                                                required
                                        >
                                            <option value="0">Трудоустроен</option>
                                            <option value="1">Трудоустроен 2</option>
                                            <option value="2">Трудоустроен 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Организация</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="Экологический центр 'Зеленый полумесяц'"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--full">
                                        <div class="page-content__section-item-title">
                                            <span>Должность</span>
                                        </div>
                                        <div class="form__field-wrapper">
                                            <div class="form__field">
                                                <input
                                                        id=""
                                                        class="input-reset form__input"
                                                        type="text"
                                                        name=""
                                                        value="Директор"
                                                        placeholder=""
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn-reset btn btn--noframe btn--green">
                                        <svg class="icon btn__icon">
                                            <use href="img/sprite.svg#plus"></use>
                                        </svg>
                                        <span class="btn__text">Добавить место работы</span>
                                    </button>
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