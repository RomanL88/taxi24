<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;

// подключаю стили 

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
Asset::getInstance()
	->addString('<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">');
Asset::getInstance()
	->addString('<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">');
Asset::getInstance()
	->addString('<link href="https://unpkg.com/swiper@7/swiper-bundle.min.css" rel="stylesheet">');
?>
<!-- <!DOCTYPE html>
<html>

<head>
	<? //$APPLICATION->ShowHead(); 
	?>
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
</head>

<body>
	 -->

<!-- подключаю страницу -->

<!doctype html>
<html lang="ru">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">




	<?php /*$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . './css/aos.css'); */ ?>


	<script src="<? CUtil::GetAdditionalFileURL('https://unpkg.com/swiper@7/swiper-bundle.min.js') ?>"></script>
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
				<img src="/images/logo.svg" alt="">
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
					"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
						0 => "",
					),
					"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
					"MENU_CACHE_TYPE" => "N",	// Тип кеширования
					"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
					"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
					"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
				),
				false
			); ?>
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

	<div class="sub_header">
		<!-- Slider main container -->
		<div class="swiper">
			<div class="swiper-pagination"></div>
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper" style="max-width: 1440px">
				<!-- Slides -->
				<!--      <div class="swiper-slide">-->
				<!--        <div class="slide-1">-->
				<!--          <div class="col1">-->
				<!--            <span>Работа водителем такси в Уфе</span>-->
				<!--            <h2>Каждый пятый день работы – без процентов и комиссий таксопарка</h2>-->
				<!--            <button class="btn_slide_partner">Стать партнером</button>-->
				<!--            <br>-->
				<!--            <button class="btn_slide_ya"><img src="/images/ya_slider.png" alt="">Официальный партнер Яндекс.Такси</button>-->
				<!--          </div>-->
				<!--          <div class="col2">-->
				<!--            <img src="/images/banner-1.png" alt="">-->
				<!--          </div>-->
				<!--        </div>-->
				<!--      </div>-->
				<div class="swiper-slide">
					<div class="slide">
						<img src="/images/slider/slide1.png" alt="">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="slide">
						<img src="/images/slider/slide1.png" alt="">
					</div>
				</div>
			</div>

			<!-- If we need navigation buttons -->
			<!--    <div class="swiper-button-prev"></div>-->
			<!--    <div class="swiper-button-next"></div>-->

			<!-- If we need scrollbar -->
			<!--    <div class="swiper-scrollbar"></div>-->
		</div>
	</div>