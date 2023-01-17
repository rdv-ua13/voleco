<div class="container page-content-tabs-container">
	<div class="page-content-tabs-wrapper">
		<div class="page-content-tabs swiper js-page-content-tabs">
			<div class="page-content-tabs__nav swiper-wrapper">
				<? $arMenu = array (
					"lk-vol-profile.php" => "Профиль",
					"lk-vol-request.php" => "Заявки и приглашения",
					"lk-vol-events.php" => "Экодела",
					"lk-vol-reviews-vol.php" => "Рейтинг и отзывы",
					"lk-vol-favorites-org.php" => "Избранное",
					"lk-vol-archive-task.php" => "Архив",
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
		<div class="page-content-tabs-actions-create">
			<button class="btn-reset btn btn--fill btn--mini">
				<svg class="icon btn__icon">
					<use href="img/sprite.svg#plus"></use>
				</svg>
				<span class="btn__text">Создать</span>
			</button>
		</div>
	</div>
</div>