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
            <img src="img/logo.svg" width="185" height="52" alt="Логотип Волонтёры экологи">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">54 + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">62 + ui (всего страниц в макете)</span>
        </span>
    </div>
    <div style="font-size: 24px;">Ниже готовые разделы будут отмечены "<span style="color: forestgreen; font-size: 18px; font-weight: 700;">Блок готов</span>"</div>

    <div>
        <ul>
            <?/*<li style="color: forestgreen; font-size: 18px; font-weight: 700;">Блок готов</li>*/?>
            <li><a href="index.php" target="_blank">Главная (в процессе)</a></li>
            <li><a href="organizer.php" target="_blank">Организаторам (в процессе)</a></li>

            <br>
            <li><a href="registration.php" target="_blank">Регистрация</a></li>
            <li><a href="auth.php" target="_blank">Авторизация</a></li>
            <li><a href="password-recovery.php" target="_blank">Восстановление пароля</a></li>

            <br>
            <li><a href="ms-ecodela.php" target="_blank">Экодела</a></li>
            <li><a href="ms-petitions.php" target="_blank">Петиции</a></li>
            <li><a href="ms-fundraising.php" target="_blank">Сбор средств</a></li>
            <li><a href="ms-projects.php" target="_blank">Проекты</a></li>
            <li><a href="ms-volunteer.php" target="_blank">Эковолонтеры</a></li>
            <li><a href="ms-organizer.php" target="_blank">Организаторы</a></li>

            <br>
            <li><a href="details-ecodela.php" target="_blank">детальная - Экодела (в процессе)</a></li>
            <li><a href="details-petitions.php" target="_blank">детальная - Петиции (в процессе)</a></li>
            <li><a href="details-fundraising.php" target="_blank">детальная - Сбор средств (в процессе)</a></li>
            <li><a href="details-projects.php" target="_blank">детальная - Проекты (в процессе)</a></li>
            <li><a href="details-volunteer.php" target="_blank">детальная - Эковолонтеры (в процессе)</a></li>
            <li><a href="details-volunteer-exp.php" target="_blank">детальная - Эковолонтеры опыт (в процессе)</a></li>
            <li><a href="details-volunteer-feedback.php" target="_blank">детальная - Эковолонтеры отзывы (в процессе)</a></li>

            <br>
            <li><a href="lk-org-profile.php" target="_blank">ЛК Орг - профиль</a></li>
            <li><a href="lk-org-request.php" target="_blank">ЛК Орг - заявки</a></li>
            <li><a href="lk-org-tracking.php" target="_blank">ЛК Орг - Учет времени волонтера</a></li>
            <li><a href="lk-org-events.php" target="_blank">ЛК Орг - мероприятия</a></li>
            <li><a href="lk-org-events-past.php" target="_blank">ЛК Орг - мероприятия (прошедшие)</a></li>
            <li><a href="lk-org-petition.php" target="_blank">ЛК Орг - петиции</a></li>
            <li><a href="lk-org-project.php" target="_blank">ЛК Орг - проекты</a></li>
            <li><a href="lk-org-reviews.php" target="_blank">ЛК Орг - рейтинг и отзывы - мои отзывы</a></li>
            <li><a href="lk-org-reviews-vol.php" target="_blank">ЛК Орг - рейтинг и отзывы - отзывы волонтёров</a></li>
            <li><a href="lk-org-favorites-vol.php" target="_blank">ЛК Орг - избранное волонтёры</a></li>
            <li><a href="lk-org-favorites-org.php" target="_blank">ЛК Орг - избранное организаторы</a></li>
            <li><a href="lk-org-rights.php" target="_blank">ЛК Орг - права доступа</a></li>

            <br>
            <li><a href="lk-org-profile-settings.php" target="_blank">ЛК Орг - настройки профиля</a></li>
            <li><a href="lk-org-create-project-settings.php" target="_blank">ЛК Орг - создать проект</a></li>
            <li><a href="lk-org-create-ecodelo-settings.php" target="_blank">ЛК Орг - создать экодело</a></li>
            <li><a href="lk-org-create-ecodelo-task-settings.php" target="_blank">ЛК Орг - создать экодело-задачи</a></li>
            <li><a href="lk-org-create-task-settings.php" target="_blank">ЛК Орг - создать новую задачу</a></li>
            <li><a href="lk-org-create-petition-settings.php" target="_blank">ЛК Орг - создать новую петицию</a></li>

            <br>
            <li><a href="lk-vol-profile.php" target="_blank">ЛК Вол - профиль</a></li>
            <li><a href="lk-vol-request.php" target="_blank">ЛК Вол - заявки</a></li><!-- #54 -->
            <li><a href="lk-vol-events.php" target="_blank">ЛК Вол - мероприятия</a></li>
            <li><a href="lk-vol-events-past.php" target="_blank">ЛК Вол - мероприятия (прошедшие)</a></li>
            <li><a href="lk-vol-reviews-vol.php" target="_blank">ЛК Вол - рейтинг и отзывы - отзывы организаторов</a></li>
            <li><a href="lk-vol-favorites-org.php" target="_blank">ЛК Вол - избранное организаторы</a></li>
            <li><a href="lk-vol-favorites-event.php" target="_blank">ЛК Вол - избранное мероприятия</a></li>
            <li><a href="lk-vol-favorites-project.php" target="_blank">ЛК Вол - избранное проекты</a></li>
            <li><a href="lk-vol-favorites-vol.php" target="_blank">ЛК Вол - избранное волонтёры</a></li>
            <li><a href="lk-vol-archive-task.php" target="_blank">ЛК Вол - архив - задачи</a></li>
            <li><a href="lk-vol-archive-event.php" target="_blank">ЛК Вол - архив - экодела</a></li>

            <br>
            <li><a href="lk-vol-profile-settings.php" target="_blank">ЛК Вол - настройки профиля</a></li>
            <li><a href="lk-vol-profile-contact-settings.php" target="_blank">ЛК Вол - настройки профиля (Контакты)</a></li>
            <li><a href="lk-vol-profile-about-settings.php" target="_blank">ЛК Вол - настройки профиля (Образование и место работы)</a></li>
            <li><a href="lk-vol-profile-additional-settings.php" target="_blank">ЛК Вол - настройки профиля (Дополнительная информация)</a></li>

            <br>
            <li><a href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>