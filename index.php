<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><div class="swiper">
	<div class="swiper-pagination">
	</div>
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
				<img src="/local/templates/main/images/slider/slide1.png" alt="">
			</div>
		</div>
		<div class="swiper-slide">
			<div class="slide">
				<img src="/local/templates/main/images/slider/slide1.png" alt="">
			</div>
		</div>
	</div>
	<!-- If we need navigation buttons -->
	<!--    <div class="swiper-button-prev"></div>-->
	<!--    <div class="swiper-button-next"></div>-->
	<!-- If we need scrollbar -->
	<!--    <div class="swiper-scrollbar"></div>-->
</div>
<section class="privilege" id="about">
	<h2 class="text-center"></h2>
	<h2 class="text-center">С нами удобно и выгодно</h2>
	<!-- слайдер -->
</section> <? $APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"about_top_slider",
				array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"AJAX_MODE" => "N",	// Включить режим AJAX
					"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
					"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
					"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
					"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"CACHE_GROUPS" => "N",	// Учитывать права доступа
					"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
					"CACHE_TYPE" => "N",	// Тип кеширования
					"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
					"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"DISPLAY_DATE" => "N",	// Выводить дату элемента
					"DISPLAY_NAME" => "N",	// Выводить название элемента
					"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
					"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"FIELD_CODE" => array(	// Поля
						0 => "PREVIEW_TEXT",
						1 => "Название",
						2 => "Описание для анонса",
						3 => "Картинка для анонса",
						4 => "Детальное описание",
						5 => "",
					),
					"FILTER_NAME" => "",	// Фильтр
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
					"IBLOCK_ID" => "1",	// Код информационного блока
					"IBLOCK_TYPE" => "index",	// Тип информационного блока (используется только для проверки)
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
					"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
					"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
					"NEWS_COUNT" => "20",	// Количество новостей на странице
					"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
					"PAGER_TITLE" => "Новости",	// Название категорий
					"PARENT_SECTION" => "",	// ID раздела
					"PARENT_SECTION_CODE" => "",	// Код раздела
					"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
					"PROPERTY_CODE" => array(	// Свойства
						0 => "url",
						1 => "[url] Ссылка",
						2 => "",
					),
					"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
					"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
					"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
					"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
					"SET_STATUS_404" => "N",	// Устанавливать статус 404
					"SET_TITLE" => "N",	// Устанавливать заголовок страницы
					"SHOW_404" => "N",	// Показ специальной страницы
					"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
					"SORT_BY2" => "",	// Поле для второй сортировки новостей
					"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
					"SORT_ORDER2" => "",	// Направление для второй сортировки новостей
					"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
				),
				false
			); ?><br>
<!---->
<div class="card-container card-container__noBg_reverse">
	<div class="card-item">
		<div data-aos="fade-right" class="item-headline">
			02.
			<h2>Прозрачные <br>
				условия работы</h2>
		</div>
		<div data-aos="fade-left" class="item-desc">
			<span>Прямая связь с директором таксопарка, новые машины для аренды, акции, розыгрыши ценных призов и бесплатных дней<br>
				аренды</span>
		</div>
	</div>
	<div data-aos="fade-right" class="card-image">
		<img src="/local/templates/main/images/card-2.png" alt="">
	</div>
</div>
<!---->
<div data-aos="fade-up" class="card-container">
	<div class="card-item__privilege">
		<div class="item-headline">
			03.
			<h2 style="max-width: 24rem">Выгода от долгосрочного сотрудничества</h2>
		</div>
		<div class="item-desc">
			<span>Специальные условия для водителей<br>
				и поощрительные бонусы при долгосрочном сотрудничестве</span>
		</div>
	</div>
	<div class="card-image">
		<img src="/local/templates/main/images/card-3.png" alt="">
	</div>
</div>

<!---->
</section>
<section class="step" id="get_started">
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
					<input class="form_btn" type="submit" name="submit_btn" value="Отправить заявку"><br>
					<br>
				</div>
			</form>
		</div>
	</div>
	<?
	require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
	?>