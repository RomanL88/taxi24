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
<?
echo '<pre>';
var_dump($arParams["USE_SHARE"]);
echo '</pre>';
?>
<div class="news-detail">
	<? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])) : ?>
		<img class="detail_picture" border="0" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>" height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>" />
	<? endif ?>
	<? if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]) : ?>
		<h3><?= $arResult["NAME"] ?></h3>
	<? endif; ?>
	<? if ($arResult["NAV_RESULT"]) : ?>

		<? if ($arParams["DISPLAY_BOTTOM_PAGER"]) : ?><br /><?= $arResult["NAV_STRING"] ?><? endif; ?>
		<? elseif ($arResult["DETAIL_TEXT"] <> '') : ?>
			<? echo $arResult["DETAIL_TEXT"]; ?>
		<? else : ?>
			<? echo $arResult["PREVIEW_TEXT"]; ?>
		<? endif ?>
		<div style="clear:both"></div>
		<br />

		<?
		foreach ($arResult["DISPLAY_PROPERTIES"] as $pid => $arProperty) : ?>

			<?= $arProperty["NAME"] ?>:&nbsp;
			<? if (is_array($arProperty["DISPLAY_VALUE"])) : ?>
				<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
			<? else : ?>
				<?= $arProperty["DISPLAY_VALUE"]; ?>
			<? endif ?>
			<br />
		<? endforeach;
		?>
</div>

<!-- вывожу ссылку на загруженный файл -->
<a href="<?= 'https://taxi24.local' . CFile::GetPath($arResult["PROPERTIES"]["ATT_FILE"]["VALUE"]); ?>" download>скачать файл</a>