<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/inc/conf/global-var.php');
	if (!defined('0xA08C7D')) {
		header('Location: ' . ROOT);
	}
?>
<h1>
	Login
</h1>
<form method="POST" action="./">
<label for="user">User:</label>
<input id="user" type="text" name="user">
<label>Pass: </label>
<input type="password" name="password">
<input type="submit" value="Entra">
