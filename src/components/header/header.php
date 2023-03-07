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
	<form action="components/header/lang-select.php" method="GET">
		<label for="lang">Choose a language:</label>
		
		<select name="lang" id="lang">
		  <option value="fr">Français</option>
		  <option value="en">English</option>
		  <option value="ru">Russian</option>
		</select> 
		<button type="submit" class="btn btn-primary" name="submit">Go</button>
	</form>
</nav>
