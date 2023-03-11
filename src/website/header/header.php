<link rel="stylesheet" href="website/header/header.css">

<nav class="row">
	<div class="col-3"></div>
	<div class="col">
		<div class="d-flex justify-content-evenly">
			<?php $activeLink = 'class="active-tab"';
			foreach ($availablePages as $availablePage) {
				echo '<a href="index.php?page=' . $availablePage . '&lang=' . $lang . '" '
				. ($page==$availablePage ? $activeLink : "") . '>' . translate($availablePage) .'</a>';
			}?>
		</div>
	</div>
	<div class="col-2">
		<!-- language select -->
		<form action="system/load-lang.php" method="POST">
			<label for="lang"><?php echo translate('lang_select') ?>: </label>
			<select name="lang" id="lang" onchange="this.form.submit()">
				<?php foreach ($langOptions as $langOption) {
						$selected = $lang==$langOption->code ? "selected" : "";
						echo '<option value="' . $langOption->code . '" ' . $selected . '>' . $langOption->name . '</option>';
					}?>
			</select>
			<input type="text" value="<?php echo $page ?>" name="page" hidden>
		</form>
	</div>
</nav>
