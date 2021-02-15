    <div class="footer-nav">
      <div class="footer-nav__bar">
        <div class="footer-nav-brand">
          <?php
          if (has_custom_logo()) {
            the_custom_logo();
          } else {
            echo '<a href="' . home_url('/') . '">HOME</a>';
          }
          ?>

        </div>
        <?php if (has_nav_menu('primary')) wp_nav_menu(['menu' => 'primary', 'menu_class' => 'footer-nav-menu', 'container' => false]); ?>
        <ul class="footer-nav-menu">
          <li class="menu-item"><a href="https://www.zenfukui.net" target="_blank"><span data-icon="ei-cart" data-size="m"></span>いただき繕ネットショップ</a></li>
        </ul>
      </div>
    </div><!-- .footer-nav -->
