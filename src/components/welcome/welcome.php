<?php include_once './models/person.php' ?>
<?php include_once './services/person-get-all.php' ?>
<link rel="stylesheet" href="components/welcome/welcome.css">

<h1>
    <?php echo translate('title') ?>
</h1>
<div class="container">
    <?php
    if (count($persons) > 0) {
        echo '<table class="table table-striped">';
        echo '<thead><tr>';
        echo '<th>' . translate($personCols->id) . '</th>';
        echo '<th>' . translate($personCols->name) . '</th>';
        echo '<th>' . translate($personCols->age) . '</th>';
        echo '<th>' . translate($personCols->country) . '</th>';
        echo '</tr></thead>';
        echo '<tbody>';
        foreach ($persons as $person) {
            echo '<tr>';
            echo '<th>' . $person->id . '</th>';
            echo '<td>' . $person->name . '</td>';
            echo '<td>' . $person->age . '</td>';
            echo '<td>' . $person->country . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
    }
    ?>
</div>