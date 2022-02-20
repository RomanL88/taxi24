<div class="header-menu">
	<ul>
		<li class="menu-item"><a href="<?= '/about/index.php' ?>">О таксопарке</a></li>
		<li class="menu-item"><a href="<?= '/get_started/index.php' ?>">Начать работать</a></li>
		<li class="menu-item"><a href="<?= '/payment/index.php' ?>">Расчет зарплаты</a></li>
		<li class="menu-item"><a href="<?= '/question_answer/index.php' ?>">Вопросы и ответы</a></li>
		<li class="menu-item"><a href="<?= '/feedback/index.php' ?>">Контакты</a></li>
	</ul>
	<a class="roundBtn" href="tel:<?= sprint_options_get('NUMBER') ?>"><?= sprint_options_get('NUMBER') ?></a>
	<div class="burger">
		<input type="checkbox" id="active">
		<label for="active" class="menu-btn"><span></span></label>
		<label for="active" class="close"></label>
		<div class="wrapper">
			<ul>
				<li class="menu-item_burger"><a href="<?= '/about/index.php' ?>">О таксопарке</a></li>
				<li class="menu-item_burger"><a href="<?= '/get_started/index.php' ?>">Начать работать</a></li>
				<li class="menu-item_burger"><a href="<?= '/payment/index.php' ?>">Расчет зарплаты</a></li>
				<li class="menu-item_burger"><a href="<?= '/question_answer/index.php' ?>">Вопросы и ответы</a></li>
				<li class="menu-item_burger"><a href="<?= '/feedback/index.php' ?>">Контакты</a></li>
			</ul>
		</div>
	</div>
</div>