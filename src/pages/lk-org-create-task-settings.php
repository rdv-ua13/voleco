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
						<div class="h2">Создать новую задачу</div>
					</div>

					<div class="page-content__main">
						<form class="form form--profile-settings" action="">
							<div class="page-content__section">
								<div class="block-mb-md h4">Основная информация</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Функционал <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id1">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
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
											<option value="0">Административная деятельность</option>
											<option value="1">Административная деятельность 2</option>
											<option value="2">Административная деятельность 3</option>
										</select>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Задача <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id2">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id2">
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
											<option value="0">Волонтер регистрации</option>
											<option value="1">Волонтер регистрации 2</option>
											<option value="2">Волонтер регистрации 3</option>
										</select>
									</div>
								</div>
								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
										<span>Функционал волонтера <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id3">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id3">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
									</div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-15" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-15" class="custom-checkbox__label-for">Выдача бейджей / карт аккредитации, стартовых наборов / наборов участников</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-16" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-16" class="custom-checkbox__label-for">Выпуск аккредитационных карт / бейджей</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-17" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-17" class="custom-checkbox__label-for">Работа с базами данных, поиск данных, их верификация, внесение новых данных</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-18" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-18" class="custom-checkbox__label-for">Регистрация участников и персонала мероприятия</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-19" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-19" class="custom-checkbox__label-for">Фотографирование, изготовление аккредитационной карты</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray swal" type="button">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#plus"></use>
                                            </svg>
                                            <span class="btn__text">Добавить свое условие</span>
                                        </button>
                                    </div>
								</div>

								<div class="page-content__section-item">
									<div class="page-content__section-item-title">
                                        <span>Необходимое количество волонтеров <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id4">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id4">
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
											value="1"
											placeholder=""
										>
									</div>
									<div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-20" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-20" class="custom-checkbox__label-for">Неограниченное количество</label>
                                        </div>
									</div>
								</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Описание задачи <span class="required-star">*</span></span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id5">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
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
                                <div class="block-mb-md h4">Требования и условия к заявителю</div>

                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Предлагаемые условия</span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id6">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id6">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-21" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-21" class="custom-checkbox__label-for">Благодарности</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-22" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-22" class="custom-checkbox__label-for">Билеты в театр</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-23" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-23" class="custom-checkbox__label-for">Оплата питания</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <button class="btn-reset btn btn--noframe btn--green">
                                            <span class="btn__text">Еще условия</span>
                                        </button>
                                    </div>
                                    <div class="form__field">
                                        <button class="btn-reset btn btn--fill btn--mini btn--gray swal" type="button">
                                            <svg class="icon btn__icon">
                                                <use href="img/sprite.svg#plus"></use>
                                            </svg>
                                            <span class="btn__text">Добавить свое условие</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="page-content__section-item">
                                    <div class="page-content__section-item-title">
                                        <span>Требования к волонтеру</span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id7">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#tooltip"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id7">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-24" class="custom-checkbox__input" type="checkbox" checked>
                                            <label for="checkboxui-24" class="custom-checkbox__label-for">18+</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-25" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-25" class="custom-checkbox__label-for">Вакцинация от СOVID-19 или ПЦР-тест (для лиц старше 18-ти лет)</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-26" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-26" class="custom-checkbox__label-for">Водительские права</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-27" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-27" class="custom-checkbox__label-for">Гражданство РФ</label>
                                        </div>
                                    </div>
                                    <div class="form__field">
                                        <div class="custom-checkbox">
                                            <input id="checkboxui-28" class="custom-checkbox__input" type="checkbox">
                                            <label for="checkboxui-28" class="custom-checkbox__label-for">Медицинская книжка</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__section">
                                    <div class="block-mb-md h4">Поля заявки</div>

                                    <div class="page-content__section-item">
                                        <div class="form__field">
                                            <div class="custom-checkbox">
                                                <input id="checkboxui-29" class="custom-checkbox__input" type="checkbox" checked>
                                                <label for="checkboxui-29" class="custom-checkbox__label-for">Электронная почта</label>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <div class="custom-checkbox">
                                                <input id="checkboxui-30" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-30" class="custom-checkbox__label-for">ФИО</label>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <div class="custom-checkbox">
                                                <input id="checkboxui-31" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-31" class="custom-checkbox__label-for">Пол</label>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <div class="custom-checkbox">
                                                <input id="checkboxui-32" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-32" class="custom-checkbox__label-for">Телефон</label>
                                            </div>
                                        </div>
                                        <div class="form__field">
                                            <button class="btn-reset btn btn--noframe btn--green">
                                                <span class="btn__text">Еще варианты полей</span>
                                            </button>
                                        </div>
                                        <div class="form__field">
                                            <button class="btn-reset btn btn--fill btn--mini btn--gray swal" type="button">
                                                <svg class="icon btn__icon">
                                                    <use href="img/sprite.svg#plus"></use>
                                                </svg>
                                                <span class="btn__text">Добавить свое поле</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="page-content__section">
                                    <div class="page-content__section-item page-content__section-item-date">
                                        <div class="page-content__section-subitem page-content__section-subitem--average">
                                            <div class="page-content__section-item-title">
                                                <span>Даты проведения <span class="required-star">*</span></span>
                                                <span class="tooltip">
                                                    <span class="btn-reset tooltip__btn" aria-describedby="id8">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#tooltip"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tooltip__txt" role="tooltip" id="id8">
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
                                                    <span class="btn-reset tooltip__btn" aria-describedby="id9">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#tooltip"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tooltip__txt" role="tooltip" id="id9">
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
                                                    <span class="btn-reset tooltip__btn" aria-describedby="id10">
                                                        <svg class="icon">
                                                            <use href="img/sprite.svg#tooltip"></use>
                                                        </svg>
                                                    </span>
                                                    <span class="tooltip__txt" role="tooltip" id="id10">
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
                                </div>

                                <div class="page-content__section">
                                    <div class="page-content__section-item">
                                        <div class="page-content__section-item-title">
                                            <span>
                                                <span class="custom-checkbox">
                                                    <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox" checked>
                                                    <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                                </span>
                                                Указать период отбора
                                            </span>
                                            <span class="tooltip">
                                                <span class="btn-reset tooltip__btn" aria-describedby="id11">
                                                    <svg class="icon">
                                                        <use href="img/sprite.svg#tooltip"></use>
                                                    </svg>
                                                </span>
                                                <span class="tooltip__txt" role="tooltip" id="id11">
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
                            </div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>