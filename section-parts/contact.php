    <?php
    $section           = 'contact';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $shortcode         = \Takasuohana::get_data($section, 'contact_form');;
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="contact__heading"><?php the_title(); ?></h3>
      <div class="contact__inner">
        <div class="contact__form">
          <?php the_content(); ?>
          <?php echo do_shortcode($shortcode); ?>
        </div>
      </div>
    </section><!-- #<?php echo $section; ?> -->
