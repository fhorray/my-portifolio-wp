<?php 
// Template name: Home
?>

<?php get_header() ?>

<section class="s-hero">

  <div class="container">

  <!-- DETAILS -->
  <?php include(TEMPLATEPATH .'/includes/hero-details.php') ?>

    <div class="text">
      <h2><?php the_field('titulo_da_secao') ?> <span>{</span></h2>
      <h1><?php the_field('nome') ?></h1>
      <p><?php the_field('sobre') ?></p>

      <!-- REDES SOCIAIS -->
      <?php include(TEMPLATEPATH .'/includes/socials.php') ?>

      
      <h2>
        <span>}</span>
        <span class="interm">|</span>
      </h2>

    </div>
    <img class="hero-img" src="<?php the_field('hero_image') ?>" alt="Francy Santos">


  </div>

</section>

<section class="s-skills">
  <div class="container">
    <h2><?php the_field('skills_titulo') ?></h2>
    <ul>
    <?php if( have_rows('skills_icones') ): while ( have_rows('skills_icones') ) : the_row(); ?>
      <li><img class="baladAnimation" src="<?php the_sub_field('skills_icones_icone') ?>" alt="Skill Icon"></li>
    <?php endwhile; else : endif;?>  
    </ul>

    <a href="#about">
      <div class="arrow-down">
        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
        <img src="<?php echo get_template_directory_uri() ?>/img/arrow-down-i.svg" alt="Arrow Down Icon">
      </div>
    </a>
  </div>
</section>

<section id="about" class="s-about">
  <div class="container">

    <div class="text">
      <h2><?php the_field('about_titulo') ?> <span>{</span></h2>
      <p><?php the_field('about_descricao') ?></p>

      <h2>
        <span>}</span>
      </h2>
    </div>
    <span class="detail dt-sobre"><?php the_field('about_titulo_detail') ?></span>

  </div>
</section>

<section id="projects" class="s-projects">
  <div class="container">
    <span class="detail dt-projects"><?php the_field('projects_detail') ?></span>

    <div class="projects">
      <h2><span>const</span> <?php the_field('projects_titulo') ?> = <span>{</span></h2>

      <div class="items-container">
        <?php if( have_rows('projects') ): while ( have_rows('projects') ) : the_row(); ?>

          <div class="item">
            <div class="image">
              <img src="<?php the_sub_field('project_image') ?>" alt="Projeto">
            </div>

            <div class="overlay-content">
              <h3><?php the_sub_field('project_titulo') ?></h3>
              
              <ul>
                <?php if( have_rows('tecnologias') ): while ( have_rows('tecnologias') ) : the_row(); ?>
                <li><img src="<?php the_sub_field('tecnologia_icon') ?>" alt="HTML5 Icon"></li>
                <?php endwhile; else : endif;?>
              </ul>
              <?php if( have_rows('ver_projeto') ): while ( have_rows('ver_projeto') ) : the_row(); ?>
                <a class="see-project-btn" target="_blank" href="<?php the_sub_field('ver_projeto_link') ?>"><?php the_sub_field('ver_projeto_texto') ?></a>
              <?php endwhile; else : endif;?>
            </div>
          </div>

        <?php endwhile; else : endif;?>
      </div>

      <h2>
        <span>};</span>
      </h2>
    </div>

  </div>
</section>

<section id="certificates" class="s-certificates">
  <div class="container">
    <span class="detail dt-certificates"><?php the_field('certificates_detail') ?></span>


    <div class="schools">
      <h2><span>const</span> <?php the_field('certificates_titulo') ?> = <span>[</span></h2>

      <ul>
        <?php if( have_rows('certificates') ): while ( have_rows('certificates') ) : the_row(); ?>
          <li>
            <button class="origamid"><img src="<?php the_sub_field('school_logo') ?>" alt="Company logo"></button>
          </li>
        <?php endwhile; else : endif;?>
      </ul>

      <h2>
        <span>];</span>
      </h2>
    </div>

  </div>
</section>

<?php get_footer() ?>