<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
    <div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

        <div class="page-content__body">
            <div class="block-mb-md">
                <?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
            </div>

            <div class="container">
                <div class="block-mb-md">
                    <div class="banner banner--dark-bg" style="background-image: url('img/banner.png'); background-size: 100%; background-color: var(--accent-ceruleanblue1-color);">
                        <!--<picture>
                            <source srcset="img/banner.webp" type="image/webp">
                            <img
                                    loading="lazy"
                                    src="img/banner.png"
                                    class="image"
                                    width="1280"
                                    height="220"
                                    alt="Banner"
                            >
                        </picture>-->
                        <div class="banner__content">
                            <div class="banner__title h4">XI Международный форум «Арктика: настоящее и будущее»</div>
                            <button class="btn-reset btn btn--white">
                                <span class="btn__text">Присоединиться к проекту</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="page-content__container page-content__container--profile">
                    <div class="page-content__preview">
                        <div class="page-content__video">
                            <?/*picture - загулшка под видео
                            <video src=""></video>*/?>
                            <picture>
                                <source srcset="img/profile-video.webp" type="image/webp">
                                <img
                                    loading="lazy"
                                    src="img/profile-video.png"
                                    class="image"
                                    width="810"
                                    height="455"
                                    alt="profile-video"
                                >
                            </picture>
                        </div>
                    </div>
                    <div class="page-content__main">


                        <!---->
                        profile content =)
                        <!---->
                    </div>
                    <div class="page-content__sidebar">sidebar</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>
