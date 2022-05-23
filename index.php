<?php get_header();
  /**
   * Main
   * 
   */
  ?>
  <main id="main" class="main">
    <div class="main__wrapper">
      <div class="main__container">
        <article class="post --page">
          <h1 class="post__heading">
            <span class="post__headingLarge">
              <span class=" --text_gradient">topics</span>
            </span>
            <span class="post__headingSmall">
              <span class="--textdec_left"></span><span class="--text_gradient">最新情報</span><span class="--textdec_right"></span>
            </span>
          </h1>
          <div class="archive">
            <div class="list --lg">
              <ul class="list__inner">
                <?php
                /**
                 * メインループ
                 * アーカイブページでは .archive で括って使う (sass/objects/projects/_archive.scss)
                 */
                if (have_posts()) {
                  while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/post');
                  }
                }
                ?>
              </ul>
            </div>
            <?php get_template_part('template-parts/pagination'); ?><!-- #pagination-->
          </div><!-- .archive -->
          <?php
          /**
           * Sidebar
           * ウィジェットエリア (個別投稿、アーカイブページのみ)
           */
          get_sidebar();
          ?>
        </article>
      </div>
      <div class="liveSection">
        <article class="post --page --liveSection">
          <h1 class="post__heading">
            <span class="post__headingLarge">
              <span class=" --text_gradient">live video</span>
            </span>
            <span class="post__headingSmall">
              <span class="--textdec_left"></span><span class="--text_gradient">工場内ライブビデオ</span><span class="--textdec_right"></span>
            </span>
          </h1>
          <div class="liveSection__wrapper">
            <div class="liveSection__container"> 
              <iframe class="liveSection__liveVideo" src="<?php echo 'https://www.youtube.com/embed/' . \Qwel::get_data('youtube', 'key') . '?autoplay=1&mute=1' ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </article>
      </div>
    </div>
  </main><!-- #main -->
<?php get_footer();
