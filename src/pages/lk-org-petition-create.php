<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/header.php"); ?>

<div class="block-mb">
	<div class="page-content">
		<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-header.php"); ?>

		<div class="page-content__body">
			<div class="block-mb-md">
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/page-content-tabs.php"); ?>
			</div>

			<div class="container">
				<div class="page-content__container">
					<div class="page-content__main">
						<div class="block-mb-md">
                            <div class="h2 flex-all-center">Вы еще не создали ни одной петиции</div>
                        </div>
                        <div class="flex-all-center">
                            <button class="btn-reset btn btn--fill">
                                <svg class="icon btn__icon">
                                    <use href="img/sprite.svg#plus"></use>
                                </svg>
                                <span class="btn__text">Создать петицию</span>
                            </button>
                        </div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/" . "components/footer.php"); ?>