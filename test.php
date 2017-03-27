<?php include('api interface.inc.php'); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Api ile çalışma</title>
</head>
<body>
<?php
echo '<pre>';
print_r(url_shortener::shorten("http://google.com/"));

echo '</pre>';

?>
</body>
</html>
