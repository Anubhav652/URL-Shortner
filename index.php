<?php
	$text = "";
	if( isset($_POST['text'] ) ) {
		$text = $_POST['text'];
	}
	function encrypt( $code ) {
		return base64_encode( $code );
	}
?>
<html>
	<head>
		<title>
			URL Shortner
		</title>
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
		<div id="mid">
			<h1>
				Shorten URLs ONLINE NOW!
			</h1>
			<br><br><br><br>
			<form action="index.php" method="post">
				<input type="edit" class="e" name="text" value=<?php echo $text; ?>/> <input type="submit" value="Shorten now!" class="b" />
			</form>
			<small>Made by Anubhav | anubhavagarwal033@gmail.com</small>
			<br>
			<?php
				if ($text !== "" && filter_var($text, FILTER_VALIDATE_URL) !== false ) {
					echo '<b><big>'. $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].'/'.encrypt($text).'</big></b>';
				} else if(filter_var($text, FILTER_VALIDATE_URL) == false ) {
					echo '<b><big>Sorry, please enter a valid URL!<br>Example: http://www.example.com/</big></b>';
				}
			?>
		</div>
	</body>
</html>
