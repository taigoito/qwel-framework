    <section id="front-works" class="front-sec">
      <h2 class="front-sec-heading">works</h2>
        <ul class="featured-btns">
          <li class="featured-btn-pendants"><a href="./product/pendants/">pendants</a></li>
          <li class="featured-btn-rings"><a href="./product/rings/">rings</a></li>
          <li class="featured-btn-pierces"><a href="./product/pierces/">pierces</a></li>
        </ul>
        <div class="slider slider-md">
          <div class="slider-inner">
            <?php
            $posts = get_posts([
              'posts_per_page' => 10,
              'post_type' => 'works'
            ]);
            foreach ($posts as $post) {
              setup_postdata($post);
              get_template_part('template-parts/contents/works');
            }
            ?>
          </div><!-- .slider-inner -->
          <a class="slider-prev" href="#"><span data-icon="ei-chevron-left" data-size="l"></span></a>
          <a class="slider-next" href="#"><span data-icon="ei-chevron-right" data-size="l"></span></a>
        </div><!-- .slider -->
      <div class="slider-caption"></div>
    </section><!-- #works -->
