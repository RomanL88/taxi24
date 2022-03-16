<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (count($arResult["ITEMS"]) > 0) : ?>
	<div class="news-list">
		<b><?= $arResult["NAME"] ?></b>
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<? if (is_array($arItem["PREVIEW_PICTURE"])) : ?>
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["NAME"] ?>" title="<?= $arItem["NAME"] ?>" /></a>
			<? else : ?>
				&nbsp;
			<? endif ?>
		<? endforeach; ?>
		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
		<? endforeach; ?>
	</div>
<? endif ?>