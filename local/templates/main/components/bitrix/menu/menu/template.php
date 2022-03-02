<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="header-menu">
	<? if (!empty($arResult)) : ?>
		<ul class="left-menu">
			<? foreach ($arResult as $arItem) : ?>
				<li class="menu-item"><a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a></li>
			<? endforeach ?>
		</ul>
	<? endif ?>
</div>