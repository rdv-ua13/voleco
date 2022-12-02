<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ui voleco</title>

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

    <style>
        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 16px;
        }
        .container-ui {
            display:flex;
            flex-wrap: wrap;
            gap: 24px;
        }
        .col-ui {
            flex: 1;
            display:flex;
            flex-direction: column;
            gap: 12px;
        }
        .row-ui {
            display:flex;
            align-items:center;
            gap: 16px;
        }
        .text-center {
            text-align: center;
        }
        .color-block {
            display: inline-block;
            width: 150px;
            height: 30px;
        }
    </style>

    <script defer src="js/main.js"></script>
</head>
<body style="margin: 10px; background: azure;">

    <h3 class="text-center">Variables css</h3>
    <h4>Fonts</h4>
    <div style="font-family: var(--font-family-stolzl);">Stolzl (default) &#8212; var(--font-family-stolzl)</div>
    <div style="font-family: var(--font-family-lato);">Lato &#8212; var(--font-family-lato)</div>
    <div style="font-family: var(--font-family-vela);">Vela &#8212; var(--font-family-vela)</div>
    <div style="font-family: var(--font-family-inter);">Inter &#8212; var(--font-family-inter)</div>

    <br>
    <br>

    <h4>Colors</h4>
    <div class="container-ui">
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--black-color);"
                ></span>&nbsp;&#8212; var(--black-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--white-color);"
                ></span>&nbsp;&#8212; var(--white-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--green-color);"
                ></span>&nbsp;&#8212; var(--green-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--lightgray-color);"
                ></span>&nbsp;&#8212; var(--lightgray-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--background-color);"
                ></span>&nbsp;&#8212; var(--background-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text1-color);"
                ></span>&nbsp;&#8212; var(--text1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text2-color);"
                ></span>&nbsp;&#8212; var(--text2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text3-color);"
                ></span>&nbsp;&#8212; var(--text3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text4-color);"
                ></span>&nbsp;&#8212; var(--text4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text5-color);"
                ></span>&nbsp;&#8212; var(--text5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text6-color);"
                ></span>&nbsp;&#8212; var(--text6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text7-color);"
                ></span>&nbsp;&#8212; var(--text7-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text8-color);"
                ></span>&nbsp;&#8212; var(--text8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text9-color);"
                ></span>&nbsp;&#8212; var(--text9-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--text10-color);"
                ></span>&nbsp;&#8212; var(--text10-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--error4-color);"
                ></span>&nbsp;&#8212; var(--error4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--error5-color);"
                ></span>&nbsp;&#8212; var(--error5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--error7-color);"
                ></span>&nbsp;&#8212; var(--error7-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--error9-color);"
                ></span>&nbsp;&#8212; var(--error9-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--error10-color);"
                ></span>&nbsp;&#8212; var(--error10-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning3-color);"
                ></span>&nbsp;&#8212; var(--warning3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning4-color);"
                ></span>&nbsp;&#8212; var(--warning4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning5-color);"
                ></span>&nbsp;&#8212; var(--warning5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning6-color);"
                ></span>&nbsp;&#8212; var(--warning6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning8-color);"
                ></span>&nbsp;&#8212; var(--warning8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--warning9-color);"
                ></span>&nbsp;&#8212; var(--warning9-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success1-color);"
                ></span>&nbsp;&#8212; var(--success1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success2-color);"
                ></span>&nbsp;&#8212; var(--success2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success3-color);"
                ></span>&nbsp;&#8212; var(--success3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success4-color);"
                ></span>&nbsp;&#8212; var(--success4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success5-color);"
                ></span>&nbsp;&#8212; var(--success1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success6-color);"
                ></span>&nbsp;&#8212; var(--success6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success7-color);"
                ></span>&nbsp;&#8212; var(--success7-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success8-color);"
                ></span>&nbsp;&#8212; var(--success8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success9-color);"
                ></span>&nbsp;&#8212; var(--success9-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--success10-color);"
                ></span>&nbsp;&#8212; var(--success10-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info3-color);"
                ></span>&nbsp;&#8212; var(--info3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info4-color);"
                ></span>&nbsp;&#8212; var(--info4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info5-color);"
                ></span>&nbsp;&#8212; var(--info5-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info6-color);"
                ></span>&nbsp;&#8212; var(--info6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info8-color);"
                ></span>&nbsp;&#8212; var(--info8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--info9-color);"
                ></span>&nbsp;&#8212; var(--info9-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-purple2-color);"
                ></span>&nbsp;&#8212; var(--accent-purple2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-purple3-color);"
                ></span>&nbsp;&#8212; var(--accent-purple3-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-purple4-color);"
                ></span>&nbsp;&#8212; var(--accent-purple4-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-purple8-color);"
                ></span>&nbsp;&#8212; var(--accent-purple8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-purple9-color);"
                ></span>&nbsp;&#8212; var(--accent-purple9-color)
            </div>
        </div>
        <div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-ceruleanblue1-color);"
                ></span>&nbsp;&#8212; var(--accent-ceruleanblue1-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-ceruleanblue2-color);"
                ></span>&nbsp;&#8212; var(--accent-ceruleanblue2-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-ceruleanblue6-color);"
                ></span>&nbsp;&#8212; var(--accent-ceruleanblue6-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-ceruleanblue8-color);"
                ></span>&nbsp;&#8212; var(--accent-ceruleanblue8-color)
            </div>
            <div class="flex-v-center">
                <span class="color-block" style="background-color: var(--accent-ceruleanblue9-color);"
                ></span>&nbsp;&#8212; var(--accent-ceruleanblue9-color)
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Buttons (icons not hovering, designer is fixing)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--gray">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--gray">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill btn--gray"
            </div>
            <div class="row-ui">
                <div class="flex-v-center" style="width: 125px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div class="flex-v-center" style="width: 125px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe"
            </div>
            <div class="row-ui">
                <div class="flex-v-center" style="width: 265px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe-mini">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe-mini"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 265px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe btn--link">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe btn--link"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 265px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe btn--link btn--tdu-dashed">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe btn--link btn--tdu-dashed"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 125px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe btn--tdu-dashed">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div class="flex-v-center" style="width: 125px;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--noframe btn--tdu-dashed">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe btn--tdu-dashed"
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px;">
                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input" type="checkbox">
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input" type="checkbox" checked>
                    </div>
                    <!--end ui content-->

                    <div style="padding-right: 20px;"></div>

                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input" type="checkbox" disabled>
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input disabled" type="checkbox">
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input" type="checkbox" checked disabled>
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input disabled" type="checkbox" checked>
                    </div>
                    <!--end ui content-->

                    <div style="padding-right: 20px;"></div>

                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked>
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input custom-checkbox__input--checkline" type="checkbox" checked disabled>
                    </div>
                    <div class="custom-checkbox">
                        <input class="custom-checkbox__input custom-checkbox__input--checkline disabled" type="checkbox" checked>
                    </div>
                    <!--end ui content-->

                    <div style="padding-right: 20px;"></div>

                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input id="checkboxui" class="custom-checkbox__input" type="checkbox" checked>
                        <label for="checkboxui" class="custom-checkbox__label-for">Онлайн</label>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px;">
                    <!--start ui content-->
                    <div class="custom-radio">
                        <input class="custom-radio__input" type="checkbox">
                    </div>
                    <div class="custom-radio">
                        <input class="custom-radio__input" type="checkbox" checked>
                    </div>
                    <!--end ui content-->

                    <div style="padding-right: 20px;"></div>

                    <!--start ui content-->
                    <div class="custom-radio">
                        <input class="custom-radio__input" type="checkbox" disabled>
                    </div>
                    <div class="custom-radio">
                        <input class="custom-radio__input disabled" type="checkbox">
                    </div>
                    <div class="custom-radio">
                        <input class="custom-radio__input" type="checkbox" checked disabled>
                    </div>
                    <div class="custom-radio">
                        <input class="custom-radio__input disabled" type="checkbox" checked>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Tags</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; flex-direction: column">
                    <!--start ui content-->
                    .tag (h=28px) / .tag--max (h=40px) / .tag--midi (h=26px) / .tag--mini (h=24px)
                    <br>
                    <div>@media (min-width: 768px)</div>
                    .tag-desktop (h=28px) / .tag-desktop--max (h=40px) / .tag-desktop--midi (h=26px) / .tag-desktop--mini (h=24px)
                    <br>
                    <div>@media (max-width: 767.98px)</div>
                    .tag-mobile (h=28px) / .tag-mobile--max (h=40px) / .tag-mobile--midi (h=26px) / .tag-mobile--mini (h=24px)
                    <br>
                    needs classes for responsive usage all types of size
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

</body>
</html>