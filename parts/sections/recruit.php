    <section id="recruit" class="recruit">
      <h2 class="recruit__heading screen-reader-text">recruit</h2>
      <div class="one-col">
        <div class="one-col__container">
          <div class="one-col__textbox">
            <?php
            $posts = get_posts([
              'posts_per_page' => 1,
              'include' => [14],
              'post_type' => 'page'
            ]);
            foreach ($posts as $post) {
              setup_postdata($post);
            ?>
            <h3 class="one-col__heading"><?php the_title(); ?></h3>
            <div class="one-col__intro">
              <?php the_content(); ?>
            </div>
            <?php } ?>
          </div>
        </div>
      </div><!-- .one-col -->
      <div class="recruit__cover"></div>
    </section><!-- .recruit -->
