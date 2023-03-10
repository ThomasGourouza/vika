<?php include_once './data/models/person.model.php' ?>
<?php include_once './data/person.data.php' ?>
<link rel="stylesheet" href="website/pages/welcome/welcome.css">

<h1>
    <?php echo translate('title') ?>
</h1>
<div class="container">
    <?php
    if (count($persons) > 0) {
        echo '<table class="table table-striped">'
        . '<thead><tr>'
        . '<th>' . translate('id') . '</th>'
        . '<th>' . translate('name') . '</th>'
        . '<th>' . translate('age') . '</th>'
        . '<th>' . translate('country') . '</th>'
        . '<th>' . translate('birthYear') . '</th>'
        . '</tr></thead>'
        . '<tbody>';
        foreach ($persons as $person) {
            echo '<tr>'
            . '<th>' . $person->id . '</th>'
            . '<td>' . $person->name . '</td>'
            . '<td>' . $person->age . '</td>'
            . '<td>' . $person->country . '</td>'
            . '<td>' . $person->getBirthYear() . '</td>'
            . '</tr>';
        }
        echo '</tbody>'
        . '</table>';
    }
    ?>
</div>