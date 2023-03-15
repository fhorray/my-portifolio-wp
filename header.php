<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php the_field('favicon', 'options') ?>" type="image/x-icon">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Sora:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/main.css">
  <title> <?php bloginfo('name'); ?> <?php wp_title('|') ?> </title>
</head>

<body>

  <header>
    <div class="container">
      <a href="<?php the_field('logo_link', 'options') ?>"><img id="logo" src="<?php the_field('logo', 'options') ?>" alt="Logo"></a>

      <nav>
        <ul>
          <li><a href="#about">Sobre</a></li>
          <li><a href="#projects">Projetos</a></li>
          <li><a href="#certificates">Certificados</a></li>
          <!-- <li><a href="#experience">Experiência</a></li> -->
        </ul>
        <div class="header-btns">

          <button class="cv-download" type="button">
            <a href="<?php the_field('curriculo', 'options') ?>" download="Francy CV">Baixar CV</a>
            <img src="<?php echo get_template_directory_uri() ?>/img/download-i.svg" alt="Download Icon">
          </button>

          <button id="language-btn"><img src="<?php echo get_template_directory_uri() ?>/img/globe-i.svg" alt="language"></button>
          <button id="light-mode">
            <img id="img-mode" src="<?php echo get_template_directory_uri() ?>/img/sun-i.svg" alt="Dark Button">
          </button>

          <img src="<?php echo get_template_directory_uri() ?>/img/menu-mobile.svg" alt="Menu Mobile Icon" class="menu-mobile">

        </div>
      </nav>


      <div class="lang-dropdown">
        <div class="languages">
          <button class="active-lang" type="button">Portugês (Brazil)</button>
          <button type="button" disabled>English</button>
        </div>
      </div>

    </div>
  </header>