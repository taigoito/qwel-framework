  <?php
  /**
   * Drawer Menu (全ページ共通)
   */
  get_template_part('template-parts/drawerMenu');

  /**
   * Footer (フロントページでは除去)
   * 
   */
  if (!is_front_page()) get_template_part('template-parts/footer');
  
  wp_footer(); ?>
</body>

</html>
