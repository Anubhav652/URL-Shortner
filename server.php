<?php
	function transfromCodeIntoURL( $code ) {
		return base64_decode($code);
	}
	function getDirectoryURL( ) {
		$url = $_SERVER['REQUEST_URI'];
		$parts = str_replace( '/'.explode('/',$url)[1].'/', "", $url );
		return $parts;
	}
	$url = transfromCodeIntoURL(getDirectoryURL( ));
	if (filter_var($url, FILTER_VALIDATE_URL)) {
		header("Location: ".$url);
	} else {
		echo 'Invalid link!';
	}
?>
