<?php
// Connect to the MySQL database (adjust the connection details as per your configuration)
$conn = new mysqli("localhost", "root", "root", "dariusdev_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image information from the database
$sql = "SELECT id, title, date, place, display FROM dariusdev_event ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $eventId = $row['id'];
        $title = $row['title'];
        $date = $row['date'];
        $place = $row['place'];
        $display = $row['display'];
        
        echo "<div id='event-display-" . $eventId . "'>";
        echo "<h4 id='title-display-" . $eventId . "' style='text-align: center;font-family: Lato-Bold; margin-bottom:0px'>$title</h3>";
        echo "<p id='place-display-" . $eventId . "' class='text-center' style='margin-bottom:0px'>Location : $place</p>";
        
        // Convert the database date to the desired format
        $dateTime = new DateTime($date);
        $formattedDate = $dateTime->format('d/m/Y H:i');

        echo "<p id='date-display-" . $eventId . "' class='text-center'>Date : $formattedDate";
        echo "</div>";
    }
} else {
    echo "Aucune image trouvée.";
}

$conn->close();
?>