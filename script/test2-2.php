<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>XSS原理重现</title>
</head>
<body>
	<form action="" method="get">
		<input id="input" type="text" name="xss_input" style="width:80%;"> 
		<input id="btn" type="submit" >
	</form>
	<a href=<?=$_GET["xss_input"]?>>我是一个a标签</a>

	<hr>
          <?php
          show_source(basename(__FILE__));
          ?>

</body>
</html>
