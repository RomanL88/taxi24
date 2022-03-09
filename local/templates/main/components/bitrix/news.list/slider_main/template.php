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
	<div class="sub_header">
		<!-- Slider main container -->
		<div class="swiper">
			<div class="swiper-pagination"></div>
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper swiper-desktop" style="max-width: 1440px">
				<!-- Slides -->
				<? foreach ($arResult["ITEMS"] as $arItem) : ?>
					<div class="swiper-slide">
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
							<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" />
					</div>
			</div>
		<? endforeach; ?>
		</div>
	</div>
	</div>
<? endif; ?>