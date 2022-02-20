<?
/* if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die(); */
?>
<footer id="footer">
	<!--  desktop-->
	<div class="container container-footer">
		<div class="footer-content">
			<div class="footer-item">
				<h2>Контакты</h2>
				<span class="gray">© 2021 ТКМ парк такси</span>
			</div>

			<div class="footer-item__addr">
				<div class="">
					<!-- <p style="padding-bottom: 24px">г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205</p> -->
					<p style="padding-bottom: 24px"><?= sprint_options_get('ADDRESS') ?></p>

					<p>Время работы офиса:</p>
					<!-- <p>Пн-пт с 10:00 до 19:00</p> -->
					<p><?= sprint_options_get('OFFICE_HOURS') ?></p>
					<p>Время работы диспетчерской:</p>
					<!-- <p>с 9:00 до 21:00, без выходных</p><br><br> -->
					<p><?= sprint_options_get('Dispatcher\'s working hours') ?></p><br><br>
				</div>
				<div class="">
					<a class="gray" id="privacy">Политика конфиденциальности</a>
				</div>
			</div>

			<div class="footer-item">
				<div class="">
					<!-- 					<a href="tel:+79991234569" class="gray bt">+7 (999) 123-45-69</a><br>
 -->
					<a href="tel:<?= sprint_options_get('NUMBER') ?>" class="gray bt"><?= sprint_options_get('NUMBER') ?></a><br>

					<a href="" target="_blank"><img src="/images/facebook.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/youtube.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/instagram.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/telegram.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/vk.svg" alt=""></a>
				</div>
				<a href="https://wptt.ru" target="_blank" class="gray">Разработка сайта — Вебпространство</a>
			</div>
		</div>
	</div>
	<!-- mobile -->
	<div class="container__mobfot">
		<div class="footer-mobile">
			<div class="">
				<h2>Контакты</h2>
				<br>
				<p style="padding-bottom: 24px">г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205</p>
				<p>Время работы офиса:</p>
				<p>Пн-пт с 10:00 до 19:00</p>
				<p>Время работы диспетчерской:</p>
				<p>с 9:00 до 21:00, без выходных</p><br>
				<div class="content">
					<a href="tel:+79991234569" class="bt">+7 (999) 123-45-69</a><br><br>
					<a href="" target="_blank"><img src="/images/facebook.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/youtube.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/instagram.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/telegram.svg" alt=""></a>
					<a href="" target="_blank"><img src="/images/vk.svg" alt=""></a>
				</div>
				<br>
				<a class="gray" id="privacy">Политика конфиденциальности</a>
				<p></p><br><br>
				<p class="gray">© 2021 ТКМ парк такси</p>
				<a href="https://wptt.ru" target="_blank" class="gray">Разработка сайта — Вебпространство</a>
			</div>
		</div>
	</div>
</footer>

<a class="back_to_top" title="Наверх"></a>
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