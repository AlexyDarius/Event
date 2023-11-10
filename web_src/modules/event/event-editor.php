<?php
require $_SERVER['DOCUMENT_ROOT']. '/modules/auth/checker.php';
include $_SERVER['DOCUMENT_ROOT']. '/includes/head.php'
?>

    <title>Votre interface de gestion d'événement</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="--bs-body-bg: #e3f3f5;--bs-body-bg-t: rgba(227, 243, 245, 0.9);--bs-primary: #0c3028;--bs-secondary: #f53219;--bs-primary-t: rgba(12, 48, 40, 0.85);background: var(--bs-body-bg);font-family: Lato-Regular;color: var(--bs-primary);">
<?php
require $_SERVER['DOCUMENT_ROOT']. '/modules/event/requires/upload_event.php';
?>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/navbar.php'
?>

    <header>
        <h1 style="margin: 32px; font-weight: bold; text-align: center">Bienvenue sur votre espace gestionnaire d'événement</h1>
    </header>

    <!-- Form for uploading images -->
    <div id="upload-container">
        <form id="event-form" method="post" enctype="multipart/form-data" onsubmit="uploadImage(event);">
            <label for="title">Titre (255 caractères max):</label>
            <input type="text" name="title" id="title" required maxlength="255">
            <label for="title">Lieu (255 caractères max):</label>
            <input type="text" name="place" id="place" required maxlength="255">
            <label for="date">Date et heure</label>
            <input type="datetime-local" name="date" id="date">
            <label for="image">Sélectionnez une image de couverture à télécharger (200ko max, utiliser <a href="https://cloudconvert.com/webp-converter">compression webp si possible</a>, taille max conseillée 512x512px):</label>
            <input type="file" name="image" id="image" accept="image/*" required>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000"> <!-- 100ko -->
            <label for="date">Texte à afficher</label>
            <textarea id="text" name="text" rows="6" cols="60"></textarea>
            <label for="date">Lien vers la réservation</label>
            <input type="link" name="link" id="link">
            <button type="submit" id="create-event-button">Créer l'événement</button>
            <label for="warning">! Ne pas cliquer plusieurs fois sur le bouton de création !</label>
            <div id="error-message" style="color: red; display: none;"></div>
        </form>
        <div id="status-message"></div>
    </div>

    <div id="image-container" style="margin-top:32px">

<?php
require $_SERVER['DOCUMENT_ROOT']. '/modules/event/requires/back_office_display.php';
?>

</div>
    <p style="text-align: center; font-size: 24px"><a href="https://dariusdev.fr/">Revenir à l'accueil</a></p>
</div>

    <script src="js/script.js"></script>
    <script src="js/uploadEvent.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/footer.php'
?>
