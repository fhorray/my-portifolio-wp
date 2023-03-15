      <!-- Social Medias -->
      <ul class="socials">
      <?php if( have_rows('redes_sociais', 'options') ): while ( have_rows('redes_sociais', 'options') ) : the_row(); ?>
        <li>
          <a href="<?php the_sub_field('redes_sociais_link', 'options') ?>" target="_blank">
            <img src="<?php the_sub_field('redes_sociais_icone', 'options') ?>" alt="Social Icon">
          </a>
        </li>
        <?php endwhile; else : endif;?>
      </ul>