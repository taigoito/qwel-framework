  <header id="header" class="header">
    <div class="header__container">
      <?php
      /**
       * Site Brand
       * is_frontpage() で、h1かdivか分岐
       */
      get_template_part('template-parts/siteBrand');
      ?><!-- #siteBrand-->
      <div class="header__inner">
        <?php
        /**
         * G Nav
         * 
         */
        get_template_part('template-parts/gNav');
        ?><!-- #gNav -->
        <a class="header__btn --telTo" href="#"><img src="<?php echo QWEL_THEME_URI . '/assets/btn_tel.svg'; ?>"></a>
        <a class="header__btn --mailTo" href="#"><img src="<?php echo QWEL_THEME_URI . '/assets/btn_mail.svg'; ?>"></a>
      </div>
    </div>
    <?php if (!is_front_page()) { ?>
      <div class="header__cover"></div>
    <?php } ?>
  </header><!-- #header -->
