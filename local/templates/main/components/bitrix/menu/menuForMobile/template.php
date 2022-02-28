<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="header-menu">
	<? if (!empty($arResult)) : ?>
		<div class="burger">
			<input type="checkbox" id="active">
			<label for="active" class="menu-btn"><span></span></label>
			<label for="active" class="close"></label>
			<div class="wrapper">
				<ul class="left-menu">
					<?
					foreach ($arResult as $arItem) :
					?>
						<li class="menu-item"><a href="<?= $arItem['LINK'] ?>"><?= $arItem['TEXT'] ?></a></li>

					<? endforeach ?>

				</ul>
			</div>
		</div>
	<? endif ?>
</div>