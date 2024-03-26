<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>LIMEMEDIA-TEST</title>
</head>

<body>
  <header class="header">
    <div class="header__container shared-container">
      <div class="header__bars">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a href="#">
        <img class="header__logo" src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="logo">
      </a>
      <nav class="header__nav">
        <a href="#">Контекстная реклама</a>
        <a href="#">Smm</a>
        <a href="#">Seo</a>
        <a href="#">Дизайн</a>
        <a href="#">Контакты</a>
      </nav>
      <a class="header__button" href="#">Заказать звонок</a>
    </div>
  </header>