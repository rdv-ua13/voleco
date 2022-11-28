<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/' . 'components/header.php'); ?>

<div class="authreg authreg--reg">
	<div class="authreg__header">
		<div class="authreg__title h2">Создать аккаунт</div>
		<div class="authreg__subtitle">
			<span>Уже есть аккаунт?</span>
			<a href="javascript:;" class="link link--green">Войти</a>
		</div>
	</div>
	<div class="authreg__body">
        <div class="tabs" data-tabs="tab">
            <ul class="list-reset tabs__nav">
                <li class="tabs__nav-item">
                    <button class="btn-reset tabs__nav-btn" type="button">Эковолонтер</button>
                </li>
                <li class="tabs__nav-item">
                    <button class="btn-reset tabs__nav-btn" type="button">Организатор</button>
                </li>
            </ul>
            <div class="tabs__content">
                <div class="tabs__panel">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="regFormVolunteerEmail" class="form__label-for">
                                Электронная почта <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormVolunteerEmail"
                                    class="input-reset form__input"
                                    type="email"
                                    name="regFormVolunteerEmail"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-email"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field">
                            <label for="regFormVolunteerPassword" class="form__label-for">
                                Пароль <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormVolunteerPassword"
                                    class="input-reset form__input"
                                    type="password"
                                    name="regFormVolunteerPassword"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-password"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field">
                            <label for="regFormVolunteerRepeatPassword" class="form__label-for">
                                Повторите пароль <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormVolunteerRepeatPassword"
                                    class="input-reset form__input"
                                    type="password"
                                    name="regFormVolunteerRepeatPassword"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-password"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field  form__field-agree">
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                                <div class="custom-checkbox__agree">
                                    <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="form__field form__field-btn form__field-btn--fullwidth">
                            <button class="btn-reset btn btn--fill">
                                <span class="btn__text">Зарегистрироваться</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="tabs__panel">
                    <form id="" class="form authreg-form" method="" action="javascript:;">
                        <div class="form__field">
                            <label for="regFormOrganizerCompany" class="form__label-for">
                                Название организации <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormOrganizerCompany"
                                    class="input-reset form__input"
                                    type="text"
                                    name="regFormOrganizerCompany"
                                    placeholder=""
                                    required
                            >
                        </div>
                        <div class="form__field">
                            <label for="regFormOrganizerEmail" class="form__label-for">
                                Электронная почта <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormOrganizerEmail"
                                    class="input-reset form__input"
                                    type="email"
                                    name="regFormOrganizerEmail"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-email"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field">
                            <label for="regFormOrganizerPassword" class="form__label-for">
                                Пароль <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormOrganizerPassword"
                                    class="input-reset form__input"
                                    type="password"
                                    name="regFormOrganizerPassword"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-password"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field">
                            <label for="regFormOrganizerRepeatPassword" class="form__label-for">
                                Повторите пароль <span class="required-star">*</span>
                            </label>
                            <input
                                    id="regFormOrganizerRepeatPassword"
                                    class="input-reset form__input"
                                    type="password"
                                    name="regFormOrganizerRepeatPassword"
                                    placeholder=""
                                    required
                            >
                            <div class="form__btn form__btn--disabled">
                                <svg class="icon">
                                    <use href="img/sprite.svg#input-password"></use>
                                </svg>
                            </div>
                        </div>
                        <div class="form__field  form__field-agree">
                            <div class="custom-checkbox">
                                <input class="custom-checkbox__input" type="checkbox" checked>
                                <div class="custom-checkbox__agree">
                                    <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="form__field form__field-btn form__field-btn--fullwidth">
                            <button class="btn-reset btn btn--fill">
                                <span class="btn__text">Зарегистрироваться</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	<div class="authreg__footer">
		<div class="authreg__footer-divider"><span>или</span></div>
		<ul class="list-reset authreg-social social" title="">
		    <li class="authreg-social__item">
		        <a
		                href="javascript:;"
		                target="_blank"
		                class="authreg-social__link authreg-social__link--vk"
		                aria-label="Войдите в приложение с аккаунтом Вконтакте"
		        >
                    <svg class="icon">
                        <use href="img/sprite.svg#authreg-vk"></use>
                    </svg>
                </a>
		    </li>
		    <li class="authreg-social__item">
		        <a
		                href="javascript:;"
		                target="_blank"
		                class="authreg-social__link authreg-social__link--fb"
		                aria-label="Войдите в приложение с аккаунтом Facebook"
		        >
                    <svg class="icon">
                        <use href="img/sprite.svg#authreg-fb"></use>
                    </svg>
                </a>
		    </li>
		    <li class="authreg-social__item">
		        <a
		                href="javascript:;"
		                target="_blank"
		                class="authreg-social__link authreg-social__link--google"
		                aria-label="Войдите в приложение с аккаунтом Google"
		        >
                    <svg class="icon">
                        <use href="img/sprite.svg#authreg-google"></use>
                    </svg>
                </a>
		    </li>
		    <li class="authreg-social__item">
		        <a
		                href="javascript:;"
		                target="_blank"
		                class="authreg-social__link authreg-social__link--apple"
		                aria-label="Войдите в приложение с аккаунтом Apple"
		        >
                    <svg class="icon">
                        <use href="img/sprite.svg#authreg-apple"></use>
                    </svg>
                </a>
		    </li>
		</ul>
	</div>
</div>

<!-- delete in the end -->
<hr>
<!-- /delete in the end -->

<!-- Volunteer -->
<div class="authreg authreg--reg">
    <div class="authreg__header">
        <div class="authreg__title h2">Давайте<br>познакомимся?</div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form" method="" action="javascript:;">
            <div class="form__field">
                <label for="regFormDataVolunteerName" class="form__label-for">
                    Ваше имя <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataVolunteerName"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataVolunteerName"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataVolunteerSurname" class="form__label-for">
                    Фамилия <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataVolunteerSurname"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataVolunteerSurname"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataVolunteerPhone" class="form__label-for">
                    Номер телефона <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataVolunteerPhone"
                        class="input-reset form__input isPhone"
                        type="tel"
                        name="regFormDataVolunteerPhone"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataVolunteerAbout" class="form__label-for">Откуда о нас узнали?</label>
                <input
                        id="regFormDataVolunteerAbout"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataVolunteerAbout"
                        placeholder="VOLECO ID"
                >
            </div>
            <div class="form__field  form__field-agree">
                <div class="custom-checkbox">
                    <input class="custom-checkbox__input" type="checkbox" checked>
                    <div class="custom-checkbox__agree">
                        <span>Соглашаюсь получать рассылку с информацией о самых интересных событиях</span>
                    </div>
                </div>
            </div>
            <div class="form__field form__field-btn form__field-btn--fullwidth">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Продолжить</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- Organizer -->
<div class="authreg authreg--reg">
    <div class="authreg__header">
        <div class="authreg__title h2">Давайте<br>познакомимся?</div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form" method="" action="javascript:;">
            <div class="form__field">
                <label for="regFormDataOrganizerName" class="form__label-for">
                    Ваше имя <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataOrganizerName"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataOrganizerName"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataOrganizerSurname" class="form__label-for">
                    Фамилия <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataOrganizerSurname"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataOrganizerSurname"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataOrganizerPhone" class="form__label-for">
                    Номер телефона <span class="required-star">*</span>
                </label>
                <input
                        id="regFormDataOrganizerPhone"
                        class="input-reset form__input isPhone"
                        type="tel"
                        name="regFormDataOrganizerPhone"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field">
                <label for="regFormDataOrganizerLocality" class="form__label-for">
                    Населенный пункт <span class="required-star">*</span>
                    <span class="tooltip">
                        <button class="btn-reset tooltip__btn" aria-describedby="id1">
                            <svg class="icon">
                                <use href="img/sprite.svg#tooltip"></use>
                            </svg>
                        </button>
                        <span class="tooltip__txt" role="tooltip" id="id1">
                            <span class="visually-hidden">Тултип: </span>
                            Текст
                        </span>
                    </span>
                </label>
                <input
                        id="regFormDataOrganizerLocality"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataOrganizerLocality"
                        placeholder=""
                >
            </div>
            <div class="form__field">
                <label for="regFormDataOrganizerAbout" class="form__label-for">Откуда о нас узнали?</label>
                <input
                        id="regFormDataOrganizerAbout"
                        class="input-reset form__input"
                        type="text"
                        name="regFormDataOrganizerAbout"
                        placeholder="VOLECO ID"
                >
            </div>
            <div class="form__field  form__field-agree">
                <div class="custom-checkbox">
                    <input class="custom-checkbox__input" type="checkbox" checked>
                    <div class="custom-checkbox__agree">
                        <span>Соглашаюсь получать рассылку с информацией о самых интересных событиях</span>
                    </div>
                </div>
            </div>
            <div class="form__field form__field-btn form__field-btn--fullwidth">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Продолжить</span>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- delete in the end -->
<hr>
<!-- /delete in the end -->

<!-- Password recovery -->
<!-- step 1 -->
<div class="authreg authreg--recovery">
    <div class="authreg__header">
        <div class="authreg__title h2">Восстановление пароля</div>
        <div class="authreg__subtitle">
            <span>Введите адрес электронной почты, связанный с вашим аккаунтом, и мы вышлем вам ссылку для изменения пароля</span>
        </div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form" method="" action="javascript:;">
            <div class="form__field">
                <label for="recoveryFormLogin" class="form__label-for">Электронная почта или номер телефона</label>
                <input
                        id="recoveryFormLogin"
                        class="input-reset form__input"
                        type="text"
                        name="recoveryFormLogin"
                        placeholder=""
                        required
                >
            </div>
            <div class="form__field form__field-btn">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Сбросить пароль</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- step 2 -->
<div class="authreg authreg--recovery">
    <div class="authreg__header">
        <div class="authreg__title h2">Введите код из письма</div>
        <div class="authreg__subtitle">
            <span>На ваш электронный адрес отправлен код для восстановления пароля. Введите его в поле.</span>
        </div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form authreg-form-recovery" method="" action="javascript:;">
            <div class="form__field form__field-validation-nums">
                <input
                        id="recoveryFormValidationCode-1"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
                <input
                        id="recoveryFormValidationCode-2"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
                <input
                        id="recoveryFormValidationCode-3"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
                <input
                        id="recoveryFormValidationCode-4"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
                <input
                        id="recoveryFormValidationCode-5"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
                <input
                        id="recoveryFormValidationCode-6"
                        class="input-reset form__input js-forminput-recovery-num"
                        type="number"
                        pattern="[0-9]*"
                        inputtype="numeric"
                        autocomplete="one-time-code"
                        name=""
                        required
                >
            </div>
            <div class="form__field form__field-btn">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Продолжить</span>
                </button>
            </div>
        </form>
    </div>
</div>
<!-- step 3 -->
<div class="authreg authreg--recovery">
    <div class="authreg__header">
        <div class="authreg__title h2">Задайте новый пароль</div>
    </div>
    <div class="authreg__body">
        <form id="" class="form authreg-form" method="" action="javascript:;">
            <div class="form__field">
                <label for="recoveryFormPasswordNew" class="form__label-for">Новый пароль</label>
                <input
                        id="recoveryFormPasswordNew"
                        class="input-reset form__input"
                        type="password"
                        name="recoveryFormPasswordNew"
                        placeholder=""
                        required
                >
                <div class="form__btn form__btn--disabled">
                    <svg class="icon">
                        <use href="img/sprite.svg#input-password"></use>
                    </svg>
                </div>
            </div>
            <div class="form__field">
                <label for="recoveryFormRepeatPasswordNew" class="form__label-for">Повторите пароль</label>
                <input
                        id="recoveryFormRepeatPasswordNew"
                        class="input-reset form__input"
                        type="password"
                        name="recoveryFormRepeatPasswordNew"
                        placeholder=""
                        required
                >
                <div class="form__btn form__btn--disabled">
                    <svg class="icon">
                        <use href="img/sprite.svg#input-password"></use>
                    </svg>
                </div>
            </div>
            <div class="form__field form__field-btn">
                <button class="btn-reset btn btn--fill">
                    <span class="btn__text">Сохранить пароль</span>
                </button>
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . '/build/' . 'components/footer.php'); ?>
