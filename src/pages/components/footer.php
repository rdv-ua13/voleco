    </main>

    <footer class="footer">
		<? if(!strpos($_SERVER["REQUEST_URI"], "registration.php") && !strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
            <div class="footer__head">
                <div class="container">
                    <div class="row">
                        <div class="col col-2">
                            <ul class="list-reset footer__head-list">
                                <li><a href="javascript:;">Экодела</a></li>
                                <li><a href="javascript:;">Организаторы</a></li>
                                <li><a href="javascript:;">Аналитика</a></li>
                            </ul>
                        </div>
                        <div class="col col-2">
                            <ul class="list-reset footer__head-list">
                                <li><a href="javascript:;">О Фонде</a></li>
                                <li><a href="javascript:;">Контакты</a></li>
                                <li><a href="javascript:;">Реквизиты</a></li>
                            </ul>
                        </div>
                        <div class="col col-3">
                            <div class="footer__head-contacts">
                                <div class="footer__head-contacts-item">
                                    <div class="footer__head-title">Мы в социальных сетях</div>
                                    <ul class="list-reset social">
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--vk"
                                                    aria-label="Наша страничка во Вконтакте"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#vk"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--ok"
                                                    aria-label="Наша страничка в Одноклассниках"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#ok"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a
                                                    href="javascript:;"
                                                    target="_blank"
                                                    class="social__link social__link--fb"
                                                    aria-label="Наша страничка в Фэйсбук"
                                            >
                                                <svg class="icon social__icon">
                                                    <use href="img/sprite.svg#fb"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer__head-contacts-item">
                                    <div class="footer__head-title">Почта для связи с командой</div>
                                    <a href="javascript:;" class="link link--green footer__head-contacts-link">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#email"></use>
                                        </svg>
                                        <span>info@voleco.ru</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div class="footer__head-subscribe">
                                <div class="footer__head-title">Почта для связи с командой</div>
                                <form id="" class="form-subscribe" method="" action="javascript:;">
                                    <div class="form-subscribe__field">
                                        <input
                                                class="input-reset form-subscribe__input"
                                                type="text"
                                                name="Подписаться"
                                                placeholder="Введите электронную почту"
                                        >
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Подписаться</span>
                                        </button>
                                    </div>
                                    <div class="form-subscribe__field">
                                        <div class="custom-checkbox">
                                            <input class="custom-checkbox__input" type="checkbox" checked>
                                            <div class="custom-checkbox__agree">
                                                <span>Соглашаюсь на <a class="link link--underline" href="javascript:;">обработку моих персональных данных</a>, с <a class="link link--underline" href="javascript:;">правилами пользования сайтом</a> и принимаю <a class="link link--underline" href="javascript:;">Пользовательское соглашение</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? endif; ?>
        <div class="footer__bottom <? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>footer__bottom-authreg<? endif; ?>">
            <div class="container">
                <ul class="list-reset footer__bottom-list">
                    <li><?= date('Y'); ?> &#169; <a href="javascript:;">VOLECO.RU</a></li>
					<? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
                        <li><a href="javascript:;">Обработка персональных данных</a></li>
                        <li><a href="javascript:;">Правила использования сайта</a></li>
					<? else : ?>
                        <li><a href="javascript:;">Политика конфиденциальности</a></li>
                        <li><a href="javascript:;">Публичная оферта о добровольном пожертвовании</a></li>
                        <li><a href="javascript:;">Правила использования сайта</a></li>
                        <li>produced by <a href="javascript:;">STICKYHANDS</a></li>
					<? endif; ?>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>