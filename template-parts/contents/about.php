      <div class="about row">
        <div class="about-intro">
          <div class="about-intro-text">
            <?php echo mb_substr(get_the_excerpt(), 0, 200); ?>
            <?php /*the_content();*/ ?>
          </div>
          <?php if (has_post_thumbnail()) { ?>
          <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
          <?php } ?>
          <a class="about-intro-btn" href="<?php the_permalink(); ?>">more</a>
        </div>
      </div><!-- .about -->
