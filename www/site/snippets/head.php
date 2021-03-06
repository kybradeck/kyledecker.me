<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if($page->isHomepage()): ?>
      <title><?= html($page->title()) ?></title>
      <meta property="og:title" content="<?= html($page->title()) ?>">
      <meta name="description" content="<?= html($site->description()) ?>" />
      <meta property="og:description" content="<?= html($site->description()) ?>" />
    <?php else: ?>
      <title><?= html($page->title()) ?> ・ <?= html($site->title()) ?></title>
      <meta property="og:title" content="<?= html($page->title()) ?> ・ <?= html($site->title()) ?>">
      <meta name="description" content="<?= html($page->text()->excerpt(500)) ?>" />
      <meta property="og:description" content="<?= html($page->text()->excerpt(500)) ?>" />
    <?php endif ?>

    <meta property="og:site_name" content="<?= html($site->title()) ?>"/>
    <meta property="og:url" content="<?= html($page->url()) ?>" />
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="<?= $site->url() ?>/assets/images/social-preview.png"/>
    <meta name="author" content="<?= $site->author()->html() ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@<?= $site->twitter() ?>">
    
    <link rel="icon" type="image/png" href="<?= $site->url() ?>/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?= $site->url() ?>/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?= $site->url() ?>/favicon-16x16.png" sizes="16x16" />
    <link rel="apple-touch-icon" href="<?= $site->url() ?>/touch-icon-ipad.png" sizes="180x180" />
    
    <?php snippet('analytics') ?>

    <link rel="stylesheet" href="https://use.typekit.net/exn3vdd.css">
    <?php echo liveCSS('assets/builds/bundle.css') ?>
    <?php echo js('assets/builds/bundle.js', ['defer' => true]) ?>
  </head>
  <body class="page-<?= $page->uid() ?>" data-darkmode="false">
