      <?php if (is_front_page()) { ?>
        <h1 id="siteBrand" class="siteBrand responsiveColor">
      <?php } else { ?>
        <div id="siteBrand" class="siteBrand responsiveColor">
      <?php } ?>
        <img src="<?php echo QWEL_THEME_URI . '/assets/logo_productmeister.svg'; ?>">
      <?php if (is_front_page()) { ?>
        </h1>
      <?php } else { ?>
        </div>
      <?php } ?>
