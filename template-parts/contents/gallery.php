      <li>
        <a href="https://www.instagram.com/fillmignon/" target="_blank">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('medium');
          } else {
            no_image();
          }
          ?>
        </a>
      </li>
