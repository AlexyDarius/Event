<?php
    require $_SERVER['DOCUMENT_ROOT']. '/modules/auth/checker.php'
?>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/head.php'
?>

    <meta name="robots" content="noindex, nofollow">
    <title>Votre interface gestionnaire</title>
    <meta name="description" content="Bienvenue sur votre gestionnaire de site web.">
</head>

<body style="--bs-body-bg: #e3f3f5;--bs-body-bg-t: rgba(227, 243, 245, 0.9);--bs-primary: #0c3028;--bs-secondary: #f53219;--bs-primary-t: rgba(12, 48, 40, 0.85);background: var(--bs-body-bg);font-family: Lato-Regular;color: var(--bs-primary);">

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/navbar.php'
?>

    <h1 style="text-align: center;margin-top: 12px;margin-bottom: 12px;">Bienvenue sur votre page de gestion</h1>
    <section style="margin-top: 12px;margin-bottom: 12px;">
    <!-- Put modules links here -->
        <div class="container text-muted py-4 py-lg-5">
            <div class="row">
                <div class="col text-center"><a href="localhost:8888">Revenir au site</a></div>
            </div>
        </div>
    </section>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/footer.php'
?>
