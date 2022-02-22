<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? if ($arResult["ITEMS"]) : ?>
	<div class="swiper">
		<div class="swiper-pagination">
		</div>
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper" style="max-width: 1440px">
			<!-- Slides -->
			<div class="swiper-slide">
				<div class="slide">
					<div class="news-list">
						<? foreach ($arResult["ITEMS"] as $arItem) : ?>
							<div class="slide">
								<img src="/local/templates/main/images/slider/slide1.png" alt="">
							</div>
						<? endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	<? endif; ?>
	</div>