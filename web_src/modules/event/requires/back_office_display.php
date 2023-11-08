<?php
// Connect to the MySQL database (adjust the connection details as per your configuration)
$conn = new mysqli("localhost", "root", "root", "dariusdev_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve image information from the database
$sql = "SELECT id, title, date, place, img_filename, text, link FROM dariusdev_event ORDER BY date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $eventId = $row['id'];
        $imagePath = "images/" . $row['img_filename'];
        $title = $row['title'];
        $date = $row['date'];
        $place = $row['place'];
        $text = $row['text'];
        $link = $row['link'];
        
        echo "<section id='event-box' style='margin-right: 32px;margin-left: 32px;'>";
        echo "<button class='delete-button' data-event-id='$eventId'>Supprimer</button>";
        // echo " <button class='edit-button' data-image-id='$imageId'>Éditer</button>";
        echo "<div class='container'>";
        echo "<div class='row d-flex justify-content-center'>";
        echo " <div class='col-md-12'>";
        echo "<div>";
        echo "<h3 style='text-align: center;font-weight: bold;'>$title</h3>";
        echo "<p class='text-center'>Location : $place</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col d-flex justify-content-center'>";
        echo "<div class='d-flex image-box'>";
        echo "<a href='#'><img class='img-fluid' width='667px' height='500px' src='$imagePath'></a>";
        echo "</a></div>";
        echo "</div>";
        echo "</div>";
        echo "<div class='row'>";
        echo "<div class='col d-flex justify-content-center'>";
        echo "<div class='text-center'>";
        echo "<p class='text-center'>Date : $date";
        echo "<h4 class='text-center'>$title</h4>";
        echo "<p style='text-align: justify;width: 90%;max-width: 768px;'>$text</p>";
        echo "<a class='btn' role='button' data-bss-hover-animate='pulse' href='$link' style='background: var(--bs-secondary);color: var(--bs-body-bg);text-shadow: 0px 0px 8px var(--bs-black);'>Réserver votre place</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "<hr>";
        echo "</div>";
        echo "</section>";

        // while ($row = $result->fetch_assoc()) {
        //     $imagePath = "images/" . $row['filename'];
        //     $imageId = $row['id'];
        //     $legend = $row['legend'];
            
        //     echo "<div class='image-box'>";
        //     echo "<img src='$imagePath' alt='Image'>";
        //     echo "<p id='legend-$imageId'>$legend</p>";
        //     echo "<button class='delete-button' data-image-id='$imageId'>Supprimer</button>";
        //     echo " <button class='edit-button' data-image-id='$imageId'>Éditer</button>";
    
        //     echo "<div class='edit-container' id='edit-container-$imageId' style='display: none;'>";
        //     echo "<input type='text' id='edited-legend-$imageId' placeholder='Éditer la légende'>";
        //     echo "<button class='save-button' style='margin-right:6px' id='save-button-$imageId' data-image-id='$imageId'>Sauvergarder</button>";
        //     echo "<button class='cancel-button' id='cancel-button-$imageId' data-image-id='$imageId'>Annuler</button>";
        //     echo "</div>";
    
        //     echo "</div>";
    }
} else {
    echo "Aucune image trouvée.";
}

$conn->close();
?>
