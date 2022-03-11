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
<!-- подключаю языковые файлы -->
<?php

use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile(__FILE__);
?>

<section class="privilege" id="about">
	<div class="container">
		<?php
		/* echo '<pre>';
		var_dump($arResult);
		echo '</pre>'; */
		?>
		<h2 class="text-center"><a href="<?= $arResult["LIST_PAGE_URL"]; ?>"><?= Loc::getMessage("WHY_ARE_WE"); ?></a></h2>
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>


			<div data-aos="<?= $arItem["AOS_CONTAINER"]; ?>" class="<?= $arItem["CLASS_BLOCK"]; ?>" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
				<div class="card-item">
					<div data-aos="<?= $arItem["AOS_HEADING"]; ?>" class="item-headline">
						<span><?= $arItem["NUMBER"]; ?></span>
						<h2><?= $arItem["NAME"]; ?></h2>
					</div>
					<div data-aos="<?= $arItem["AOS_DESCRIPTION"]; ?>" class="item-desc">
						<span><?= $arItem["PREVIEW_TEXT"]; ?></span>
					</div>
				</div>
				<div data-aos="<?= $arItem["AOS_IMAGE"]; ?>" class="card-image">
					<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["NAME"] ?>">
				</div>
			</div>
		<? endforeach; ?>
	</div>
</section>