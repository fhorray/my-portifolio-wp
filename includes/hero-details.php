<?php if( have_rows('details', 'options') ): while ( have_rows('details', 'options') ) : the_row(); ?>
    <span class="detail dt1">
    <?php the_sub_field('detail_1', 'options') ?>
    </span>
    <span class="detail dt2">
    <?php the_sub_field('detail_2', 'options') ?>
    </span>
    <span class="detail dt3">
    <?php the_sub_field('detail_3', 'options') ?>
    </span>
<?php endwhile; else : endif;?>