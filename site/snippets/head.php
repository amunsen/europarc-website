<?php

    /** @var Kirby\Cms\Page $page
     *  @var Kirby\Cms\Site $site
     *  @var Kirby\Cms\App $kirby */

?>

<!DOCTYPE html>
<html lang="<?php echo $kirby->language()?->code() ?>">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php echo $page->title() ?> — Europarc Dreilinden</title>
  <meta name="description" content="<?php echo $page->metaDescription() ?>">
  <link rel="canonical" href="https://www.europarc.de/">
	<meta property="og:locale" content="end">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $page->title() ?> — Europarc Dreilinden">
	<meta property="og:description" content="<?php echo $page->metaDescription() ?>">
	<meta property="og:url" content="https://www.europarc.de/">

	<meta property="og:site_name" content="Europarc Dreilinden">


  <meta property="article:modified_time" content="2023-06-05T16:03:27+00:00">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page->title() ?> — Europarc Dreilinden">
  <meta name="twitter:description" content="<?php echo $page->metaDescription() ?>">

  <?php
      $blocks  = $page->pageContent()->toBlocks();           // Get all blocks
      $myBlock = $blocks->filterBy('type', 'hero')->first(); // Get first block of type "my-block-type"

      if ($myBlock):
  ?>
<?php if ($i = $myBlock->image()->toFile()): ?>
  <meta property="og:image" content="<?php echo $i->thumb(['width' => 1200, 'height' => 630, 'format' => 'webp', 'quality' => 60])->url() ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:image" content="<?php echo $i->thumb(['width' => 1200, 'height' => 630, 'format' => 'webp', 'quality' => 60])->url() ?>">
    <meta name="twitter:image:alt" content="<?php echo $i->alt()->esc() ?>">
  <?php endif; ?>
<?php endif; ?>


  <link rel="icon" type="image/png" href="<?php echo $kirby->url('assets') ?>/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?php echo $kirby->url('assets') ?>/favicon.svg" />
  <link rel="shortcut icon" href="<?php echo $kirby->url('assets') ?>/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $kirby->url('assets') ?>/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="europarc" />
  <link rel="manifest" href="<?php echo $kirby->url('assets') ?>/site.webmanifest" />

  <meta name="robots" content="index, follow">





  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <?php echo css('assets/css/styles.css') ?>
<?php echo js('assets/js/lazyload.min.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>
<?php echo js('assets/js/jquery.min.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>
<?php echo js('assets/js/gsap.min.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>
<?php echo js('assets/js/ScrollTrigger.min.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>
<?php echo js('assets/js/slick.min.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>
<?php echo js('assets/js/main.js', ['data' => [
        'usercentrics' => 'true',
        'category'     => 'essential',
]]) ?>

<script id="usercentrics-cmp" src="https://web.cmp.usercentrics.eu/ui/loader.js" data-settings-id="ZymCk7bSAF-3OW" data-language="<?php echo $kirby->language()?->code() ?>" async></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5ZHKNZ0TW7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5ZHKNZ0TW7');
</script>
</head>

<body class="min-h-screen antialiased overflow-x-clip">
  <div>
    <?php snippet('main-header')?>
    <div class="flex flex-col">
      <main id="main" class="flex-grow">


