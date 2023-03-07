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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
          crossorigin="anonymous"
    >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"
    ></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
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