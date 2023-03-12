<link rel="stylesheet" href="website/header/header.css">
<script src="website/header/header.js"></script>

<nav class="row">
	<div class="col-4"></div>
	<div class="col">
		<div class="d-flex justify-content-evenly">
			<?php $activeLink = 'class="active-tab"';
			foreach ($availablePages as $availablePage) {
				echo '<a href="index.php?page=' . $availablePage . '&lang=' . $lang . '" '
				. ($page==$availablePage ? $activeLink : "") . '>' . translate($availablePage) .'</a>';
			}?>
		</div>
	</div>
	<div class="col-2 d-flex justify-content-center">
		<!-- language select -->
		<div class="dropdown">
			<a class="dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
				<?php
				foreach ($langOptions as $langOption) {
					if ($langOption->code == $lang) {
						echo '<i class="flag ' . $langOption->flag . ' m-0"></i>';
					}
				}
				?>
			</a>
			<ul class="dropdown-menu" aria-labelledby="Dropdown">
				<?php
				foreach ($langOptions as $langOption) {
					if ($langOption->code == $lang) {
						echo '<li>
							<a class="dropdown-item disabled">'
							. '<i class="flag ' . $langOption->flag . '"></i>'
							. $langOption->name
							. '</a>
						</li>
						<li><hr class="dropdown-divider" /></li>';
					}
				}
				foreach ($langOptions as $langOption) {
					if ($langOption->code != $lang) {
						echo '<li>
							<a class="dropdown-item" onclick="selectLang(\'' . $page . '\', \'' . $langOption->code . '\')">'
							. '<i class="flag ' . $langOption->flag . '"></i>'
							. $langOption->name
							. '</a>
						</li>';
					}
				}
				?>
			</ul>
		</div>
		<form id="langForm" action="system/load-lang.php" method="POST">
			<input name="lang" hidden>
			<input name="page" hidden>
		</form>
	</div>
</nav>
