    <section id="front-works" class="front-sec">
      <h2 class="front-sec-heading">works</h2>
      <div class="container">
        <?php
          $posts = get_posts([
            'posts_per_page' => 1,
            'include' => 12,
            'post_type' => 'page'
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
            get_template_part('template-parts/contents/works');
          }
          ?>
      </div><!-- .container -->
    </section><!-- #works -->
