      <?php
      $modifier = \Takasuohana::get_data('header', 'header_disable') ? ' --hidden' : '';
      ?>
      <nav id="gNav" class="gNav<?php echo $modifier; ?>">
        <ul class="gNav__primaryMenu">
          <?php
          // セクション毎の処理
          $sections = \Takasuohana::get_sections();
          foreach ($sections as $section => $type) {
            // 紐付けの有無をチェック
            $relational_id = \Takasuohana::get_data($section, 'relational_id');
            $relational_id = intval($relational_id);
            if ($relational_id) {
              $post = get_post($relational_id);
              $name = $post->post_title;
              $slug = $post->post_name;
              $href = home_url('/#' . $slug);
              // Heroなら除外
              if ($type !== 'hero') {
          ?>
            <li class="gNav__item"><a href="<?php echo $href; ?>"><?php echo $name; ?></a></li>
          <?php
              }
            }
          }
          ?>
          <li class="gNav__item"><a href="https://shop.takasu-ohana.com" target="_brank"><span data-icon="ei-cart" data-size="m"></span></a></li>
        </ul>
      </nav>
