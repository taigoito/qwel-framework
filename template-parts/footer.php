  <footer id="footer" class="footer">
    <div class="footer__container">
      <div class="footer__1">
        <figure class="footer__logo">
          <img src="<?php echo TAKASUOHANA_THEME_ASSETS . 'takasu-ohana.png'; ?>" alt="たかすオハナ牧場ロゴ">
        </figure>
      </div>
      <div class="footer__2">
        <div class="footer__title">
          <p><?php bloginfo(); ?></p>
        </div>
      </div>
      <div class="footer__3">
        <div class="footer__info">
          <p class="footer__address"><span>〒910-3373</span><span>福井県福井市西畑町2-17</span></p>
          <p class="footer__tel"><a href="tel:090-2123-3851">090-2123-3851</a></p>
          <p class="footer__copyright"><small>&copy; <?php echo \Takasuohana::get_data('footer', 'copyright'); ?></small></p>
        </div>
      </div>
      <div class="footer__4">
        <ul class="footer__socialMenu">
          <?php
          $social = \Takasuohana::get_data('social');
          foreach ($social as $sns => $username) {
            if ($username) {
          ?>
            <li class="footer__menuItem"><a href="https://<?php echo $sns . '.com/' . $username . '/'; ?>"><span data-icon="ei-sc-<?php echo $sns; ?>" data-size="m"></span></a></li>
          <?php
            }
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="footer__section">
      <p>たかすオハナ牧場は、(株)E&Mによって運営されています。</p>
      <h3>会社概要</h3>
      <table class="table">
        <tr>
          <th>会社名</th>
          <td>(株)E&M</td>
        </tr>
        <tr>
          <th>代表取締役</th>
          <td>藤井省三</td>
        </tr>
        <tr>
          <th>設立年月日</th>
          <td>1998年1月28日</td>
        </tr>
        <tr>
          <th>所在地</th>
          <td>福井市舟橋3-514<br>(牧場所在地: 福井市西畑町2-17)</td>
        </tr>
        <tr>
          <th>電話番号</th>
          <td>0776-65-6622<br>(牧場へのお問い合わせ: <a href="tel:090-2123-3851">090-2123-3851</a>)</td>
        </tr>
        <tr>
          <th>資本金</th>
          <td>3,500,000円</td>
        </tr>
        <tr>
          <th>事業内容</th>
          <td>畜産業、宿泊業</td>
        </tr>
      </table>
    </div>
    <div class="footer__cover"></div>
  </footer><!-- #footer -->