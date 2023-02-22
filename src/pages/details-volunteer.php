<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="container">
		<div class="page-content">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-details-vol.php"); ?>
			</div>

			<div class="page-content__body">
				<div class="page-content__container page-content__container--profile">
					<div class="block-mb-md page-content-tabs-container page-content__tabs-container">
						<div class="page-content-tabs-wrapper">
							<div class="page-content-tabs swiper js-page-content-tabs">
								<div class="page-content-tabs__nav swiper-wrapper">
									<? $arMenu = array (
										"details-volunteer.php" => "О волонтере",
										"details-volunteer-exp.php" => "Опыт волонтерства",
										"details-volunteer-feedback.php" => "Отзывы",
									);
									foreach ($arMenu as $arItem => $value) : ?>
										<div class="swiper-slide page-content-tabs__nav-item notice">
											<a
												href="<?= $arItem ?>"
												class="page-content-tabs__link<? if(strpos($_SERVER["REQUEST_URI"], $arItem)) : ?> selected<? endif; ?>"
											>
												<span class="page-content-tabs__link-content"><?= $value ?></span>
												<span class="page-content-tabs__link-num">18</span>
											</a>
										</div>
									<? endforeach; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="page-content__main page-content__main--profile">
                        <div class="page-content__descr">
                            <div class="page-content__descr-item">
                                <div class="page-content-descr-heading">
                                    <div class="h4">Личная информация</div>
                                </div>
                                <div class="page-content__descr-content">
                                    <div class="page-content__spoiler js-spoiler" data-collapsed-height="88">
                                        <div class="page-content__spoiler-text">
                                            <p>Толстикова А.В. свободное от учёбы время посвящает общественной деятельности. Выступала в роли организатора творческого фестиваля студенческих отрядов Сибирского федерального округа «Голос отряда» и Х Юбилейного слёта студенческих отрядов Кемеровской области. Толстикова А.В. являлась волонтёром в таких мероприятиях как: «Шахтерская Слава», «Молодая семья Кузбасса», «Рождество для всех», «Зажги свечу памяти», «Ты не один», «Георгиевская ленточка», «День Победы», «Я донор», кросс Goodline-2016 , «Лыжня России», национальный чемпионат профессионального мастерства среди людей с инвалидностью «Абилимпикс», первенство России по дзюдо и т.д. В 2016 г. посетила федеральную смену «Волонтеры России» на ТИМ «Бирюса» и представила проект на конкурсе «Росмолодежь». В 2017 году предложила и воплотила идею о создании регионального студенческого штаба Универсиады в Кузбассе.</p>
                                            <p>Прошла обучение «Технология рекрутинга волонтёров для участия в международных спортивных событиях» и получила в Сибирском Федеральном университете сертификат повышения квалификации преподавателей по программе подготовки волонтёров. Летом 2017 прошла отбор для волонтеров на Всемирный фестиваль молодёжи и студентов в г.Сочи. В 2017 году Алина Вадимовна прошла отбор и стала волонтёром (позиция сервис для зрителей на объекте стадион Спартак) на «Кубке Конфедераций FIFA-2017» в г.Москва. В июне-июле 2018 года стала волонтером (позиция сервис для зрителей на стадионах Спартак и Лужники) «Чемпионата мира по футболу FIFA 2018 года в России» в г.Москва. В марте 2019 года Толстикова А.В. руководила делегацией волонтёр регионального штаба Универсиады 2019 КемГУ на XXIX Всемирной зимней Универсиаде 2019 в г. Красноярске.</p>
                                            <p>Занимала позицию шапрон (церемонии награждения: работа со спортсменами-победителями) на объекте фан-парк Бобровый лог.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__descr-item">
                                <div class="page-content-descr-heading">
                                    <div class="h4">Направления</div>
                                </div>
                                <div class="page-content__descr-content">
                                    <div class="tag-bar tag-bar--slider swiper js-tag-bar-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                            <span class="tag">
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--text6-color);
                                                        background-color: var(--text8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--text6-color);">
                                                        <use href="img/sprite.svg#tag-all"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--text6-color);">все</span>
                                                </span>
                                            </span>
                                            </div>
                                            <div class="swiper-slide">
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
                                            </div>
                                            <div class="swiper-slide">
                                            <span class="tag">
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
                                            </span>
                                            </div>
                                            <div class="swiper-slide">
                                            <span class="tag">
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--accent-ceruleanblue1-color);
                                                        background-color: var(--accent-ceruleanblue8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--accent-ceruleanblue1-color);">
                                                        <use href="img/sprite.svg#tag-building"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--accent-ceruleanblue1-color);">Урбанизация</span>
                                                </span>
                                            </span>
                                            </div>
                                            <div class="swiper-slide">
                                            <span class="tag">
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--error4-color);
                                                        background-color: var(--error9-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--error4-color);">
                                                        <use href="img/sprite.svg#tag-alarm"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--error4-color);">ЧС</span>
                                                </span>
                                            </span>
                                            </div>
                                            <div class="swiper-slide">
                                            <span class="tag">
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--warning5-color);
                                                        background-color: var(--warning8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--warning3-color);">
                                                        <use href="img/sprite.svg#tag-pets"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--warning3-color);">Животные</span>
                                                </span>
                                            </span>
                                            </div>
                                            <div class="swiper-slide">
                                            <span class="tag">
                                                <span
                                                        class="tag__content-bg"
                                                        style="
                                                        border-color: var(--info5-color);
                                                        background-color: var(--info8-color);"
                                                ></span>
                                                <span class="tag__content">
                                                    <svg class="icon tag__content-icon" style="fill: var(--info3-color);">
                                                        <use href="img/sprite.svg#tag-science"></use>
                                                    </svg>
                                                    <span class="tag__content-text" style="color: var(--info3-color);">Наука</span>
                                                </span>
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-content__descr-item">
                                <div class="page-content-descr-heading">
                                    <div class="h4">Языки</div>
                                </div>
                                <div class="page-content__descr-content">
                                    <div class="page-content__spoiler js-spoiler" data-collapsed-height="88">
                                        <div class="page-content__spoiler-text">
                                            <div>Русский (родной)</div>
                                            <div>Английский (А2 — элементарный)</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
					<div class="page-content__sidebar">
						<div class="page-content__sidebar-item">
							<div class="page-content-descr-heading">
								<div class="h4">Контакты</div>
							</div>
							<div class="page-content__sidebar-contacts">
							<span class="page-content__sidebar-contacts-item">
								<svg class="icon">
									<use href="img/sprite.svg#map-pin"></use>
								</svg>
								<span class="page-content__sidebar-contacts-text">Москва, пер. Тетеринский, 18, стр. 2</span>
							</span>
								<span class="page-content__sidebar-contacts-item">
								<svg class="icon">
									<use href="img/sprite.svg#phone"></use>
								</svg>
								<span class="page-content__sidebar-contacts-text">+7 495 796-03-06</span>
							</span>
								<span class="page-content__sidebar-contacts-item">
								<svg class="icon">
									<use href="img/sprite.svg#email"></use>
								</svg>
								<span class="page-content__sidebar-contacts-text">mih.konstantin@gmail.com</span>
							</span>
								<span class="page-content__sidebar-contacts-item">
								<svg class="icon">
									<use href="img/sprite.svg#link"></use>
								</svg>
								<span class="page-content__sidebar-contacts-text">http://avcrf.ru</span>
							</span>
							</div>
							<div class="page-content__sidebar-soc">
								<a href="javascript:;" class="page-content__sidebar-soc-item">
									<svg class="icon">
										<use href="img/sprite.svg#media-vk"></use>
									</svg>
								</a>
								<a href="javascript:;" class="page-content__sidebar-soc-item">
									<svg class="icon">
										<use href="img/sprite.svg#media-ok"></use>
									</svg>
								</a>
								<a href="javascript:;" class="page-content__sidebar-soc-item">
									<svg class="icon">
										<use href="img/sprite.svg#media-insta"></use>
									</svg>
								</a>
								<a href="javascript:;" class="page-content__sidebar-soc-item">
									<svg class="icon">
										<use href="img/sprite.svg#media-telegram"></use>
									</svg>
								</a>
							</div>
						</div>
						<div class="page-content__sidebar-item">
							<div class="page-content-descr-heading">
								<div class="h4">Рейтинг и отзывы</div>
							</div>
							<div class="page-content__sidebar-rate">
								<div class="page-content__intro-bottom">
									<div class="page-content__intro-rate">
										<div class="page-content__intro-rate-value">4.8</div>
										<div class="page-content__intro-rate-stars">
											<svg class="icon">
												<use href="img/sprite.svg#star"></use>
											</svg>
											<svg class="icon">
												<use href="img/sprite.svg#star"></use>
											</svg>
											<svg class="icon">
												<use href="img/sprite.svg#star"></use>
											</svg>
											<svg class="icon">
												<use href="img/sprite.svg#star"></use>
											</svg>
											<svg class="icon">
												<use href="img/sprite.svg#star"></use>
											</svg>
										</div>
									</div>
									<div class="page-content__intro-reviews">
										<a href="javascript:;" class="btn-reset btn btn--noframe btn--link btn--tdu-dashed">
											<span class="btn__text">193 отзыва</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="page-content__sidebar-item">
							<div class="page-content-descr-heading">
								<div class="h4">Аналитика организатора</div>
							</div>
							<div class="page-content__sidebar-stats">
								<div class="page-content__sidebar-stats-item">
									<span class="page-content__sidebar-stats-text">Экодела</span>
									<span class="page-content__sidebar-stats-value">25</span>
								</div>
								<div class="page-content__sidebar-stats-item">
									<span class="page-content__sidebar-stats-text">Часы</span>
									<span class="page-content__sidebar-stats-value">4 383</span>
								</div>
								<div class="page-content__sidebar-stats-item">
									<span class="page-content__sidebar-stats-text">Верифицированные часы</span>
									<span class="page-content__sidebar-stats-value">4 337</span>
								</div>
							</div>
                            <div class="page-content__sidebar-stats-btn">
                                <button class="btn-reset btn btn--midi">
                                    <svg class="icon btn__icon">
                                        <use href="img/sprite.svg#notebook"></use>
                                    </svg>
                                    <span class="btn__text">Книжка волонтера</span>
                                </button>
                            </div>
						</div>
						<button class="btn-reset btn btn--noframe btn--full text5-color">
							<span class="btn__text">Экодела</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>