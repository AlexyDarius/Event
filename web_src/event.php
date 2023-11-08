<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/head.php'
?>

    <title>Darius Pizza - Galerie</title>
    <link rel="stylesheet" type="text/css" href="/modules/event/css/style.css">
</head>
<body style="--bs-body-bg: #e3f3f5;--bs-body-bg-t: rgba(227, 243, 245, 0.9);--bs-primary: #0c3028;--bs-secondary: #f53219;--bs-primary-t: rgba(12, 48, 40, 0.85);background: var(--bs-body-bg);font-family: Lato-Regular;color: var(--bs-primary);">

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/navbar.php'
?>

    <header>
        <h1 style="color: var(--bs-secondary);font-family: Lato-Black;font-size: 48px; text-align : center; margin : 32px">Nos événements</h1>
    </header>

    <h2 style="text-align : center; font-family: Lato-Bold;color: var(--bs-primary);font-size: 24px;">Retrouvez-nous enos événements ici</h2>

    <div id="image-container">

<?php
require $_SERVER['DOCUMENT_ROOT']. '/modules/event/requires/event_displayer.php';
?>

    </div>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/footer.php'
?>
