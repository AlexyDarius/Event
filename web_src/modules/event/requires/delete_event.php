<?php

require $_SERVER['DOCUMENT_ROOT']. '/modules/auth/checker.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_id'])) {
    // Retrieve the image ID from the POST request
    $eventId = $_POST['event_id'];

    // Connect to the MySQL database
    $conn = new mysqli("localhost", "root", "root", "dariusdev_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the image filename from the database
    $sql = "SELECT img_filename FROM dariusdev_event WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();
    $stmt->bind_result($imageFilename);
    $stmt->fetch();
    $stmt->close();

    if (!empty($imageFilename)) {
        // Delete the image file from the server
        $imagePath = "../images/" . $imageFilename;
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        // Delete the database entry
        $sql = "DELETE FROM dariusdev_event WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $eventId);
        $stmt->execute();
        $stmt->close();

        echo "Événement supprimée !";
    } else {
        echo "Événement impossible à trouver.";
    }

    $conn->close();
}

?>
