<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;

/*  подключаю стили  */
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
Asset::getInstance()
	->addString('<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">');
Asset::getInstance()
	->addString('<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">');
Asset::getInstance()
	->addString('<link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet">');
	<!-- корректно подключаю скрипты -->

	/* подключаю скрипты */
Asset::getInstance()->addJs("https://unpkg.com/swiper@7/swiper-bundle.min.js");
Asset::getInstance()->addJs("js/main.js");
Asset::getInstance()->addJs("js/aos.js");
Asset::getInstance()->addJs(AOS . init());
Asset::getInstance()->addJs("https://unpkg.com/swiper@7/swiper-bundle.min.js");

?>

<!-- подключаю страницу -->

<!doctype html>
<html lang="ru">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php $APPLICATION->ShowTitle(); ?></title>
	<?php $APPLICATION->ShowHead(); //выведет все нужные теги
	?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel();
		?>
	</div>
	<header class="header-wrapper">
		<div class="container header-container">
			<div class="header-logo animate__animated animate__lightSpeedInLeft ">
			<img src="<?= SITE_TEMPLATE_PATH; ?>/images/logo.svg" alt="">
			</div>
			<!-- menu -->
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"menu",
				array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"COMPONENT_TEMPLATE" => "menu"
				),
				false
			);  ?>
			<? $APPLICATION->IncludeComponent(
				"bitrix:menu",
				"menuForMobile",
				array(
					"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
					"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
					"DELAY" => "N",	// Откладывать выполнение шаблона меню
					"MAX_LEVEL" => "1",	// Уровень вложенности меню
					"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "A",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
					"COMPONENT_TEMPLATE" => "menu"
				),
				false
			);  ?>
			<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="roundBtn"><?= sprint_options_get('NUMBER') ?></a><br>
			<!-- menu -->
		</div>
	</header>

	<!-- modals -->
	<div id="modal-container">
		<div class="modal-background">
			<div class="modal">
				<div class="container">
					<h2 id="modal_title">inner</h2>
					<p id="modal_text">inner</p>
				</div>
			</div>
		</div>
	</div>