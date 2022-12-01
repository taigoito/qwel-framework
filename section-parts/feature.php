    <?php
    $section           = 'feature';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="feature__heading"><img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_heading.svg'; ?>"></h3>
      <div class="feature__inner">
        <div class="feature__item --col_2">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_00.png'; ?>">
        </div>
        <div class="feature__item --col_3"><a href="<?php echo the_permalink(101); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_01.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_01_hover.png'; ?>">
        </a></div>
        <div class="feature__item --col_4"><a href="<?php echo the_permalink(102); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_02.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_02_hover.png'; ?>">
        </a></div>
        <div class="feature__item --col_3"><a href="<?php echo the_permalink(103); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_03.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_03_hover.png'; ?>">
        </a></div>
        <div class="feature__item --col_4"><a href="<?php echo the_permalink(104); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_04.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_04_hover.png'; ?>">
        </a></div>
        <div class="feature__item --col_3"><a href="<?php echo the_permalink(105); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_05.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_05_hover.png'; ?>">
        </a></div>
        <div class="feature__item --col_2">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_07.png'; ?>">
        </div>
        <div class="feature__item --col_3"><a href="<?php echo the_permalink(168); ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_06.png'; ?>">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'feature_06_hover.png'; ?>">
        </a></div>
      </div>
      <div class="feature__shopBtnWrap">
        <a class="feature__shopBtn" href="https://shop.takasu-ohana.com" target="_brank">OHANAの魅力をショッピングする</a>
      </div>
    </section><!-- #<?php echo $section; ?> --> 
