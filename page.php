<?php get_header();
  /**
   * Main
   * 
   */
  $wp_obj    = get_queried_object();
  $post_name = $wp_obj->post_name;
  ?>
  <main id="main" class="main page-<?php echo $post_name; ?>">
  <?php
    /**
     * Title Area
     * H1タグで、個別ページのタイトルを表示
     */
    get_template_part('template-parts/titleArea');
    ?><!-- #titleArea -->
    <div class="main__wrapper">
      <div class="main__container">
        <?php
        /**
         * パンくずリスト
         */
        get_template_part('template-parts/breadcrumb');
        ?><!-- #breadcrumb-->
        <?php
        /**
         * メインループ
         * 固定ページでは .post.--page を使う (sass/objects/projects/_pages.scss)
         */
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
          <article class="post --page">
            <?php
            /**
             * .post__cocntent
             */
            get_template_part('template-parts/post/content');
            ?>
          </article><!-- .post -->
        <?php
          }
        }
        
        /**
         * 関連記事
         */
         ?>
        <div class="archive">
          <div class="list --lg">
            <ul class="list__inner">
              <?php
              $wp_obj  = get_queried_object();
              $post_id = $wp_obj->ID;
              $include = [101, 102, 103, 104, 105, 168];
              $include = array_diff($include, [$post_id]);
              $posts   = get_posts([
                'post_type'  => 'page',
                'include'    => $include
              ]);
              foreach ($posts as $post) {
                setup_postdata($post);
                get_template_part('template-parts/post');
              }
              ?>
            </ul>
          </div>
        </div><!-- .archive -->
      </div>
    </div>
  </main>
<?php get_footer();
