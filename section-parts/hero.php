    <?php
    $section           = 'hero';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    setup_postdata($post);
    ?>
    <header id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <div class="siteGist">
        <h1 class="siteGist__logo"><img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'takasu-ohana.png'; ?>" alt="たかすオハナ牧場ロゴ"></h1>
        <div class="siteGist__content">
          <p class="siteGist__description"><?php bloginfo('description'); ?></p>
          <p class="siteGist__title"><?php bloginfo(); ?></p>
        </div>
      </div>
      <div class="mainvisual">
        <div class="mainvisual__content">
          <h2 class="mainvisual__largeText"><?php the_title(); ?></h2>
          <p class="mainvisual__smallText"><?php the_content(); ?></p>
        </div>
        <div class="cover">
          <div class="fader">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
              <?php if (\Takasuohana::get_data('hero', 'cover_' . $i)) { ?>
                <div class="cover__image --num_<?php echo $i; ?>"></div>
              <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    </header><!-- #<?php echo $section; ?> -->
