      <?php if (is_front_page()) { ?>
        <h1 id="siteBrand" class="siteBrand">
      <?php } else { ?>
        <div id="siteBrand" class="siteBrand">
      <?php } ?>
        <a href="/"><img src="<?php echo QWEL_THEME_URI . '/assets/logo_productmeister.svg'; ?>"></a>
      <?php if (is_front_page()) { ?>
        </h1>
      <?php } else { ?>
        </div>
      <?php } ?>
