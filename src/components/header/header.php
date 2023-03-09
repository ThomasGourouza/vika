<link rel="stylesheet" href="components/header/header.css">

<?php $activeLink = 'class="active-link"'; ?>

<div class="logo" onclick="window.location.href='index.php?page=welcome&lang=<?php echo $lang ?>'"></div>
<nav>
	<?php
		foreach ($availablePages as $availablePage) {
			echo '
			<a href="index.php?page=' . $availablePage . '&lang=' . $lang . '" '
			. ($page==$availablePage ? $activeLink : "") . '>'
				. translate($availablePage)
			.'</a>';
		}
	?>
	<form action="components/header/lang-select.php" method="POST">
		<label for="lang"><?php echo translate('lang_select') ?>: </label>
		<select name="lang" id="lang" onchange="this.form.submit()">
			<?php
				foreach ($langOptions as $langOption) {
					$selected = $lang==$langOption->code ? "selected" : "";
					echo '<option value="' . $langOption->code . '" ' . $selected . '>' . $langOption->name . '</option>';
				}
			?>
		</select>
		<input type="text" value="<?php echo $page ?>" name="page" hidden>
	</form>
</nav>
