<link rel="stylesheet" href="components/header/header.css">

<?php $activeLink = 'class="active-link"'; ?>

<div class="logo" onclick="window.location.href='index.php?page=welcome'"></div>
<nav>
	<a
		href="index.php?page=welcome"
		<?php if ($page=="welcome") { echo $activeLink; } ?>
	>
		Accueil
	</a>
	<a
		href="index.php?page=contact"
		<?php if ($page=="contact") { echo $activeLink; } ?>
	>
		Contact
	</a>
</nav>
