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
				<h2><?= GetMessage('CONTACTS'); ?></h2>
				<span class="gray">© <?= date('Y'); ?> <?= Loc::getMessage("SITE_NAME"); ?></span>
			</div>

			<div class="footer-item__addr">
				<div class="">
					<p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS') ?></p>

					<p><?= GetMessage('OFFICE_HOURS'); ?></p>
					<p><?= sprint_options_get('OFFICE_HOURS') ?></p>
					<p><?= GetMessage('DISPATCHER\'S_WORKING_HOURS'); ?></p>
					<p><?= sprint_options_get('Dispatcher\'s working hours') ?></p><br><br>
				</div>
				<div class="">
					<a class="gray" id="privacy"><?= GetMessage('PRIVACY_POLICY'); ?></a>
				</div>
			</div>

			<div class="footer-item">
				<div class="">
					<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="gray bt"><?= sprint_options_get('NUMBER') ?></a><br>

					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
				</div>
				<a href="https://wptt.ru" target="_blank" class="gray"><?= GetMessage('WEBSITE_DEVELOPER') ?></a>
			</div>
		</div>
	</div>
	<!-- mobile -->
	<div class="container__mobfot">
		<div class="footer-mobile">
			<div class="">
				<h2><?= GetMessage('CONTACTS'); ?></h2>
				<br>
				<p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS'); ?></p>
				<p><?= GetMessage('OFFICE_HOURS_NAME') ?></p>
				<p><?= sprint_options_get('OFFICE_HOURS') ?></p>
				<p><?= GetMessage('DISPATCHER\'S_WORKING_HOURS'); ?></p>
				<p><?= sprint_options_get('Dispatcher\'s working hours') ?></p><br>
				<div class="content">
					<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="bt"><?= sprint_options_get('NUMBER') ?></a><br><br>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/facebook.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/youtube.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/instagram.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram.svg" alt=""></a>
					<a href="" target="_blank"><img src="<?= SITE_TEMPLATE_PATH ?>/images/vk.svg" alt=""></a>
				</div>
				<br>
				<a class="gray" id="privacy"><?= GetMessage('PRIVACY_POLICY'); ?></a>
				<p></p><br><br>
				<p class="gray">© <?= date('Y'); ?> <?= GetMessage('SITE_NAME'); ?></p>
				<a href="https://wptt.ru" target="_blank" class="gray"><?= GetMessage('WEBSITE_DEVELOPER'); ?></a>
			</div>
		</div>
	</div>
</footer>


<a class="back_to_top" title="><?= GetMessage('UP'); ?>"></a>
<?php
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/https://unpkg.com/swiper@7/swiper-bundle.min.js');
?>
<?php
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/main.js');
?>
<?php
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/aos.js');
?>
<script>
	AOS.init();
</script>

</body>

</html>