<?php

use Sprint\Options\Builder\Builder;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Страница 1')
    ->addTab('Местонахождение компании')
    ->addOption('ADDRESS', [
        'TITLE'   => 'Расположение офиса',
        'DEFAULT' => 'г. Уфа, ул. Тестовая, д. 28, стр. 1, офис 205',
        'WIDTH'   => '400',
    ])
    ->addOption('NUMBER', [
        'TITLE'   => 'Телефон компании',
        'DEFAULT' => '+7 (999) 123-45-69',
        'WIDTH'   => '400',
    ])
    ->addTab('Ссылки на соцсети')
    ->addOption('LINK_TO_FASEBOOK', [
        'TITLE'   => 'Ссылка на facebook',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addOption('LINK_TO_YOUTUBE', [
        'TITLE'   => 'Ссылка на youtube',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addOption('LINK_TO_INSTAGRAM', [
        'TITLE'   => 'Ссылка на instagram',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addOption('LINK_TO_TELEGRAM', [
        'TITLE'   => 'Ссылка на telegram',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addOption('LINK_TO_VK', [
        'TITLE'   => 'Ссылка на vk',
        'DEFAULT' => '',
        'WIDTH'   => '400',
    ])
    ->addTab('Время работы')
    ->addOption('OFFICE_HOURS', [
        'TITLE'   => 'Время работы офиса',
        'DEFAULT' => 'Пн-пт с 10:00 до 19:00',
        'WIDTH'   => '400',
    ])
    ->addOption('Dispatcher\'s working hours', [
        'TITLE'   => 'Время работы диспетчерской',
        'DEFAULT' => 'с 9:00 до 21:00, без выходных',
        'WIDTH'   => '400',
    ]);
