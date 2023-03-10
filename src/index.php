<?php
require_once './system/system.php';

$page = getPage($_REQUEST["page"]);
$lang = getLang($_REQUEST["lang"]);
require_once './translations/' . $lang . '.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo translate('site_title') ?></title>
    <link rel="icon" href="./favicon.ico">
    <link href="./style.global.css" rel="stylesheet" type="text/css">
</head>
<body>
    <header>
        <?php include "website/header/header.php"; ?>
    </header>
    <main>
        <article>
        <?php include "website/pages/" . $page . "/" . $page . ".php"; ?>
        </article>
    </main>
</body>
</html>