<link rel="stylesheet" href="components/welcome/welcome.css">
<h1>
    <?php echo $translations['title'] ?>
</h1>

<div class="container">
    <?php
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `Person`;";
    $result = $conn->query($sql);
    $columns = ['id', 'name', 'age', 'country'];

    if ($result->num_rows > 0) {
        echo '<table class="table table-striped">';
        echo '<thead><tr>';
        foreach ($columns as $column) {
            echo '<th>' . $translations[$column] . '</th>';
        }
        echo '</tr></thead>';
        echo '<tbody>';
        while ($value = $result->fetch_assoc()) {
            echo '<tr>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        $result->close();
    } else {
        echo "0 results";
    }

    $conn->close();

    ?>
</div>