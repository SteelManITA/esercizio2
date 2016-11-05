<?php
	function getPage(){
		// selezionare pagina richiesta dall'utente
		$page = (isset($_GET['page']))
			? $_GET['page'] // vero
			: 'home'; // falso

		if (!file_exists('inc/' . $page . '.php')) {
			$page = '404';
		}

		return $page;
	}

	function isConnected(){
		if (isset($_POST['user']) && isset($_POST['password'])) {
			if ($_POST['user'] == 'concetto' && $_POST['password'] == 'pollicina') {
				return true;
			}
			return false;
		}
		return false;
	}
?>