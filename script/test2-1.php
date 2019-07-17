<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>XSS原理重现</title>
</head>
<body>
	<form action="" method="get">
		<input id="input" type="text" name="xss_input" style="width:80%;" value="<?=$_GET["xss_input"]?>"> 
		<input id="btn" type="submit" >
	</form>
	<hr>
          <?php
          show_source(basename(__FILE__));
          ?>

</body>
</html>
