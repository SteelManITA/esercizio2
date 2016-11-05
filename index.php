<?php
	require ('inc/conf/functions.php');
	define('0xA08C7D', true);
	if (isConnected()) {
		$page = getPage();
	} else {
		$page = 'login';
	}

	// variabili generali della pagina
	$template_vars = 'inc/template-vars/' . $page . '.php';
	if (file_exists($template_vars)) {
		require ($template_vars);
	}

	// header
	require ('inc/template-parts/header.php');
	require ('inc/template-parts/menu.php');

	// content
	require ('inc/' . $page . '.php');

	// footer
	require ('inc/template-parts/footer.php');
	require ('inc/template-parts/before_body_close.php');
?>