<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/inc/conf/global-var.php');
	if (!defined('0xA08C7D')) {
		header('Location: ' . ROOT);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?></title>
	<?php
	if (isset($styles)) {
		foreach ($styles as $style) {
		?>
			<link rel="stylesheet" type="text/css" href="<?=$style?>">
		<?php
		}
	}
	?>
</head>
<body>