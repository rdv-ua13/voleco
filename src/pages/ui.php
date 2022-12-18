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

    <script defer src="js/libs.min.js"></script>
    <script defer src="js/main.js"></script>

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
            <div class="row-ui">--------------------------------------------------</div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--midi">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--midi">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill btn--midi"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--midi">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--midi">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--midi"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--midi btn--gray">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--midi btn--gray">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill btn--midi btn--gray"
            </div>
            <div class="row-ui">--------------------------------------------------</div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--mini">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--mini">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill btn--mini"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--mini">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--mini">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--mini"
            </div>
            <div class="row-ui">
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                <div>
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#comment"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--fill btn--mini btn--gray"
            </div>
            <div class="row-ui">--------------------------------------------------</div>
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
            <h4 class="text-center">Tags block (default)</h4>
            <div class="row-ui">
                <div class="flex-v-center" style="max-width: 500px;">
                    <!--ui content-->
                    <span class="tag-bar">
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
                    </span>
                    <!--end ui content-->
                </div>
            </div>
            <h4 class="text-center">Tags block (slider)</h4>
            <div class="row-ui">
                <div class="flex-v-center" style="max-width: 500px; overflow: hidden;">
                    <!--ui content-->
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
                    <!--end ui content-->
                </div>
            </div>
            <br>
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
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
                    </span>
                </div>
                &#8212; span class="tag"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--max">
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
                    </span>
                </div>
                &#8212; span class="tag tag--max"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--midi">
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
                    </span>
                </div>
                &#8212; span class="tag tag--midi"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; width: 120px;">
                    <span class="tag-bar">
                        <span class="tag tag--mini">
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
                    </span>
                </div>
                &#8212; span class="tag tag--mini"
            </div>
            Для тегов доделать вариации для mobile/desktop
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Custom icons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 150px;">
                    <!--start ui content-->
                    <span class="success-check">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
                &#8212; class="success-check" (default)
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 150px;">
                    <!--start ui content-->
                    <span class="success-check success-check--max">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
                &#8212; class="success-check success-check--max"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 150px;">
                    <!--start ui content-->
                    <span class="success-check success-check--mini">
                        <svg class="icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
                &#8212; class="success-check success-check--mini"
            </div>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 150px;">
                    <!--start ui content-->
                    <span class="success-check success-check--nameplate">
                        <span class="success-check__content">
                            <svg class="icon success-check__content-icon">
                                <use href="img/sprite.svg#success-check"></use>
                            </svg>
                            <span class="success-check__content-text">Верифицирован</span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
                &#8212; class="success-check success-check--nameplate"
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Tabs</h3>
    <div class="container-ui">
        <div class="col-ui">
            class="tabs"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="tabs">
                        <ul class="list-reset tabs__nav">
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn selected" type="button" data-target="0">
                                    <span class="tabs__nav-btn-content">Tab one</span>
                                    <span class="tabs__nav-btn-num">69</span>
                                </button>
                            </li>
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn notice" type="button" data-target="1">
                                    <span class="tabs__nav-btn-content">Tab two</span>
                                    <span class="tabs__nav-btn-num">1</span>
                                </button>
                            </li>
                        </ul>
                        <div class="tabs__content">
                            <div class="tabs__panel active" data-id="0">
                                Tabs 1 content
                            </div>
                            <div class="tabs__panel" data-id="1">
                                Tabs 2 content
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="tabs tabs--profile" !?!
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="tabs tabs--profile">
                        <ul class="list-reset tabs__nav">
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn selected" type="button" data-target="0">
                                    <span class="tabs__nav-btn-content">Tab one</span>
                                    <span class="tabs__nav-btn-num">69</span>
                                </button>
                            </li>
                            <li class="tabs__nav-item">
                                <button class="btn-reset tabs__nav-btn notice" type="button" data-target="1">
                                    <span class="tabs__nav-btn-content">Tab two</span>
                                    <span class="tabs__nav-btn-num">96</span>
                                </button>
                            </li>
                        </ul>
                        <div class="tabs__content">
                            <div class="tabs__panel active" data-id="0">
                                Tabs 1 content
                            </div>
                            <div class="tabs__panel" data-id="1">
                                Tabs 2 content
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="tabs tabs--profile js-tabs-profile" !?!
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="tabs tabs--profile">
                        <div class="swiper js-tabs-profile">
                            <ul class="list-reset tabs__nav swiper-wrapper">
                                <li class="tabs__nav-item swiper-slide">
                                    <button class="btn-reset tabs__nav-btn selected" type="button" data-target="0">
                                        <span class="tabs__nav-btn-content">Tab one</span>
                                        <span class="tabs__nav-btn-num">69</span>
                                    </button>
                                </li>
                                <li class="tabs__nav-item swiper-slide">
                                    <button class="btn-reset tabs__nav-btn notice" type="button" data-target="1">
                                        <span class="tabs__nav-btn-content">Tab two</span>
                                        <span class="tabs__nav-btn-num">96</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs__content">
                            <div class="tabs__panel active" data-id="0">
                                Tabs 1 content
                            </div>
                            <div class="tabs__panel" data-id="1">
                                Tabs 2 content
                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <h3 class="text-center">Cards</h3>
    <div class="container-ui">
        <div class="col-ui">
            class="card"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card">
                        <span class="card__view">
                            <picture>
                                <source srcset="img/card-photo.webp" type="image/webp">
                                <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                            </picture>
                        </span>
                        <span class="card__descr">
                            <span class="card__tag-bar tag-bar">
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
                            </span>
                            <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                            <span class="card__action">
                                <span class="card__action-data">
                                    <span class="card__action-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#map-pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                    <span class="card__action-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#calendar"></use>
                                        </svg>
                                        <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                    </span>
                                </span>
                                <span class="card__action-btn">
                                    <button class="btn-reset btn btn--fill">
                                        <span class="btn__text">Помочь</span>
                                    </button>
                                </span>
                            </span>
                        </span>
                    </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="card"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card">
                            <span class="card__view">
                                <picture>
                                    <source srcset="img/card-photo.webp" type="image/webp">
                                    <img loading="lazy" src="img/card-photo.png" class="image" width="270" height="180" alt="Фото карточки">
                                </picture>
                            </span>
                            <span class="card__descr">
                                <span class="card__tag-bar tag-bar">
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
                                </span>
                                <span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                <span class="card__action">
                                    <span class="card__action-data">
                                        <span class="card__action-progress js-progress">
                                            <span class="card__action-progress-bar progress-bar">
                                                <progress id="" class="visually-hidden progress-bar__indicator" value="33" max="100"></progress>
                                                <span class="progress-bar__bg">
                                                    <span class="progress-bar__line"></span>
                                                </span>
                                            </span>
                                            <span class="card__action-progress-data progress-bar-data">
                                                <span class="card__action-progress-current">
                                                    <span class="card__action-progress-data-title">Подписали</span>
                                                    <span class="card__action-progress-data-value progress-bar-data__value" data-value="1000">1 000 чел.</span>
                                                </span>
                                                <span class="card__action-progress-need">
                                                    <span class="card__action-progress-data-title">Нужно подписей</span>
                                                    <span class="card__action-progress-data-value progress-bar-data__max" data-max="3000">3 000</span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="card__action-btn">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Подписать</span>
                                        </button>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="card card--projects"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card card--projects">
							<span class="card__view">
								<picture>
									<source srcset="img/card-photo-projects.webp" type="image/webp">
									<img loading="lazy" src="img/card-photo-projects.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                            <span class="card__descr">
								<span class="card__title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
								<span class="card__organizer">
									<span class="card__organizer-logo">
                                        <picture>
                                            <source srcset="img/card-projects-org.webp" type="image/webp">
                                            <img loading="lazy" src="img/card-projects-org.png" class="image" width="42" height="42" alt="Логотип организатора">
                                        </picture>
                                        <span class="card__organizer-logo-check">
                                            <span class="success-check success-check--mini">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#success-check"></use>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
									<span class="card__organizer-descr">
                                        <span class="card__organizer-title">Ассоциация волонтерских центров</span>
                                        <span class="card__organizer-activity">12 мероприятий</span>
                                    </span>
									<span class="card__rate">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#star"></use>
                                        </svg>
                                        <span class="card__rate-value">4.8</span>
                                    </span>
								</span>
							</span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="card card--volunteer"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card card--volunteer">
							<span class="card__view">
								<picture>
									<source srcset="img/card-photo-volunteer.webp" type="image/webp">
									<img loading="lazy" src="img/card-photo-volunteer.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                            <span class="card__descr">
								<span class="card__title">Третьяков Авраам Романович</span>
                                <span class="card__icon-tags">
                                    <span class="card__icon-tag">
                                        <span class="success-check">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#success-check"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__icon-tag">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#coins"></use>
                                        </svg>
                                    </span>
                                </span>
                                <span class="card__favorite">
                                    <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#favorite"></use>
                                        </svg>
                                    </button>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#map-pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                </span>
                                <span class="card__rate">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#star"></use>
                                    </svg>
                                    <span class="card__rate-value">4.8</span>
                                </span>
                                <span class="card__reviews">
                                    <span class="card__reviews-value">Был волонтером 251 раз</span>
                                </span>
                                <span class="card__contact-btn">
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                        <span class="btn__text">Написать</span>
                                    </button>
                                </span>
							</span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="card card--organizer"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card card--organizer">
							<span class="card__view">
								<picture>
									<source srcset="img/card-projects-org.webp" type="image/webp">
									<img loading="lazy" src="img/card-projects-org.png" class="image" width="270" height="180" alt="Фото карточки">
								</picture>
							</span>
                            <span class="card__descr">
								<span class="card__title">Ассоциация волонтерских центров</span>
                                <span class="card__icon-tags">
                                    <span class="card__icon-tag">
                                        <span class="success-check">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#success-check"></use>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                                <span class="card__favorite">
                                    <button class="btn-reset btn--noframe card__favorite-btn js-card-favorite" type="button">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#favorite"></use>
                                        </svg>
                                    </button>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <span class="card__action-item-text">12 экодел</span>
                                    </span>
                                </span>
                                <span class="card__rate">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#star"></use>
                                    </svg>
                                    <span class="card__rate-value">4.8</span>
                                </span>
                                <span class="card__reviews">
                                    <span class="card__reviews-value">193 отзыва</span>
                                </span>
                                <span class="card__contact-btn">
                                    <button class="btn-reset btn btn--fill btn--mini">
                                        <span class="btn__text">Готов помогать</span>
                                    </button>
                                    <button class="btn-reset btn btn--fill btn--mini btn--gray">
                                        <span class="btn__text">Написать</span>
                                    </button>
                                </span>
							</span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
            <br>
            class="card card--more"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="card-list">
                        <a href="javascript:;" class="card card--more">
							<span class="card__descr">
								<span class="card__header h2">2839+</span>
								<span class="card__title">мероприятий доступно на платформе</span>
							</span>
                            <span class="card__link-pointer">
                                <svg class="icon">
                                    <use href="img/sprite.svg#card-more-arrow-toright"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

</body>
</html>