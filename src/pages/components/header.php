<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>TITLE</title>

    <link rel="preload" href="fonts/stolzl_regular.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_book.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_medium.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/stolzl_bold.otf" as="font" type="font/otf" crossorigin>
    <link rel="preload" href="fonts/Lato-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-ExtraBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Lato-Black.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VelaSans-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/VelaSans-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/vendor.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<? if(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
<body class="bgc-white">
<? elseif(strpos($_SERVER["REQUEST_URI"], "lk-org-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-project-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-ecodelo-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-task-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-org-create-petition-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-contact-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-about-settings.php")
    || strpos($_SERVER["REQUEST_URI"], "lk-vol-profile-additional-settings.php")) : ?>
<body class="has-settings-bar">
<? else : ?>
<body>
<? endif; ?>
    <? if(strpos($_SERVER["REQUEST_URI"], "organizer.php")) : ?>
    <header class="header header--org fixed-block">
    <? elseif(strpos($_SERVER["REQUEST_URI"], "registration.php") || strpos($_SERVER["REQUEST_URI"], "auth.php") || strpos($_SERVER["REQUEST_URI"], "password-recovery.php")) : ?>
    <header class="header header--authreg fixed-block">
    <? else : ?>
    <header class="header fixed-block">
    <? endif; ?>
        <div class="container header__container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                        loading="lazy"
                        src="img/logo.svg"
                        class="image logo-image-full"
                        width="185"
                        height="52"
                        alt="Логотип Волонтёры экологи"
                    >
                    <img
                        loading="lazy"
                        src="img/logo-cut.svg"
                        class="image logo-image-cut"
                        width="36"
                        height="42"
                        alt="Логотип Волонтёры экологи"
                    >
                </a>
            </div>

			<? if(!strpos($_SERVER["REQUEST_URI"], "registration.php") && !strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
				<? if(strpos($_SERVER["REQUEST_URI"], "organizer.php")) : ?>
                    <div class="header-menu-organizer">
                        <ul class="list-reset header-menu-organizer__list">
                            <li><a href="javascript:;" class="link">Экодела</a></li>
                            <li><a href="javascript:;" class="link">Проекты</a></li>
                            <li><a href="javascript:;" class="link">Эковолонтёры</a></li>
                            <li><a href="javascript:;" class="link">Аналитика</a></li>
                        </ul>
                    </div>

                    <div class="header-menu-organizer-mobile">
                        <button
                                class="burger js-burger"
                                aria-label="Открыть меню"
                                aria-expanded="false"
                                data-burger
                                data-overlay
                        >
                            <svg class="icon burger__icon">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                            <span class="burger__text">Меню</span>
                        </button>
                    </div>
				<? else : ?>
                    <div class="header-menu">
                        <button
                                class="burger js-burger"
                                aria-label="Открыть меню"
                                aria-expanded="false"
                                data-burger
                                data-overlay
                        >
                            <svg class="icon burger__icon">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                            <span class="burger__text">Меню</span>
                        </button>
                    </div>
                    <div class="header-organizer">
                        <a class="link link--green flex" href="javascript:;">Организаторам</a>
                    </div>
				<? endif; ?>
				<? if(!strpos($_SERVER["REQUEST_URI"], "organizer.php")) : ?>
                    <div class="header-search">
                        <form id="" class="form" method="" action="javascript:;">
                            <div class="form__field">
                                <input
                                        class="input-reset form__input"
                                        type="search"
                                        name="Поиск"
                                        placeholder="Что вы хотите найти?"
                                >
                                <button class="btn-reset form__btn">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#search"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
				<? endif; ?>
				<? // todo: отобразить состояние авториззованного пользователя - раскомментировать ".header-actions--current-user" ?>
                <div class="header-actions<?/* header-actions--current-user*/?>">
                    <div class="header-actions__item header-actions-mobile">
                        <button class="btn-reset btn btn--noframe header-actions-mobile__dropdown js-header-actions-mobile-dropdown" data-overlay>
                            <svg class="icon btn__icon">
                                <use href="img/sprite.svg#user"></use>
                            </svg>
                        </button>
                    </div>

                    <div class="header-actions__item header-actions-no-auth">
                        <div class="header-actions-no-auth__item">
                            <button class="btn-reset btn btn--noframe header-actions-no-auth__entry">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#user"></use>
                                </svg>
                                <span class="btn__text">Войти</span>
                            </button>
                        </div>
                        <div class="header-actions-no-auth__item">
                            <button class="btn-reset btn">
                                <span class="btn__text">Зарегистрироваться</span>
                            </button>
                        </div>
                    </div>

                    <div class="header-actions__item header-actions-current-user">
                        <div class="current-user">
                            <span class="current-user__menu js-current-user-menu">
                                <picture class="current-user__pic">
                                    <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                    <img
                                            loading="lazy"
                                            src="img/card-photo-volunteer.png"
                                            class="image"
                                            width="42"
                                            height="42"
                                            alt="User"
                                    >
                                </picture>
                                <span class="current-user__dropdown">
                                    <span class="current-user__dropdown-header">
                                        <span class="current-user__dropdown-header-title">Ассоциация волонтерских центров</span>
                                    </span>
                                </span>
                                <span class="current-user__dropdown-menu">
                                    <span class="current-user__dropdown-menu-item">
                                        <span class="current-user__dropdown-menu-user">
                                            <picture class="current-user__pic">
                                                <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-photo-volunteer.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="User"
                                                >
                                            </picture>
                                            <span class="current-user__dropdown-menu-user-header">
                                                <span class="current-user__dropdown-menu-user-title">
                                                    Алексеев Дмитрий Олегович
                                                </span>
                                            </span>
                                        </span>
                                        <span class="current-user__dropdown-menu-user">
                                            <picture class="current-user__pic">
                                                <source srcset="img/card-projects-org.webp" type="image/webp">
                                                <img
                                                        loading="lazy"
                                                        src="img/card-projects-org.png"
                                                        class="image"
                                                        width="42"
                                                        height="42"
                                                        alt="User"
                                                >
                                            </picture>
                                            <span class="current-user__dropdown-menu-user-header">
                                                <span class="current-user__dropdown-menu-user-title">
                                                    Ассоциация волонтерских центров
                                                </span>
                                                <span class="current-user__dropdown-menu-user-subtitle">
                                                    Организация
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="current-user__dropdown-menu-item">
                                        <ul class="list-reset">
                                            <li><a href="javascript:;" class="link">Стать организатором</a></li>
                                            <li><a href="javascript:;" class="link">Настройки профиля</a></li>
                                            <li><a href="javascript:;" class="link">Выйти</a></li>
                                        </ul>
                                    </span>
                                </span>
                            </span>
                            <span class="current-user__notice">
                                <button class="btn-reset current-user__notice-btn notice">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#mail"></use>
                                    </svg>
                                    <span class="current-user__notice-btn-num">3</span>
                                </button>
                                <button class="btn-reset current-user__notice-btn notice">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#bell"></use>
                                    </svg>
                                    <span class="current-user__notice-btn-num">24</span>
                                </button>
                            </span>
                        </div>
                    </div>

                </div>
			<? else : ?>
                <div class="header-actions header-actions-authreg">
					<? if(strpos($_SERVER["REQUEST_URI"], "registration.php")) : ?>
                        <button class="btn-reset btn">
                            <span class="btn__text">Войти</span>
                        </button>
					<? elseif(strpos($_SERVER["REQUEST_URI"], "auth.php")) : ?>
                        <button class="btn-reset btn">
                            <span class="btn__text desktop-only">Зарегистрироваться</span>
                            <span class="btn__text mobile-only">Регистрация</span>
                        </button>
                    <? endif; ?>
                </div>
			<? endif; ?>
        </div>
    </header>

    <div class="burger-menu" data-menu>
        <div class="burger-menu__close" data-menu-close></div>
        <div class="header-search">
            <form id="" class="form" method="" action="javascript:;">
                <div class="form__field">
                    <input
                            class="input-reset form__input"
                            type="search"
                            name="Поиск"
                            placeholder="Что вы хотите найти?"
                    >
                    <button class="btn-reset form__btn">
                        <svg class="icon">
                            <use href="img/sprite.svg#search"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        <ul class="list-reset burger-menu__list">
            <li>
                <a href="javascript:;" class="link">Экодела</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Петиции</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Сбор средств</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Проекты</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Эковолонтеры</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Организаторы</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Аналитика</a>
            </li>
            <li>
                <a href="javascript:;" class="link">Новости и медиа</a>
            </li>
            <li class="burger-menu__item-org">
                <a href="javascript:;" class="link link--green">Организаторам</a>
            </li>
        </ul>
        <div class="burger-menu__footer">
            <div class="burger-menu__contacts">
                <div class="burger-menu__contacts-item">
                    <div class="burger-menu__contacts-title">Консультационный центр</div>
                    <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                </div>
                <div class="burger-menu__contacts-item">
                    <div class="burger-menu__contacts-title">Поддержка</div>
                    <a href="tel:+88007122811" class="link">8 (800) 712-28-11</a>
                </div>
            </div>
            <ul class="list-reset social social--light burger-menu__social">
                <li class="social__item">
                    <a
                            href="javascript:;"
                            target="_blank"
                            class="social__link social__link--vk"
                            aria-label="Наша страничка во Вконтакте"
                    >
                        <svg class="icon social__icon">
                            <use href="img/sprite.svg#soc-logo-vk"></use>
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
                            <use href="img/sprite.svg#soc-logo-ok"></use>
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
                            <use href="img/sprite.svg#soc-logo-fb"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <main class="main">