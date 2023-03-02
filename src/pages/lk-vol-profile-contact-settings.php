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
										<a href="lk-vol-profile-contact-settings.php#pageContentBody" class="page-content-tabs__link selected">
											<span class="page-content-tabs__link-content">Контакты</span>
											<span class="page-content-tabs__link-num"></span>
										</a>
									</div>
									<div class="swiper-slide page-content-tabs__nav-item notice">
										<a href="lk-vol-profile-about-settings.php#pageContentBody" class="page-content-tabs__link">
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
								<div class="block-mb-md h4">Контактная информация</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Телефон</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input isPhone"
                                                type="tel"
                                                name=""
                                                value="+7-923-010-71-94"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Волонтерская организация</span>
                                    </div>
                                    <div class="form__field">
                                        <input
                                                id=""
                                                class="input-reset form__input"
                                                type="text"
                                                name=""
                                                value="АССОЦИАЦИЯ ДОБРОВОЛЬЧЕСКИХ ЦЕНТРОВ СЕВЕРНОГО КАВКАЗА"
                                                placeholder=""
                                        >
                                    </div>
                                </div>
							</div>

							<div class="page-content__section">
								<div class="block-mb-md h4">Адрес</div>

                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--full">
                                        <div class="page-content__section-item-title">
                                            <span>Населенный пункт <span class="required-star">*</span></span>
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
                                            <select
                                                    id=""
                                                    name=""
                                                    class="input-reset form__input form__input--select2 js-select2"
                                                    required
                                            >
                                                <option value="0">Москва</option>
                                                <option value="1">Москва 2</option>
                                                <option value="2">Москва 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="page-content__section-subitem-option">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-11" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-11" class="custom-checkbox__label-for">Гражданин РФ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-content__section-item page-content__section-item-date">
                                    <div class="page-content__section-subitem page-content__section-subitem--full">
                                        <div class="page-content__section-item-title">
                                            <span>Адрес проживания</span>
                                        </div>
                                        <div class="form__field">
                                            <input
                                                    id=""
                                                    class="input-reset form__input"
                                                    type="text"
                                                    name=""
                                                    value="Респ Ингушетия, г Сунжа"
                                                    placeholder=""
                                            >
                                        </div>
                                    </div>
                                </div>
							</div>

							<div class="page-content__section">
								<div class="block-mb-md h4">Соцсети</div>

                                <div class="page-content__section-item">
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
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>