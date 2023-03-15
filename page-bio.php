<?php 
// Template name: Bio
?>

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

  <header class="header-bio">
    <div class="container-minor">
      <img src="<?php the_field('logo') ?>" alt="Logo">
    </div>
  </header>


  <section class="hero-bio">

  <!-- DETAILS -->
  <?php include(TEMPLATEPATH .'/includes/hero-details.php') ?>

    <div class="container-minor">

      <div class="profile-image">
        <img src="<?php the_field('profile_image') ?>" alt="Profile Insta Image">
      </div>

      <h1><?php the_field('name') ?></h1>
      <span class="number"><a href="<?php the_field('telefone_link') ?>"><?php the_field('telefone') ?></a></span>

    </div>
  </section>

  <section class="links-bio">
    <div class="container-minor">

      <h2><?php the_field('links_titulo') ?></h2>

      <ul class="links-list">
      <?php if( have_rows('links_list') ): while ( have_rows('links_list') ) : the_row(); ?>
        <li>
          <a href="<?php the_sub_field('links_list_link') ?>"><?php the_sub_field('links_list_titulo') ?></a>
        </li>
        <?php endwhile; else : endif;?>

      </ul>

    </div>
  </section>


  <div href="#about" class="arrow-down">
    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
  </div>

  <footer class="footer-bio">
    <div class="container-minor">
      <h2>So, let's work together?</h2>
      <span class="city">São Paulo, SP, Brazil</span>
      <a class="email" href="mailto:francy.horray@gmail.com">contato@fsantos.tech</a>
      <a class="phone" href="https://api.whatsapp.com/send?phone=5511989358196">(+55) 11 98935-8196</a>

      <!-- REDES SOCIAIS -->
      <?php include(TEMPLATEPATH .'/includes/socials.php') ?>

      <p class="copy">&copy; 2023 All rights reserved - <a href="https://www.linkedin.com/in/francysantos/"> Francy Santos</a></p>
    </div>
  </footer>



</body>

</html>