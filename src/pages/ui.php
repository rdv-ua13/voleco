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
        .iconset {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 8px;
            min-width: 320px;
            width: 100%;
            padding: 4px;
            border: 1px solid var(--text5-color);
            border-radius: 8px;
        }
        .iconset .tooltip .icon {
            min-width: 24px;
            width: 24px;
            min-height: 24px;
            height: 24px;
        }
        .iconset .tooltip:hover .icon {
            fill: #059858;
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
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Icons (sprite.svg#...)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; max-width: 500px;">

                    <div class="iconset">
                        <!--start ui content-->
                        <span class="tooltip"
                              data-tippy-content="#add-image"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#add-image"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#alert"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#alert"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#arrow-left"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#arrow-left"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#arrow-right"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#arrow-right"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#arrow-up "
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#arrow-up"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#arrow-down "
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#arrow-down"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#left"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#left"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#bell"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#bell"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#burger"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#burger"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#desc2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#desc2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar-check"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar-check"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar-cross"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar-cross"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar-next"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar-next"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#calendar-minus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#calendar-minus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#right"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#right"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#clock"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#clock"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#chat"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#chat"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#copy"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#copy"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#cross"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#cross"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#document"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#document"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#download"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#download"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#business"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#business"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#communication"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#communication"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#content-new"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#content-new"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#learning"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#learning"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#medias-likes"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#medias-likes"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#rewards"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#rewards"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#search-checkmark"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#search-checkmark"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#team"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#team"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#pencil"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#pencil"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#pencil2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#pencil2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#mail"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#mail"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#mail-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#mail-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#eye-on"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#eye-on"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#eye-off"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#eye-off"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#bookmark"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#bookmark"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#file"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#file"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#file-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#file-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#share"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#share"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#share2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#share2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#filter"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#filter"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#globe"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#globe"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#house"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#house"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#mail-a"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#mail-a"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#external"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#external"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#location"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#location"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#map"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#map"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#pin"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#pin"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#menu-more"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-more"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#menu-more-v"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#menu-more-v"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#money"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#money"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#money2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#money2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#notebook"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#notebook"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#phone"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#phone"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#phone-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#phone-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#camera"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#camera"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#minus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#minus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#refresh"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#refresh"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#barcode"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#barcode"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#search"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#search"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#settings"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#settings"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#settings-slider"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#settings-slider"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#slider-nav-arrow-left"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#slider-nav-arrow-left"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#smile"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#smile"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#favorite"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#favorite"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#help"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#help"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#trash"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#trash"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#user"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#user"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#user-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#user-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#attach"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#attach"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#attach-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#attach-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#attach-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#attach-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#cancel"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#cancel"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#cancel2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#cancel2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#car"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#car"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#card"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#card"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#card-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#card-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#card-minus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#card-minus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#chart"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#chart"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#check"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#check"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#database"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#database"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#door-cross"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#door-cross"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#door-enter"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#door-enter"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#double-check"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#double-check"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#drop-lines"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#drop-lines"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#exit"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#exit"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#flag"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#flag"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#folder"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#folder"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#forward"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#forward"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#heart"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#heart"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#image"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#image"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#import"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#import"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#info"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#info"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#info2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#info2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#link"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#link"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#list"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#list"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#lock"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#lock"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#unlock"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#unlock"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#mobile"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#mobile"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#new-message"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#new-message"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#no-photo"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#no-photo"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#order"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#order"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#order-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#order-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#percent"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#percent"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#print"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#print"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#qr-code"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#qr-code"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#reply"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#reply"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#rows2"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#rows2"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#rows3"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#rows3"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#send"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#send"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#sort-asc"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#sort-asc"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#sort-desc"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#sort-desc"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#switch"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#switch"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#table"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#table"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#video"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#video"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#wallet"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#wallet"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#wallet-check"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#wallet-check"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#wallet-cross"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#wallet-cross"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#wallet-plus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#wallet-plus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#wallet-minus"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#wallet-minus"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#interface"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#interface"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#globe-leaf"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#globe-leaf"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#ecology"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#ecology"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#sport"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#sport"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#buildings"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#buildings"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#alarm"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#alarm"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#pets"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#pets"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#science"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#science"></use>
                            </svg>
                        </span>


                        <span class="tooltip"
                              data-tippy-content="#soc-logo-fb"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#soc-logo-fb"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#soc-logo-instagram"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#soc-logo-instagram"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#soc-logo-ok"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#soc-logo-ok"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#soc-logo-vk"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#soc-logo-vk"></use>
                            </svg>
                        </span>


                        <span class="tooltip"
                              data-tippy-content="#success-check"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#success-check"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#coins"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#coins"></use>
                            </svg>
                        </span>


                        <span class="tooltip"
                              data-tippy-content="#tag-all"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-all"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-nature"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-nature"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-sport"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-sport"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-building"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-building"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-alarm"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-alarm"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-pets"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-pets"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#tag-science"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#tag-science"></use>
                            </svg>
                        </span>


                        <span class="tooltip"
                              data-tippy-content="#media-facebook"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-facebook"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-insta"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-insta"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-messager"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-messager"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-ok"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-ok"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-skype"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-skype"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-talkme"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-talkme"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-telegram"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-telegram"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-tiktok"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-tiktok"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-viber"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-viber"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-vk"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-vk"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-wa"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-wa"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#media-youtube"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#media-youtube"></use>
                            </svg>
                        </span>


                        <span class="tooltip"
                              data-tippy-content="#authreg-apple"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#authreg-apple"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#authreg-fb"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#authreg-fb"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#authreg-google"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#authreg-google"></use>
                            </svg>
                        </span>
                        <span class="tooltip"
                              data-tippy-content="#authreg-vk"
                        >
                            <svg class="icon">
                                <use href="img/sprite.svg#authreg-vk"></use>
                            </svg>
                        </span>
                        <!--end ui content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat"></use>
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
                            <use href="img/sprite.svg#chat#chat"></use>
                        </svg>
                        <span class="btn__text">Кнопка</span>
                    </button>
                    <!--end ui content-->
                </div>
                &#8212; button class="btn-reset btn btn--noframe btn--tdu-dashed"
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Checkbox / Radio buttons</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="gap: 10px; flex-wrap: wrap;">
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
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tags</h3>
    <div class="container-ui">
        <div class="col-ui">
            <h4 class="text-center">Tags block (default)</h4>
            <div class="row-ui">
                <div class="flex-v-center" style="max-width: 355px;">
                    <!--ui content-->
                    <span class="tag-bar">
                        <span class="tag" style="cursor: not-allowed;">
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text8-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                            </span>
                        </span>
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
            <br>
            <h4 class="text-center">Tags block (slider)</h4>
            <div class="row-ui">
                <div class="flex-v-center" style="max-width: 355px; overflow: hidden;">
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
            <br>
            <h4 class="text-center">Tags-radio</h4>
            <div class="row-ui">
                <div class="flex-v-center" style="max-width: 355px;">
                    <!--ui content-->
                    <span class="tag-bar">
                        <label class="tag" style="cursor: not-allowed;">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][]"
                                    value=""
                            >
                            <span
                                    class="tag__content-bg"
                                    style="
                                    border-color: var(--text8-color);
                                    background-color: var(--text8-color);"
                            ></span>
                            <span class="tag__content">
                                <svg class="icon tag__content-icon" style="fill: var(--text5-color);">
                                    <use href="img/sprite.svg#tag-all"></use>
                                </svg>
                                <span class="tag__content-text" style="color: var(--text5-color);">disabled</span>
                            </span>
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][all]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][urban]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][sport]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][alarm]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][animal]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][science]"
                                    value=""
                            >
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
                        </label>
                        <label class="tag">
                            <input
                                    class="visually-hidden"
                                    type="checkbox"
                                    name="PROP[TAGS][nature]"
                                    value=""
                            >
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
                        </label>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

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
    <hr style="width: 100%;">

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
            tabs-слайдер внутренних страниц
            <div class="row-ui ">
                <div class="" style="width: 100%;">
                    <!--start ui content-->
                    <div class="inner-page-tabs-wrapper">
                        <div class="inner-page-tabs swiper" data-tab="tab-ui">
                            <div class="inner-page-tabs__nav swiper-wrapper">
                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                    <a
                                            href="javascript:;"
                                            class="btn-reset inner-page-tabs__link selected"
                                            type="button"
                                            data-target="0"
                                    >
                                        <span class="inner-page-tabs__link-content">$value</span>
                                        <span class="inner-page-tabs__link-num">18</span>
                                    </a>
                                </div>
                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                    <a
                                            href="javascript:;"
                                            class="btn-reset inner-page-tabs__link"
                                            type="button"
                                            data-target="1"
                                    >
                                        <span class="inner-page-tabs__link-content">$value2</span>
                                        <span class="inner-page-tabs__link-num">28</span>
                                    </a>
                                </div>
                                <div class="inner-page-tabs__nav-item swiper-slide notice">
                                    <a
                                            href="javascript:;"
                                            class="btn-reset inner-page-tabs__link"
                                            type="button"
                                            data-target="2"
                                    >
                                        <span class="inner-page-tabs__link-content">$value3</span>
                                        <span class="inner-page-tabs__link-num">38</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?/* ".inner-page-tabs-content" должен располагаться за пределами ".inner-page-tabs-wrapper" */?>
                    <div class="inner-page-tabs-content" data-tab-content="tab-ui">
                        <div class="inner-page-tabs-content__panel active" data-id="0">
                            Tabs 1 content
                        </div>
                        <div class="inner-page-tabs-content__panel" data-id="1">
                            Tabs 2 content
                        </div>
                        <div class="inner-page-tabs-content__panel" data-id="2">
                            Tabs 3 content
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Notice</h3>
    <div class="container-ui">
        <div class="col-ui">
            class="notice" > class="notice-elem active" > class="notice-elem__num"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="notice">
                        <div class="notice-elem active">
                            <span>Title text</span>
                            <span class="notice-elem__num">1</span>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

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
                                            <use href="img/sprite.svg#pin"></use>
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
                                            <use href="img/sprite.svg#favorite"></use>
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
                                            <use href="img/sprite.svg#bookmark"></use>
                                        </svg>
                                    </button>
                                </span>
                                <span class="card__user-descr">
                                    <span class="card__user-descr-item">
                                        <svg class="icon">
                                            <use href="img/sprite.svg#pin"></use>
                                        </svg>
                                        <span class="card__action-item-text">г. Москва</span>
                                    </span>
                                </span>
                                <span class="card__rate">
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
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
                                            <use href="img/sprite.svg#bookmark"></use>
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
                                        <use href="img/sprite.svg#favorite"></use>
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
                                    <use href="img/sprite.svg#right"></use>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Select (select2)</h3>
    <div class="container-ui">
        <div class="col-ui">
            select class="input-reset form__input form__input--select js-select2"
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <form id="" class="form authreg-form" method="POST" action="">
                        <div class="page-content__section">
                            <div class="page-content__section-item">
                                <div class="page-content__section-item-title">
                                    <span>Селект <span class="required-star">*</span></span>
                                </div>
                                <div class="form__field">
                                    <select
                                            id=""
                                            name=""
                                            class="input-reset form__input form__input--select2 js-select2"
                                            required
                                    >
                                        <option value="0">Селект 1</option>
                                        <option value="1">Селект 2</option>
                                        <option value="2">Селект 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Modal</h3>
    <div class="container-ui">
        <div class="col-ui">
            <a href="https://fancyapps.com/" target="_blank">Using plugin fancybox</a>
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#pencil"></use>
                        </svg>
                        <span class="btn__text">Вызов модалки fancy</span>
                    </button>

                    <div id="modal-test111" class="modal modal-request" style="display:none;">
                        <div class="modal__content">
                            <div class="modal__title">Учет времени волонтера</div>
                            <div class="modal-fields">
                                <div class="modal-fields__item modal-request__employee">
                                    <div class="modal-request__employee-view">
                                        <picture>
                                            <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/card-photo-volunteer.png"
                                                    class="image"
                                                    width="42"
                                                    height="42"
                                                    alt="Фото карточки"
                                            >
                                        </picture>
                                    </div>
                                    <div class="modal-request__employee-descr">
                                        <div class="modal-request__employee-descr-status">Волонтер</div>
                                        <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item">
                                        <div class="page-content__section-item-title">
                                            <span>Указать время вручную</span>
                                        </div>
                                        <div class="form__field">
                                            <input
                                                    id=""
                                                    class="input-reset form__input"
                                                    type="text"
                                                    name=""
                                                    placeholder=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оценка волонтера</span>
                                    </div>
                                    <div class="form__field">
                                        <div class="page-content__intro-rate">
                                            <div class="page-content__intro-rate-stars">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оставить отзыв</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="form__field form__field-btn">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Сохранить</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--gray flex-1">
                                            <span class="btn__text">Сохранить и создать новую задачу</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>

            <br>

            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <button class="btn-reset btn btn--fill fancy-modal" type="button" data-fancybox="dialog" data-src="#modal-test111">
                        <svg class="icon btn__icon">
                            <use href="img/sprite.svg#pencil"></use>
                        </svg>
                        <span class="btn__text">Вызов модалки fancy</span>
                    </button>

                    <div id="modal-test111" class="modal modal-request" style="display:none;">
                        <div class="modal__content">
                            <div class="modal__title">Учет времени волонтера</div>
                            <div class="modal-fields">
                                <div class="modal-fields__item modal-request__employee">
                                    <div class="modal-request__employee-view">
                                        <picture>
                                            <source srcset="img/card-photo-volunteer.webp" type="image/webp">
                                            <img
                                                    loading="lazy"
                                                    src="img/card-photo-volunteer.png"
                                                    class="image"
                                                    width="42"
                                                    height="42"
                                                    alt="Фото карточки"
                                            >
                                        </picture>
                                    </div>
                                    <div class="modal-request__employee-descr">
                                        <div class="modal-request__employee-descr-status">Волонтер</div>
                                        <div class="modal-request__employee-descr-name">Трофимов Тимофей Арсеньевич</div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>
                                            <span class="custom-checkbox">
                                                <input id="checkboxui-3" class="custom-checkbox__input" type="checkbox">
                                                <label for="checkboxui-3" class="custom-checkbox__label-for"></label>
                                            </span>
                                            <span class="text5-color">Удаленная работа</span>
                                        </span>
                                        <span class="tooltip">
                                            <span class="btn-reset tooltip__btn" aria-describedby="id44">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#help"></use>
                                                </svg>
                                            </span>
                                            <span class="tooltip__txt" role="tooltip" id="id44">
                                                <span class="visually-hidden">Тултип: </span>
                                                Текст
                                            </span>
                                        </span>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item">
                                        <div class="page-content__section-item-title">
                                            <span>Указать время вручную</span>
                                        </div>
                                        <div class="form__field">
                                            <input
                                                    id=""
                                                    class="input-reset form__input"
                                                    type="text"
                                                    name=""
                                                    placeholder=""
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оценка волонтера</span>
                                    </div>
                                    <div class="form__field">
                                        <div class="page-content__intro-rate">
                                            <div class="page-content__intro-rate-stars">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#favorite"></use>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="page-content__section-item-title">
                                        <span>Оставить отзыв</span>
                                    </div>
                                    <div class="form__field">
                                        <textarea
                                                id=""
                                                class="input-reset form__input form__input--textarea"
                                                name=""
                                                placeholder="Расскажите об опыте работы с волонтером"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="modal-fields__item">
                                    <div class="form__field form__field-btn">
                                        <button class="btn-reset btn btn--fill">
                                            <span class="btn__text">Сохранить</span>
                                        </button>
                                        <button class="btn-reset btn btn--fill btn--gray flex-1">
                                            <span class="btn__text">Сохранить и создать новую задачу</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Check all</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; gap: 15px;">
                    <!--start ui content-->
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input custom-checkbox__input--checkline checkall-for"
                                type="checkbox"
                                data-checkall-for="checkallTest"
                        >
                        all
                    </div>

                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <div class="custom-checkbox">
                        <input
                                class="custom-checkbox__input checkall-group"
                                type="checkbox"
                                data-checkall-group="checkallTest"
                        >
                        single
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Block text-spoiler</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
                    <div class="page-content__descr-content">
                        <div class="page-content__spoiler js-spoiler" data-collapsed-height="22">
                            <div class="page-content__spoiler-text">Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране. Ассоциация волонтёрских центров (АВЦ) – крупнейшая добровольческая организация в России, созданная в 2014 году по инициативе Президента России Владимира Путина с целью сохранения наследия волонтёрской программы XXII Олимпийских игр в Сочи и развития добровольческого движения и гражданской активности в стране.</div>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Pagination</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    <!--start ui content-->
					<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Tooltip</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%;">
                    tooltip -&nbsp;
                    <!--start ui content-->
                    <span class="tooltip"
                          data-tippy-content="<div class='tooltip-content'>
                                                    <p>Принимает <a href='javascript:;'>HTML</a></p>
                                                    <p>Можно изменить trigger на 'click' в initTooltips() ->
                                                        <a href='javascript:;' style='color: red;'>trigger: 'click'</a>
                                                    </p>
                                                </div>"
                    >
                        <svg class="icon">
                            <use href="img/sprite.svg#help"></use>
                        </svg>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Обёртка для input flatpickr</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="width: 100%; max-width: 500px;">
                    <!--start ui content-->
                    <div class="form__field form__field--flatpickr">
                        <input
                                id=""
                                class="input-reset form__input flatpickr"
                                type="text"
                                name=""
                                placeholder=""
                        >
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Banner</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <div class="banner banner--dark-bg" style="background-color: var(--accent-ceruleanblue1-color);">
                        <div class="banner__decor">
                            <picture>
                                <source
                                        srcset="img/banner-mobile.webp"
                                        media="(max-width: 767.98px)"
                                        type="image/webp"
                                >
                                <source
                                        srcset="img/banner.webp"
                                        media="(min-width: 768px)"
                                        type="image/webp"
                                >
                                <img
                                        loading="lazy"
                                        src="img/banner.png"
                                        srcset="img/banner-mobile.png 343w,
                                            img/banner.png 1280w"
                                        sizes="(max-width: 767.98px) 343px,
                                            1280px"
                                        class="image"
                                        width=""
                                        height=""
                                        alt=""
                                >
                            </picture>
                        </div>
                        <div class="banner__content">
                            <div class="banner__title">XI Международный форум «Арктика: настоящее и будущее»</div>
                            <button class="btn-reset btn btn--white">
                                <span class="btn__text">Присоединиться к проекту</span>
                            </button>
                        </div>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Star rating (input)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating star-rating--max">
                        <form class="star-rating__container" action="" method="post">
                            <input
                                    id="starrateTestOne"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="5"
                            >
                            <label for="starrateTestOne">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestTwo"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="4"
                            >
                            <label for="starrateTestTwo">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestThree"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="3"
                            >
                            <label for="starrateTestThree">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFour"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="2"
                            >
                            <label for="starrateTestFour">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>

                            <input
                                    id="starrateTestFive"
                                    class="visually-hidden"
                                    type="radio"
                                    name="starrate"
                                    value="1"
                            >
                            <label for="starrateTestFive">
                                <svg class="icon">
                                    <use href="img/sprite.svg#favorite"></use>
                                </svg>
                            </label>
                        </form>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 5stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper js-star-rating">
                        <span class="star-rating-value">4.8</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 5stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--mobile-frame js-star-rating">
                        <span class="star-rating-value">2.2</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <h3 class="text-center">Star rating (static: desk - 1stars/ mob - 1stars)</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <span class="star-rating-wrapper star-rating-wrapper--frame">
                        <span class="star-rating-value">3.5</span> <!-- visually-hidden -->
                        <span class="star-rating">
                            <span class="star-rating__container">
                                <label>
                                    <svg class="icon">
                                        <use href="img/sprite.svg#favorite"></use>
                                    </svg>
                                </label>
                            </span>
                        </span>
                    </span>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>

    <h3 class="text-center">Requests status</h3>
    <div class="container-ui">
        <div class="col-ui">
            <div class="row-ui ">
                <div class="flex-v-center" style="min-width: 100%;">
                    <!--start ui content-->
                    <div class="card-list card-list-column">
                        <a href="javascript:;" class="card card--pa-default">
                            <span class="card__view">
                                <picture>
                                    <source srcset="img/card-photo-events.webp" type="image/webp">
                                    <img loading="lazy" src="img/card-photo-events.png" class="image" width="260" height="190" alt="Фото карточки">
                                </picture>
                            </span>
                            <span class="card__descr">
                                <span class="card__title-block">
                                    <span class="card__title-block-name">test1</span>
                                    <span class="card__title-block-subtitle">test1</span>
                                </span>
                                <span class="card__action">
                                    <span class="card__action-data">
                                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                                    </span>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-created">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка создана</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-approved">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка подтверждена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-done">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка исполнена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                                <span class="card__contact-btn card__contact-btn--vol">
                                    <button class="btn-reset btn btn--noframe">
                                        <span class="tag tag--mini status-declined">
                                            <span class="tag__content-bg"></span>
                                            <span class="tag__content">
                                                <span class="tag__content-text">заявка отклонена</span>
                                            </span>
                                        </span>
                                    </button>
                                </span>
                            </span>
                        </a>
                    </div>
                    <!--end ui content-->
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 100%;">

    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>