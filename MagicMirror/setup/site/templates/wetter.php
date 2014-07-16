<?php snippet('header') ?>
<?php snippet('submenu') ?>

<div class="content">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>

  <iframe src="http://smartmirror/admin" width="400" height="1200" frameborder="0">Alternativtext</iframe>  
  

</div>

<?php snippet('footer') ?>