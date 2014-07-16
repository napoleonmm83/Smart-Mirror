<!DOCTYPE html>
<html>
Smartmirror Adminseite
<head>
	<title>Magic Mirror</title>
	<style type="text/css">
		<?php include('css/main.css') ?>
	</style>
	<link rel="stylesheet" type="text/css" href="css/weather-icons.css">
	<script type="text/javascript">
		var gitHash = '<?php echo trim(`git rev-parse HEAD`) ?>';
	</script>
	<meta name="google" value="notranslate" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>


<body>


<form action="admin.php" method="post">
<h5>Land</h5>
<input type="text" id="msg"  value ="" size="25" name="GEO">
<p>
Komplimente
<p>
<input type="text" id="com0"  value ="" size="30" name="com0">
<p>
<input type="text" id="com1"  value ="" size="30" name="com1">
<p>
<input type="text" id="com2"  value ="" size="30" name="com2">
<p>
<input type="text" id="com3"  value ="" size="30" name="com3">
<p>
<input type="text" id="com4"  value ="" size="30" name="com4">
<p>
<input type="text" id="com5"  value ="" size="30" name="com5">
<p>
<input type="text" id="com6"  value ="" size="30" name="com6">
<p>
<input type="text" id="com7"  value ="" size="30" name="com7">
<p>
<input type="text" id="com8"  value ="" size="30" name="com8">
<p>
<input type="text" id="com9"  value ="" size="30" name="com9">
<p>
<input type="text" id="com10"  value ="" size="30" name="com10">
<p>

<input type="submit"  value="speichern" name = "senden"> 
</form>

<meta http-equiv="Content-Script-Type" content="text/javascript">
<script type="text/javascript" language="javascript" src="http://192.168.177.110/admin/config.js">






    

</script>


</body>
</html>