<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"slider_main",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "index",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "20",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "ACTIVE_FROM",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC",
			"STRICT_SECTION_CHECK" => "N"
		)
	); ?> <? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"about_block",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"COMPONENT_TEMPLATE" => "about_block",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array(0 => "", 1 => "",),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "2",
					"IBLOCK_TYPE" => "content",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "999",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array(0 => "", 1 => "",),
					"SET_BROWSER_TITLE" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "N",
					"SET_META_KEYWORDS" => "N",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "N",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "ACTIVE_FROM",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC",
					"STRICT_SECTION_CHECK" => "N"
				)
			); ?> <section class="step" id="get_started">
	<div class="container">
		<h2 class="text-center step_h2">Начать работать через 30 минут!</h2>
		<div class="content">
			<div data-aos="zoom-out" class="step-item">
				<div class="round_num">
					01
				</div>
				<span>Оставьте заявку<br>
					на сайте</span>
			</div>
			<div class="line1">
				<img src="/local/templates/main/images/line1.svg" alt="">
			</div>
			<div data-aos="zoom-out" class="step-item">
				<div class="round_num round_num__left">
					02
				</div>
				<span>Мы перезвоним<br>
					и уточним все детали</span>
			</div>
			<div class="line2">
				<img src="/local/templates/main/images/line2.svg" alt="">
			</div>
			<div data-aos="zoom-out" class="step-item">
				<div class="round_num">
					03
				</div>
				<span>Оформим<br>
					все документы</span>
			</div>
			<div class="line3">
				<img src="/local/templates/main/images/line3.svg" alt="">
			</div>
			<div data-aos="zoom-out" class="step-item">
				<div class="round_num round_num__none">
					04
				</div>
				<span>Можете приступать<br>
					к работе</span>
			</div>
		</div>
	</div>
</section>
<section class="conditions">
	<div class="container container__wide__lightpink m-1">
		<div class="content_cond">
			<h4 class="h2-m-none">Условия работы</h4>
			<div data-aos="fade-right" class="cond-item">
				<h4>Условия работы</h4>
				<div class="img_container">
					<img src="/local/templates/main/images/card-6.png" alt="">
				</div>
				<div class="yandex_bottom">
					<img src="/local/templates/main/images/ya.png" alt="">
					Подключаем ко всем тарифам Яндекс.Про
				</div>
			</div>
			<div class="conditions-cards">
				<div data-aos="fade-down-left" class="condition-item">
					<p>
						2,5% за заявку
					</p>
					<p>
						75 ₽ в сутки
					</p>
					<br>
					<p style="max-width: 28.4rem">
						При выполнении 700 заявок в текущем месяце, в следующем месяце:
					</p>
					<ul>
						<li>2% за заявку</li>
						<li>50 ₽ в сутки</li>
					</ul>
					<p>
					</p>
				</div>
				<div data-aos="fade-left" class="condition-item">
					<p>
						Выплаты денежных средств производятся на карту любого банка моментально через приложение Jump Taxi. Комиссия за выплату всего 2%
					</p>
				</div>
				<div data-aos="fade-up-left" class="condition-item">
					Никаких дополнительных комиссий
					<p>
						Комиссия таксопарка:
					</p>
					<ul>
						<li>За покупку смены 0 ₽;</li>
						<li>С бонусов водителя 0 ₽;</li>
						<li>С чаевых водителя 0 ₽.</li>
					</ul>
					<p>
					</p>
				</div>
				<div class="condition-item_mobile">
					<div class="yandex_bottom">
						<img src="/local/templates/main/images/ya.png" alt="">
						Подключаем ко всем тарифам Яндекс.Про
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="lottery">
	<div class="container">
		<div data-aos="fade-up" class="card-container">
			<div class="card-item">
				<div>
					<h2 id="lottery_h2">Участвуйте в розыгрыше ценных призов</h2>
				</div>
				<div class="item-desc item-desc__other">
					<a href="#feedback" class="btn btn__orange">Участвовать</a> <span class="btn" id="conditions">Условия розыгрыша</span>
				</div>
			</div>
			<div class="card-image">
				<img src="/local/templates/main/images/card-4.png" alt="">
			</div>
		</div>
		<!---->
	</div>
</section>
<section class="winner_prize" id="winner_prize">
	<div class="container container__winner">
		<div data-aos="fade-right" class="prizes">
			<h2>Призы</h2>
			<div class="prizes-item">
				<img src="/local/templates/main/images/iphone.png" alt="">
				<div class="prizes-item__container">
					<h3>Iphone 12 Pro</h3>
					128 ГБ
				</div>
			</div>
			<div class="prizes-item">
				<img src="/local/templates/main/images/videorec.png" alt="">
				<div class="prizes-item__container">
					<h3>Видеорегистратор</h3>
					С умным ассистентом
				</div>
			</div>
			<div class="prizes-item">
				<img src="/local/templates/main/images/lights.png" alt="">
				<div class="prizes-item__container">
					<h3>Фары</h3>
					Универсальные
				</div>
			</div>
			<div class="prizes-item">
				<img src="/local/templates/main/images/fuilstation.png" alt="">
				<div class="prizes-item__container">
					<h3>Бесплатные заправки</h3>
					Целую неделю
				</div>
			</div>
		</div>
		<div data-aos="fade-left" class="winner">
			<h2 class="text-center__ml-0">Победитель розыгрыша в сентябре</h2>
			<div class="winner-img">
				<img src="/local/templates/main/images/winner.png" alt="">
			</div>
			<div class="winner_name">
				Иван И.
			</div>
			<div class="winner_desc">
				<div>
					Поздравляем Ивана!
				</div>
				<div>
					Приз: Iphone 12 Pro
				</div>
			</div>
		</div>
		<div class="back-ground">
		</div>
	</div>
</section>
<section class="calc" id="payment">
	<div class="container container__wide">
		<div class="calc-wrapper">
			<div class="calc-wrap">
				<h2>Калькулятор</h2>
				<p>
					Часов в день: <span id="day__calc">6</span>
				</p>
				<div class="range">
					<input id="hours" type="range" min="1" max="10" value="6" step="1">
					<div class="ticks">
						<!-- You could generate the ticks based on your min, max & step values. --> <span class="tick">1</span> <span class="tick">2</span> <span class="tick">3</span> <span class="tick">4</span> <span class="tick">5</span> <span class="tick">6</span> <span class="tick">7</span> <span class="tick">8</span> <span class="tick">9</span> <span class="tick">10</span>
					</div>
				</div>
				<!--  -->
				<p>
					Дней в неделю: <span id="week_day">7</span>
				</p>
				<div class="range">
					<input id="weeks" type="range" min="1" max="7" value="7" step="1">
					<div class="ticks">
						<!-- You could generate the ticks based on your min, max & step values. --> <span class="tick">1</span> <span class="tick">2</span> <span class="tick">3</span> <span class="tick">4</span> <span class="tick">5</span> <span class="tick">6</span> <span class="tick">7</span>
					</div>
				</div>
				<!--  -->
				<p>
					Расход бензина вашего авто на 100 км: <span id="fuel__100">20</span>
				</p>
				<div class="range">
					<input id="fuel" type="range" min="1" max="7" value="6" step="1">
					<div class="ticks">
						<!-- You could generate the ticks based on your min, max & step values. --> <span class="tick">1</span> <span class="tick">4</span> <span class="tick">8</span> <span class="tick">12</span> <span class="tick">16</span> <span class="tick">20</span> <span class="tick">24</span>
					</div>
				</div>
				<p>
					Примерный заработок в месяц
				</p>
				<br>
				<span id="summ">8400</span><span id="summ"> ₽</span> <a href="" class="btn btn__orange">Стать партнером</a>
				<p id="bottom_text">
					Гарантированный заработок от 8400 руб в день*
				</p>
			</div>
			<div class="calc-content">
				<h2>Рассчитайте свой примерный заработок</h2>
				Ваш заработок в месяц будет зависеть от следующих условий:
				<div class="calc_desc">
					<ul>
						<li>как много дней в неделю и часов в день вы на линии</li>
						<li>тариф, на котором вы работаете — выше тариф, больше доход;</li>
						<li>бонусы от компании и чаевые от клиентов</li>
					</ul>
				</div>
				<p>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="lottery">
	<div class="container">
		<div data-aos="fade-up" class="card-container card-container__no_left card-container__lottery">
			<div class="card-image">
				<img src="/local/templates/main/images/card-5.png" class="tender" alt="">
			</div>
			<div class="card-item card-item__vcenter">
				<div>
					<h2 style="max-width: 32.3rem;">Участвуйте в конкурсе и станьте лучшим водителем месяца</h2>
				</div>
				<div class="item-desc item-desc__other">
					<a href="#feedback" class="btn btn__orange">Участвовать</a> <span class="btn" id="conditions">Условия розыгрыша</span>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="partner">
	<div class="container w-100">
		<div class="card-container card-container__noBg card-container__taxi">
			<div data-aos="zoom-in-right" class="card-item__partner">
				<h2>Мы являемся<br>
					официальным партнером<br>
					Яндекс.Такси</h2>
			</div>
			<div data-aos="zoom-in-left" class="card-taxi">
				<img src="/local/templates/main/images/taxi_bg.png" alt="">
			</div>
		</div>
	</div>
</section>
<section class="question_answer" id="question_answer">
	<div class="container">
		<h2 class="text-center_qa">Ответы на вопросы</h2>
		<div class="accordion">
			<div class="accordion_1">
				<ul class="accordion__items">
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какой автомобиль подходит для работы?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какие требования к водителю?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Легальна ли ваша работа?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какие условия для работы на авто таксопарка?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какие требования к моему телефону? Как я буду подключен к таксопарку?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Могу ли я сам выбирать себе пассажира? Отказываться от пассажира? Есть ли штрафы за это?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="accordion_2">
				<ul class="accordion__items">
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Как я получу оплату за работу?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какое количество заказов я буду получать в день?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какое количество заказов я буду получать в день?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Смогу ли подрабатывать у вас, имея основную работу?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Какие выгоды от долгосрочного сотрудничества я получу?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
					<li class="accordion__item">
						<div class="accordion__title">
							<h3>Кто будет нести ответственность за поломку предоставленного для работы авто?</h3>
							<span class="accordion__icon"></span>
						</div>
						<div class="accordion__content">
							<p>
								У нас дружный коллектив, прозрачные условия работы, новые машины для аренды оснащенные световыми коробами, видео-регистраторами, детскими креслами и газовым оборудованием
							</p>
						</div>
					</li>
				</ul>
				<div>
					<button id="button" class="more_btn">Показать еще</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer-form" id="feedback">
	<div class="container__form">
		<div data-aos="zoom-in-left" class="form">
			<h2>Оставляйте заявку
				<p>
					на подключение к Яндекс.Такси
				</p>
			</h2>
			<br>
			<br>
			<form class="feedback_form" name="feedback" method="POST" action="/feedback.php">
				<div>
					Имя
				</div>
				<input type="text" name="name" placeholder="Введите имя" required="required"> <br>
				<div>
					Номер телефона
				</div>
				<input value="" class="tel" name="phone" id="phone" placeholder="Введите номер телефона" required="required">
				<div class="checkbox_form">
					<input type="checkbox" name="chk">
					<div class="conf_text">
						<p>
							Даю согласие на обработку
						</p>
						<a>персональных данных</a>
					</div>
				</div>
				<br>
				<div>
					<input class="form_btn" type="submit" name="submit_btn" value="Отправить заявку">
				</div>
			</form>
		</div>
	</div>
	<div class="container-img">
		<img src="/images/footer-m.png" class="mobile-footer-img" alt="">
		<div class="footer-img" alt="">
		</div>
	</div>
</section>

<br>
<? $APPLICATION->IncludeComponent(
	"bitrix:form",
	"main-form",
	array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "N",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST[RESULT_ID],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "N",
		"SHOW_LIST_PAGE" => "N",
		"SHOW_STATUS" => "N",
		"SHOW_VIEW_PAGE" => "N",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"WEB_FORM_ID" => "6",
		"COMPONENT_TEMPLATE" => "main-form",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
); ?><br>
<br><?
	require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
	?>