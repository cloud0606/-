<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>XSS原理重现</title>
</head>
<body>
	<p>
	部分标签自带HtmlEncode功能，此例在 &lttextarea&gt&lt/textarea&gt标签内
	</p>
	<form action="" method="get">
		<input id="input" type="text" name="xss_input"  style="width:50%;">
		<input id="btn" type="submit"></form>
	<hr>
	<textarea>
	<?php
		$xss = $_GET['xss_input'];
		echo "your input:".$xss."\n";
	?>
	</textarea>
         <hr>
          <?php
          show_source("test1-2.php");
          ?>

</body>
</html>
