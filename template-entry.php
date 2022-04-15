<?php
/*
 * Template Name: リクルートテンプレート
 * Template Post Type: page
 */
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>募集職種 | 株式会社 プロダクトマイスター RECRUITサイト</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" lang="ja" content="アウトソーシング,製造請負,電子部品,自動車部品,金属部品,採用情報,福井,鯖江,プロダクト・マイスター,採用サイト,求人" />
<meta name="Description" content="株式会社プロダクトマイスターの採用サイトになります。お客様の生産現場で発生するさまざまな問題にお応えし、お客様に喜びと信頼を得られるサービスを提供します。" />
<link rel="shortcut icon" href="<?php echo QWEL_THEME_URI . '/assets/favicon.ico'; ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo QWEL_THEME_URI . '/assets/js/bootstrap.min.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo QWEL_THEME_URI . '/assets/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php echo QWEL_THEME_URI . '/assets/css/base.css'; ?>">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.p-meister.co.jp/rss2.xml" />
<link rel="stylesheet" href="<?php echo QWEL_THEME_URI . '/assets/css/jobs.css'; ?>">
<script src="<?php echo QWEL_THEME_URI . '/assets/js/jquery.matchHeight-min.js'; ?>"></script>
<script>$(function() {$('.envir .col-md-4').matchHeight();});</script>
<meta name="generator" content="a-blog cms " />
</head>
<body>
<header id="header">
<h1><a href="../../" title="top"><img src="<?php echo QWEL_THEME_URI . '/assets/img/common/head_logo.png'; ?>" alt="株式会社 プロダクトマイスター RECRUIT" class="img-responsive center-block"></a></h1>
<p class="tel"><span class="tel-link"><img src="<?php echo QWEL_THEME_URI . '/assets/img/common/tel.png'; ?>" alt="0778-53-1231"></span></p>
<nav id="navMenu">
<ul>
<li><a href="../../#message" title="ご挨拶">ご挨拶</a></li>
<li><a href="../../information/" title="仕事内容">仕事内容</a></li>
<li><a href="../../jobs/" title="募集職種">募集職種</a></li>
<li class="spTel visible-xs visible-sm">
お電話でのお問い合わせはこちら <span class="tel-link">0778-53-1231</span></li>
</ul>
</nav>
<div id="nav">
<div class="navIcon">
<span></span>
<span></span>
<span></span>
</div>
</div>
<a href="../../jobs/" title="entry" class="entryBtn"><span>entry</span></a>
</header>
<div id="mainv">
<div class="inner">
<h2 class="mainTtl"><span><img src="<?php echo QWEL_THEME_URI . '/assets/img/jobs/ttl_jobs.png'; ?>" alt="募集職種" class="img-responsive center-block"></span>募集職種</h2>
</div>
</div>
<style>
.js-timemachine_menu {
position: fixed;
padding: 5px;
bottom: 20px;
left: 20px;
z-index: 99999;
background: #DDD;
box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
}
</style>

<main id="main">
<section id="jobsEntry">
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
  <?php 
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      the_content();
    }
  }
  ?>
<div id="entryForm">
<h4 class="subTtl">エントリーフォーム</h4>
<p class="contactRead">下記の項目を入力し、「<a href="<?php echo home_url('privacy-policy'); ?>" target="_blank">プライバシーポリシー</a>」に示す内容をご理解いただき、同意の上で送信してください。<br />後日、弊社採用担当からご連絡差し上げます。</p>
<div class="contactIn">
  <?php echo do_shortcode('[contact-form-7 id="228" title="Entry Form"]'); ?>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<footer id="footer" class="text-center">
<div id="pageTop"><a href="#"></a></div>
<div class="inner">
<div class="container"><a href="../../" class="linkBtn">リクルートサイトトップ</a></div>
</div>
<div class="copy">
<div class="container"><img src="<?php echo QWEL_THEME_URI . '/assets/img/common/txt_copy.png'; ?>" alt="Product Meister Co. Ltd. All rights reserved." class="img-responsive center-block"></div>
</div>
</footer>
<script src="<?php echo QWEL_THEME_URI . '/assets/js/common.js'; ?>"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10296021-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>