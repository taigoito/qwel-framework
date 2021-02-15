      <article class="article">
        <?php if (!is_page()) { ?>
        <header class="article__header">
          <?php if (is_home() || is_singular('post') || is_post_type_archive('post') || is_category() || is_tag() || is_date() || is_author() || is_search()) { ?>
          <div class="article__date"><?php the_time('Y.m.d'); ?></div>
          <ul class="article__terms">
            <?php
            $terms = get_the_category($post->ID);
            foreach ($terms as $term) {
              echo '<li class="article__term"><a href="' . get_term_link($term->slug, 'category') . '">' . $term->name . '</a></li> ';
            }
            ?>
          </ul>
          <?php } ?>
          <h3 class="article__title">
            <?php if (is_home() || is_archive()) { ?>  
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php } else { ?>
              <?php the_title(); ?>
            <?php } ?>
          </h3>
        </header>
        <?php } ?>
        <div class="article__content">
          <?php if (is_home() || is_archive()) { ?>
            <?php if (has_post_thumbnail()) { ?>
            <div class="article__image">
            <?php if (is_home() || is_archive()) { ?>  
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php } else { ?>
                <?php the_post_thumbnail('large'); ?>
              <?php } ?>
            </div>
            <?php } ?>
            <p class="article__intro"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">[詳細]</a></p>
          <?php } else { ?>
            <?php the_content(); ?>
            <?php if (is_page('shop')) get_template_part('parts/sections/shop-list'); ?>
          <?php } ?>
        </div>
        <aside class="aside">
          <h2 class="aside__title screen-reader-text">投稿ナビゲーション</h2>
          <?php if (is_singular('post')) insert_pagination(); ?>
        </aside>
      </article>
