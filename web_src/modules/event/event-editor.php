<?php
require $_SERVER['DOCUMENT_ROOT']. '/modules/auth/checker.php';
include $_SERVER['DOCUMENT_ROOT']. '/includes/head.php'
?>

    <title>Votre interface de gestion de galerie</title>
    <link rel="stylesheet" type="text/css" href="/modules/gallery/css/style.css">
</head>
<body style="--bs-body-bg: #f5efec;--bs-primary: #35251c;--bs-primary-rgb: 53,37,28;--bs-secondary: #ee7830;--bs-secondary-rgb: 238,120,48;color: var(--bs-primary);font-family: Montserrat, sans-serif;">

<?php
//require $_SERVER['DOCUMENT_ROOT']. '/modules/event/requires/upload_image.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/navbar.php'
?>

    <header>
        <h1 style="margin: 32px; font-weight: bold; text-align: center">Bienvenue sur votre espace gestionnaire de galerie</h1>
    </header>

    <!-- Form for uploading images -->
    <div id="upload-container">
        <form id="image-upload-form" method="post" enctype="multipart/form-data" onsubmit="uploadImage(event);">
            <label for="image">Sélectionnez une image à télécharger (200ko max, utiliser <a href="https://cloudconvert.com/webp-converter">compression webp si possible</a>, taille max conseillée 512x512px):</label>
            <input type="file" name="image" id="image" accept="image/*" required>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000"> <!-- 100ko -->
            <label for="legend">Légende (255 caractères max):</label>
            <input type="text" name="legend" id="legend" required maxlength="255">
            <button type="submit">Envoyer l'image</button>
            <label for="warning">! Ne pas cliquer plusieurs fois sur le bouton d'envoi !</label>
            <div id="error-message" style="color: red; display: none;"></div>
        </form>
        <div id="status-message"></div>
    </div>

    <div id="image-container">

<?php
// require $_SERVER['DOCUMENT_ROOT']. '/modules/gallery/requires/back_office_display.php';
?>

</div>
    <p style="text-align: center; font-size: 24px"><a href="localhost:8888/gallery.php">Revenir à l'accueil</a></p>
</div>

    <script src="js/script.js"></script>
    <script src="js/uploadImage.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/footer.php'
?>

