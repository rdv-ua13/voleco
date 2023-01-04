<div id="modalAsk" class="modal">
	<div class="modal-overlay"></div>
	<div class="modal-wrapper modal-transition">
		<span class="modal-close">
			<svg class="icon">
                <use href="img/sprite.svg#cross"></use>
            </svg>
		</span>
		<div class="modal-body">
			<div class="block-mb-md h3">Задать вопрос</div>
			<form id="formAsk" class="modal-form" action="" method="">
                <div class="form__field">
                    <label for="testModalInput1" class="form__label-for">
                        <span>Электронная почта <span class="required-star">*</span></span>
                    </label>
                    <input
                            id="testModalInput1"
                            class="input-reset form__input"
                            type="email"
                            name="email"
                            placeholder=""
                            required
                    >
                </div>
                <div class="form__field">
                    <label for="testModalInput2" class="form__label-for">
                        <span>Задать вопрос <span class="required-star">*</span></span>
                    </label>
                    <textarea
                            id=""
                            class="input-reset form__input form__input--textarea"
                            name=""
                            placeholder="Ваш вопрос"
                            required
                    ></textarea>
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
                    <button class="btn-reset btn btn--fill" type="submit">
                        <span class="btn__text">Отправить</span>
                    </button>
                </div>
			</form>
		</div>
	</div>
</div>