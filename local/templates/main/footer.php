<?

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

?>
<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

?>

<footer id="footer">
	<!--  desktop-->
	<div class="container container-footer">
		<div class="footer-content">
			<div class="footer-item">
				<h2><?= Loc::getMessage('CONTACTS'); ?></h2>
				<span class="gray">© <?= date('Y'); ?> <?= Loc::getMessage("SITE_NAME"); ?></span>
			</div>

			<div class="footer-item__addr">
				<div class="">
					<p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS') ?></p>

					<p><?= Loc::getMessage('OFFICE_HOURS'); ?></p>
					<p><?= sprint_options_get('OFFICE_HOURS') ?></p>
					<p><?= Loc::getMessage('DISPATCHER\'S_WORKING_HOURS'); ?></p>
					<p><?= sprint_options_get('Dispatcher\'s working hours') ?></p><br><br>
				</div>
				<div class="">
					<a class="gray" id="privacy"><?= Loc::getMessage('PRIVACY_POLICY'); ?></a>
				</div>
			</div>

			<div class="footer-item">
				<div class="">
					<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="gray bt"><?= sprint_options_get('NUMBER') ?></a><br>

					<a href="<?= sprint_options_get('LINK_TO_FASEBOOK') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_YOUTUBE') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_INSTAGRAM') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_TELEGRAM') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_VK') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
				</div>
				<a href="https://wptt.ru" target="_blank" class="gray"><?= Loc::getMessage('WEBSITE_DEVELOPER') ?></a>
			</div>
		</div>
	</div>
	<!-- mobile -->
	<div class="container__mobfot">
		<div class="footer-mobile">
			<div class="">
				<h2><?= Loc::getMessage('CONTACTS'); ?></h2>
				<br>
				<p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS'); ?></p>
				<p><?= Loc::getMessage('OFFICE_HOURS_NAME') ?></p>
				<p><?= sprint_options_get('OFFICE_HOURS') ?></p>
				<p><?= Loc::getMessage('DISPATCHER\'S_WORKING_HOURS'); ?></p>
				<p><?= sprint_options_get('Dispatcher\'s working hours') ?></p><br>
				<div class="content">
					<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="bt"><?= sprint_options_get('NUMBER') ?></a><br><br>
					<a href="<?= sprint_options_get('LINK_TO_FASEBOOK') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_YOUTUBE') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_INSTAGRAM') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_TELEGRAM') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
					<a href="<?= sprint_options_get('LINK_TO_VK') ?>" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
				</div>
				<br>
				<a class="gray" id="privacy"><?= Loc::getMessage('PRIVACY_POLICY'); ?></a>
				<p></p><br><br>
				<p class="gray">© <?= date('Y'); ?> <?= Loc::getMessage('SITE_NAME'); ?></p>
				<a href="https://wptt.ru" target="_blank" class="gray"><?= Loc::getMessage('WEBSITE_DEVELOPER'); ?></a>
			</div>
		</div>
	</div>
</footer>


<a class="back_to_top" title="><?= Loc::getMessage('UP'); ?>"></a>
</body>

</html>