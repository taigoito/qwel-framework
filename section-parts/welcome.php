    <?php
    $section           = 'welcome';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="welcome__heading">welcome to ohana farm</h3>
      <section class="welcome__subsection">
        <h4 class="welcome__subheading">message</h4>
        <p><?php the_content(); ?></p>
      </section>
      <section class="welcome__subsection">
        <h4 class="welcome__subheading">tsubuyaki</h4>
        <ul class="welcome__news">
          <?php
          global $posts;
          $posts = get_posts([
            'posts_per_page' => $posts_per_page,
            'category'       => [1, 2]
          ]);
          foreach ($posts as $post) {
            setup_postdata($post);
          ?>
          <li class="news">
            <?php $cats = get_the_category($post->ID); ?>
            <?php if ($cats) { ?>
              <ul class="news__tags">
                <?php foreach ($cats as $cat) { ?>
                  <li class="news__tag<?php echo ' --' . $cat->slug;?>"><a href="<?php echo get_tag_link($cat->term_id); ?>"><?php echo $cat->name; ?></a></li> 
                <?php } ?>
              </ul>
            <?php } ?>
            <span class="news__date"><?php the_time('Y.m.d'); ?></span>
            <span class="news__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
          </li>
          <?php
          }
          ?>
        </ul>
      </section>
      <div class="welcome__image"></div>
    </section><!-- #<?php echo $section; ?> --> 
