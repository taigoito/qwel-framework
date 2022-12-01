    <?php
    $section           = 'access';
    $post_id           = \Takasuohana::get_data($section, 'relational_id');
    $post              = get_post($post_id);
    $url               = \Takasuohana::get_data($section, 'map_url');
    setup_postdata($post);
    ?>
    <section id="<?php echo $section; ?>" class="<?php echo $section; ?>">
      <h3 class="access__heading">ohana牧場へ行こう！</h3>
      <div class="access__inner">
        <div class="access__map">
          <iframe src="<?php echo $url; ?>" width="960" height="480" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>
    </section><!-- #<?php echo $section; ?> -->
