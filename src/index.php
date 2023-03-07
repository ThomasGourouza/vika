<?php include_once './mysql-connection.php' ?>

<?php
$page = ($_REQUEST
    && $_REQUEST["page"]
    && in_array($_REQUEST["page"], [
        "accueil",
        "contact"
    ])) ? $_REQUEST["page"] : "accueil";

$title = "Site de Vika";
?>

<html>

<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="./favicon.ico">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <?php include "components/header/header.php"; ?>
    </header>
    <main>
        <article>
            <div id="site-logo"></div>
            <div class="transparent">
                <?php include "components/" . $page . "/" . $page . ".php"; ?>
            </div>
        </article>
    </main>
    <footer>
        <?php include "components/footer/footer.php"; ?>
    </footer>
</body>

</html>