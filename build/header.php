<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ROTORIOUS WLG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:app_id" content="605651619640862" />
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="ROTORIOUS FPV | Guerilla FPV" />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/og-image.png" />
    <meta property="og:description" content="ROTORIOUS FPV | Guerilla FPV" />
    <meta property="og:url" content="https://rotoriouswlg.com/"/>
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-wlg.png" />
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/base-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/grids-min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pure/0.6.2/grids-responsive-min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css?v=20170524">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-99600601-1', 'auto');
      ga('send', 'pageview');

    </script>
    <?php if(is_front_page()) :?>
      <div class="homepage">
        <div class="homepage__banner"></div>
        <div class="opacity"></div>
        <div class="glass"></div>
        <div class="hp__title">
          <h1>Rotorious WLG</h1>
          <h2>Guerilla FPV</h2>
        </div>
      </div>
    <?php endif; ?>
    <div class="content">
      <nav class="nav--main">
        <ul>
          <?php if(is_front_page()) : ?>
            <li class="current_page_item"><a href="/">Home</a></li>
          <?php else: ?>
            <li><a href="/">Home</a></li>
          <?php endif; ?>
          <?php wp_list_pages("title_li="); ?>
        </ul>
      </nav>
