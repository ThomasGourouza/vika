<link rel="stylesheet" href="website/header/header.css">
<script src="website/header/header.js"></script>

<?php
$selectedLang = null;
$otherLangOptions = [];
foreach ($langOptions as $langOption) {
	if ($langOption->code == $lang) {
		$selectedLang = $langOption;
	} else {
		array_push($otherLangOptions, $langOption);
	}
}?>

<nav class="row">
	<div class="col-4"></div>
	<div id="tabs" class="col d-flex justify-content-evenly">
		<?php $activeLink = 'class="active-tab"';
		foreach ($availablePages as $availablePage) {
			echo '<a href="index.php?page=' . $availablePage . '&lang=' . $lang . '" '
			. ($page==$availablePage ? $activeLink : "") . '>' . translate($availablePage) .'</a>';
		}?>
	</div>
	<div class="col-2 d-flex justify-content-center">
		<!-- language select -->
		<div class="dropdown">
			<a class="custom-dropdown dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
				<?php echo '<i class="flag ' . $selectedLang->flag . ' m-0"></i>';?>
			</a>
			<ul class="dropdown-menu" aria-labelledby="Dropdown">
				<?php echo '<li>
					<a class="dropdown-item disabled">
					<i class="flag ' . $selectedLang->flag . '"></i>'
					. $selectedLang->name
					. '</a>
				</li>
				<li><hr class="dropdown-divider" /></li>';
				foreach ($otherLangOptions as $otherLangOption) {
					echo '<li>
						<a class="dropdown-item" onclick="selectLang(\'' . $page . '\', \'' . $otherLangOption->code . '\')">
						<i class="flag ' . $otherLangOption->flag . '"></i>'
						. $otherLangOption->name
						. '</a>
					</li>';
				}?>
			</ul>
		</div>
		<form id="langForm" action="system/load-lang.php" method="POST">
			<input name="lang" hidden>
			<input name="page" hidden>
		</form>
	</div>
</nav>
