<link rel="stylesheet" href="components/header/header.css">

<?php $activeLink = 'class="active-link"'; ?>

<div class="logo" onclick="window.location.href='index.php?page=welcome&lang=<?php echo $lang ?>'"></div>
<nav>
	<a
		href="index.php?page=welcome&lang=<?php echo $lang ?>"
		<?php if ($page=="welcome") { echo $activeLink; } ?>
	>
		<?php echo $translations['welcome'] ?>
	</a>
	<a
		href="index.php?page=contact&lang=<?php echo $lang ?>"
		<?php if ($page=="contact") { echo $activeLink; } ?>
	>
		<?php echo $translations['contact'] ?>
	</a>
	<form action="components/header/lang-select.php" method="POST">
		<label for="lang"><?php echo $translations['lang_select'] ?>:</label>
		
		<select name="lang" id="lang" onchange="this.form.submit()">
			<option value="fr" <?php echo ($lang=="fr") ? "selected" : ""; ?> >Français</option>
			<option value="en" <?php echo ($lang=="en") ? "selected" : ""; ?> >English</option>
			<option value="ru" <?php echo ($lang=="ru") ? "selected" : ""; ?> >Русский</option>
		</select>

		<input type="text" value="<?php echo $page ?>" name="page" hidden>

	</form>
</nav>
