<?php include_once './models/person.php' ?>
<?php include_once './services/person-get-all.php' ?>
<link rel="stylesheet" href="components/welcome/welcome.css">

<h1>
    <?php echo $translations['title'] ?>
</h1>
<div class="container">
    <?php
    if (count($persons) > 0) {
        echo '<table class="table table-striped">';
        echo '<thead><tr>';
        echo '<th>' . $translations[$personCols->id] . '</th>';
        echo '<th>' . $translations[$personCols->name] . '</th>';
        echo '<th>' . $translations[$personCols->age] . '</th>';
        echo '<th>' . $translations[$personCols->country] . '</th>';
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