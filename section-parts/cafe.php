    <?php
    $section           = 'cafe';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="cafe__heading"><img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'cafe_heading.png'; ?>" alt="rest time"></h3>
      <?php the_content(); ?>
    </section><!-- #<?php echo $section; ?> --> 
