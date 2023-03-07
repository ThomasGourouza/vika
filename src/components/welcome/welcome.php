<link rel="stylesheet" href="components/welcome/welcome.css">
<h1>
    <?php echo $translations['title'] ?>
</h1>

<div class="container">
    <?php
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `Person` WHERE 1;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>' . $translations['id'] . '</th>
                                <th>' . $translations['name'] . '</th>
                                <th>' . $translations['age'] . '</th>
                                <th>' . $translations['country'] . '</th>
                            </tr>
                        </thead>
                        <tbody>
                        ';
        while ($value = $result->fetch_assoc()) {
            echo '<tr>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }
            echo '</tr>';
        }
        echo '</tbody></table>';
        $result->close();
    } else {
        echo "0 results";
    }

    $conn->close();

    ?>
</div>