<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main --hide">
    <div class="main__content">
      <div class="slider">
        <ul class="slider__inner">
          <?php
          global $posts;
          $posts = get_posts([
            'post_type' => 'post',
            'posts_per_page' => 5
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
          ?>
            <li class="post">
              <a class="post__inner" href="<?php the_permalink(); ?>">
                <figure class="post__image">
                  <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail($size); ?>
                  <?php } else { ?>
                    <img src="<?php echo QWEL_DEFAULT_IMAGE; ?>">
                  <?php } ?>
                </figure>
                <div class="post__textContent">
                  <div class="post__heading"><?php the_title(); ?></div>
                </div>
                  </a>
            </li>
          <?php
          }
          ?>
        </ul>
        <a class="slider__prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
        <a class="slider__next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
      </div><!-- .slider -->
    </div>
  </main><!-- #main -->
  <div id="opening" class="opening">
    <span class="opening__title --num_1"><img src="<?php echo QWEL_THEME_URI . '/assets/title_productmeister.svg'; ?>"></span>
    <span class="opening__title --num_2"><img src="<?php echo QWEL_THEME_URI . '/assets/title_productmeister.svg'; ?>"></span>
    <span class="opening__title --num_3"><img src="<?php echo QWEL_THEME_URI . '/assets/title_productmeister.svg'; ?>"></span>
    <span class="opening__title --num_4"><img src="<?php echo QWEL_THEME_URI . '/assets/title_productmeister.svg'; ?>"></span>
    <span class="opening__title --num_5"><img src="<?php echo QWEL_THEME_URI . '/assets/title_productmeister.svg'; ?>"></span>
  </div><!-- #opening -->
  <div id="cover" class="cover">
    <div class="cover__background"></div>
    <div class="cover__gradient"></div>
    <video id="coverVideo" class="cover__video --hide" src="<?php echo QWEL_THEME_URI . '/assets/cover.mp4'; ?>" autoplay loop muted playsinline></video>
    <video id="coverVideoMb" class="cover__video --mb --hide" src="<?php echo QWEL_THEME_URI . '/assets/cover_mb.mp4'; ?>" autoplay loop muted playsinline></video>
  </div><!-- #cover -->
<?php get_footer();
