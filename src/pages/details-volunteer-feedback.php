<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="container">
        <div class="page-content">
            <div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header-details-vol.php"); ?>
            </div>

            <div class="page-content__body">
                <div class="block-mb-md">
                    <div class="page-content-tabs-container">
                        <div class="page-content-tabs-wrapper">
                            <div class="page-content-tabs swiper js-page-content-tabs">
                                <div class="page-content-tabs__nav swiper-wrapper">
									<? $arMenu = array (
										"details-volunteer.php" => "О волонтере",
										"details-volunteer-exp.php" => "Опыт волонтерства",
										"details-volunteer-feedback.php" => "Отзывы",
									);
									foreach ($arMenu as $arItem => $value) : ?>
                                        <div class="swiper-slide page-content-tabs__nav-item notice">
                                            <a
                                                    href="<?= $arItem ?>"
                                                    class="page-content-tabs__link<? if(strpos($_SERVER["REQUEST_URI"], $arItem)) : ?> selected<? endif; ?>"
                                            >
                                                <span class="page-content-tabs__link-content"><?= $value ?></span>
                                                <span class="page-content-tabs__link-num">18</span>
                                            </a>
                                        </div>
									<? endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-content__container">
                    <div class="page-content__main page-content__main--full">
                        <div class="block-mb-lg">
                            <div class="card-list card-list-column">
                                <a href="javascript:;" class="card card--pa-reviews-org">
                                <span class="card__item card__descr">
                                    <span class="card__descr-title">Голосование за благоустройство общественных пространств</span>
                                    <span class="card__rate-wrapper">
                                        <span class="card__rate-title">Оценка:</span>
                                        <span class="card__rate card__rate--noframe">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star-gray"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="page-content__descr-content">
                                        <span class="page-content__spoiler js-spoiler-mobile-only" data-collapsed-height="22">
                                            <span class="page-content__spoiler-text">Региональный центр развития добровольчества "БлагоДарю" выражает огромную благодарность за отличную командную работы на обучающем проекте "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых встреч!</span>
                                        </span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">16:44, 12 декабря 2021</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>

                                    <span class="card__item card__header">
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
                                <a href="javascript:;" class="card card--pa-reviews-org">
                                <span class="card__item card__descr">
                                    <span class="card__descr-title">Организация раздельного сбора ТБО в корпусах и общежитиях университета ИТМО</span>
                                    <span class="card__rate-wrapper">
                                        <span class="card__rate-title">Оценка:</span>
                                        <span class="card__rate card__rate--noframe">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star-gray"></use>
                                            </svg>
                                            <svg class="icon">
                                                <use href="img/sprite.svg#star-gray"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <span class="card__action">
                                        <span class="card__action-data">
                                            <span class="card__action-item">
                                                <svg class="icon">
                                                    <use href="img/sprite.svg#calendar"></use>
                                                </svg>
                                                <span class="card__action-item-text">16:44, 12 декабря 2021</span>
                                            </span>
                                        </span>
                                    </span>
                                </span>

                                    <span class="card__item card__header">
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
                        </div>

						<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/pagination.php"); ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>

<?/*<div class="block-mb">
    <div class="container">
        <div class="details-volunteer-feedback">
            <div class="details-section__header">
                <div class="details-section__header_top">
                    <div class="details-section__arrow">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 6L2 6M2 6L7.24194 11M2 6L7.24193 1" stroke="#AEAFB0" stroke-width="1.5"
                                  stroke-linecap="round"/>
                        </svg>
                        <p>Все экодела</p>

                    </div>
                    <div class="details-section__btn">

                        <svg width="13" height="17" viewBox="0 0 13 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 3C1 1.89543 1.89543 1 3 1H9.5C10.6046 1 11.5 1.89543 11.5 3V15.5L6.25 11L1 15.5V3Z"
                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 5.5H2C1.44772 5.5 1 5.94772 1 6.5V14.5C1 15.0523 1.44772 15.5 2 15.5H12C12.5523 15.5 13 15.0523 13 14.5V6.5C13 5.94772 12.5523 5.5 12 5.5H11M7 10.5V1M7 1L9 3M7 1L5 3"
                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <svg width="18" height="15" viewBox="0 0 18 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 5.7037V8.2963M9 11.4074V11.9259M16.1451 12.5039L9.86824 1.51943C9.48435 0.847611 8.51565 0.84761 8.13176 1.51942L1.85494 12.5039C1.47399 13.1705 1.95536 14 2.72318 14H15.2768C16.0446 14 16.526 13.1705 16.1451 12.5039Z"
                                  stroke="#AEAFB0" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <div class="details-section__header_middle">
                    <div class="header__middle_img">
                        <img src="img/header__middle_img.png" alt="photo/volonteer">
                    </div>
                </div>
                <div class="details-section__header_bottom">
                    <div class="header__bottom_logo">
                        <img src="img/header__bottom_logo.png" alt="photo/logo">
                    </div>

                    <div class="header__bottom_btn">
                        <div class="header__bottom_id">
                            <div class="header__bottom_id_info">
                                <span class="nameplate-id">
                            <span class="nameplate-id__content">
                                <svg class="icon nameplate-id__content-icon">
                                    <use href="img/sprite.svg#scanner"></use>
                                </svg>
                                <span class="nameplate-id__content-text">ID: 17901</span>
                            </span>
                        </span>
                                <div class="flex-v-center" style="width: 150px;">

                                    <span class="success-check success-check--nameplate">
                    <span class="success-check__content">
                        <svg class="icon success-check__content-icon">
                            <use href="img/sprite.svg#success-check"></use>
                        </svg>
                        <span class="success-check__content-text">Верифицирован</span>
                    </span>
                </span>

                                </div>
                            </div>
                            <div class="header__bottom_id_name">Толстикова Алина Вадимовна</div>
                        </div>
                    </div>

                    <div class="header__bottom_btn_group">
                        <button class="btn-reset btn btn--fill">
                            <span class="btn__text">Пригласить</span>
                        </button>
                        <button class="btn-reset btn btn--fill btn--gray">
                            <span class="btn__text">Написать</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="body__main_menu">
                <div class="page-content-tabs-wrapper">
                    <div class="page-content-tabs swiper js-page-content-tabs swiper-initialized swiper-horizontal swiper-pointer-events">
                        <div class="page-content-tabs__nav swiper-wrapper" id="swiper-wrapper-f9f21068c21fb32bb"
                             aria-live="polite">
                            <div class="swiper-slide page-content-tabs__nav-item notice swiper-slide-active"
                                 role="group" aria-label="1 / 3" style="margin-right: 32px;">
                                <a href="details-volunteer.php#pageContentBody"
                                   class="page-content-tabs__link">
                                    <span class="page-content-tabs__link-content">О волонтере</span>
                                    <span class="page-content-tabs__link-num"></span>
                                </a>
                            </div>
                            <div class="swiper-slide page-content-tabs__nav-item notice swiper-slide-next"
                                 role="group" aria-label="2 / 3" style="margin-right: 32px;">
                                <a href="<a href=" details-volunteer-experience.php#pagecontentbody"#pagecontentbody"=""
                                class="page-content-tabs__link">
                                <span class="page-content-tabs__link-content">Опыт волонтерства 91</span>
                                <span class="page-content-tabs__link-num"></span>
                                </a>
                            </div>
                            <div class="swiper-slide page-content-tabs__nav-item notice" role="group"
                                 aria-label="3 / 3" style="margin-right: 32px;">
                                <a href="lk-org-create-ecodelo-task-settings.php#pageContentBody"
                                   class="page-content-tabs__link selected">
                                    <span class="page-content-tabs__link-content">Отзывы 54</span>
                                    <span class="page-content-tabs__link-num"></span>
                                </a>
                            </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
            <div class="body__main__content-cards">

                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body__main_card">
                    <div class="body__main_card-info">
                        <div class="body__main_card-title">Голосование за благоустройство общественных пространств
                        </div>
                        <div class="body__main_card-note">
                            <div class="body__main_card-note-text">Оценка:</div>
                            <div class="review__score_star">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starcolor.png" alt="">
                                <img src="img/review__score_starnocolor.png" alt="">
                            </div>
                        </div>
                        <div class="body__main_card-text">Региональный центр развития добровольчества "БлагоДарю"
                            выражает огромную благодарность за отличную командную работы на обучающем проекте
                            "Академия волонтёра". Мы будем рады видеть Вас на наших следующих мероприятиях! До новых
                            встреч!
                        </div>
                        <div class="body__main_card-date">
                        <span class="card__action-item">
                                            <svg class="icon">
                                                <use href="img/sprite.svg#calendar"></use>
                                            </svg>
                                            <span class="card__action-item-text">1–2 декабря 2021, 07:00 - 12:00</span>
                                        </span>
                        </div>
                    </div>
                    <div class="contacts__review">
                        <div class="contacts__review_img">
                            <div class="contacts__review_img-size">
                                <img class="review_img" src="img/contacts__review_img.png"
                                     alt="logo/img">
                            </div>
                            <h3 class="contacts__review_title">Ассоциация волонтерских центров</h3>
                            <div class="contacts__review_score">
                                <div class="review__score_count">
                                    <img src="img/review__score_starcolor.png" alt="">
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page_pagination">
                    <div class="page_pagination_img">
                        <a href="/"><img src="img/page_pagination_img.png" alt=""></a>
                    </div>
                    <div class="page_pagination_number">
                        <div class="page_pagination_num">1</div>
                        <div class="page_pagination_num active">2</div>
                        <div class="page_pagination_num">3</div>
                        <div class="page_pagination_num">4</div>
                        <div class="page_pagination_num">5</div>
                        <div class="page_pagination_num">...</div>
                        <div class="page_pagination_num">112</div>
                    </div>
                    <div class="page_pagination_img">
                        <a href="/"><img src="img/page_pagination_img-right.png" alt=""></a>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>*/?>
