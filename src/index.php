<?php include_once './mysql-connection.php' ?>

<?php
$availablePages = ["welcome", "contact"];
$page = ($_REQUEST["page"]
    && in_array($_REQUEST["page"], $availablePages))
    ? $_REQUEST["page"] : "welcome";

$availableLangs = ["fr", "en", "ru"];
$requestLang = $_REQUEST["lang"];
$browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
$defaultLang = in_array($browserLang, $availableLangs)
    ? $browserLang : "en";

$lang = in_array($requestLang, $availableLangs)
    ? $requestLang : $defaultLang;

require_once "./i18n/" . $lang . ".php";

?>

<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $translations['site_title'] ?></title>
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