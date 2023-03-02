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
										<a href="lk-vol-profile-contact-settings.php#pageContentBody" class="page-content-tabs__link">
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
										<a href="lk-vol-profile-additional-settings.php#pageContentBody" class="page-content-tabs__link selected">
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
								<div class="block-mb-md h4">Дополнительная информация</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Размер футболки</span>
									</div>
									<div class="form__field">
										<select
											id=""
											name=""
											class="input-reset form__input form__input--select2 js-select2"
											required
										>
											<option value="0">M</option>
											<option value="1">L</option>
											<option value="2">XL</option>
										</select>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-12" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-12" class="custom-checkbox__label-for">Есть медицинская книжка</label>
                                        </div>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-13" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-13" class="custom-checkbox__label-for">Есть водительские права</label>
                                        </div>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>ИНН</span>
									</div>
									<div class="form__field">
										<input
											id=""
											class="input-reset form__input"
											type="text"
											name=""
											value="060390654029"
											placeholder=""
										>
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