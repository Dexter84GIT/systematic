<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="mobile-wrapper">
        <ul class="mobile-menu df fdc">
            <li><a href="#about">О нас</a></li>
            <li class="submenu-link">Наши направления и проекты
                <ul class="header-submenu">
                    <li><a href="#ecommerce">Разработка и поддержка интернет-магазинов</a></li>
                    <li><a href="#bitrix">Внедрение BITRIX, оптимизация воронок</a></li>
                    <li><a href="#one-c">Разработка и доработка бухгалтерских и финансовых систем на базе 1С</a></li>
                    <li><a href="#unix">Администрирование UNIX и WINDOWS серверов </a></li>
                </ul>
            </li>
            <li><a href="#contacts">Контакты</a></li>
            <li class="header-phone"><a href="tel:79262025201">+7 (926) 202-52-01</a></li>
        </ul>
    </div>
    <header class="header">
        <div class="container df aic jcsb">
            <div class="header-logo">
                <a href="/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo_001.png" alt="logo">
                </a>
            </div>
            <ul class="header-menu df aic">
                <li><a href="#about">О нас</a></li>
                <li class="submenu-link">Наши направления и проекты
                    <ul class="header-submenu">
                        <li><a href="#ecommerce">Разработка и поддержка интернет-магазинов</a></li>
                        <li><a href="#bitrix">Внедрение BITRIX, оптимизация воронок</a></li>
                        <li><a href="#one-c">Разработка и доработка бухгалтерских и финансовых систем на базе 1С</a></li>
                        <li><a href="#unix">Администрирование UNIX и WINDOWS серверов </a></li>
                    </ul>
                </li>
                <li><a href="#contacts">Контакты</a></li>
                <li><a href="tel:79262025201">+7 (926) 202-52-01</a></li>
            </ul>
            <div class="burger-btn">
                <span></span>
            </div>
        </div>
    </header>