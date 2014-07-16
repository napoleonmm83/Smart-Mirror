<?php snippet('header') ?>
<?php snippet('submenu') ?>

<div class="content">

  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>

  
  
  <h5>Wetter</h5>
<p id="msg"  value ="" size="25" name="GEO">
<h5>Komplimente</h5>
<p id="com0"  value ="" size="30" name="com0">
<p id="com1"  value ="" size="30" name="com1">
<p id="com2"  value ="" size="30" name="com2">
<p id="com3"  value ="" size="30" name="com3">
<p id="com4"  value ="" size="30" name="com4">
<p id="com5"  value ="" size="30" name="com5">
<p id="com6"  value ="" size="30" name="com6">
<p id="com7"  value ="" size="30" name="com7">
<p id="com8"  value ="" size="30" name="com8">
<p id="com9"  value ="" size="30" name="com9">
<p id="com10"  value ="" size="30" name="com10">
<h5>RSS Feed</h5>
<p id="feed1"  value ="" size="30" name="feed1">
<p id="feed2"  value ="" size="30" name="feed2">
<p id="feed3"  value ="" size="30" name="feed3">
  
  <?php echo js('http://smartmirror//mirror/js/config.js') ?>
</div>

<?php snippet('footer') ?>