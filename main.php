<html>
<head>
	<title>Download</title>
</head>
<body>
<!-- This is the redirect php script -->
<?php
$url;
$time = 0; // time in milliseconds
switch ($_GET['file']) {
	case '':
	default:
		$url = "home.php"; // you can substitute 404 error page here
		break;
}
?>
<!-- this is the redirect jS code -->
<script type="text/javascript">
	setTimeout("window.location='<?php echo $url; ?>'", <?php echo $time; ?>);
</script>

<!-- Include all the HTML you want to display below this line -->

<h1>Redirecting...</h1>

<!-- Include all the HTML you want to display above this line -->

</body>
</html>
