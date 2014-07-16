<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />


  <?php echo css('http://fonts.googleapis.com/css?family=PT+Sans:400italic,400,700,700italic') ?>
  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

<div class="menu">
  <?php snippet('menu') ?>

  <a href="http://getkirby.com" class="madewith">Made with Kirby and <em>&#9829;</em></a>
</div>