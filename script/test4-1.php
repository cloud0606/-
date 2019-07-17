<html>
<?php header("Content-Type: text/html;charset=GBK"); ?>
<head>
	<title>XSS原理重现</title>
</head>
<body>
	<form action="" method="get">
		<input id="input" type="text" name="xss_input" style="width:80%;">
		<input id="btn" type="submit" >
	
	</form>
	<hr>
	<script>
        var a="<?php echo $_GET['xss_input']?>";
        </script>
	<hr>
          <?php
          show_source(basename(__FILE__));
          ?>

</body>
</html>
