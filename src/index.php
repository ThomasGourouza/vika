<?php
require_once './includes.php';

$page = getPage($_REQUEST["page"]);
$lang = getLang($_REQUEST["lang"]);
require_once "./i18n/" . $lang . ".php";
?>

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $translations['site_title'] ?></title>
    <link rel="icon" href="./favicon.ico">
    <link href="./style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <?php include "components/header/header.php"; ?>
    </header>
    <main>
        <article>
        <?php include "components/" . $page . "/" . $page . ".php"; ?>
        </article>
    </main>
    <footer>
        <?php include "components/footer/footer.php"; ?>
    </footer>
</body>
</html>