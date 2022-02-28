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

<section class="privilege" id="about">
	<div class="container">
		<?php $i = 1;
		echo '<pre>';
		var_dump($arResult["ITEMS"]);
		echo '</pre>';

		?>
		<h2 class="text-center"><a href="/about/">С нами удобно и выгодно</a></h2>
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<?php $arItem['ADDED_COUNTER'] = $i;
			$i++; ?>
			<div data-aos="fade-down" class="card-container" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class=" card-item">
					<div class="item-headline">
						<!-- <span>01.</span> -->
						<span><?= counter($arItem) ?></span>
						<h2><?= $arItem["NAME"] ?></h2>
					</div>
					<div class="item-desc">
						<span><?= $arItem["PREVIEW_TEXT"]; ?></span>
					</div>
				</div>
				<div class="card-image">
					<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>">
				</div>



			</div>
		<? endforeach; ?>
	</div>
</section>