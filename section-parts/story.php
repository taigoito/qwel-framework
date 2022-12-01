    <?php
    $section           = 'story';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="story__heading">たかすオハナ牧場のストーリー</h3>
      <figure  class="story__fig">
        <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'ourstory.png'; ?>" alt="藤井省三と山羊たち">
      </figure>
      <div class="story__content">
        <?php the_excerpt(); ?>
        <p>profile / 藤井省三 現役英語教師、農家民宿経営、豊かな西畑を取り戻すため牧場を始める。</p>
        <p class="story__readmore"><a href="<?php echo the_permalink(100); ?>"><img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'readmore.svg'; ?>" alt="read more"></a></p>
      </div>
    </section><!-- #<?php echo $section; ?> --> 
