      <?php
      $modifier = \Takasuohana::get_data('header', 'header_disable') ? ' --float' : '';
      $modifier .= \Takasuohana::get_data('header', 'header_disable') ? ' responsiveColor' : '';
      ?>
      <div id="siteBrand" class="siteBrand<?php echo $modifier; ?>">
        <?php if (has_custom_logo()) { ?>
          <?php the_custom_logo(); ?>
        <?php } else { ?> 
          <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        <?php } ?>
      </div>
