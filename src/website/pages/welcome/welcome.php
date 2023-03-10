<?php include_once './data/models/person.model.php' ?>
<?php include_once './data/persons.php' ?>
<link rel="stylesheet" href="website/pages/welcome/welcome.css">

<h1>
    <?php echo translate('title') ?>
</h1>
<div class="container">
    <?php
    if (count($persons) > 0) {
        echo '<table class="table table-striped">'
        . '<thead><tr>'
        . '<th>' . translate($personCols->id) . '</th>'
        . '<th>' . translate($personCols->name) . '</th>'
        . '<th>' . translate($personCols->age) . '</th>'
        . '<th>' . translate($personCols->country) . '</th>'
        . '</tr></thead>'
        . '<tbody>';
        foreach ($persons as $person) {
            echo '<tr>'
            . '<th>' . $person->id . '</th>'
            . '<td>' . $person->name . '</td>'
            . '<td>' . $person->age . '</td>'
            . '<td>' . $person->country . '</td>'
            . '</tr>';
        }
        echo '</tbody>'
        . '</table>';
    }
    ?>
</div>