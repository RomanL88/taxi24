<?php

use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Страница 1')
    ->addTab('О компании')
    ->addOption('ADDRESS', [
        'TITLE'   => 'Расположение офиса',
        'DEFAULT' => 'г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205',
        'WIDTH'   => '400',
    ])
    ->addTab('О компании')
    ->addOption('NUMBER', [
        'TITLE'   => 'Телефон компании',
        'DEFAULT' => '+7 (999) 123-45-69',
        'WIDTH'   => '400',
    ])
    ->addTab('О компании')
    ->addOption('LINK_TO_SOCIAL_NETWORK', [
        'TITLE'   => 'ссылки на соцсети',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addTab('О компании')
    ->addOption('OFFICE_HOURS', [
        'TITLE'   => 'Время работы офиса',
        'DEFAULT' => 'Пн-пт с 10:00 до 19:00',
        'WIDTH'   => '400',
    ])
    ->addTab('О компании')
    ->addOption('Dispatcher\'s working hours', [
        'TITLE'   => 'Время работы диспетчерской',
        'DEFAULT' => 'Время работы диспетчерской: с 9:00 до 21:00, без выходных',
        'WIDTH'   => '400',
    ]);
