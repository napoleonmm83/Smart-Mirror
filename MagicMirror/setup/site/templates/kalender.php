<?php snippet('header') ?>
<?php snippet('submenu') ?>

<div class="content">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
  
  


</div>

<?php snippet('footer') ?>