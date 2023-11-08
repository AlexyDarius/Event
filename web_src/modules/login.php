<!DOCTYPE html>
<html data-bs-theme="light" lang="fr">

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/head.php'
?>

    <meta name="robots" content="noindex, nofollow">
    <title>Votre interface gestionnaire</title>
</head>

<body style="--bs-body-bg: #e3f3f5;--bs-body-bg-t: rgba(227, 243, 245, 0.9);--bs-primary: #0c3028;--bs-secondary: #f53219;--bs-primary-t: rgba(12, 48, 40, 0.85);background: var(--bs-body-bg);font-family: Lato-Regular;color: var(--bs-primary);">

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/navbar.php'
?>

    <h1 class="text-center" style="margin-top: 12px;font-weight: bold;text-decoration:  underline;">Accéder à votre espace gestionnaire</h1>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Se connecter</h2>
                    <p class="w-lg-50">Connectez-vous pour accéder à l'espace de gestion de votre boutique</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"></path>
                                </svg></div>
                            <form id="loginForm" action="/modules/auth/auth.php" class="text-center" method="post">
                                <div class="mb-3"><input class="form-control" type="text" id="username" name="username" placeholder="Nom d'utilisateur" required></div>
                                <div class="mb-3"><input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe" required></div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" value="Login">Se connecter</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/js/bootstrap.min.js"></script>

<?php
include $_SERVER['DOCUMENT_ROOT']. '/includes/footer.php'
?>
