<?php
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/inc/conf/global-var.php');
	if (!defined('0xA08C7D')) {
		header('Location: ' . ROOT);
	}
?>
<nav class="navbar" id="navbar-main">
	<nav id="navbar-burger">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</nav>
	<div class="navbar-brand">
		<a href="#">
			<img src="/assets/img/logo.png" />
		</a>
	</div>
	<div class="navbar-side">
		<ul class="navbar-menu">
			<li class="title">
				<a href="#">Title</a>
			</li>
			<li>
				<a href="?page=home">Home</a>
			</li>
			<li>
				<a href="?page=products">Prodotti</a>
			</li>
			<li>
				<a href="?page=contacts">Contatti</a>
			</li>
			<li>
				<a href="?page=blabla">Pagina non esistente</a>
			</li>
		</ul>
		<ul class="navbar-menu-secondary">
			<li>
				<div class="btn-group">
					<a href="#" class="btn">Login</a>
					<a href="#" class="btn">Registrati</a>
				</div>
			</li>
		</ul>
	</div>
	<form id="navbar-search" action="#" method="post">
		<i class="material-icons navbar-icon-search navbar-search-toggle">search</i>
		<input type="text" id="navbar-search-input" placeholder="Cerca" required />
		<i id="navbar-search-clear" class="material-icons navbar-icon-clear">clear</i>
		<i class="material-icons navbar-icon-back navbar-search-toggle">arrow_back</i>
	</form>
</nav>