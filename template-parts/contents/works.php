      <div class="works row">
        <?php if (has_post_thumbnail()) { ?>
        <div class="featured-image">
          <?php the_post_thumbnail('large'); ?>
        </div>
        <?php } ?>
        <div class="works-intro">
          <div class="works-intro-text">
            <?php echo mb_substr(get_the_excerpt(), 0, 250); ?>
          </div>
          <a class="works-intro-btn" href="<?php echo get_post_type_archive_link('works'); ?>">作品を見る</a>
        </div>
      </div><!-- .works -->
