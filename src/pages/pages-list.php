<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img width="64" height="64" src="/build/img/logo.png" alt="">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">00</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">00 (всего страниц в макете)</span>
        </span>
    </div>

    <div>
        <ul>
            <?/*<li style="color: forestgreen; font-size: 18px; font-weight: 700;">Блок готов</li>*/?>
            <li><a href="/build/index.php" target="_blank">Главная</a></li>
            <br>
            <li><a href="/build/organizer.php" target="_blank">Организаторам</a></li>
            <li><a href="/build/registration.php" target="_blank">Регистрация</a></li>
            <li><a href="/build/auth.php" target="_blank">Авторизация</a></li>

            <br>
        </ul>
    </div>
    </body>
</html>