<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>XSS原理重现</title>
</head>
<body>
	<p>
	输出位置在标签之间，此例在 &ltbody&gt&lt/body&gt标签内
	</p>
	<form action="" method="get">
		<input id="input" type="text" name="xss_input" style="width:80%;">
		<input id="btn" type="submit"></form>
	<hr>
	<?php
		$xss = $_GET['xss_input'];
		echo "your input:".$xss."\n";
	?>
	<hr>
	<?php
	show_source("test1-1.php");
	?>
</body>
</html>
