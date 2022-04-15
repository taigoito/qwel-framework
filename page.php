<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main">
    <div class="main__wrapper">
      <div class="main__container">
        <?php
        /**
         * メインループ
         * 固定ページでは .post.--page を使う (sass/objects/projects/_pages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();

            $wp_obj = get_queried_object();
            $slug = $wp_obj->post_name;
            $slug = str_replace('-', ' ', $slug);
        ?>
          <article class="post --page">
            <h1 class="post__heading">
              <span class="post__headingLarge">
                <span class=" --text_gradient"><?php echo $slug; ?></span>
              </span>
              <span class="post__headingSmall">
                <span class="--textdec_left"></span><span class="--text_gradient"><?php the_title(); ?></span><span class="--textdec_right"></span>
              </span>
            </h1>
            <?php
            /**
             * .post__content
             */
            get_template_part('template-parts/post/content');
            ?>
          </article><!-- .post -->
        <?php
          }
        }
        ?>
      </div>
    </div>
  </main>
<?php get_footer();
