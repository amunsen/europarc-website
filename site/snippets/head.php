<?php

    /** @var Kirby\Cms\Page $page
     *  @var Kirby\Cms\Site $site
     *  @var Kirby\Cms\App $kirby */

?>

<!DOCTYPE html>
<html lang="<?php echo $kirby->language()?->code()?>">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo $page->title()?> — Europarc Dreilinden</title>
  <link rel="canonical" href="https://www.europarc.de/">
	<meta property="og:locale" content="end">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Europarc Dreilinden-Business Campus | Modernste Büroflächen">
	<meta property="og:description" content="Ganz egal wie Ihre unternehmerischen Ziele aussehen, der EUROPARC bietet genügend Gründe für eine Ansiedlung. Und bei der Umsetzung Ihrer Ziele...">
	<meta property="og:url" content="https://www.europarc.de/">
	<meta property="og:site_name" content="Europarc Dreilinden">
	<meta property="article:modified_time" content="2023-06-05T16:03:27+00:00">
	<meta name="twitter:card" content="summary_large_image">
  <link rel="icon" type="image/png" href="<?php echo $kirby->url('assets')?>/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo $kirby->url('assets')?>/favicon.svg" />
  <link rel="shortcut icon" href="<?php echo $kirby->url('assets')?>/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $kirby->url('assets')?>/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="europarc" />
  <link rel="manifest" href="<?php echo $kirby->url('assets')?>/site.webmanifest" />

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v3.8.0/mapbox-gl.js"></script>

  <?php echo css('assets/css/styles.css')?>
  <?php echo js('assets/js/lazyload.min.js')?>
  <?php echo js('assets/js/jquery.min.js')?>
  <?php echo js('assets/js/slick.min.js')?>
  <?php echo js('assets/js/main.js')?>
</head>

<body class="min-h-screen antialiased overflow-x-clip">
  <div>
    <?php snippet('main-header')?>
    <div class="flex flex-col">
      <main class="flex-grow">
        <div id="main">


